<?php 
    include_once('includes/config.php'); 
	include_once("includes/function/f_reservation.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GanjaMah.</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="/ganjamah/assets/font-awesome-6/css/all.css">
    <!-- fonts -->
    <link rel="stylesheet" href="/ganjamah/visiteur/font/fonts.css">
    <!-- normalize css -->
    <link rel="stylesheet" href="/ganjamah/visiteur/css/normalize.css">
    <!-- custom css -->
    <link rel="stylesheet" href="/ganjamah/visiteur/css/utility.css">
    <link rel="stylesheet" href="/ganjamah/visiteur/includes/modal/css/style.css">
    <link rel="stylesheet" href="/ganjamah/visiteur/includes/modal/css/ionicons.min.css">
    <link rel="stylesheet" href="/ganjamah/visiteur/css/style.css">
    <link rel="stylesheet" href="/ganjamah/visiteur/css/responsive.css">
</head>

<body>
    <!-- Header -->
        <?php include_once("visiteur/includes/header.php");?>
    <!-- /Header -->

    <!-- header -->
    <header class="flex">
        <div class="container">
            <div class="header-title">
                <h1>Explorer la ville de Majunga</h1>
                <p>Dépenser-vous dans un décor magique et laisser vous aller à vos envies les plus folles, Majunga y
                    répondra à tous les coups.</p>
            </div>
        </div>
    </header>
    <!-- header -->

    <!-- featured section -->
    <section id="featured" class="py-4">
        <div class="container">
            <div class="title-wrap">
                <span class="sm-title">Passer une incroyable aventure avec nous</span>
                <h2 class="lg-title">Nos circuits</h2>
            </div>

            <div class="featured-row">

                <?php

                    $sql = "SELECT * from circuit where \"PLACE_CIRCUIT\">0 ORDER BY \"PLACE_CIRCUIT\" ASC";

                    $query = $dbh->prepare($sql);
                    $query->execute();

                    while ($row = $query->fetch(PDO::FETCH_ASSOC))
                    {	
                                    
                ?>

                <div class="featured-item my-2 shadow">
                    <img src="/ganjamah/assets/img/circuit/<?php echo $row['IMAGE_CIRCUIT']; ?>" alt="featured place">
                    <div class="featured-item-content">
                        <span>
                            <i class="fas fa-map-marker-alt"></i>
                            <?php echo $row['LOCALISATION_CIRCUIT']; ?>
                        </span>
                        <div>
                            <p class="text"><?php echo $row['DESCRIPTION_CIRCUIT']; ?></p>
                            <p class="text"><?php echo $row['DUREE_CIRCUIT']; ?> jours</p>
                        </div>
                        <div>
                            <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#exampleModalCenter_<?php echo $row['ID_CIRCUIT']; ?>">
                                <i class="fa fa-trash m-r-5"></i> Reserver</a>
                            </button>
                        </div>
                    </div>
                </div>

                <?php

                        include("visiteur/includes/modal/modal.php");

                    }
                ?>

            </div>
        </div>
    </section>
    <!-- end of featured section -->

    <!-- services section -->
    <section id="services" class="py-4">
        <div class="container">
            <div class="title-wrap">
                <h2 class="lg-title">decouvrer</h2>
            </div>

            <div class="services-row">
                <div class="services-item">
                    <span class="services-icon">
                        <i class="fas fa-hotel"></i>
                    </span>
                    <h3>Les hotels</h3>
                    <p class="text"></p>
                    <a href="/ganjamah/visiteur/liste/hotel.php" class="btn btn-outline-info">Voir</a>
                </div>

                <div class="services-item">
                    <span class="services-icon">
                        <i class="fas fa-utensils"></i>
                    </span>
                    <h3>Les restaurants</h3>
                    <p class="text"></p>
                    <a href="/ganjamah/visiteur/liste/restaurant.php" class="btn btn-outline-info">Voir</a>
                </div>

                <div class="services-item">
                    <span class="services-icon">
                        <i class="fas fa-map-marked-alt"></i>
                    </span>
                    <h3>Les zones touristiques</h3>
                    <p class="text"></p>
                    <a href="/ganjamah/visiteur/liste/zone_visiteur.php" class="btn btn-outline-info">Voir</a>
                </div>
                
            </div>
        </div>
    </section>
    <!-- end of services section -->

    <!-- testimonials section -->
    <section id="testimonials" class="py-4">
        <div class="container">
            <div class="title-wrap">
                <span class="sm-title">Tout ce qu'il faut savoir</span>
                <h2 class="lg-title">Sait-tu ?</h2>
            </div>

            <div class="test-row">
                <div class="test-item">
                    <p class="text">
                        Mahajanga est le fief du royaume Sakalava fondé au XVIIIème siècle et dont les traditions
                        demeurent encore bien vivantes.
                        Les prestataires de services touristiques s’efforcent de mettre en valeur la culture locale :
                        soirées agrémentées de groupes musicaux et dégustation de plats malgaches, mise à disposition
                        d’ouvrages et documents sur les us et coutumes encore largement pratiqués.
                        Nombreuses sont les occasions d’assister à des rites traditionnels ancestraux qui marquent
                        l’attachement aux descendants royaux et l’adoration à l’égard du « Zanahary antany » (dieu
                        visible), terme qui désigne le roi considéré comme une divinité en chair et en os.
                        Tous les week-ends, les compétitions de moraingy (lutte traditionnelle) attirent la grande foule
                        et offrent un spectacle inoubliable.
                    </p>
                    <!-- <div class = "test-item-info"> -->
                    <!-- <img src = "images/test-1.jpg" alt = "testimonial"> -->
                    <div>
                        <h3>Culture et tradition</h3>
                        <!-- <p class = "text">Trip to Brazil</p> -->
                    </div>
                    <!-- </div> -->
                </div>

                <div class="test-item">
                    <p class="text">
                        L’artisanat majungais, attractif et riche en diversité, mérite son label « d’artisanat d’art ».
                        Les majungais ont su développer des savoir-faire, des techniques anciennes et modernes en termes
                        d’artisanat.

                        En 2011, le label « ANGAYA » a été ainsi créé, avec l’appui de l’IRCOD, le CITE et l’Office
                        Régional du Tourisme Boeny, afin de valoriser et promouvoir le patrimoine majungais et malgache,
                        de découvrir ou redécouvrir l’art artisanal du Boeny, de la grande île et de développer une
                        synergie entre les partenaires. Car valoriser et développer le savoir faire local à travers un
                        label garantira aux consommateurs un niveau de savoir faire élevé.
                    </p>
                    <!-- <div class="test-item-info">
                        <img src="/ganjamah/visiteur/images/test-2.jpg" alt="testimonial"> -->
                    <div>
                        <h3>Artisanat – Label Angaya</h3>
                        <!-- <p class="text">Trip to Maldives</p> -->
                    </div>
                    <!-- </div> -->
                </div>

                <div class="test-item">
                    <p class="text">
                        La ville de Mahajanga présente cette agréable originalité de posséder de belles plages, proches
                        du centre-ville et donc facilement accessibles. Plage du Village Touristique (centre ville),
                        Petite Plage d’Amborovy bordée de filaos, plage du Grand Pavois (10km) où sont installés de
                        nombreux restaurants, plage d’Ampazony (15km) à proximité de cirques rouges, plages
                        d’Ampasindava (20km) et d’Antsanitia (25km).

                        Plus l’on s’éloigne de l’embouchure de la Betsiboka et plus les eaux sont claires. Plusieurs
                        plages sont équipées de paillottes et nattes, lieux de détente idéaux en famille.

                    </p>
                    <div>
                        <h3>La cité des fleurs</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of testimonials section -->

    <!-- video section -->
    <section id="video">
        <div class="video-wrapper flex">
            <video loop autoplay muted>
                <source src="/ganjamah/visiteur/videos/video-section.mp4" type="video/mp4" >
            </video>
            <!-- <button type="button" id="play-btn">
                <i class="fas fa-play"></i>
            </button> -->
        </div>
    </section>
    <!-- end of video section -->

    <!-- footer -->
        <?php include_once("visiteur/includes/footer.php");?>
    <!-- end of footer -->

    <!-- js -->
    <script src="/ganjamah/visiteur/js/script.js"></script>

    <script>
        // play/pause video
        // let video = document.querySelector('.video-wrapper video');
        // document.getElementById('play-btn').addEventListener('click', () => {
        //     if (video.paused) {
        //         video.play();
        //     } else {
        //         video.pause();
        //     }
        // });

        
    </script>

    <script src="/ganjamah/visiteur/includes/modal/js/jquery.min.js"></script>
    <script src="/ganjamah/visiteur/includes/modal/js/popper.js"></script>
    <script src="/ganjamah/visiteur/includes/modal/js/bootstrap.min.js"></script>
    <script src="/ganjamah/visiteur/includes/modal/js/main.js"></script>
    <script src="/ganjamah/visiteur/includes/js/index.js"></script>
    <script>
        $(document).ready(function(){
            $("#input_1, #input_11").on("input", function(){
                // Calculer le produit des valeurs de input1 et input2
                var val1 = parseFloat($("#input_1").val()) || 0;
                var val2 = parseFloat($("#input_11").val()) || 0;
                var result = val1 * val2;
                
                // Mettre à jour la valeur de inputResult avec le produit
                $("#input_2").val(result);
            });
        });
    </script>
    <script>
      $('.modal').on('hidden.bs.modal', function() {
        $(this).find('form')[0].reset();
      });
    </script>
</body>

</html>