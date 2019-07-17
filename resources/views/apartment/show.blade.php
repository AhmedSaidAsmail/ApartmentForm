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
    <div class="sec-wrapper">
        <h1>{{$apartment->building_no}} تقييم الوحدة رقم </h1>

            <div class="form-wrapper">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                           aria-controls="home"
                           aria-selected="true">معلومات اساسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="information-tab" data-toggle="tab" href="#information" role="tab"
                           aria-controls="information" aria-selected="false">معلومات عن المبني</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="location-tab" data-toggle="tab" href="#location" role="tab"
                           aria-controls="location" aria-selected="false">موقع المبني</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                           aria-controls="profile" aria-selected="false">صور</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>اسم الوحدات المفروشة</label>
                                    <input class="form-control" name="basic[name]" value="{{$apartment->name}}" disabled>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>اسم المالك</label>
                                    <input class="form-control" name="basic[owner]" value="{{$apartment->owner}}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>رقم الهاتف</label>
                                    <input class="form-control" name="basic[phone]" value="{{$apartment->phone}}" disabled>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>اسم الحي</label>
                                    <input class="form-control" name="basic[neighborhood]" value="{{$apartment->neighborhood}}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>اسم الشارع</label>
                                    <input class="form-control" name="basic[street]" value="{{$apartment->street}}" disabled>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>رقم العقار</label>
                                    <input class="form-control" name="basic[building_no]" value="{{$apartment->building_no}}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>مساحة الارض</label>
                                    <input class="form-control" name="basic[area]" value="{{$apartment->area}}" disabled>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>التصنيف حسب ترخيص هيئة السياحة</label>
                                    <input class="form-control" name="basic[sort]" value="{{$apartment->sort}}" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="information" role="tabpanel" aria-labelledby="information-tab">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>عدد الادوار</label>
                                    <input class="form-control" name="basic[floors_no]" value="{{$apartment->floors_no}}" disabled>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>عدد الغرف</label>
                                    <input class="form-control" name="basic[rooms_no]" value="{{$apartment->rooms_no}}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>عدد المواقف الخارجية و القبو</label>
                                    <input class="form-control" name="basic[parking_no]" value="{{$apartment->parking_no}}" disabled>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>مساحة البهو الرئيسي</label>
                                    <input class="form-control" name="basic[lobby_area]" value="{{$apartment->lobby_area}}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>نوع التكييف</label>
                                    <input class="form-control" name="basic[air_conditioning_type]" value="{{$apartment->air_conditioning_type}}" disabled>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>نظام مكافحة الحريق</label>
                                    <input class="form-control" name="basic[fire_system]" value="{{$apartment->fire_system}}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>خدمات داخلية</label>
                                    <input class="form-control" name="basic[internal_services]" value="{{$apartment->internal_services}}" disabled>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>خدمات خارجية</label>
                                    <input class="form-control" name="basic[external_services]" value="{{$apartment->external_services}}" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="location" role="tabpanel" aria-labelledby="location-tab">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <div id="map-canvas"></div>
                                    <input type="hidden" value="{{$apartment->location->longitude}}" id="lng">
                                    <input type="hidden" value="{{$apartment->location->latitude}}" id="lat">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                </div>
            </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjAUd3f1svS63dzsCBQpA1jleuUTyIlB4&libraries=places"></script>
<script>
    var lngInput, latInput, city, map, marker, searchBox;
    lngInput = document.getElementById('lng');
    latInput = document.getElementById('lat');
    city = new google.maps.LatLng({{$apartment->location->latitude}}, {{$apartment->location->longitude}});
    map = new google.maps.Map(document.getElementById('map-canvas'), {
        center: city,
        zoom: 8
    });

    // marker
    marker = new google.maps.Marker({
        position: city,
        map: map,
        draggable: false
    });

</script>
</body>
</html>