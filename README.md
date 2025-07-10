# سیستم مدیریت مالی CodeAf{کُداف}

سیستم مدیریت مالی پیشرفته برای مدیریت مصارف، عواید، معاملات تیل و سفرهای بَس

## ویژگی‌های سیستم

- 🔐 سیستم احراز هویت امن
- 💰 مدیریت مصارف و عواید روزانه
- ⛽ مدیریت معاملات تانکر تیل
- 🚌 مدیریت سفرهای چالای (بَس)
- 📊 گزارشات جامع و تحلیلی
- 📱 طراحی واکنش‌گرا (Responsive)
- 🎨 رابط کاربری زیبا و مدرن

## پیش‌نیازها

- PHP 8.0 یا بالاتر
- MySQL 5.7 یا بالاتر
- Composer
- Apache/Nginx

## نصب و راه‌اندازی

### 1. کلون کردن پروژه
```bash
git clone [repository-url]
cd Laravel-task/src
```

### 2. نصب وابستگی‌ها
```bash
composer install
```

### 3. تنظیم فایل محیطی
```bash
cp .env.example .env
```

فایل `.env` را ویرایش کنید:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=saber_finance
DB_USERNAME=root
DB_PASSWORD=
```

### 4. تولید کلید اپلیکیشن
```bash
php artisan key:generate
```

### 5. اجرای Migration ها
```bash
php artisan migrate
```

### 6. اجرای Seeder ها
```bash
php artisan db:seed
```

### 7. تنظیم مجوزهای فایل
```bash
chmod -R 775 storage bootstrap/cache
```

## اطلاعات ورود پیش‌فرض

- **نام کاربری:** admin
- **رمز عبور:** admin123

## ساختار پروژه

```
src/
├── app/
│   ├── Http/Controllers/
│   │   ├── AuthController.php
│   │   ├── HomeController.php
│   │   ├── ExpenseController.php
│   │   ├── OilTransactionController.php
│   │   ├── BusTripController.php
│   │   └── ReportController.php
│   └── Models/
│       ├── User.php
│       ├── Expense.php
│       ├── OilTransaction.php
│       └── BusTrip.php
├── database/
│   ├── migrations/
│   └── seeders/
├── resources/
│   └── views/
│       ├── layouts/
│       ├── auth/
│       ├── expenses/
│       ├── oil/
│       ├── bus/
│       └── reports/
└── public/
    ├── css/
    └── js/
```

## مسیرهای اصلی

- `/login` - صفحه ورود
- `/` - صفحه اصلی (نیاز به احراز هویت)
- `/expenses` - مدیریت مصارف و عواید
- `/oil` - مدیریت معاملات تیل
- `/bus` - مدیریت سفرهای بَس
- `/reports` - گزارشات
- `/about` - درباره ما
- `/contact` - تماس با ما

## تکنولوژی‌های استفاده شده

- **Backend:** Laravel 9
- **Frontend:** Bootstrap 5, FontAwesome 6
- **Database:** MySQL
- **JavaScript:** Vanilla JS
- **CSS:** Custom CSS

## ویژگی‌های امنیتی

- احراز هویت با Session
- محافظت از مسیرها با Middleware
- اعتبارسنجی ورودی‌ها
- محافظت از CSRF

## پشتیبانی

برای پشتیبانی و سوالات:
- ایمیل: info@codeaf.com
- تلفن: +93 123 456 789

## مجوز

این پروژه تحت مجوز MIT منتشر شده است.

---

**توسعه‌دهنده:** تیم CodeAf{کُداف}  
**نسخه:** 1.0.0  
**تاریخ انتشار:** 2024
