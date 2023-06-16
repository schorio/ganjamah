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
                    <h1>Gallery</h1>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus rerum maxime enim odit illum in molestias beatae doloremque, ratione optio.</p> -->
                </div>
            </div>
        </header>
        <!-- header -->

        <!-- gallery section -->
        <div id = "gallery" class = "py-4">
            <div class = "container">
                <div class = "gallery-row">

                    <?php

                        $sql = "SELECT * from galerie";

                        $query = $dbh->prepare($sql);
                        $query->execute();

                        while ($row = $query->fetch(PDO::FETCH_ASSOC))
                        {	
                                    
                    ?>

                    <div class = "gallery-item shadow">
                        <img src = "/ganjamah/assets/img/galerie/<?php echo $row['IMAGE_GALERIE']; ?>" alt = "gallery img">
                        <span class = "zoom-icon">
                            <i class = "fas fa-search-plus"></i>
                        </span>
                    </div>

                    <?php
                        }
                    ?>

                </div>
            </div>
        </div>
        <!-- end of gallery section -->

        <!-- img modal -->
        <div id = "img-modal-box">
            <div id = "img-modal">
                <button type = "button" id = "modal-close-btn" class = "flex">
                    <i class = "fas fa-times"></i>
                </button>
                <button type = "button" id = "prev-btn" class = "flex">
                    <i class = "fas fa-chevron-left"></i>
                </button>
                <button type = "button" id = "next-btn" class = "flex">
                    <i class = "fas fa-chevron-right"></i>
                </button>
                <img src = "">
            </div>
        </div>
        <!-- end of img modal -->
        

        <!-- footer -->
            <?php include_once("includes/footer.php");?>
        <!-- end of footer -->

        <!-- js -->
        <script src = "js/script.js"></script>
        <script>
            // image modal
            const allGalleryItem = document.querySelectorAll('.gallery-item');
            const imgModalDiv = document.getElementById('img-modal-box');
            const modalCloseBtn = document.getElementById('modal-close-btn');
            const nextBtn = document.getElementById('next-btn');
            const prevBtn = document.getElementById('prev-btn');
            let imgIndex = 0;

            allGalleryItem.forEach((galleryItem) => {
                galleryItem.addEventListener('click', () => {
                    imgModalDiv.style.display = "block";
                    let imgSrc = galleryItem.querySelector('img').src;
                    showImageContent(imgSrc);
                })
            });

            function showImageContent(img_src){
                imgModalDiv.querySelector('#img-modal img').src = img_src;
            }

            modalCloseBtn.addEventListener('click', () => {
                imgModalDiv.style.display = "none";
            })


            // next click
            nextBtn.addEventListener('click', () => {
                imgIndex++;
                if (imgIndex >= allGalleryItem.length) {
                    imgIndex = 0;
                }
                let imgSrc = allGalleryItem[imgIndex].querySelector('img').src;
                showImageContent(imgSrc);
            });

            // previous click
            prevBtn.addEventListener('click', () => {
                imgIndex--;
                if (imgIndex < 0) {
                    imgIndex = allGalleryItem.length - 1;
                }
                let imgSrc = allGalleryItem[imgIndex].querySelector('img').src;
                showImageContent(imgSrc);
            });
        </script>
    </body>
</html>