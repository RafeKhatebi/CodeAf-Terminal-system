@extends('layouts.app')

@section('title', 'خانه | سیستم مدیریت مالی CodeAf{کُداف}')

@section('content')
<div class="jumbotron bg-gradient-primary text-white text-center shadow-lg p-4 position-relative" style="background: linear-gradient(135deg, #5c6bc0 0%, #66bb6a 100%); border-radius: 2rem; overflow: hidden;">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 220px;">
        <div class="mb-3 animate__animated animate__fadeInDown">
            <i class="fas fa-coins fa-4x text-warning" style="filter: drop-shadow(0 2px 8px #0002);"></i>
        </div>
        <h1 class="display-4 font-weight-bold animate__animated animate__fadeInUp" style="letter-spacing: 1px;">به سیستم مدیریت مالی CodeAf{کُداف} خوش آمدید!</h1>
        <p class="lead mt-3 animate__animated animate__fadeInUp animate__delay-1s">با امکانات حرفه‌ای و گزارش‌های پیشرفته، مدیریت مالی را آسان و لذت‌بخش تجربه کنید.</p>
        <hr class="my-4 border-light animate__animated animate__fadeIn animate__delay-2s">
        <p class="animate__animated animate__fadeIn animate__delay-2s">از منوی بالا برای دسترسی سریع به بخش‌های مختلف استفاده کنید یا همین حالا شروع کنید.</p>
        <a class="btn btn-warning btn-lg mt-2 animate__animated animate__pulse animate__infinite" href="{{ route('expenses.index') }}" role="button" style="font-size: 1.2rem; box-shadow: 0 4px 16px #0001;">
            <i class="fas fa-rocket"></i> شروع مدیریت مالی
        </a>
    </div>
    <div style="position: absolute; left: 0; bottom: 0; opacity: 0.08; width: 100%; height: 100%; background: url('https://cdn.pixabay.com/photo/2017/01/31/13/14/money-2028125_1280.png') no-repeat center bottom/cover;"></div>
</div>

<div class="row mt-5">
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm animate__animated animate__fadeInUp">
            <div class="card-body text-center">
                <i class="fas fa-exchange-alt fa-3x text-primary mb-3"></i>
                <h5 class="card-title">مدیریت دفتر ترمینال</h5>
                <p class="card-text">ثبت و مدیریت مصارف و عواید روزانه ترمینال</p>
                <a href="{{ route('expenses.index') }}" class="btn btn-primary">
                    <i class="fas fa-arrow-left"></i> ورود
                </a>
            </div>
        </div>
    </div>
    
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm animate__animated animate__fadeInUp animate__delay-1s">
            <div class="card-body text-center">
                <i class="fas fa-gas-pump fa-3x text-success mb-3"></i>
                <h5 class="card-title">مدیریت تانکر تیل</h5>
                <p class="card-text">ثبت خرید و فروش تیل و مدیریت موجودی</p>
                <a href="{{ route('oil.index') }}" class="btn btn-success">
                    <i class="fas fa-arrow-left"></i> ورود
                </a>
            </div>
        </div>
    </div>
    
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm animate__animated animate__fadeInUp animate__delay-2s">
            <div class="card-body text-center">
                <i class="fas fa-bus fa-3x text-info mb-3"></i>
                <h5 class="card-title">مدیریت چالای</h5>
                <p class="card-text">ثبت سفرهای بَس و محاسبه سود و زیان</p>
                <a href="{{ route('bus.index') }}" class="btn btn-info">
                    <i class="fas fa-arrow-left"></i> ورود
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-12">
        <div class="card shadow-sm animate__animated animate__fadeInUp animate__delay-3s">
            <div class="card-header bg-dark text-white">
                <h5 class="mb-0">
                    <i class="fas fa-chart-line"></i> گزارشات سریع
                </h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <a href="{{ route('reports.expenses') }}" class="btn btn-outline-primary w-100">
                            <i class="fas fa-file-invoice-dollar"></i> گزارش مصارف
                        </a>
                    </div>
                    <div class="col-md-3 mb-3">
                        <a href="{{ route('reports.oil') }}" class="btn btn-outline-success w-100">
                            <i class="fas fa-oil-can"></i> گزارش تیل
                        </a>
                    </div>
                    <div class="col-md-3 mb-3">
                        <a href="{{ route('reports.bus') }}" class="btn btn-outline-info w-100">
                            <i class="fas fa-route"></i> گزارش سفرها
                        </a>
                    </div>
                    <div class="col-md-3 mb-3">
                        <a href="{{ route('reports.index') }}" class="btn btn-outline-warning w-100">
                            <i class="fas fa-chart-bar"></i> همه گزارشات
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 