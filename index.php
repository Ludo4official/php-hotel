<?php
    
    $hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4,
        'img' => 'https://media.hrs.com/media/image/8e/cf/a0/Marina_Bay_Sands-Singapur-Aussenansicht-7-450994_600x600.jpg'
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2,
        'img' => 'https://www.visitdubai.com/-/media/gathercontent/article/n/new-hotels-in-dubai/fallback-image/new-hotels-in-dubai-eventorganiser-apr-2022.jpg?&cw=256&ch=256'
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1,
        'img' => 'https://www.hotel.de/de/media/image/de/f7/9e/H10_Playa_Esmeralda_hotel-Costa_Calma_Pajara-Hotel_outdoor_area-1-71170_600x600.jpg'
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5,
        'img' => 'https://www.visitdubai.com/-/media/gathercontent/poi/a/atlantis-the-royal-the-resort/fallback-image/atlantis-the-royal-building-at-dusk-getty.jpg?&cw=256&ch=256'
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50,
        'img' => 'https://www.visitdubai.com/-/media/gathercontent/poi/b/bulgari-resort-and-residences-dubai/fallback-image/bulgari-resort-and-residences-dubai.jpg?&cw=256&ch=256'
    ],

];

foreach ($hotels as $hotel) {

}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Hotel</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">
                        PHP Hotel
                    </h1>
                </div>
            </row>

            <div class="row">
                <div class="col d-flex">
                    <?php
                        foreach ($hotels as $hotel) {
                    ?>
                        <div class="card mx-1" style="width: 18rem;">
                            <img src="<?php echo $hotel['img']; ?>" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $hotel['name']; ?></h5>
                                <p class="card-text"><?php echo $hotel['description']; ?></p>
                                <div>
                                    <?php echo $hotel['parking'] ? 'Parcheggio disponibile' : 'Parcheggio NON disponibile'; ?>
                                </div>
                                <div>
                                    <?php echo $hotel['vote']; ?> Stelle
                                </div>
                                <div>
                                    <?php echo $hotel['distance_to_center']; ?> KM dal centro
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>