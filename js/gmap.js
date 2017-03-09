$(function() {
    $("#map").googleMap({
        zoom : 5,
        coords: [45.8632093, -6.767034],
        type: "ROADMAP"
        });

    $("#map").addMarker({
        address: "17 rue delandine 69002 LYON", // Postale Address
        url: 'http://www.tiloweb.com' // Link
    });

    $("#map").addMarker({
        address: "18 Rue de la Gare 28240 La Loupe", // Postale Address
        url: 'http://www.tiloweb.com' // Link
    });

    $("#map").addMarker({
        address: "1 Place de la Bourse 31000 Toulouse", // Postale Address
        url: 'http://www.tiloweb.com' // Link
    });

    

});