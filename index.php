<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;1,100&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="public/css/estilo.css">
    <link rel="stylesheet" type="text/css" href="public/css/normalize.css">
    <link rel="icon" href="logos/logo.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="loops_cl,Loops,sello discografico,productora de eventos,musica electrónica,tech house,techno,podcast, dj set">
    <meta name="description" content="Loops nace de la necesidad de impulsar la escena electrónica chilena en cuanto a la producción audiovisual que respalde y complemente a los Artistas. La productora concentra sus esfuerzos en la creación de contenido audiovisual, la producción de eventos electrónicos y la transmisión de estos mismos">
    <meta name="author" content="Camilo Jimenez">
    <meta name="copyright" content="Loops Chile.">
    <meta name="robots" content="index">
    <script src="https://kit.fontawesome.com/64882c21a1.js" crossorigin="anonymous"></script>
    <title>LOOPS</title>
</head>

<body class="bg-base">

    <div id="main-container">
        <!--MENU-->
        <header>
            <nav>
                <div class="mobile">
                    <div class="header">
                        <button id="bmenu">
                            <span class="material-symbols-outlined">&#Xe5d2;</span>
                        </button>
                        <a href="#"><img src="logos/LOGO-inicio.png" alt=""></a>
                        <div class="menu-mobile-der">
                            <a href="#"> <span class="material-symbols-outlined">&#Xeb88;</span></a>
                            <a href="#"> <span class="material-symbols-outlined">&#Xe7fd;</span></a>
                        </div>
                    </div>
                    <div class="links">
                        <a href="index.html">Inicio</a>
                        <a href="public/view/quienes_somos.html">Quienes Somos</a>
                        <a href="podcast.html">Podcast</a>
                        <a href="sello_discografico.html">Sello discográfico</a>
                        <a href="eventos.html">Eventos</a>
                        <a href="shop.html">Shop</a>
                        <a href="contactanos.html">Contactanos</a>
                        <!-- <a href="Blog.html">Blog</a> -->
                    </div>
                </div>
                <div class="logo-menu">
                    <a href="index.html"><img src="logos/LOGO-inicio.png" alt=""></a>
                </div>
                <ul>
                    <li><a href="public/view/quienes_somos.html" class="link">Quienes Somos</a></li>
                    <li><a href="podcast.html" class="link">Podcast</a></li>
                    <li><a href="sello_discografico.html" class="link link-hide">Sello discográfico</a></li>
                    <li><a href="public/view/events/event.php" class="link link-hide">Eventos</a></li>
                    <!-- <li><a href="shop.html" class="link link-hide">Shop</a></li> -->
                    <li><a href="contactanos.html" class="link link-hide">Contactanos</a></li>
                    <!-- <li><a href="Blog.html" class="link link-hide">Blog</a></li> -->
                    <li class="more">
                        <a href="#" class="link" id="bmore">Mas</a>
                        <div class="menu">
                            <a href="sello_discografico.html">Sello discográfico</a>
                            <a href="eventos.html">Eventos</a>
                            <a href="shop.html">Shop</a>
                            <a href="contactanos.html">Contactanos</a>
                            <a href="Blog.html">Blog</a>
                        </div>
                    </li>
                </ul>
                <ul>
                    <!-- <li><a href="#" class="link">Search</a></li> -->
                    <li><a href="#" class="link">Cart</a></li>
                    <li><a href="#" class="link" data-bs-toggle="modal" data-bs-target="#ModalRegister">Sign In</a></li>
                </ul>

            </nav>
        </header>
        <!--BG-VIDEO-->
        <section id="bg">
            <div class="bg-carousel bg-carousel-static opacity-40">
                <div class="gradient"></div>
                <video class="video-bg" autoplay muted loop>
                    <source src="videos/videoIntro.mp4" type="video/webm">
                </video>
            </div>
        </section>
        <!--BANNER-->
        <section id="banner">
            <h2 id="tittle-banner">Proximo Evento</h2>
            <div class="card text-bg-dark">
                <img src="festival_logo.png" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <!-- <h5 class="card-title">Card title</h5> -->
                    <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                    <!-- <p class="card-text"><small>Last updated 3 mins ago</small></p> -->
                </div>
            </div>
            <br>
            <p>
                <a href="#" class="banner-button">
                    Comprar Tickets <span class="material-symbols-outlined">&#Xe5cc;</span>
                </a>
            </p>
            <p>Se parte de nuestra proxima experiencia</p>
            <p>
                <a href="#" class="banner-sign-in" data-bs-toggle="modal" data-bs-target="#ModalLogin">Iniciar
                    sesión<span class="material-symbols-outlined">&#Xe5cc;</span></a>
            </p>
        </section>
        <!--QUIENES-SOMOS-->
        <section>
            <div class="quienes-somos">
                <h2>Impulsamos artistas a que desarollen su potencial</h2>
                <!-- <p>
                        <i>LOOPS nace de la necesidad de impulsar la escena electrónica en cuanto a la 
                        producción audiovisual que respalde y complemente a los Artistas. La productora concentra 
                        sus esfuerzos en la creación de contenido audiovisual, la producción de eventos electrónicos 
                        y la transmisión de estos mismos</i>
                    </p> -->
                <a href="public/view/quienes_somos.html" class="about-us-button">
                    Saber mas<span class="material-symbols-outlined">&#Xe5cc;</span>
                </a>
            </div>
        </section>
        <!--PODCAST-->
        <section class="podcast-carousel">
            <div class="tittle-podcast">
                <h2>
                    <a href="podcast.html">PODCAST</a>
                </h2>
            </div>
            <div class="navigation">
                <div class="content navigation-container">
                    <a class="nav-item active">
                        <div class="nav-item-tittle">RICARDO MOLINARI</div>
                    </a>
                    <a class="nav-item">
                        <div class="nav-item-tittle">FUYA</div>
                    </a>
                    <a class="nav-item">
                        <div class="nav-item-tittle">MARY-B</div>
                    </a>
                    <a class="nav-item">
                        <div class="nav-item-tittle">RANDOM</div>
                    </a>
                    <a class="nav-item">
                        <div class="nav-item-tittle">ANTHONY HURT</div>
                    </a>
                    <a class="nav-item">
                        <div class="nav-item-tittle">REPARRA</div>
                    </a>
                    <a class="nav-item">
                        <div class="nav-item-tittle">GERMAN CASE</div>
                    </a>
                    <a class="nav-item">
                        <div class="nav-item-tittle">ATARAXIA</div>
                    </a>
                    <a class="nav-item">
                        <div class="nav-item-tittle">BEATSHOT</div>
                    </a>
                    <a class="nav-item">
                        <div class="nav-item-tittle">MATIAS SAURI</div>
                    </a>
                    <a class="nav-item">
                        <div class="nav-item-tittle">JOTI</div>
                    </a>
                </div>
            </div>
            <div class="prev-button">
                <span class="material-symbols-outlined  slider-arrow" id="prev">
                    arrow_back_ios
                </span>
            </div>
            <div class="next-button">
                <span class="material-symbols-outlined slider-arrow" id="next">
                    arrow_forward_ios
                </span>
            </div>
            <div class="podcast-container">
                <div class="podcast-item podcast-item-release active" data-id="1">
                    <div class="podcast-item-background">
                        <img src="portadas podcast/portada episodio 11.png" alt="">
                    </div>
                    <div class="podcast-info-container">
                        <div class="cover-image">
                            <img src="portadas podcast/portada episodio 11.png" alt="">
                        </div>
                        <div class="podcast-tittle-action">
                            <h2 class="h-xlarge">
                                <a class="nav-item-tittle" href="podcast.html/ricardo_molinari">RICARDO MOLINARI</a>
                            </h2>
                            <h3 class="h-large">
                                <a class="nav-item-subtittle" href="podcast.html/ricardo_molinari">EPISODIO 11</a>
                            </h3>
                            <div class="buttoms-container">
                                <a class="btn" href="#">ENTREVISTA</a>
                                <a class="btn-2" href="#">DJ SET</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="podcast-item podcast-item-release slider-body" data-id="2">
                    <div class="podcast-item-background">
                        <img src="portadas podcast/portada episodio 10.png" alt="">
                    </div>
                    <div class="podcast-info-container">
                        <div class="cover-image">
                            <img src="portadas podcast/portada episodio 10.png" alt="">
                        </div>
                        <div class="podcast-tittle-action">
                            <h2 class="h-xlarge">
                                <a class="nav-item-tittle" href="podcast.html/fuya">FUYA</a>
                            </h2>
                            <h3 class="h-large">
                                <a class="nav-item-subtittle" href="podcast.html/fuya">EPISODIO 10</a>
                            </h3>
                            <div class="buttoms-container">
                                <a class="btn" href="#">ENTREVISTA</a>
                                <a class="btn-2" href="#">DJ SET</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="podcast-item podcast-item-release slider-body" data-id="3">
                    <div class="podcast-item-background">
                        <img src="portadas podcast/portada episodio 9.png" alt="">
                    </div>
                    <div class="podcast-info-container">
                        <div class="cover-image">
                            <img src="portadas podcast/portada episodio 9.png" alt="">
                        </div class="podcast-tittle-action">
                        <div class="podcast-tittle-action">
                            <h2 class="h-xlarge">
                                <a class="nav-item-tittle" href="podcast.html/mary-b">Mary-B</a>
                            </h2>
                            <h3 class="h-large">
                                <a class="nav-item-subtittle" href="podcast.html/mary-b">EPISODIO 9</a>
                            </h3>
                            <div class="buttoms-container">
                                <a class="btn" href="#">ENTREVISTA</a>
                                <a class="btn-2" href="#">DJ SET</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="podcast-item podcast-item-release slider-body" data-id="4">
                    <div class="podcast-item-background">
                        <img src="portadas podcast/portada episodio 8.png" alt="">
                    </div>
                    <div class="podcast-info-container">
                        <div class="cover-image">
                            <img src="portadas podcast/portada episodio 8.png" alt="">
                        </div>
                        <div class="podcast-tittle-action">
                            <h2 class="h-xlarge">
                                <a class="nav-item-tittle" href="podcast.html/random">RANDOM</a>
                            </h2>
                            <h3 class="h-large">
                                <a class="nav-item-subtittle" href="podcast.html/random">EPISODIO 8</a>
                            </h3>
                            <div class="buttoms-container">
                                <a class="btn" href="#">ENTREVISTA</a>
                                <a class="btn-2" href="#">LIVE SET</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="podcast-item podcast-item-release slider-body" data-id="5">
                    <div class="podcast-item-background">
                        <img src="portadas podcast/portada episodio 7.png" alt="">
                    </div>
                    <div class="podcast-info-container">
                        <div class="cover-image">
                            <img src="portadas podcast/portada episodio 7.png" alt="">
                        </div>
                        <div class="podcast-tittle-action">
                            <h2 class="h-xlarge">
                                <a class="nav-item-tittle" href="podcast.html/anthony_hurt">ANTHONY HURT</a>
                            </h2>
                            <h3 class="h-large">
                                <a class="nav-item-subtittle" href="podcast.html/anthony_hurt">EPISODIO 7</a>
                            </h3>
                            <div class="buttoms-container">
                                <a class="btn" href="#">ENTREVISTA</a>
                                <a class="btn-2" href="#">DJ SET</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="podcast-item podcast-item-release slider-body" data-id="6">
                    <div class="podcast-item-background">
                        <img src="portadas podcast/portada episodio 6.png" alt="">
                    </div>
                    <div class="podcast-info-container">
                        <div class="cover-image">
                            <img src="portadas podcast/portada episodio 6.png" alt="">
                        </div>
                        <div class="podcast-tittle-action">
                            <h2 class="h-xlarge">
                                <a class="nav-item-tittle" href="podcast.html/reparra">REPARRA</a>
                            </h2>
                            <h3 class="h-large">
                                <a class="nav-item-subtittle" href="podcast.html/reparra">EPISODIO 6</a>
                            </h3>
                            <div class="buttoms-container">
                                <a class="btn" href="#">ENTREVISTA</a>
                                <a class="btn-2" href="#">DJ SET</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="podcast-item podcast-item-release slider-body" data-id="7">
                    <div class="podcast-item-background">
                        <img src="portadas podcast/portada episodio 5.png" alt="">
                    </div>
                    <div class="podcast-info-container">
                        <div class="cover-image">
                            <img src="portadas podcast/portada episodio 5.png" alt="">
                        </div>
                        <div class="podcast-tittle-action">
                            <h2 class="h-xlarge">
                                <a class="nav-item-tittle" href="podcast.html/german_case">GERMAN CASE</a>
                            </h2>
                            <h3 class="h-large">
                                <a class="nav-item-subtittle" href="podcast.html/german_case">EPISODIO 5</a>
                            </h3>
                            <div class="buttoms-container">
                                <a class="btn" href="#">ENTREVISTA</a>
                                <a class="btn-2" href="#">DJ SET</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="podcast-item podcast-item-release slider-body" data-id="8">
                    <div class="podcast-item-background">
                        <img src="portadas podcast/portada episodio 4.png" alt="">
                    </div>
                    <div class="podcast-info-container">
                        <div class="cover-image">
                            <img src="portadas podcast/portada episodio 4.png" alt="">
                        </div>
                        <div class="podcast-tittle-action">
                            <h2 class="h-xlarge">
                                <a class="nav-item-tittle" href="podcast.html/german_case">ATARAXIA</a>
                            </h2>
                            <h3 class="h-large">
                                <a class="nav-item-subtittle" href="podcast.html/german_case">EPISODIO 4</a>
                            </h3>
                            <div class="buttoms-container">
                                <a class="btn" href="#">ENTREVISTA</a>
                                <a class="btn-2" href="#">DJ SET</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="podcast-item podcast-item-release slider-body" data-id="9">
                    <div class="podcast-item-background">
                        <img src="portadas podcast/portada episodio 3.png" alt="">
                    </div>
                    <div class="podcast-info-container">
                        <div class="cover-image">
                            <img src="portadas podcast/portada episodio 3.png" alt="">
                        </div>
                        <div class="podcast-tittle-action">
                            <h2 class="h-xlarge">
                                <a class="nav-item-tittle" href="podcast.html/german_case">BEATSHOT</a>
                            </h2>
                            <h3 class="h-large">
                                <a class="nav-item-subtittle" href="podcast.html/german_case">EPISODIO 3</a>
                            </h3>
                            <div class="buttoms-container">
                                <a class="btn" href="#">ENTREVISTA</a>
                                <a class="btn-2" href="#">DJ SET</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="podcast-item podcast-item-release slider-body" data-id="10">
                    <div class="podcast-item-background">
                        <img src="portadas podcast/portada episodio 2.png" alt="">
                    </div>
                    <div class="podcast-info-container">
                        <div class="cover-image">
                            <img src="portadas podcast/portada episodio 2.png" alt="">
                        </div>
                        <div class="podcast-tittle-action">
                            <h2 class="h-xlarge">
                                <a class="nav-item-tittle" href="podcast.html/german_case">MATIAS SAURI</a>
                            </h2>
                            <h3 class="h-large">
                                <a class="nav-item-subtittle" href="podcast.html/german_case">EPISODIO 2</a>
                            </h3>
                            <div class="buttoms-container">
                                <a class="btn" href="#">ENTREVISTA</a>
                                <a class="btn-2" href="#">DJ SET</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="podcast-item podcast-item-release slider-body" data-id="11">
                    <div class="podcast-item-background">
                        <img src="portadas podcast/portada episodio 1.png" alt="">
                    </div>
                    <div class="podcast-info-container">
                        <div class="cover-image">
                            <img src="portadas podcast/portada episodio 1.png" alt="">
                        </div>
                        <div class="podcast-tittle-action">
                            <h2 class="h-xlarge">
                                <a class="nav-item-tittle" href="podcast.html/german_case">JOTI</a>
                            </h2>
                            <h3 class="h-large">
                                <a class="nav-item-subtittle" href="podcast.html/german_case">EPISODIO 1</a>
                            </h3>
                            <div class="buttoms-container">
                                <a class="btn" href="#">ENTREVISTA</a>
                                <a class="btn-2" href="#">DJ SET</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    </section>
    <!--SELLO-DISCOGRAFICO-->
    <section>
    </section>
    <!--CONTACTANOS-->
    <section id="contactanos" class="contact">
        <div class="contact-container">
            <h3>CONTACTANOS</h3>
            <div class="colums">
                <div class="location">
                    <h3>Ubicacion</h3>
                    <!-- <p>Ñuble 263, Santiago centro, Chile</p> -->
                </div>
                <div class="social">
                    <h3>Siguenos en nuestras plataformas</h3>
                    <a href="https://www.facebook.com/profile.php?id=100087338832805">
                        <svg fill="#ffffff" width="48px" height="48px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2.03998C6.5 2.03998 2 6.52998 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.84998C10.44 7.33998 11.93 5.95998 14.22 5.95998C15.31 5.95998 16.45 6.14998 16.45 6.14998V8.61998H15.19C13.95 8.61998 13.56 9.38998 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96C15.9164 21.5878 18.0622 20.3855 19.6099 18.57C21.1576 16.7546 22.0054 14.4456 22 12.06C22 6.52998 17.5 2.03998 12 2.03998Z" />
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/loops_cl/">
                        <svg fill="#ffffff" width="48px" height="48px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.445 5h-8.891A6.559 6.559 0 0 0 5 11.554v8.891A6.559 6.559 0 0 0 11.554 27h8.891a6.56 6.56 0 0 0 6.554-6.555v-8.891A6.557 6.557 0 0 0 20.445 5zm4.342 15.445a4.343 4.343 0 0 1-4.342 4.342h-8.891a4.341 4.341 0 0 1-4.341-4.342v-8.891a4.34 4.34 0 0 1 4.341-4.341h8.891a4.342 4.342 0 0 1 4.341 4.341l.001 8.891z" />
                            <path d="M16 10.312c-3.138 0-5.688 2.551-5.688 5.688s2.551 5.688 5.688 5.688 5.688-2.551 5.688-5.688-2.55-5.688-5.688-5.688zm0 9.163a3.475 3.475 0 1 1-.001-6.95 3.475 3.475 0 0 1 .001 6.95zM21.7 8.991a1.363 1.363 0 1 1-1.364 1.364c0-.752.51-1.364 1.364-1.364z" />
                        </svg>
                    </a>
                    <a href="https://www.tiktok.com/@loops_cl/">
                        <svg fill="#ffffff" width="48px" height="48px" viewBox="0 0 512 512" id="icons" xmlns="http://www.w3.org/2000/svg">
                            <path d="M412.19,118.66a109.27,109.27,0,0,1-9.45-5.5,132.87,132.87,0,0,1-24.27-20.62c-18.1-20.71-24.86-41.72-27.35-56.43h.1C349.14,23.9,350,16,350.13,16H267.69V334.78c0,4.28,0,8.51-.18,12.69,0,.52-.05,1-.08,1.56,0,.23,0,.47-.05.71,0,.06,0,.12,0,.18a70,70,0,0,1-35.22,55.56,68.8,68.8,0,0,1-34.11,9c-38.41,0-69.54-31.32-69.54-70s31.13-70,69.54-70a68.9,68.9,0,0,1,21.41,3.39l.1-83.94a153.14,153.14,0,0,0-118,34.52,161.79,161.79,0,0,0-35.3,43.53c-3.48,6-16.61,30.11-18.2,69.24-1,22.21,5.67,45.22,8.85,54.73v.2c2,5.6,9.75,24.71,22.38,40.82A167.53,167.53,0,0,0,115,470.66v-.2l.2.2C155.11,497.78,199.36,496,199.36,496c7.66-.31,33.32,0,62.46-13.81,32.32-15.31,50.72-38.12,50.72-38.12a158.46,158.46,0,0,0,27.64-45.93c7.46-19.61,9.95-43.13,9.95-52.53V176.49c1,.6,14.32,9.41,14.32,9.41s19.19,12.3,49.13,20.31c21.48,5.7,50.42,6.9,50.42,6.9V131.27C453.86,132.37,433.27,129.17,412.19,118.66Z" />
                        </svg>
                    </a>
                    <a href="https://twitter.com/loops_cl">
                        <svg fill="#ffffff" width="48px" height="48px" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1643.825 518.606c-14.457 11.294-22.588 28.8-21.685 47.096.565 16.377 1.017 32.753 1.017 49.355 0 530.372-373.497 1079.153-998.513 1079.153-122.203 0-242.598-24.282-355.765-71.153 136.433-22.588 266.428-82.447 374.965-173.816 17.957-15.247 24.62-39.868 16.828-62.005-7.793-22.136-28.574-37.157-52.179-37.722-105.374-2.146-200.81-62.682-256.376-157.214 38.06-1.13 79.059-7.116 109.779-16.038 24.847-7.228 41.562-30.381 40.771-56.132-.903-25.863-19.2-47.774-44.499-53.308-112.15-24.282-194.71-116.781-222.607-243.84 32.076 6.438 62.344 8.47 79.06 8.922 24.62 2.711 47.322-14.456 55.453-38.06 8.02-23.492-.226-49.582-20.442-64.151-78.042-56.245-161.619-161.167-161.619-286.42 0-30.832 3.84-61.326 11.181-90.804 195.163 217.186 461.478 348.31 743.83 363.558 18.975 1.016 34.674-6.438 46.08-19.765 11.408-13.327 15.926-31.398 12.312-48.565-5.648-25.637-8.471-52.178-8.471-79.058 0-188.951 141.063-342.664 314.428-342.664 87.19 0 168.283 37.835 228.141 106.73 13.327 15.36 34.334 22.475 54.212 18.183 28.687-6.099 56.922-13.779 84.706-23.153-16.49 16.715-34.673 31.624-54.438 44.386-22.25 14.343-31.51 42.014-22.475 66.861s34.56 39.868 60.31 36.593c14.683-1.92 29.252-4.179 43.709-7.002-18.297 17.731-37.497 34.447-57.713 50.033m261.685-199.68c-16.716-18.636-43.596-23.83-66.41-13.214-4.066 1.92-8.132 3.84-12.31 5.76 17.054-30.269 30.946-62.683 40.997-96.678 6.777-22.588-1.242-46.984-20.103-61.214-18.974-14.118-44.5-15.247-64.49-2.485-58.277 37.384-120.96 64.828-186.466 82.108-78.268-76.8-181.948-120.17-289.355-120.17-235.595 0-427.37 204.424-427.37 455.606 0 9.487.227 18.974.791 28.348C626 564.008 390.517 424.977 226.64 208.469c-11.52-15.247-30.155-23.04-49.242-22.136-19.2 1.468-36.367 12.536-45.516 29.477-37.157 68.894-56.809 147.614-56.809 227.464 0 86.626 28.687 165.007 70.25 230.739-19.426 9.035-32.98 28.574-32.98 51.388v5.195c0 139.821 49.808 261.91 133.497 344.47-9.035 2.937-17.28 8.246-23.943 15.36a56.566 56.566 0 0 0-12.537 54.326c40.772 136.997 137.788 242.145 258.41 289.807-122.88 69.571-268.688 97.129-404.443 80.753-26.541-3.953-50.485 11.858-59.633 36.028-9.261 24.282-.677 51.84 20.781 66.522 179.69 123.784 387.276 189.29 600.17 189.29 695.717 0 1111.454-606.156 1111.454-1192.095 0-8.583-.113-17.054-.339-25.524 68.555-57.149 127.51-125.365 175.737-203.069 13.214-21.345 10.842-48.903-5.986-67.538" fill-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="https://www.youtube.com/channel/UCKJUaU2psYqcUvpCGWrvQGQ">
                        <svg fill="white" width="48px" height="48px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <title>youtube</title>
                            <path d="M12.932 20.459v-8.917l7.839 4.459zM30.368 8.735c-0.354-1.301-1.354-2.307-2.625-2.663l-0.027-0.006c-3.193-0.406-6.886-0.638-10.634-0.638-0.381 0-0.761 0.002-1.14 0.007l0.058-0.001c-0.322-0.004-0.701-0.007-1.082-0.007-3.748 0-7.443 0.232-11.070 0.681l0.434-0.044c-1.297 0.363-2.297 1.368-2.644 2.643l-0.006 0.026c-0.4 2.109-0.628 4.536-0.628 7.016 0 0.088 0 0.176 0.001 0.263l-0-0.014c-0 0.074-0.001 0.162-0.001 0.25 0 2.48 0.229 4.906 0.666 7.259l-0.038-0.244c0.354 1.301 1.354 2.307 2.625 2.663l0.027 0.006c3.193 0.406 6.886 0.638 10.634 0.638 0.38 0 0.76-0.002 1.14-0.007l-0.058 0.001c0.322 0.004 0.702 0.007 1.082 0.007 3.749 0 7.443-0.232 11.070-0.681l-0.434 0.044c1.298-0.362 2.298-1.368 2.646-2.643l0.006-0.026c0.399-2.109 0.627-4.536 0.627-7.015 0-0.088-0-0.176-0.001-0.263l0 0.013c0-0.074 0.001-0.162 0.001-0.25 0-2.48-0.229-4.906-0.666-7.259l0.038 0.244z" />
                        </svg>
                    </a>
                    <a href="https://www.twitch.tv/loops_cl">
                        <svg fill="#ffffff" width="48px" height="48px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <title>twitch</title>
                            <path d="M26.711 14.929l-4.284 4.284h-4.285l-3.749 3.749v-3.749h-4.82v-16.067h17.138zM8.502 1.004l-5.356 5.356v19.279h6.427v5.356l5.356-5.356h4.284l9.641-9.64v-14.996zM21.356 6.895h2.142v6.427h-2.142zM15.464 6.895h2.143v6.427h-2.144z" />
                        </svg>
                    </a>
                    <a href="https://open.spotify.com/show/7m9E8bJj9mi6BhHA0kzXYJ?utm_medium=share&utm_source=linktree">
                        <svg fill="#ffffff" width="48px" height="48px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <title>spotify</title>
                            <path d="M24.849 14.35c-3.206-1.616-6.988-2.563-10.991-2.563-2.278 0-4.484 0.306-6.58 0.881l0.174-0.041c-0.123 0.040-0.265 0.063-0.412 0.063-0.76 0-1.377-0.616-1.377-1.377 0-0.613 0.401-1.132 0.954-1.311l0.010-0.003c5.323-1.575 14.096-1.275 19.646 2.026 0.426 0.258 0.706 0.719 0.706 1.245 0 0.259-0.068 0.502-0.186 0.712l0.004-0.007c-0.29 0.345-0.721 0.563-1.204 0.563-0.273 0-0.529-0.070-0.752-0.192l0.008 0.004zM24.699 18.549c-0.201 0.332-0.561 0.55-0.971 0.55-0.225 0-0.434-0.065-0.61-0.178l0.005 0.003c-2.739-1.567-6.021-2.49-9.518-2.49-1.925 0-3.784 0.28-5.539 0.801l0.137-0.035c-0.101 0.032-0.217 0.051-0.337 0.051-0.629 0-1.139-0.51-1.139-1.139 0-0.509 0.333-0.939 0.793-1.086l0.008-0.002c1.804-0.535 3.878-0.843 6.023-0.843 3.989 0 7.73 1.064 10.953 2.925l-0.106-0.056c0.297 0.191 0.491 0.52 0.491 0.894 0 0.227-0.071 0.437-0.192 0.609l0.002-0.003zM22.899 22.673c-0.157 0.272-0.446 0.452-0.777 0.452-0.186 0-0.359-0.057-0.502-0.154l0.003 0.002c-2.393-1.346-5.254-2.139-8.299-2.139-1.746 0-3.432 0.261-5.020 0.745l0.122-0.032c-0.067 0.017-0.145 0.028-0.224 0.028-0.512 0-0.927-0.415-0.927-0.927 0-0.432 0.296-0.795 0.696-0.898l0.006-0.001c1.581-0.47 3.397-0.74 5.276-0.74 3.402 0 6.596 0.886 9.366 2.44l-0.097-0.050c0.302 0.15 0.506 0.456 0.506 0.809 0 0.172-0.048 0.333-0.132 0.469l0.002-0.004zM16 1.004c0 0 0 0-0 0-8.282 0-14.996 6.714-14.996 14.996s6.714 14.996 14.996 14.996c8.282 0 14.996-6.714 14.996-14.996v0c-0.025-8.272-6.724-14.971-14.993-14.996h-0.002z" />
                        </svg>
                    </a>
                    <a href="https://podcasts.apple.com/us/podcast/loops-cl/id1654626058?ign-itscg=30200&ign-itsct=lt_p">
                        <svg fill="#ffffff" width="48px" height="48px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.12 0c-3.937-0.011-7.131 3.183-7.12 7.12v17.76c-0.011 3.937 3.183 7.131 7.12 7.12h17.76c3.937 0.011 7.131-3.183 7.12-7.12v-17.76c0.011-3.937-3.183-7.131-7.12-7.12zM15.817 3.421c3.115 0 5.932 1.204 8.079 3.453 1.631 1.693 2.547 3.489 3.016 5.855 0.161 0.787 0.161 2.932 0.009 3.817-0.5 2.817-2.041 5.339-4.317 7.063-0.812 0.615-2.797 1.683-3.115 1.683-0.12 0-0.129-0.12-0.077-0.615 0.099-0.792 0.192-0.953 0.64-1.141 0.713-0.296 1.932-1.167 2.677-1.911 1.301-1.303 2.229-2.932 2.677-4.719 0.281-1.1 0.244-3.543-0.063-4.672-0.969-3.595-3.907-6.385-7.5-7.136-1.041-0.213-2.943-0.213-4 0-3.636 0.751-6.647 3.683-7.563 7.371-0.245 1.004-0.245 3.448 0 4.448 0.609 2.443 2.188 4.681 4.255 6.015 0.407 0.271 0.896 0.547 1.1 0.631 0.447 0.192 0.547 0.355 0.629 1.14 0.052 0.485 0.041 0.62-0.072 0.62-0.073 0-0.62-0.235-1.199-0.511l-0.052-0.041c-3.297-1.62-5.407-4.364-6.177-8.016-0.187-0.943-0.224-3.187-0.036-4.052 0.479-2.323 1.396-4.135 2.921-5.739 2.199-2.319 5.027-3.543 8.172-3.543zM16 7.172c0.541 0.005 1.068 0.052 1.473 0.14 3.715 0.828 6.344 4.543 5.833 8.229-0.203 1.489-0.713 2.709-1.619 3.844-0.448 0.573-1.537 1.532-1.729 1.532-0.032 0-0.063-0.365-0.063-0.803v-0.808l0.552-0.661c2.093-2.505 1.943-6.005-0.339-8.296-0.885-0.896-1.912-1.423-3.235-1.661-0.853-0.161-1.031-0.161-1.927-0.011-1.364 0.219-2.417 0.744-3.355 1.672-2.291 2.271-2.443 5.791-0.348 8.296l0.552 0.661v0.813c0 0.448-0.037 0.807-0.084 0.807-0.036 0-0.349-0.213-0.683-0.479l-0.047-0.016c-1.109-0.885-2.088-2.453-2.495-3.995-0.244-0.932-0.244-2.697 0.011-3.625 0.672-2.505 2.521-4.448 5.079-5.359 0.547-0.193 1.509-0.297 2.416-0.281zM15.823 11.156c0.417 0 0.828 0.084 1.131 0.24 0.645 0.339 1.183 0.989 1.385 1.677 0.62 2.104-1.609 3.948-3.631 3.005h-0.015c-0.953-0.443-1.464-1.276-1.475-2.36 0-0.979 0.541-1.828 1.484-2.328 0.297-0.156 0.709-0.235 1.125-0.235zM15.812 17.464c1.319-0.005 2.271 0.463 2.625 1.291 0.265 0.62 0.167 2.573-0.292 5.735-0.307 2.208-0.479 2.765-0.905 3.141-0.589 0.52-1.417 0.667-2.209 0.385h-0.004c-0.953-0.344-1.157-0.808-1.553-3.527-0.452-3.161-0.552-5.115-0.285-5.735 0.348-0.823 1.296-1.285 2.624-1.291z" />
                        </svg>
                    </a>
                    <a href="https://music.amazon.es/podcasts/015390db-d7dc-4b6b-8edb-dff54ac1646c/loops_cl">
                        <svg fill="#ffffff" width="48px" height="48px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>amazon</title>
                            <rect width="24" height="24" fill="none" />
                            <path d="M15.93,17.09a.54.54,0,0,1-.63.06,6.55,6.55,0,0,1-1.54-1.79,5.31,5.31,0,0,1-4.42,1.95,3.8,3.8,0,0,1-4-4.17A4.55,4.55,0,0,1,8.19,8.76a18.39,18.39,0,0,1,5-.93V7.5a3.42,3.42,0,0,0-.33-2,1.79,1.79,0,0,0-1.5-.7A2,2,0,0,0,9.25,6.45a.6.6,0,0,1-.47.49l-2.6-.28a.47.47,0,0,1-.4-.56C6.38,3,9.23,2,11.78,2a6.1,6.1,0,0,1,4,1.33C17.11,4.55,17,6.18,17,8v4.17a3.6,3.6,0,0,0,1,2.48c.17.25.21.54,0,.71l-2.06,1.78h0m-2.7-6.53V10c-1.94,0-4,.39-4,2.67,0,1.16.61,1.95,1.63,1.95a2.19,2.19,0,0,0,1.86-1.22,5.32,5.32,0,0,0,.5-2.84m6.93,9A14.29,14.29,0,0,1,12.1,22a14.59,14.59,0,0,1-9.85-3.76c-.2-.18,0-.43.25-.29a19.68,19.68,0,0,0,9.83,2.61A19.69,19.69,0,0,0,19.84,19c.37-.16.66.24.32.51m.91-1c-.28-.36-1.85-.17-2.57-.08-.19,0-.22-.16,0-.3A3.92,3.92,0,0,1,22,17.79a3.86,3.86,0,0,1-1.24,3.32c-.18.16-.35.07-.26-.11C20.76,20.33,21.35,18.86,21.07,18.5Z" />
                        </svg>
                    </a>
                </div>
                <div class="emails">
                    <h3>Correo</h3>
                    <p>loops.producciones8@gmail.com</p>
                </div>
            </div>
        </div>
    </section>
    <footer>
    </footer>

    <!-- modal inicio de sesión -->

    <div class="modal fade" id="ModalLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h1 style="background-color: #332775;" class="modal-title fs-5" id="exampleModalLabel">Iniciar
                            Sesión</h1>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="" id="formLogin">

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                            <label for="floatingInput">Correo Electronico</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                            <label for="floatingPassword">Contraseña</label>
                        </div>

                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Cancelar
                    </button>
                    <button type="button" onclick="login()" class="btn btn-primary">
                        Iniciar Sesión
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal registrarse -->

    <div class="modal fade" id="ModalRegister" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h1 style="background-color: #332775;" class="modal-title fs-5" id="exampleModalLabel">Registro de Usuario</h1>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="" id="formRegister">
                        <!-- <div class="input-group mb-3"> -->
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="tpu" name="tpu" placeholder="" hidden value="2">
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="name" name="name" placeholder="joe farid" required>
                            <label for="floatingInput">Nombres</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="hincapie escarpeta" required>
                            <label for="floatingInput">Apellidos</label>
                        </div>
                        <!-- </div> -->
                        <!-- <div class="input-group mb-3"> -->
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="emailR" name="emailR" placeholder="name@example.com" required>
                            <label for="floatingInput">Correo Electronico</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="passwordR" name="passwordR" placeholder="Password" required>
                            <label for="floatingPassword">Contraseña</label>
                        </div>
                        <!-- </div> -->

                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Cancelar
                    </button>
                    <button type="button" onclick="register()" class="btn btn-primary">
                        Registrarse
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="module" src="public/js/banner-carousel.js"></script>
    <script src="public/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <script>
        // iniciar sesión
        function login() {
            var formData = new FormData($("#formLogin")[0]);
            var email = $('#email').val();
            var password = $('#password').val();

            if (email == "" || password == "") {
                Swal.fire(
                    '',
                    'Debes llenar todos los campos',
                    'error'
                )
            } else {
                $.ajax({
                    url: "controller/userController.php?op=login",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(data) {

                        // alert(data);
                        console.log(data);
                        if (data == 100) {
                            Swal.fire(
                                '',
                                'Debes llenar todos los campos',
                                'error'
                            )
                        } else if (data == 99) {
                            Swal.fire(
                                '',
                                'Usuario o contraseña no existen o son incorrectos',
                                'error'
                            )
                        } else {
                            window.location = "view/events/event.php";
                        }
                    }
                });
            }
        }

        // registrarse
        function register() {
            var formData = new FormData($("#formRegister")[0]);

            var name = $('#name').val();
            var lastname = $('#lastname').val();
            var email = $('#emailR').val();
            var password = $('#passwordR').val();
            var tpu = $('#tpu').val();

            // console.log('name: ' + name + ' lastname: ' + lastname + ' email: ' + email + ' password: ' + password + ' tpu: ' + tpu);

            if (name == "" || lastname == "" || email == "" || password == "" || tpu == "") {
                Swal.fire(
                    '',
                    'Debes llenar todos los campos',
                    'error'
                )
            } else {
                $.ajax({
                    url: "controller/userController.php?op=create_update",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(data) {

                        // alert(data);
                        console.log(data);
                        if (data == 100) {
                            Swal.fire(
                                '',
                                'Error al regiostrar, intenta de nuevo',
                                'error'
                            )
                        } else if (data == 99) {
                            Swal.fire(
                                '',
                                'El usuario con este correo ya esta registrado',
                                'error'
                            )
                        } else {
                            Swal.fire(
                                '',
                                'Registrado exitosamente, ya puedes iniciar sesion',
                                'success'
                            )
                            $('#formRegister')[0].reset();
                            $('#ModalRegister').modal('hide');
                        }
                    }
                });
            }
        }
    </script>
</body>

</html>