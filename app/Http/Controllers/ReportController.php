<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\OilTransaction;
use App\Models\BusTrip;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        return view('reports.index');
    }

    public function expenses()
    {
        $expenses = Expense::orderBy('date', 'desc')->get();
        return view('reports.expenses', compact('expenses'));
    }

    public function oil()
    {
        $transactions = OilTransaction::orderBy('date', 'desc')->get();
        return view('reports.oil', compact('transactions'));
    }

    public function bus()
    {
        $trips = BusTrip::orderBy('date', 'desc')->get();
        return view('reports.bus', compact('trips'));
    }
} 