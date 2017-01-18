<?php

/* @var $this yii\web\View */

$this->title = 'Beranda';
?>
<div id="map" style="height: 400px"></div>
<script>
    function initMap() {
        //-7.2907939,112.7893436
        var myLatLng = {lat: -7.2766438, lng: 112.794941};

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: myLatLng,
            scrollwheel: false,
            mapTypeControl: false,
        });

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'PENS'
        });

        var infowindow = new google.maps.InfoWindow({
            content: 'Politeknik Elektronika Negeri Surabaya'
        });
        infowindow.open(map, marker);
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCaLTRspMDvX9TfZSXtDWCyxYoBIBAZPWA&callback=initMap">
</script>
