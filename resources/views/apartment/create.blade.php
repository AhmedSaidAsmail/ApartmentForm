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
        <h1>استمارة تقييم الوحدات المفروشة</h1>
        <form method="post" action="{{route('apartment..store')}}" enctype="multipart/form-data" id="apartment-form">
            {{csrf_field()}}
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
                                    <input class="form-control" name="basic[name]" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>اسم المالك</label>
                                    <input class="form-control" name="basic[owner]">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>رقم الجوال للمسئول</label>
                                    <input class="form-control" name="basic[phone]">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>اسم الحي</label>
                                    <select class="form-control" name="basic[neighborhood_id]" required>
                                        <option value="">اختار حي</option>
                                        @foreach($neighborhoods as $neighborhood)
                                            <option value="{{$neighborhood->id}}">{{$neighborhood->name}}</option>
                                        @endforeach
                                    </select>
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
                                    <input class="form-control" name="basic[building_no]">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>مساحة الارض</label>
                                    <input class="form-control" name="basic[area]">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>التصنيف حسب ترخيص هيئة السياحة</label>
                                    <select class="form-control" name="basic[sort]">
                                        <option value="">اختار التصنيف</option>
                                        <option value="درجة اولى">درجة اولى</option>
                                        <option value="درجة تانية">درجة تانية</option>
                                        <option value="درجة تالتة">درجة تالتة</option>
                                        <option value="درجة رابعة">درجة رابعة</option>
                                        <option value="غير مصنف">غير مصنف</option>
                                        <option value="اخري">اخري</option>
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
                                    <select class="form-control" name="basic[lobby_area]">
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
                                    <label>نوع التكييف في الغرف</label>
                                    <select class="form-control" name="basic[air_conditioning_type]">
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
                                    <select class="form-control" id="internal_services" style="width: 100%"
                                            name="services[internal_services][][service]" multiple
                                            required>
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
                                    <select class="form-control" id="external_services" style="width: 100%"
                                            name="services[external_services][][service]" multiple
                                            required>
                                        <option value="حديقة خارجية">حديقة خارجية</option>
                                        <option value="حمامات سباحة">حمامات سباحة</option>
                                        <option value="مدخل سيارات لتنزيل الافراد">مدخل سيارات لتنزيل الافراد</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>الواجهة الرئيسية</label>
                                    <input type="file" class="form-control" name="images[main_gate]" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>الواجهة الجانبية</label>
                                    <input type="file" class="form-control" name="images[side_gates]" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>البهو الرئيسي 2</label>
                                    <input type="file" class="form-control" name="images[main_lobby_2]">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>البهو الرئيسي</label>
                                    <input type="file" class="form-control" name="images[main_lobby]">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>ممر نزول العملاء</label>
                                    <input type="file" class="form-control" name="images[downfall]">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>مكتب الاستقبال</label>
                                    <input type="file" class="form-control" name="images[reception]">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>الممرات بين الغرف 1</label>
                                    <input type="file" class="form-control" name="images[room_corridors_1]">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>الممرات بين الغرف 2</label>
                                    <input type="file" class="form-control" name="images[room_corridors_2]">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>المصاعد </label>
                                    <input type="file" class="form-control" name="images[elevator]">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>دورة المياه بالوحدة السكنية </label>
                                    <input type="file" class="form-control" name="images[bathroom]">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>صورةعند مدخل الوحدة السكنية</label>
                                    <input type="file" class="form-control" name="images[whole_room]">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>صورة داخلية للغرفة</label>
                                    <input type="file" class="form-control" name="images[room_insider]">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>صالة الجلوس</label>
                                    <input type="file" class="form-control" name="images[reception_room]">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>المطبخ</label>
                                    <input type="file" class="form-control" name="images[kitchen]">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>التكييف في الغرفة</label>
                                    <input type="file" class="form-control" name="images[air_conditioning_type]">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>نظام مكافحة الحريق</label>
                                    <input type="file" class="form-control" name="images[fire_system]">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>لمطعم</label>
                                    <input type="file" class="form-control" name="images[restaurant]">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>الكافيه</label>
                                    <input type="file" class="form-control" name="images[cafe]">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>النادي الصحي</label>
                                    <input type="file" class="form-control" name="images[healthy_club]">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>المسبح</label>
                                    <input type="file" class="form-control" name="images[bool]">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>الحديقة الخارجية</label>
                                    <input type="file" class="form-control" name="images[out_garden]">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>اخري</label>
                                    <input type="file" class="form-control" name="images[other]">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" id="nextStep">التالي</button>
        </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>--}}
<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjAUd3f1svS63dzsCBQpA1jleuUTyIlB4&libraries=places"></script>
<script>
    // multi select
    $("#external_services").select2();
    $("#internal_services").select2();
    // validate steps
    var links = document.getElementsByClassName('nav-link');
    var linksList = Array.prototype.slice.call(links, 0);
    var tabs = document.getElementsByClassName('tab-pane');
    var tabsList = Array.prototype.slice.call(tabs, 0);
    var button = document.getElementById('nextStep');
    var form = document.getElementById('apartment-form');
    button.onclick = function (event) {
        event.preventDefault();
        let tab = activeTab();
        if (tab === linksList.length - 1) {
            validateFromAndSubmit(tab);
        }
        else if (tab === linksList.length - 2) {
            nextStep(tab);
            button.innerHTML = "انشئ وحدة جديدة";
        } else {
            nextStep(tab);
        }
    };

    function validateFromAndSubmit(index) {
        if (validateTabElements(tabsList[index])) {
            form.submit();
        }
    }

    function activeTab() {
        let activeIndex = 0;
        linksList.forEach(function (link, index) {
            if (link.classList.contains('active')) {
                activeIndex = index;
            }
        });
        return activeIndex;
    }

    function nextStep(index) {
        let next = links[index + 1];
        if (validateTabElements(tabsList[index])) {
            makeTabActive(next);
        }
    }

    function makeTabActive(tab) {
        let ref = tab.getAttribute('aria-controls');
        let tabSection = document.getElementById(ref);
        removeAllActiveClass(linksList, 'active');
        removeAllActiveClass(tabsList, 'active');
        removeAllActiveClass(tabsList, 'show');
        tab.classList.add('active');
        tabSection.classList.add('active');
        tabSection.classList.add('show');
    }

    function validateTabElements(tab) {
        let inputs = tab.getElementsByTagName('input');
        let i, valid, input;
        valid = true;
        for (i = 0; i < inputs.length; i++) {
            input = inputs[i];
            if (!input.checkValidity()) {
                input.classList.add('is-invalid');
                valid = false;
            } else {
                if (input.classList.contains('is-invalid')) {
                    input.classList.remove('is-invalid');
                }
            }

        }
        return valid;
    }

    linksList.forEach(function (link, index) {
        link.onclick = function (event) {
            event.preventDefault();
//            let ref = link.getAttribute('aria-controls');
//            let tab = document.getElementById(ref);
//            removeAllActiveClass(linksList, 'active');
//            removeAllActiveClass(tabsList, 'active');
//            removeAllActiveClass(tabsList, 'show');
//            link.classList.add('active');
//            tab.classList.add('active');
//            tab.classList.add('show');
        };
    });

    function removeAllActiveClass(links, className) {
        links.forEach(function (link) {
            link.classList.remove(className);
        });
    }

    // Validate links
    var lngInput, latInput, city, map, marker, searchBox;
    lngInput = document.getElementById('lng');
    latInput = document.getElementById('lat');
    city = new google.maps.LatLng(24.774265, 46.738586);
    map = new google.maps.Map(document.getElementById('map-canvas'), {
        center: city,
        zoom: 18,
        mapTypeId: 'satellite'
    });
    // marker
    marker = new google.maps.Marker({
        position: city,
        map: map,
        draggable: true
    });
    // search
    lngInput.value = marker.getPosition().lng();
    latInput.value = marker.getPosition().lat();
    searchBox = new google.maps.places.SearchBox(document.getElementById('search_map'));
    google.maps.event.addListener(searchBox, 'places_changed', function () {
        let places = searchBox.getPlaces();
        let boundes = new google.maps.LatLngBounds();
        let i, place;
        for (i = 0; place = places[i]; i++) {
            console.log(place);
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

    });
    // get geoLocation

    infoWindow = new google.maps.InfoWindow;
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            //infoWindow.setContent('Location found.');
            //infoWindow.open(map);
            map.setCenter(pos);
            marker.setPosition(new google.maps.LatLng(pos.lat, pos.lng));
            console.log(pos.lat + "  " + pos.lng);
            lngInput.value = pos.lng;
            latInput.value = pos.lat;
        }, function () {
            handleLocationError(true, infoWindow, map.getCenter());
        });
    } else {
        // Browser doesn't support Geolocation
        handleLocationError(false, infoWindow, map.getCenter());
    }

    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
            'Error: The Geolocation service failed.' :
            'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
    }

</script>
</body>
</html>