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
        <h1>استمارة تقييم الوحدات المفروشة</h1>
        <form method="post" action="{{route('apartment.store')}}">
            {{csrf_field()}}
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
                                    <input class="form-control" name="basic[name]" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>اسم المالك</label>
                                    <input class="form-control" name="basic[owner]" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>رقم الهاتف</label>
                                    <input class="form-control" name="basic[phone]" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>اسم الحي</label>
                                    <input class="form-control" name="basic[neighborhood]" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>اسم الشارع</label>
                                    <input class="form-control" name="basic[street]" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>رقم العقار</label>
                                    <input class="form-control" name="basic[building_no]" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>مساحة الارض</label>
                                    <input class="form-control" name="basic[area]" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>التصنيف حسب ترخيص هيئة السياحة</label>
                                    <input class="form-control" name="basic[sort]" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="information" role="tabpanel" aria-labelledby="information-tab">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>عدد الادوار</label>
                                    <input class="form-control" name="basic[floors_no]" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>عدد الغرف</label>
                                    <input class="form-control" name="basic[rooms_no]" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>عدد المواقف الخارجية و القبو</label>
                                    <input class="form-control" name="basic[parking_no]" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>مساحة البهو الرئيسي</label>
                                    <select class="form-control" name="basic[lobby_area]" required>
                                        <option value="صغيرة">صغيرة</option>
                                        <option value="متوسطة">متوسطة</option>
                                        <option value="كبيرة">كبيرة</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>نوع التكييف</label>
                                    <select class="form-control" name="basic[air_conditioning_type]" required>
                                        <option value="مركزي">مركزي</option>
                                        <option value="جداري">جداري</option>
                                        <option value="شباك">شباك</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>نظام مكافحة الحريق</label>
                                    <select class="form-control" name="basic[fire_system]" required>
                                        <option value="1">متوفر</option>
                                        <option value="0">غير متوفر</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>خدمات داخلية</label>
                                    <select class="form-control" name="basic[internal_services]" required>
                                        <option value="مغسلة">مغسلة</option>
                                        <option value="كافيه">كافيه</option>
                                        <option value="مطعم">مطعم</option>
                                        <option value="كافيتريا">كافيتريا</option>
                                        <option value="نادي صحي">نادي صحي</option>
                                        <option value="نادي رياضي">نادي رياضي</option>
                                        <option value="دورة مياه عامة">دورة مياه عامة</option>
                                        <option value="مصلي">مصلي</option>
                                        <option value="قاعة">قاعة</option>
                                        <option value="اخري">اخري</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>خدمات خارجية</label>
                                    <select class="form-control" name="basic[external_services]" required>
                                        <option value="حديقة خارجية">حديقة خارجية</option>
                                        <option value="حمامات سباحة">حمامات سباحة</option>
                                        <option value="مدخل سيارات لتنزيل الافراد">مدخل سيارات لتنزيل الافراد</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="location" role="tabpanel" aria-labelledby="location-tab">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="search">الموقع</label>
                                    <input class="form-control" id="search_map">
                                    <div id="map-canvas"></div>
                                    <input name="location[longitude]" type="hidden" id="lng">
                                    <input name="location[latitude]" type="hidden" id="lat">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                </div>
            </div>
            <button class="btn btn-primary">انشئ وحدة جديدة</button>
        </form>
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
    city = new google.maps.LatLng(24.774265, 46.738586);
    map = new google.maps.Map(document.getElementById('map-canvas'), {
        center: city,
        zoom: 5
    });
    marker = new google.maps.Marker({
        position: city,
        map: map,
        draggable: true
    });
    lngInput.value = marker.getPosition().lng();
    latInput.value = marker.getPosition().lat();
    searchBox = new google.maps.places.SearchBox(document.getElementById('search_map'));
    google.maps.event.addListener(searchBox, 'places_changed', function () {
        let places = searchBox.getPlaces();
        let boundes = new google.maps.LatLngBounds();
        let i, place;
        for (i = 0; place = places[i]; i++) {
            boundes.extend(place.geometry.location);
            marker.setPosition(place.geometry.location);
        }
        map.fitBounds(boundes);
        map.setZoom(15);
    });
    google.maps.event.addListener(marker, 'position_changed', function () {
        let lng, lat;
        lat = marker.getPosition().lat();
        lng = marker.getPosition().lng();
        lngInput.value = lng;
        latInput.value = lat;

    })
</script>
</body>
</html>