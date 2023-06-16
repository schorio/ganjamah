<?php 
    include_once('../includes/config.php');
    include_once("../includes/function/f_message.php");
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
                    <h1>Contact</h1>
                </div>
            </div>
        </header>
        <!-- header -->

        <!-- contact section -->
        <section id = "contact" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
                    <h2 class = "lg-title">contacter nous</h2>
                </div>

                <div class = "contact-row">
                    <div class = "contact-left">
                        <form method="POST" enctype="multipart/form-data" class="contact-form">
                            <input name="destinateur_message" class="form-control" placeholder="Votre nom" type="text">
                            <input name="email_message" class="form-control" placeholder="Votre email" type="text">
                            <textarea name="contenue_message" rows="5" class="form-control" placeholder="Votre message" style="resize: none;" type="text"></textarea>
                            <button type="submit" name="envoyer_message" class="btn">Envoyer</button>
                        </form>
                    </div>
                    <div class = "contact-right my-2">
                        <div class = "contact-item">
                            <span class = "contact-icon flex">
                                <i class = "fa fa-phone-alt"></i>
                            </span>
                            <div>
                                <span>Phone</span>
                                <p class = "text">+261 34 69 666 69</p>
                            </div>
                        </div>
                        <div class = "contact-item">
                            <span class = "contact-icon flex">
                                <i class = "fa fa-map-marked-alt"></i>
                            </span>
                            <div>
                                <span>Address</span>
                                <p class = "text">401 Majunga, Madagascar</p>
                            </div>
                        </div>
                        <div class = "contact-item">
                            <span class = "contact-icon flex">
                                <i class = "fa fa-envelope"></i>
                            </span>
                            <div>
                                <span>Message</span>
                                <p class = "text">info@ganjamah.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of contact section -->
        

        <!-- footer -->
            <?php include_once("includes/footer.php");?>
        <!-- end of footer -->

        <!-- js -->
        <script src = "js/script.js"></script>
        <script>
            
        </script>
    </body>
</html>