<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>درباره ما | سیستم مدیریت مالی CodeAf{کُداف}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg animate__animated animate__fadeInUp">
                    <div class="card-header bg-primary text-white text-center">
                        <h3 class="mb-0">
                            <i class="fas fa-info-circle"></i> درباره سیستم مدیریت مالی CodeAf{کُداف}
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <i class="fas fa-coins fa-4x text-warning mb-3"></i>
                            <h4 class="text-primary">CodeAf{کُداف} | CodeAf Finance</h4>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body text-center">
                                        <i class="fas fa-rocket fa-2x text-success mb-3"></i>
                                        <h5>ماموریت ما</h5>
                                        <p class="text-muted">ارائه راه‌حل‌های نوآورانه برای مدیریت مالی کسب‌وکارها با استفاده از تکنولوژی‌های روز دنیا</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 mb-4">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body text-center">
                                        <i class="fas fa-eye fa-2x text-info mb-3"></i>
                                        <h5>چشم‌انداز ما</h5>
                                        <p class="text-muted">تبدیل شدن به پیشگام در زمینه سیستم‌های مدیریت مالی هوشمند و کاربرپسند</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <div class="text-center">
                                    <i class="fas fa-shield-alt fa-2x text-primary mb-2"></i>
                                    <h6>امنیت بالا</h6>
                                    <p class="text-muted small">حفاظت کامل از اطلاعات مالی شما</p>
                                </div>
                            </div>
                            
                            <div class="col-md-4 mb-4">
                                <div class="text-center">
                                    <i class="fas fa-mobile-alt fa-2x text-success mb-2"></i>
                                    <h6>طراحی واکنش‌گرا</h6>
                                    <p class="text-muted small">قابل استفاده در تمام دستگاه‌ها</p>
                                </div>
                            </div>
                            
                            <div class="col-md-4 mb-4">
                                <div class="text-center">
                                    <i class="fas fa-headset fa-2x text-warning mb-2"></i>
                                    <h6>پشتیبانی 24/7</h6>
                                    <p class="text-muted small">پشتیبانی شبانه‌روزی از کاربران</p>
                                </div>
                            </div>
                        </div>
                        
                        <hr>
                        
                        <div class="text-center">
                            <h5 class="text-primary mb-3">تیم توسعه‌دهندگان</h5>
                            <p class="text-muted">تیم متخصص و با تجربه ما متعهد به ارائه بهترین خدمات به مشتریان گرامی است.</p>
                            <a href="{{ route('contact') }}" class="btn btn-primary">
                                <i class="fas fa-envelope"></i> تماس با ما
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="mt-5">
        <div class="container">
            <p class="text-center">&copy; {{ date('Y') }} سیستم مدیریت مالی CodeAf{کُداف}. تمامی حقوق محفوظ است.</p>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 