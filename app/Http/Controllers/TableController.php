<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class TableController extends Controller
{
    public function showQR()
    {
        $tableCount = 10; // You can change this to your actual number of tables
        $qrCodes = [];

        for ($i = 1; $i <= $tableCount; $i++) {
            $qrCodes[$i] = url("/table/$i");
        }

        return view('restaurant.qrcodes', compact('qrCodes'));
    }

    public function setTable($id)
    {
        session(['table_number' => $id]);
        return redirect('/')->with('status', "Welcome, Table $id!");
    }
}

