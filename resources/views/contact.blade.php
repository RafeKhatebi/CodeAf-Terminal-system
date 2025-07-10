<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تماس با ما | سیستم مدیریت مالی CodeAf{کُداف}</title>
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
                    <div class="card-header bg-success text-white text-center">
                        <h3 class="mb-0">
                            <i class="fas fa-envelope"></i> تماس با ما
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <i class="fas fa-headset fa-4x text-success mb-3"></i>
                            <h4 class="text-success">پشتیبانی 24/7</h4>
                            <p class="text-muted">تیم پشتیبانی ما آماده پاسخگویی به سوالات شما است</p>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body text-center">
                                        <i class="fas fa-phone fa-2x text-primary mb-3"></i>
                                        <h5>تماس تلفنی</h5>
                                        <p class="text-muted">+93 123 456 789</p>
                                        <p class="text-muted small">شنبه تا پنجشنبه: 8 صبح تا 6 عصر</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 mb-4">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body text-center">
                                        <i class="fas fa-envelope fa-2x text-success mb-3"></i>
                                        <h5>ایمیل</h5>
                                        <p class="text-muted">info@codeaf.com</p>
                                        <p class="text-muted small">پاسخ در کمتر از 24 ساعت</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body text-center">
                                        <i class="fas fa-map-marker-alt fa-2x text-warning mb-3"></i>
                                        <h5>آدرس دفتر</h5>
                                        <p class="text-muted">کابل، افغانستان</p>
                                        <p class="text-muted small">دفتر مرکزی CodeAf{کُداف}</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 mb-4">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body text-center">
                                        <i class="fas fa-clock fa-2x text-info mb-3"></i>
                                        <h5>ساعات کاری</h5>
                                        <p class="text-muted">شنبه - پنجشنبه</p>
                                        <p class="text-muted small">8:00 صبح - 6:00 عصر</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <hr>
                        
                        <div class="row">
                            <div class="col-12">
                                <h5 class="text-center mb-4">
                                    <i class="fas fa-paper-plane"></i> ارسال پیام
                                </h5>
                                <form>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="name" class="form-label">نام و نام خانوادگی</label>
                                            <input type="text" class="form-control" id="name" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="email" class="form-label">ایمیل</label>
                                            <input type="email" class="form-control" id="email" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="subject" class="form-label">موضوع</label>
                                        <input type="text" class="form-control" id="subject" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="message" class="form-label">پیام</label>
                                        <textarea class="form-control" id="message" rows="5" required></textarea>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-success btn-lg">
                                            <i class="fas fa-paper-plane"></i> ارسال پیام
                                        </button>
                                    </div>
                                </form>
                            </div>
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