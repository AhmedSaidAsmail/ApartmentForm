<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('css/main.css')}}" type="text/css">
</head>
<body>
<div class="container">
    <div class="apartments-wrapper">
        <h1>لائحة الاحياء</h1>
        <div class="new-section">
            <a href="{{route('neighborhoods.create')}}" class="btn btn-success">اضافة حي</a>
        </div>
        <div class="apartment-table">
            <table id="apartment" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                    <th>الاحياء</th>
                    <th>#</th>
                </tr>
                </thead>
                <tbody>
                @foreach($neighborhoods as $neighborhood)
                    <tr>
                        <td>{{$neighborhood->name}}</td>
                        <td>
                            <a href="{{route('neighborhoods.edit',['id'=>$neighborhood->id])}}"
                               class="btn btn-success">تعديل</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>الاحياء</th>
                    <th>#</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        $('#apartment').DataTable();
    });
</script>
</body>
</html>