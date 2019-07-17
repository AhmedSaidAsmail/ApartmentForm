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
    <form action="{{route('admin.login')}}" method="post">
        {{csrf_field()}}
        <div class="login-form-wrapper">
            <h2>تسجيل دخول الادمن</h2>
            <div class="form-group">
                <input class="form-control" name="email" placeholder="Email Account">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Password">
            </div>
            <input type="hidden" name="remember" value="1">
            <button class="btn btn-primary btn-block">تسجيل الدخول</button>
        </div>
    </form>
</div>
</body>
</html>
