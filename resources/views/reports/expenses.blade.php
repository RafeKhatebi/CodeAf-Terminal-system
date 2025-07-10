@extends('layouts.app')

@section('title', 'گزارش مصارف و عواید | سیستم مدیریت مالی CodeAf{کُداف}')

@section('content')
<h2 class="mb-4 text-center">
    <i class="fas fa-file-invoice-dollar text-primary"></i> گزارش مصارف و عواید
</h2>

<div class="card shadow-sm">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0">
            <i class="fas fa-chart-bar"></i> خلاصه گزارش
        </h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card bg-success text-white">
                    <div class="card-body text-center">
                        <i class="fas fa-arrow-up fa-2x mb-2"></i>
                        <h5>کل عواید</h5>
                        <h3>{{ number_format($expenses->where('type', 'revenue')->sum('amount'), 2) }} افغانی</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card bg-danger text-white">
                    <div class="card-body text-center">
                        <i class="fas fa-arrow-down fa-2x mb-2"></i>
                        <h5>کل مصارف</h5>
                        <h3>{{ number_format($expenses->where('type', 'expense')->sum('amount'), 2) }} افغانی</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card bg-info text-white">
                    <div class="card-body text-center">
                        <i class="fas fa-calculator fa-2x mb-2"></i>
                        <h5>سود خالص</h5>
                        <h3>{{ number_format($expenses->where('type', 'revenue')->sum('amount') - $expenses->where('type', 'expense')->sum('amount'), 2) }} افغانی</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card mt-4 shadow-sm">
    <div class="card-header bg-dark text-white">
        <h5 class="mb-0">
            <i class="fas fa-list"></i> لیست کامل مصارف و عواید
        </h5>
    </div>
    <div class="card-body">
        @if($expenses->count() > 0)
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>تاریخ</th>
                            <th>نوع</th>
                            <th>مبلغ</th>
                            <th>توضیحات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($expenses as $expense)
                        <tr>
                            <td>{{ $expense->date }}</td>
                            <td>
                                <span class="badge bg-{{ $expense->type === 'expense' ? 'danger' : 'success' }}">
                                    {{ $expense->type === 'expense' ? 'مصرف' : 'عواید' }}
                                </span>
                            </td>
                            <td>{{ number_format($expense->amount, 2) }} افغانی</td>
                            <td>{{ $expense->description }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="text-center py-4">
                <i class="fas fa-inbox fa-3x text-muted mb-3"></i>
                <h5 class="text-muted">هیچ مصارف یا عوایدی ثبت نشده است</h5>
            </div>
        @endif
    </div>
</div>

<div class="text-center mt-4">
    <a href="{{ route('reports.index') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-right"></i> بازگشت به گزارشات
    </a>
</div>
@endsection 