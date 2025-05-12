<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/esp-data', function (Request $request) {
    // You can save data to the database here
    return response()->json([
        'message' => 'Data received',
        'received_data' => $request->all()
    ]);
});
