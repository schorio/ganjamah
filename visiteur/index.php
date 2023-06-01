<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GanjaMah.</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- fonts -->
    <link rel="stylesheet" href="font/fonts.css">
    <!-- normalize css -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- custom css -->
    <link rel="stylesheet" href="css/utility.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <!-- navbar  -->
    <nav class="navbar">
        <div class="container flex">
            <a href="index.html" class="site-brand">
                Ganja<span>Mah.</span>
            </a>

            <button type="button" id="navbar-show-btn" class="flex">
                <i class="fas fa-bars"></i>
            </button>
            <div id="navbar-collapse">
                <button type="button" id="navbar-close-btn" class="flex">
                    <i class="fas fa-times"></i>
                </button>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a href="gallery.html" class="nav-link">Galerie</a>
                    </li>
                    <li class="nav-item">
                        <a href="blog.html" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.html" class="nav-link">a propos</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.html" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end of navbar  -->

    <!-- header -->
    <header class="flex">
        <div class="container">
            <div class="header-title">
                <h1>Explorer la ville de Majunga</h1>
                <p>Dépenser-vous dans un décor magique et laisser vous aller à vos envies les plus folles, Majunga y
                    répondra à tous les coups.</p>
            </div>
            <!-- <div class = "header-form">
                    <h2>Choose your Travel location:</h2>
                    <form class = "flex">
                        <input type = "text" class = "form-control" placeholder="Destination name">
                        <input type="date" class = "form-control" placeholder="Date">
                        <input type="number" class = "form-control" placeholder="Price ($)">
                        <input type="submit" class = "btn" value = "Search">
                    </form>
                </div> -->
        </div>
    </header>
    <!-- header -->

    <!-- featured section -->
    <section id="featured" class="py-4">
        <div class="container">
            <div class="title-wrap">
                <span class="sm-title">Decouvrer quelques endroits avant votre depart</span>
                <h2 class="lg-title">Quelques emplacements</h2>
            </div>

            <div class="featured-row">
                <div class="featured-item my-2 shadow">
                    <img src="images/featured-reo-de-janeiro-brazil.jpg" alt="featured place">
                    <div class="featured-item-content">
                        <span>
                            <i class="fas fa-map-marker-alt"></i>
                            Reo De Janeiro, Brazil
                        </span>
                        <div>
                            <p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed
                                dignissimos libero soluta illum, harum amet excepturi sit?</p>
                        </div>
                    </div>
                </div>

                <div class="featured-item my-2 shadow">
                    <img src="images/featured-north-bondi-australia.jpg" alt="featured place">
                    <div class="featured-item-content">
                        <span>
                            <i class="fas fa-map-marker-alt"></i>
                            North Bondi, Australia
                        </span>
                        <div>
                            <p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed
                                dignissimos libero soluta illum, harum amet excepturi sit?</p>
                        </div>
                    </div>
                </div>

                <div class="featured-item my-2 shadow">
                    <img src="images/featured-berlin-germany.jpg" alt="featured place">
                    <div class="featured-item-content">
                        <span>
                            <i class="fas fa-map-marker-alt"></i>
                            Berlin, Germany
                        </span>
                        <div>
                            <p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed
                                dignissimos libero soluta illum, harum amet excepturi sit?</p>
                        </div>
                    </div>
                </div>

                <div class="featured-item my-2 shadow">
                    <img src="images/featured-khwaeng-wat-arun-thailand.jpg" alt="featured place">
                    <div class="featured-item-content">
                        <span>
                            <i class="fas fa-map-marker-alt"></i>
                            Khwaeng wat arun, thailand
                        </span>
                        <div>
                            <p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed
                                dignissimos libero soluta illum, harum amet excepturi sit?</p>
                        </div>
                    </div>
                </div>

                <div class="featured-item my-2 shadow">
                    <img src="images/featured-rome-italy.jpg" alt="featured place">
                    <div class="featured-item-content">
                        <span>
                            <i class="fas fa-map-marker-alt"></i>
                            Rome, Italy
                        </span>
                        <div>
                            <p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed
                                dignissimos libero soluta illum, harum amet excepturi sit?</p>
                        </div>
                    </div>
                </div>

                <div class="featured-item my-2 shadow">
                    <img src="images/featured-fuvahmulah-maldives.jpg" alt="featured place">
                    <div class="featured-item-content">
                        <span>
                            <i class="fas fa-map-marker-alt"></i>
                            fuvahmulah, maldives
                        </span>
                        <div>
                            <p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed
                                dignissimos libero soluta illum, harum amet excepturi sit?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of featured section -->

    <!-- services section -->
    <section id="services" class="py-4">
        <div class="container">
            <div class="title-wrap">
                <span class="sm-title">en vous aidant à decouvrir la ville</span>
                <h2 class="lg-title">decouvrer</h2>
            </div>

            <div class="services-row">
                <div class="services-item">
                    <span class="services-icon">
                        <i class="fas fa-hotel"></i>
                    </span>
                    <h3>Les hotels</h3>
                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem quo, totam repellat
                        velit, dignissimos sequi error a minima architecto fugit nisi dolorum repellendus?</p>
                    <a href="#" class="btn">Read more</a>
                </div>

                <div class="services-item">
                    <span class="services-icon">
                        <i class="fas fa-map-marked-alt"></i>
                    </span>
                    <h3>Les restaurants</h3>
                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem quo, totam repellat
                        velit, dignissimos sequi error a minima architecto fugit nisi dolorum repellendus?</p>
                    <a href="#" class="btn">Read more</a>
                </div>

                <div class="services-item">
                    <span class="services-icon">
                        <i class="fas fa-money-bill"></i>
                    </span>
                    <h3>Les les aires protégées</h3>
                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem quo, totam repellat
                        velit, dignissimos sequi error a minima architecto fugit nisi dolorum repellendus?</p>
                    <a href="#" class="btn">Read more</a>
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
                        <img src="images/test-2.jpg" alt="testimonial"> -->
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
            <video loop>
                <source src="videos/video-section.mp4" type="video/mp4">
            </video>
            <button type="button" id="play-btn">
                <i class="fas fa-play"></i>
            </button>
        </div>
    </section>
    <!-- end of video section -->

    <!-- footer -->
    <footer class="py-4">
        <div class="container footer-row">
            <div class="footer-item">
                <a href="index.html" class="site-brand">
                    Ganja<span>Mah.</span>
                </a>
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet voluptates maiores nam
                    vitae iusto. Placeat rem sint voluptas natus exercitationem autem quod neque, odit laudantium
                    reiciendis ipsa suscipit veritatis voluptate.</p>
            </div>

            <div class="footer-item">
                <h2>Follow us on: </h2>
                <ul class="social-links">
                    <li>
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-pinterest"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-google-plus"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="footer-item">
                <h2>Popular Places:</h2>
                <ul>
                    <li><a href="#">Thailand</a></li>
                    <li><a href="#">Australia</a></li>
                    <li><a href="#">Maldives</a></li>
                    <li><a href="#">Switzerland</a></li>
                    <li><a href="#">Germany</a></li>
                </ul>
            </div>

            <div class="subscribe-form footer-item">
                <h2>Subscribe for Newsletter!</h2>
                <form class="flex">
                    <input type="email" placeholder="Enter Email" class="form-control">
                    <input type="submit" class="btn" value="Subscribe">
                </form>
            </div>
        </div>
    </footer>
    <!-- end of footer -->

    <!-- js -->
    <script src="js/script.js"></script>
    <script>
        // play/pause video
        let video = document.querySelector('.video-wrapper video');
        document.getElementById('play-btn').addEventListener('click', () => {
            if (video.paused) {
                video.play();
            } else {
                video.pause();
            }
        });
    </script>
</body>

</html>