<?php

namespace App\Http\Controllers;

use App\Models\OilTransaction;
use Illuminate\Http\Request;

class OilTransactionController extends Controller
{
    public function index()
    {
        $transactions = OilTransaction::orderBy('date', 'desc')->get();
        return view('oil.index', compact('transactions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|in:purchase,sale',
            'quantity_liters' => 'required|numeric|min:0',
            'price_per_liter' => 'required|numeric|min:0',
            'party_name' => 'required|string|max:255',
            'date' => 'required|date',
        ]);

        $total_amount = $request->quantity_liters * $request->price_per_liter;

        OilTransaction::create([
            'type' => $request->type,
            'quantity_liters' => $request->quantity_liters,
            'price_per_liter' => $request->price_per_liter,
            'total_amount' => $total_amount,
            'party_name' => $request->party_name,
            'date' => $request->date,
        ]);

        return redirect()->back()->with('success', 'معامله با موفقیت ثبت شد.');
    }

    public function fetch()
    {
        $transactions = OilTransaction::orderBy('date', 'desc')->get();
        return response()->json($transactions);
    }
} 