<?php

use App\Models\Driver;
use Illuminate\Support\Facades\Log;

require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

function csvToArray($filename = '', $delimiter = ',')
{
    Log::info("csvToArray");
    Log::info($filename);
    Log::info(file_exists($filename));
    Log::info(is_readable($filename));
    if (!file_exists($filename) || !is_readable($filename))
        return false;

    $header = null;
    $data = array();
    if (($handle = fopen($filename, 'r')) !== false)
    {
        while (($row = fgetcsv($handle, 1000, $delimiter)) !== false)
        {
            if (!$header)
                $header = $row;
            else
                $data[] = array_combine($header, $row);
        }
        fclose($handle);
    }

    return $data;
}

$data = csvToArray(__DIR__.'/../app/drivers.csv');

echo "start!\n";

Log::info($data);
Driver::insert($data);

echo "end!\n";
