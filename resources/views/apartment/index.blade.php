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
        <h1>لائحة المباني</h1>
        <div class="apartment-table">
            <table id="apartment" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                    <th>اسم الوحدة</th>
                    <th>اسم المالك</th>
                    <th>رقم العقار</th>
                    <th>#</th>
                </tr>
                </thead>
                <tbody>
                @foreach($apartments as $apartment)
                    <tr>
                        <td>{{$apartment->name}}</td>
                        <td>{{$apartment->owner}}</td>
                        <td>{{$apartment->building_no}}</td>
                        <td><a href="{{route('employee.apartment.show',['id'=>$apartment->id])}}"
                               class="btn btn-success">مشاهدة</a></td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>اسم الوحدة</th>
                    <th>اسم المالك</th>
                    <th>رقم العقار</th>
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