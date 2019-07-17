<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/main.css')}}" type="text/css">
</head>
<body>
<div class="container">
    <div class="sp-wrapper">
        <h1>لوحة تحكم الادمن</h1>
        <a href="{{route('customer.register')}}" class="btn btn-primary btn-block">اضافة مدخل بيانات</a>
        <a href="" class="btn btn-warning btn-block">اضافة  مدقق</a>
        <a href="{{route('admin.logout')}}" class="btn btn-danger btn-block">تسجيل الخروج</a>
    </div>
</div>
</body>
</html>