<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css">
    <link rel="stylesheet" href="{{asset('css/main.css')}}" type="text/css">
</head>
<body>
<div class="container">
    <div class="sec-wrapper">
        <h1>تعديل {{$neighborhood->name}}</h1>
        <form method="post" action="{{route('neighborhoods.update',['id'=>$neighborhood->id])}}">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="PUT">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <input class="form-control" name="name" value="{{$neighborhood->name}}" autocomplete="off"
                               placeholder="اسم الحي">
                    </div>
                </div>
                <div class="col">
                    <button class="btn btn-success btn-block">تعديل</button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>