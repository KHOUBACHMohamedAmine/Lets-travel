
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Let's travel web site</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>

<!-- header section starts  -->

<header>

    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="#" class="logo"><i class="fas fa-plane"></i><span> Let's</span> Travel</a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#book">Réserver</a>
        <a href="#packages">packs</a>
        <a href="#services">services</a>
        <a href="#gallery">gallerie</a>
        <a href="#review">commentaires</a>
        <a href="#contact">contacter-nous</a>
    </nav>

    <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>
        <a href="login.php"><i class="fas fa-user" id="login-btn"></i></a>
    </div>

    <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here...">
        <label for="search-bar" class="fas fa-search"></label>
    </form>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>Des chemins plus longs à parcourir</h3>
        <p>Explorer, voyager, découvrir, s’aventurer.</p>
        <a href="#" class="btn">découvrir plus</a>
    </div>

    <div class="controls">
        <span class="vid-btn active" data-src="images/vid-1.mp4"></span>
        <span class="vid-btn" data-src="images/vid-2.mp4"></span>
        <span class="vid-btn" data-src="images/vid-3.mp4"></span>
        <span class="vid-btn" data-src="images/vid-4.mp4"></span>
        <span class="vid-btn" data-src="images/vid-5.mp4"></span>
    </div>

    <div class="video-container">
        <video src="images/vid-1.mp4" id="video-slider" loop autoplay muted></video>
    </div>

</section>

<!-- home section ends -->

<!-- book section starts  -->

<section class="book" id="book">

    <h1 class="heading">
        <span>r</span>
        <span>é</span>
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>e</span>
        <span>r</span>
        <span class="space"></span>
        <span>m</span>
        <span>a</span>
        <span>i</span>
        <span>n</span>
        <span>t</span>
        <span>e</span>
        <span>n</span>
        <span>a</span>
        <span>n</span>
        <span>t</span>

    </h1>

    <div class="row">

        <div class="image">
            <img src="images/book-img.svg" alt="">
        </div>

        <form action="">
            <div class="inputBox">
                <h3>départ</h3>
                <input type="text" placeholder="provenance">
            </div>
            <div class="inputBox">
                <h3>nombre</h3>
                <input type="number" placeholder="nombre de personnes adultes">
            </div>
            <div class="inputBox">
                <h3>arrivée</h3>
                <input type="date">
            </div>
            <div class="inputBox">
                <h3>départ</h3>
                <input type="date">
            </div>
            <input type="submit" class="btn" value="réserver">
        </form>

    </div>

</section>

<!-- book section ends -->

<!-- packages section starts  -->

<section class="packages" id="packages">

    <h1 class="heading">
        <span>p</span>
        <span>a</span>
        <span>c</span>
        <span>k</span>
        <span>s</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/p-1.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> mumbai </h3>
                <p>Bombay ou Mumbai est la plus grande ville d'Inde et la capitale de l'État du Maharashtra. La ville est située sur une île en mer d'Arabie.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span> </div>
                <a href="#" class="btn">réserver maintenant</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-2.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> hawaii </h3>
                <p>Parcourez les îles d'Hawaï à la découverte d'aventures palpitantes, et profitez de la beauté et la culture.</p>

                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span> </div>
                <a href="#" class="btn">réserver maintenant</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-3.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> sydney </h3>
                <p>Profitez de la beauté naturelle de Sydney, des monuments aux plages pittoresques et aux restaurants de classe mondiale</p>

                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span> </div>
                    <a href="#" class="btn">réserver maintenant</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-4.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> paris </h3>
                <p>Une grande ville européenne et un centre mondial de l'art, de la mode, de la gastronomie et de la culture.</p>

                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span> </div>

                <a href="#" class="btn">réserver maintenant</a>

            </div>
        </div>

        <div class="box">
            <img src="images/p-5.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> tokyo </h3>

                <p>associe les styles ultramodernes et traditionnels, grattes-ciel aux néons lumineux et de temples anciens.</p>

                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span> </div>

                <a href="#" class="btn">réserver maintenant</a>

            </div>
        </div>

        <div class="box">
            <img src="images/p-6.jpg" alt="">
            <div class="content">

                <h3> <i class="fas fa-map-marker-alt"></i> Gizeh </h3>
                <p>de célèbres monuments égyptiens, notamment les 3 grandes pyramides,</p>

                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span> </div>
                <a href="#" class="btn">book now</a>
            </div>
        </div>

    </div>

</section>

<!-- packages section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading">
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-hotel"></i>
            <h3>Hôtels Abordables</h3>
            <p>profitez de nos Hôtels 5 étoiles ! reconnus au niveau mondial</p>
        </div>
        <div class="box">
            <i class="fas fa-utensils"></i>
            <h3>Nourriture Et Boissons</h3>
            <p>que de La meilleure bouffe vous attend !</p>
        </div>
        <div class="box">
            <i class="fas fa-bullhorn"></i>
            <h3>guides de sécurité</h3>
            <p>explorer et découvrir le monde en toute sécurité </p>
        </div>
        <div class="box">
            <i class="fas fa-globe-asia"></i>
            <h3>monde entier</h3>
            <p>nos agences et agents sont dans tout les bouts du monde </p>
        </div>
        <div class="box">
            <i class="fas fa-plane"></i>
            <h3>voyage rapide</h3>
            <p>pas de temps gaspillé sur les routs grâce à nos avions privés, yachts et voitures 4*4  </p>
        </div>
        <div class="box">
            <i class="fas fa-hiking"></i>
            <h3>aventures et activités</h3>
            <p>des aventures et activités indénombrables sont à votre disposition</p>

        </div>

    </div>

</section>

<!-- services section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

    <h1 class="heading">
        <span>g</span>
        <span>a</span>
        <span>l</span>
        <span>l</span>
        <span>e</span>
        <span>r</span>
        <span>i</span>
        <span>e</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/g-1.jpg" alt="">
            <div class="content">
                <a href="https://www.google.com/search?q=places+around+the+world+to+visit&sxsrf=AOaemvKmOFWTBBVTIJoqvBKsicLrHrLBhQ:1634472244305&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjm9ZDMs9HzAhXNx4UKHZkbC6AQ_AUoAXoECAEQAw&biw=1280&bih=577&dpr=1.5" class="btn">consulter plus</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-2.jpg" alt="">
            <div class="content">

                <a href="https://www.google.com/search?q=places+around+the+world+to+visit&sxsrf=AOaemvKmOFWTBBVTIJoqvBKsicLrHrLBhQ:1634472244305&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjm9ZDMs9HzAhXNx4UKHZkbC6AQ_AUoAXoECAEQAw&biw=1280&bih=577&dpr=1.5" class="btn">consulter plus</a>

            </div>
        </div>
        <div class="box">
            <img src="images/g-3.jpg" alt="">
            <div class="content">

                <a href="https://www.google.com/search?q=places+around+the+world+to+visit&sxsrf=AOaemvKmOFWTBBVTIJoqvBKsicLrHrLBhQ:1634472244305&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjm9ZDMs9HzAhXNx4UKHZkbC6AQ_AUoAXoECAEQAw&biw=1280&bih=577&dpr=1.5" class="btn">consulter plus</a>

            </div>
        </div>
        <div class="box">
            <img src="images/g-4.jpg" alt="">
            <div class="content">

                <a href="https://www.google.com/search?q=places+around+the+world+to+visit&sxsrf=AOaemvKmOFWTBBVTIJoqvBKsicLrHrLBhQ:1634472244305&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjm9ZDMs9HzAhXNx4UKHZkbC6AQ_AUoAXoECAEQAw&biw=1280&bih=577&dpr=1.5" class="btn">consulter plus</a>

            </div>
        </div>
        <div class="box">
            <img src="images/g-5.jpg" alt="">
            <div class="content">

                <a href="https://www.google.com/search?q=places+around+the+world+to+visit&sxsrf=AOaemvKmOFWTBBVTIJoqvBKsicLrHrLBhQ:1634472244305&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjm9ZDMs9HzAhXNx4UKHZkbC6AQ_AUoAXoECAEQAw&biw=1280&bih=577&dpr=1.5" class="btn">consulter plus</a>

            </div>
        </div>
        <div class="box">
            <img src="images/g-6.jpg" alt="">
            <div class="content">

                <a href="https://www.google.com/search?q=places+around+the+world+to+visit&sxsrf=AOaemvKmOFWTBBVTIJoqvBKsicLrHrLBhQ:1634472244305&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjm9ZDMs9HzAhXNx4UKHZkbC6AQ_AUoAXoECAEQAw&biw=1280&bih=577&dpr=1.5" class="btn">consulter plus</a>

            </div>
        </div>
        <div class="box">
            <img src="images/g-7.jpg" alt="">
            <div class="content">

                <a href="https://www.google.com/search?q=places+around+the+world+to+visit&sxsrf=AOaemvKmOFWTBBVTIJoqvBKsicLrHrLBhQ:1634472244305&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjm9ZDMs9HzAhXNx4UKHZkbC6AQ_AUoAXoECAEQAw&biw=1280&bih=577&dpr=1.5" class="btn">consulter plus</a>

            </div>
        </div>
        <div class="box">
            <img src="images/g-8.jpg" alt="">
            <div class="content">

                <a href="https://www.google.com/search?q=places+around+the+world+to+visit&sxsrf=AOaemvKmOFWTBBVTIJoqvBKsicLrHrLBhQ:1634472244305&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjm9ZDMs9HzAhXNx4UKHZkbC6AQ_AUoAXoECAEQAw&biw=1280&bih=577&dpr=1.5" class="btn">consulter plus</a>

            </div>
        </div>
        <div class="box">
            <img src="images/g-9.jpg" alt="">
            <div class="content">

                <a href="https://www.google.com/search?q=places+around+the+world+to+visit&sxsrf=AOaemvKmOFWTBBVTIJoqvBKsicLrHrLBhQ:1634472244305&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjm9ZDMs9HzAhXNx4UKHZkbC6AQ_AUoAXoECAEQAw&biw=1280&bih=577&dpr=1.5" class="btn">consulter plus</a>

            </div>
        </div>

    </div>

</section>

<!-- gallery section ends -->

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>m</span>
        <span>m</span>
        <span>e</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>i</span>
        <span>r</span>
        <span>e</span>
        <span>s</span>

    </h1>

    <div class="swiper-container review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic1.png" alt="">

                    <h3>Alexandre</h3>
                    <p>Accueil, qualité du suivi, gentillesse de notre conseillère , guides francophones de bon niveau, c'est parfait</p>

                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic2.png" alt="">
                    <h3>John</h3>
                    <p>Je reviens de la Tanzanie et encore  j'en suis encore enchanté,prise en charge et facilitation des déplacements.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic3.png" alt="">
                    <h3>lan Xiong</h3>
                    <p>Comme toujours : parfait ! Elaboration du projet, disponibilité, efficacité. Nos souhaits sont connus et appliqués. </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic4.png" alt="">
                    <h3>Deo</h3>
                    <p>Ce voyage en Égypte a vraiment été un émerveillement du début à la fin.Un très bon choix des hôtels, merci encore.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- review section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
        <span>e</span>
        <span>z</span>
        <span class="space"></span>
        <span>n</span>
        <span>o</span>
        <span>u</span>
        <span>s</span>
    </h1>

    <div class="row">

        <div class="image">
            <img src="images/contact-img.svg" alt="">
        </div>

        <form action="">
            <div class="inputBox">
                <input type="text" placeholder="nom">
                <input type="email" placeholder="email">
            </div>
            <div class="inputBox">
                <input type="number" placeholder="numéro de tel">
                <input type="text" placeholder="sujet">
            </div>
            <textarea placeholder="message" name="" id="" cols="30" rows="10"></textarea>
            <input type="submit" class="btn" value="envoyer">
        </form>

    </div>

</section>

<!-- contact section ends -->

<!-- brand section  -->
<section class="brand-container">

    <h1>nos sponseurs :</h1>
    <div class="swiper-container brand-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="images/1.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/2.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/3.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/5.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/6.jpg" alt=""></div>
        </div>
    </div>

</section>

<!-- footer section  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>à propos</h3>
            <p>Nous sommes une agence de voyage , nos services sont trés diversifiés et disponibles Autour Du Monde entier : Hôtels abordables , Nourriture Et Boissons , guide de sécurité et plus d'aventures qui vous attendent !<br> voyager pour vivre !</p>
        </div>
        <div class="box">
            <h3>nos locations</h3>
            <a href="#">inde</a>
            <a href="#">Etats-Unis</a>

            <a href="#">japan</a>
            <a href="#">france</a>
        </div>
        <div class="box">
            <h3>liens rapides</h3>
            <a href="#">acceuil</a>
            <a href="#">réserver</a>
            <a href="#">packs</a>
            <a href="#">services</a>
            <a href="#">galerie</a>
            <a href="#">commentaires</a>
            <a href="#">contactez nous</a>
        </div>
        <div class="box">
            <h3>suivez nous sur nos réseaux sociaux :</h3>
            <a href="https://www.facebook.com/">facebook</a>
            <a href="https://www.instagram.com/?hl=fr">instagram</a>
            <a href="">twitter</a>
            <a href="#">linkedin</a>
        </div>

    </div>

</section>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="scripts.js"></script>

</body>

</html>

