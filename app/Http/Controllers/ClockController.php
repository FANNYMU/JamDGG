<?php

namespace App\Http\Controllers;

use Carbon\Carbon; // Impor Carbon

class ClockController extends Controller
{
    public function index()
    {
        $time = Carbon::now('Asia/Jakarta')->format('H:i:s'); // Gunakan Carbon untuk mendapatkan waktu sesuai dengan zona waktu Jakarta
        return view('welcome', compact('time'));
    }
}
