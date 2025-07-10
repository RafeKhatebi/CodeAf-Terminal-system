@extends('layouts.app')

@section('title', 'گزارشات | سیستم مدیریت مالی CodeAf{کُداف}')

@section('content')
<h2 class="mb-4 text-center">
    <i class="fas fa-chart-line text-warning"></i> گزارشات سیستم مدیریت مالی
</h2>

<div class="row">
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm animate__animated animate__fadeInUp">
            <div class="card-body text-center">
                <i class="fas fa-file-invoice-dollar fa-3x text-primary mb-3"></i>
                <h5 class="card-title">گزارش مصارف و عواید</h5>
                <p class="card-text">مشاهده گزارش کامل مصارف و عواید روزانه ترمینال</p>
                <a href="{{ route('reports.expenses') }}" class="btn btn-primary">
                    <i class="fas fa-arrow-left"></i> مشاهده گزارش
                </a>
            </div>
        </div>
    </div>
    
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm animate__animated animate__fadeInUp animate__delay-1s">
            <div class="card-body text-center">
                <i class="fas fa-oil-can fa-3x text-success mb-3"></i>
                <h5 class="card-title">گزارش معاملات تیل</h5>
                <p class="card-text">گزارش خرید و فروش تیل و موجودی تانکر</p>
                <a href="{{ route('reports.oil') }}" class="btn btn-success">
                    <i class="fas fa-arrow-left"></i> مشاهده گزارش
                </a>
            </div>
        </div>
    </div>
    
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm animate__animated animate__fadeInUp animate__delay-2s">
            <div class="card-body text-center">
                <i class="fas fa-route fa-3x text-info mb-3"></i>
                <h5 class="card-title">گزارش سفرهای چالای</h5>
                <p class="card-text">گزارش سفرهای بَس و محاسبه سود و زیان</p>
                <a href="{{ route('reports.bus') }}" class="btn btn-info">
                    <i class="fas fa-arrow-left"></i> مشاهده گزارش
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-12">
        <div class="card shadow-sm">
            <div class="card-header bg-dark text-white">
                <h5 class="mb-0">
                    <i class="fas fa-info-circle"></i> راهنمای گزارشات
                </h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <h6 class="text-primary">
                            <i class="fas fa-exchange-alt"></i> گزارش مصارف
                        </h6>
                        <p class="text-muted">در این بخش می‌توانید تمام مصارف و عواید ثبت شده را مشاهده کنید.</p>
                    </div>
                    <div class="col-md-4">
                        <h6 class="text-success">
                            <i class="fas fa-gas-pump"></i> گزارش تیل
                        </h6>
                        <p class="text-muted">گزارش کامل خرید و فروش تیل با جزئیات قیمت و مقدار.</p>
                    </div>
                    <div class="col-md-4">
                        <h6 class="text-info">
                            <i class="fas fa-bus"></i> گزارش سفرها
                        </h6>
                        <p class="text-muted">گزارش سفرهای بَس با محاسبه خودکار سود و زیان.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 