<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Support\Facades\Log;

class DriverController extends Controller
{
    public function show(Driver $driver)
    {
        Log::info($driver->name);
        return view('driver.show', ['driver' => $driver]);
    }
}
