<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود | سیستم مدیریت مالی CodeAf{کُداف}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        body {
            background: linear-gradient(120deg, #5c6bc0 0%, #66bb6a 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow-x: hidden;
        }
        .luxury-bg {
            position: fixed;
            top: 0; left: 0; width: 100vw; height: 100vh;
            z-index: 0;
            pointer-events: none;
            background: url('https://png.pngtree.com/png-clipart/20230919/original/pngtree-gold-coins-and-banknotes-3d-render-png-image_12296438.png') no-repeat left bottom/300px,
                        url('https://png.pngtree.com/png-clipart/20230919/original/pngtree-gold-crown-3d-render-png-image_12296436.png') no-repeat right top/200px;
            opacity: 0.13;
        }
        .login-container {
            background: rgba(255,255,255,0.98);
            border-radius: 2.5rem;
            box-shadow: 0 12px 48px 0 #5c6bc055, 0 2px 12px #ffd70033;
            padding: 2.7rem 2.2rem 2.2rem 2.2rem;
            max-width: 400px;
            width: 100%;
            text-align: center;
            position: relative;
            z-index: 1;
            overflow: hidden;
        }
        .login-container .luxury-icon {
            font-size: 5.2rem;
            color: #ffd700;
            margin-bottom: 1.1rem;
            filter: drop-shadow(0 6px 24px #ffd70055);
            animation: crown-bounce 1.5s infinite alternate;
        }
        @keyframes crown-bounce {
            0% { transform: translateY(0) rotate(-8deg); }
            100% { transform: translateY(-12px) rotate(8deg); }
        }
        .login-container .sticker {
            width: 160px;
            height: 160px;
            margin-bottom: 1.1rem;
            border-radius: 1.2rem;
            box-shadow: 0 4px 24px #ffd70033, 0 2px 12px #0001;
            object-fit: contain;
            border: 2px solid #ffd700;
            background: #fffbe7;
            animation: sticker-pop 1.2s cubic-bezier(.68,-0.55,.27,1.55) 1;
        }
        @keyframes sticker-pop {
            0% { transform: scale(0.7) rotate(-10deg); opacity: 0; }
            80% { transform: scale(1.1) rotate(8deg); opacity: 1; }
            100% { transform: scale(1) rotate(0); }
        }
        .login-container h2 {
            font-weight: bold;
            color: #5c6bc0;
            margin-bottom: 0.7rem;
            font-size: 1.6rem;
            letter-spacing: 1px;
            text-shadow: 0 2px 8px #fff8, 0 1px 0 #ffd70044;
        }
        .login-container p {
            color: #607d8b;
            margin-bottom: 1.5rem;
            font-size: 1.08rem;
        }
        .form-control {
            border-radius: 1.7rem;
            text-align: center;
            font-size: 1.08rem;
            box-shadow: 0 1px 6px #5c6bc022;
            border: 1.5px solid #e0e0e0;
            margin-bottom: 1.1rem;
        }
        .form-control:focus {
            border-color: #ffd700;
            box-shadow: 0 0 0 2px #ffd70033;
        }
        .btn-luxury {
            background: linear-gradient(90deg, #ffd700 0%, #ff9800 100%);
            color: #fff;
            font-weight: bold;
            border: none;
            border-radius: 1.7rem;
            box-shadow: 0 2px 12px #ffd70044, 0 1px 4px #5c6bc022;
            font-size: 1.15rem;
            padding: 0.8rem 2.5rem;
            transition: 0.2s;
            position: relative;
            overflow: hidden;
        }
        .btn-luxury:hover {
            background: linear-gradient(90deg, #ff9800 0%, #ffd700 100%);
            color: #fff;
            box-shadow: 0 6px 24px #ffd70066;
        }
        .btn-luxury i {
            margin-right: 0.5rem;
            animation: rocket-move 1.2s infinite alternate;
        }
        @keyframes rocket-move {
            0% { transform: translateY(0) rotate(-8deg); }
            100% { transform: translateY(-6px) rotate(8deg); }
        }
        .login-container .brand {
            font-size: 1.15rem;
            color: #888;
            margin-top: 1.7rem;
            letter-spacing: 0.5px;
        }
        .login-container .brand i {
            color: #5c6bc0;
            margin-left: 0.3rem;
        }
        @media (max-width: 500px) {
            .login-container {
                padding: 1.5rem 0.5rem 1.2rem 0.5rem;
                max-width: 98vw;
            }
            .login-container .sticker {
                width: 100px;
                height: 100px;
                border-radius: 0.7rem;
            }
            .login-container .luxury-icon {
                font-size: 3.2rem;
            }
        }
    </style>
</head>
<body>
    <div class="luxury-bg"></div>
    <div class="login-container animate__animated animate__fadeInDown">
        <i class="fas fa-crown luxury-icon"></i>
        <div class="sticker d-flex align-items-center justify-content-center">
            <i class="fas fa-coins fa-3x text-warning"></i>
        </div>
        <h2>ورود به سیستم مدیریت مالی CodeAf{کُداف}</h2>
        <p>برای ورود اطلاعات کاربری خود را وارد کنید<br>و از امکانات لاکچری و فوق‌العاده سیستم بهره‌مند شوید!</p>
        
        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </div>
        @endif
        
        <form method="post" action="{{ route('login') }}">
            @csrf
            <input type="email" name="email" class="form-control" placeholder="ایمیل لاکچری" required>
            <input type="password" name="password" class="form-control" placeholder="رمز عبور طلایی" required>
            <button type="submit" class="btn btn-luxury btn-block mt-3 w-100">
                <i class="fas fa-rocket"></i> ورود لاکچری
            </button>
        </form>
        <div class="brand mt-4">
            <i class="fas fa-gem"></i> CodeAf{کُداف} | CodeAf Finance
        </div>
    </div>
</body>
</html> 