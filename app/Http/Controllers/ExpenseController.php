<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index()
    {
        $expenses = Expense::orderBy('date', 'desc')->orderBy('id', 'desc')->get();
        return view('expenses.index', compact('expenses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|in:expense,revenue',
            'amount' => 'required|numeric|min:0',
            'description' => 'required|string|max:255',
            'date' => 'required|date',
        ]);

        Expense::create($request->all());

        return redirect()->back()->with('success', 'رکورد با موفقیت اضافه شد.');
    }

    public function fetch()
    {
        $expenses = Expense::orderBy('date', 'desc')->orderBy('id', 'desc')->get();
        return response()->json($expenses);
    }
} 