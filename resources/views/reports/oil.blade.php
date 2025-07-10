@extends('layouts.app')

@section('title', 'گزارش معاملات تیل')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card shadow-lg border-0 rounded-3 mb-4">
                <div class="card-header bg-gradient-primary text-white py-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">
                            <i class="fas fa-gas-pump me-2"></i>
                            گزارش معاملات تیل
                        </h3>
                        <a href="{{ route('reports.index') }}" class="btn btn-light btn-sm">
                            <i class="fas fa-arrow-right me-1"></i>
                            بازگشت
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if($transactions->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-bordered">
                                <thead class="table-dark">
                                    <tr>
                                        <th>تاریخ</th>
                                        <th>نوع معامله</th>
                                        <th>مقدار (لیتر)</th>
                                        <th>قیمت واحد</th>
                                        <th>قیمت کل</th>
                                        <th>توضیحات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($transactions as $transaction)
                                    <tr class="animate__animated animate__fadeIn">
                                        <td>
                                            <span class="badge bg-info">
                                                {{ \Carbon\Carbon::parse($transaction->date)->format('Y/m/d') }}
                                            </span>
                                        </td>
                                        <td>
                                            @if($transaction->type == 'buy')
                                                <span class="badge bg-success">
                                                    <i class="fas fa-arrow-down me-1"></i>
                                                    خرید
                                                </span>
                                            @else
                                                <span class="badge bg-warning">
                                                    <i class="fas fa-arrow-up me-1"></i>
                                                    فروش
                                                </span>
                                            @endif
                                        </td>
                                        <td>
                                            <span class="fw-bold text-primary">
                                                {{ number_format($transaction->quantity_liters) }} لیتر
                                            </span>
                                        </td>
                                        <td>
                                            <span class="text-success">
                                                {{ number_format($transaction->price_per_liter) }} افغانی
                                            </span>
                                        </td>
                                        <td>
                                            <span class="fw-bold text-dark">
                                                {{ number_format($transaction->total_amount) }} افغانی
                                            </span>
                                        </td>
                                        <td>
                                            <span class="text-muted">
                                                {{ $transaction->party_name ?: 'بدون توضیح' }}
                                            </span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="row mt-4">
                            <div class="col-md-4">
                                <div class="card bg-primary text-white">
                                    <div class="card-body text-center">
                                        <h5>کل معاملات</h5>
                                        <h3>{{ $transactions->count() }}</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card bg-success text-white">
                                    <div class="card-body text-center">
                                        <h5>کل خرید</h5>
                                        <h3>{{ number_format($transactions->where('type', 'buy')->sum('total_amount')) }} افغانی</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card bg-warning text-white">
                                    <div class="card-body text-center">
                                        <h5>کل فروش</h5>
                                        <h3>{{ number_format($transactions->where('type', 'sell')->sum('total_amount')) }} افغانی</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="text-center py-5">
                            <i class="fas fa-gas-pump fa-4x text-muted mb-3"></i>
                            <h4 class="text-muted">هیچ معامله تیلی ثبت نشده است</h4>
                            <p class="text-muted">برای مشاهده گزارشات، ابتدا معاملات تیل را ثبت کنید</p>
                            <a href="{{ route('oil.index') }}" class="btn btn-primary">
                                <i class="fas fa-plus me-1"></i>
                                ثبت معامله جدید
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 