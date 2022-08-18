function iniciarMap() {
    var coord = {
        lat: 14.4045053,
        lng: -90.696734
    };
    var map = new google.maps.Map(document.getElementById('mapa'), {
        zoom: 16,
        center: coord
    });
    var marker = new google.maps.Marker({
        position: coord,
        map: map,
        title: 'Pradera Palin'
    });
}