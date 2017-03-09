$(function() {
    $("#map").googleMap({
        zoom : 5,
        coords: [45.8632093, -6.767034],
        type: "ROADMAP"
        });

    $("#map").addMarker({
        address: "17 rue delandine 69002 LYON", // Postale Address
        url: 'http://www.wildcodeschool.com' // Link
    });

    $("#map").addMarker({
        address: "18 Rue de la Gare 28240 La Loupe", // Postale Address
        url: 'http://www.wildcodeschool.com' // Link
    });

    $("#map").addMarker({
        address: "1 Place de la Bourse 31000 Toulouse", // Postale Address
        url: 'http://www.wildcodeschool.com' // Link
    });

    $("#map").addMarker({
        address: "70 rue Morellon 13000 Marseille", // Postale Address
        url: 'http://www.wildcodeschool.com' // Link
    });

    $("#map").addMarker({
        address: "15 Place Canteloup 33800 Bordeaux", // Postale Address
        url: 'http://www.wildcodeschool.com' // Link
    });

    $("#map").addMarker({
        address: "1 Avenue du champ de Mars 45100 Orléans", // Postale Address
        url: 'http://www.wildcodeschool.com' // Link
    });

    $("#map").addMarker({
        address: "35 rue Saint Honoré 77300 Fontainebleau", // Postale Address
        url: 'http://www.wildcodeschool.com' // Link
    });
        


});