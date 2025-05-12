<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        return view('restaurant.index');
    }

    public function callWaiter(Request $request)
    {
        $table = session('table_number', 'Unknown Table');
        return back()->with('status', "Waiter has been called from $table!");
    }

    public function billOut(Request $request)
    {
        $table = session('table_number', 'Unknown Table');
        return back()->with('status', "Bill is on the way from $table!");
    }

    public function cancel(Request $request)
    {
        $table = session('table_number', 'Unknown Table');
        return back()->with('status', "Request from $table has been canceled.");
    }

    public function feedback(Request $request)
    {
        $table = session('table_number', 'Unknown Table');
        return back()->with('status', "Feedback received from $table, thank you!");
    }
}
