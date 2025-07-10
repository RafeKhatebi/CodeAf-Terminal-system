<?php

namespace App\Http\Controllers;

use App\Models\BusTrip;
use Illuminate\Http\Request;

class BusTripController extends Controller
{
    public function index()
    {
        $trips = BusTrip::orderBy('date', 'desc')->get();
        return view('bus.index', compact('trips'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'trip_name' => 'required|string|max:255',
            'date' => 'required|date',
            'total_passengers' => 'required|integer|min:0',
            'total_fare' => 'required|numeric|min:0',
            'fuel_cost' => 'required|numeric|min:0',
            'assistant_cost' => 'required|numeric|min:0',
            'other_expenses' => 'required|numeric|min:0',
        ]);

        $net_profit = $request->total_fare - $request->fuel_cost - $request->assistant_cost - $request->other_expenses;

        BusTrip::create([
            'trip_name' => $request->trip_name,
            'date' => $request->date,
            'total_passengers' => $request->total_passengers,
            'total_fare' => $request->total_fare,
            'fuel_cost' => $request->fuel_cost,
            'assistant_cost' => $request->assistant_cost,
            'other_expenses' => $request->other_expenses,
            'net_profit' => $net_profit,
        ]);

        return redirect()->back()->with('success', 'سفر با موفقیت ثبت شد.');
    }

    public function fetch()
    {
        $trips = BusTrip::orderBy('date', 'desc')->get();
        return response()->json($trips);
    }
} 