<?php include_once('../../includes/config.php'); ?>

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
        <link rel="stylesheet" href="/ganjamah/visiteur/css/style.css">
        <link rel="stylesheet" href="/ganjamah/visiteur/css/responsive.css">
        <link rel="stylesheet" href="/ganjamah/assets/css/metro-all.min.css">
    </head>
    <body>
        <!-- Header -->
            <?php include_once("../includes/header.php");?>
        <!-- /Header -->

        <!-- header -->
        <header class = "flex header-sm">
            <div class = "container">
                <div class = "header-title">
                    <h1>Zone touristique</h1>
                    <p>La liste des zones touristiques présent à Majunga</p>
                </div>
            </div>
        </header>
        <!-- header -->

        <!-- popular places section -->
        <section id = "popular" class = "py-4">
            <div class = "title-wrap">
                <span class = "sm-title">GANJAMAH</span>
                <h2 class = "lg-title">Les plus populaires des zones visiteur</h2>
            </div>

            <div class = "popular-row">

                <?php

                    $sql = "SELECT * from zone_visiteur";

                    $query = $dbh->prepare($sql);
                    $query->execute();

                    while ($row = $query->fetch(PDO::FETCH_ASSOC))
                    {	
                                    
                ?>

                <div class = "popular-item shadow">
                    <img src = "/ganjamah/assets/img/zone visiteur/<?php echo $row['IMAGE_ZONE']; ?>" alt = "">
                    <div>
                        <span class="titre-1"><?php echo $row['NOM_ZONE']; ?></span><br>
                        <span class="titre-2 text-muted"><?php echo $row['LOCALISATION_ZONE']; ?></span>
                        <p class="">
                            <input data-role="rating" data-value="<?php echo $row['NOTE_ZONE']; ?>">
                        </p>
                        <!-- <p class = "text"><php echo $row['DESCRIPTION_ZONE']; ?></p> -->
                    </div>
                </div>

                <?php
                    }
                ?>

            </div>
        </section>
        <!-- end of popular places section -->
        

        <!-- footer -->
            <?php include_once("../includes/footer.php");?>
        <!-- end of footer -->

        <!-- js -->
        <script src = "js/script.js"></script>
        <script src="/ganjamah/assets/js/metro.min.js"></script>
    </body>
</html>