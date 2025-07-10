@extends('layouts.app')

@section('title', 'گزارش سفرهای چالای')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card shadow-lg border-0 rounded-3 mb-4">
                <div class="card-header bg-gradient-success text-white py-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">
                            <i class="fas fa-bus me-2"></i>
                            گزارش سفرهای چالای
                        </h3>
                        <a href="{{ route('reports.index') }}" class="btn btn-light btn-sm">
                            <i class="fas fa-arrow-right me-1"></i>
                            بازگشت
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if($trips->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-bordered">
                                <thead class="table-dark">
                                    <tr>
                                        <th>تاریخ</th>
                                        <th>مسیر</th>
                                        <th>تعداد مسافر</th>
                                        <th>قیمت بلیط</th>
                                        <th>درآمد کل</th>
                                        <th>هزینه‌ها</th>
                                        <th>سود خالص</th>
                                        <th>توضیحات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($trips as $trip)
                                    <tr class="animate__animated animate__fadeIn">
                                        <td>
                                            <span class="badge bg-info">
                                                {{ \Carbon\Carbon::parse($trip->date)->format('Y/m/d') }}
                                            </span>
                                        </td>
                                        <td>
                                            <span class="fw-bold text-primary">
                                                {{ $trip->trip_name }}
                                            </span>
                                        </td>
                                        <td>
                                            <span class="badge bg-secondary">
                                                {{ $trip->total_passengers }} نفر
                                            </span>
                                        </td>
                                        <td>
                                            <span class="text-success">
                                                {{ number_format($trip->total_fare / $trip->total_passengers) }} افغانی
                                            </span>
                                        </td>
                                        <td>
                                            <span class="fw-bold text-success">
                                                {{ number_format($trip->total_fare) }} افغانی
                                            </span>
                                        </td>
                                        <td>
                                            <span class="text-danger">
                                                {{ number_format($trip->fuel_cost + $trip->assistant_cost + $trip->other_expenses) }} افغانی
                                            </span>
                                        </td>
                                        <td>
                                            <span class="fw-bold {{ $trip->net_profit >= 0 ? 'text-success' : 'text-danger' }}">
                                                {{ number_format($trip->net_profit) }} افغانی
                                            </span>
                                        </td>
                                        <td>
                                            <span class="text-muted">
                                                سفر چالای
                                            </span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="row mt-4">
                            <div class="col-md-3">
                                <div class="card bg-primary text-white">
                                    <div class="card-body text-center">
                                        <h5>کل سفرها</h5>
                                        <h3>{{ $trips->count() }}</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card bg-success text-white">
                                    <div class="card-body text-center">
                                        <h5>کل درآمد</h5>
                                        <h3>{{ number_format($trips->sum('total_fare')) }} افغانی</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card bg-danger text-white">
                                    <div class="card-body text-center">
                                        <h5>کل هزینه‌ها</h5>
                                        <h3>{{ number_format($trips->sum('fuel_cost') + $trips->sum('assistant_cost') + $trips->sum('other_expenses')) }} افغانی</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card bg-info text-white">
                                    <div class="card-body text-center">
                                        <h5>سود خالص</h5>
                                        <h3>{{ number_format($trips->sum('net_profit')) }} افغانی</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="text-center py-5">
                            <i class="fas fa-bus fa-4x text-muted mb-3"></i>
                            <h4 class="text-muted">هیچ سفر چالای ثبت نشده است</h4>
                            <p class="text-muted">برای مشاهده گزارشات، ابتدا سفرهای چالای را ثبت کنید</p>
                            <a href="{{ route('bus.index') }}" class="btn btn-success">
                                <i class="fas fa-plus me-1"></i>
                                ثبت سفر جدید
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 