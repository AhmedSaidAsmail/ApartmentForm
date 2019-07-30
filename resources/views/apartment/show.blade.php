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
                    <a class="nav-link" id="location-tab" data-toggle="tab" href="#location" role="tab"
                       aria-controls="location" aria-selected="false">موقع المبنى</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="information-tab" data-toggle="tab" href="#information" role="tab"
                       aria-controls="information" aria-selected="false">معلومات عن المبنى</a>
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
                                <input class="form-control" name="basic[neighborhood]"
                                       value="{{$apartment->neighborhood->name}}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>اسم الشارع</label>
                                <input class="form-control" name="basic[street]" value="{{$apartment->street}}"
                                       disabled>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>رقم العقار</label>
                                <input class="form-control" name="basic[building_no]"
                                       value="{{$apartment->building_no}}" disabled>
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
                                <input class="form-control" name="basic[floors_no]" value="{{$apartment->floors_no}}"
                                       disabled>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>عدد الغرف</label>
                                <input class="form-control" name="basic[rooms_no]" value="{{$apartment->rooms_no}}"
                                       disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>عدد المواقف الخارجية و القبو</label>
                                <input class="form-control" name="basic[parking_no]" value="{{$apartment->parking_no}}"
                                       disabled>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>مساحة البهو الرئيسي</label>
                                <input class="form-control" name="basic[lobby_area]" value="{{$apartment->lobby_area}}"
                                       disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>نوع التكييف</label>
                                <input class="form-control" name="basic[air_conditioning_type]"
                                       value="{{$apartment->air_conditioning_type}}" disabled>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>نظام مكافحة الحريق</label>
                                <input class="form-control" name="basic[fire_system]"
                                       value="{!! $apartment->fire_system?"متوفر":"غير متوفر" !!}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>خدمات داخلية</label>
                                <select class="form-control" name="services[internal_services][][service]" multiple
                                        disabled>
                                    @foreach($apartment->internals as $internal)
                                        <option value="{{$internal->service}}">{{$internal->service}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>خدمات خارجية</label>
                                <select class="form-control" name="services[external_services][][service]" multiple
                                        disabled>
                                    @foreach($apartment->externals as $external)
                                        <option value="{{$external->service}}">{{$external->service}}</option>
                                    @endforeach
                                </select>
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
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row">
                        <div class="col">
                            <div class="image-wrapper">
                                <label>الواجهة الرئيسية</label>
                                {!! showImage($apartment->images->main_gate) !!}
                            </div>
                        </div>
                        <div class="col">
                            <div class="image-wrapper">
                                <label>الواجهة الجانبية</label>
                                {!! showImage($apartment->images->side_gates) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="image-wrapper">
                                <label>البهو الرئيسي2</label>
                                {!! showImage($apartment->images->main_lobby_2) !!}
                            </div>
                        </div>
                        <div class="col">
                            <div class="image-wrapper">
                                <label>البهو الرئيسي</label>
                                {!! showImage($apartment->images->main_lobby) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="image-wrapper">
                                <label>ممر نزول العملاء</label>
                                {!! showImage($apartment->images->downfall) !!}
                            </div>
                        </div>
                        <div class="col">
                            <div class="image-wrapper">
                                <label>صالة الاستقبال</label>
                                {!! showImage($apartment->images->reception) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="image-wrapper">
                                <label>الممرات بين الغرف 1</label>
                                {!! showImage($apartment->images->room_corridors_1) !!}
                            </div>
                        </div>
                        <div class="col">
                            <div class="image-wrapper">
                                <label>الممرات بين الغرف 2</label>
                                {!! showImage($apartment->images->room_corridors_2) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="image-wrapper">
                                <label>المصاعد </label>
                                {!! showImage($apartment->images->elevator) !!}
                            </div>
                        </div>
                        <div class="col">
                            <div class="image-wrapper">
                                <label>دورة المياه بالوحدة السكنية </label>
                                {!! showImage($apartment->images->bathroom) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="image-wrapper">
                                <label>صورة لكامل الغرفة</label>
                                {!! showImage($apartment->images->whole_room) !!}
                            </div>
                        </div>
                        <div class="col">
                            <div class="image-wrapper">
                                <label>صورة داخلية للغرفة</label>
                                {!! showImage($apartment->images->room_insider) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="image-wrapper">
                                <label>صالة الجلوس</label>
                                {!! showImage($apartment->images->reception_room) !!}
                            </div>
                        </div>
                        <div class="col">
                            <div class="image-wrapper">
                                <label>المطبخ</label>
                                {!! showImage($apartment->images->kitchen) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="image-wrapper">
                                <label>نوع التكييف</label>
                                {!! showImage($apartment->images->air_conditioning_type) !!}
                            </div>
                        </div>
                        <div class="col">
                            <div class="image-wrapper">
                                <label>نظام مكافحة الحريق</label>
                                {!! showImage($apartment->images->fire_system) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="image-wrapper">
                                <label>لمطعم</label>
                                {!! showImage($apartment->images->restaurant) !!}
                            </div>
                        </div>
                        <div class="col">
                            <div class="image-wrapper">
                                <label>الكافيه</label>
                                {!! showImage($apartment->images->cafe) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="image-wrapper">
                                <label>النادي الصحي</label>
                                {!! showImage($apartment->images->healthy_club) !!}
                            </div>
                        </div>
                        <div class="col">
                            <div class="image-wrapper">
                                <label>المسبح</label>
                                {!! showImage($apartment->images->bool) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="image-wrapper">
                                <label>الحديقة الخارجية</label>
                                {!! showImage($apartment->images->out_garden) !!}
                            </div>
                        </div>
                        <div class="col">
                            <div class="image-wrapper">
                                <label>اخري</label>
                                {!! showImage($apartment->images->other) !!}
                            </div>
                        </div>
                    </div>
                </div>
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
        zoom: 18
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