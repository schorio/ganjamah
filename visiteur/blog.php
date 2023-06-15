<?php include_once('../includes/config.php'); ?>

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
        <link rel = "stylesheet" href = "font/fonts.css">
        <!-- normalize css -->
        <link rel = "stylesheet" href = "css/normalize.css">
        <!-- custom css -->
        <link rel = "stylesheet" href = "css/utility.css">
        <link rel = "stylesheet" href = "css/style.css">
        <link rel = "stylesheet" href = "css/responsive.css">
    </head>
    <body>
        <!-- Header -->
            <?php include_once("includes/header.php");?>
        <!-- /Header -->

        <!-- header -->
        <header class = "flex header-sm">
            <div class = "container">
                <div class = "header-title">
                    <h1>Blog</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus rerum maxime enim odit illum in molestias beatae doloremque, ratione optio.</p>
                </div>
            </div>
        </header>
        <!-- header -->

        <!-- blog section -->
        <section id = "blog" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
                    <h2 class = "sm-title">read these blog for information</h2>
                    <h3 class = "lg-title">recent blog</h3>
                </div>

                <div class = "blog-row">

                    <?php

                        $sql = "SELECT * from blog";

                        $query = $dbh->prepare($sql);
                        $query->execute();

                        while ($row = $query->fetch(PDO::FETCH_ASSOC))
                        {	
                                    
                    ?>

                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "/ganjamah/assets/img/blog/<?php echo $row['IMAGE_BLOG']; ?>" alt = "blog">
                            <span class = "blog-date"><?php echo $row['DATE_BLOG']; ?></span>
                        </div>
                        <div class = "blog-item-bottom">
                            <span><?php echo $row['DOMAINE_BLOG']; ?> | <?php echo $row['AUTEUR_BLOG']; ?></span>
                            <a href = "#"><?php echo $row['TITRE_BLOG']; ?></a>
                            <p class = "text"><?php echo $row['CONTENUE_BLOG']; ?></p>
                        </div>
                    </div>

                    <?php
                        }
                    ?>

                </div>
            </div>
        </section>
        <!-- end of blog section -->
        

        <!-- footer -->
            <?php include_once("includes/footer.php");?>
        <!-- end of footer -->

        <!-- js -->
        <script src = "js/script.js"></script>
        <script>
            
        </script>
    </body>
</html>