<?php
include "src/includes/site-config.php";
include "src/includes/head.php";
?>

<body class="index">
    <?php include "src/includes/nav.php"; ?>

    <header class="heroshot" style="background-image:url('src/assets/img/home/img-hero-home.png');" aria-label="À la une">
        <div class="container">
            <div class="heroshot__wrapper">
                <h1 class="h1-title center">Moins de gestion, plus de passion.</h1>
                <div class="d-none d-lg-block">
                    <p class="heroshot__sharptext">VOUS ÊTES ?</p>
                    <img src="src/assets/img/down-arrow.svg" alt="Down Arrow" data-aos="fade-down" data-aos-delay="800" data-aos-duration="500">
                </div>
                <article class="heroshot__cards">
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <a href="club-de-sport-loisirs" class="heroshot__item" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500">
                                <img src="src/assets/img/home/img-club-default.jpg" alt="" class="heroshot__img">
                                <h2 class="h2-title">Club de Sport & Loisirs</h2>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="association" class="heroshot__item" data-aos="fade-up" data-aos-delay="400" data-aos-duration="500">
                                <img src="src/assets/img/home/img-institution-default.png" alt="" class="heroshot__img">
                                <h2 class="h2-title">Association</h2>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="coach" class="heroshot__item" data-aos="fade-up" data-aos-delay="600" data-aos-duration="500">
                                <img src="src/assets/img/home/img-coach-default.png" alt="" class="heroshot__img">
                                <h2 class="h2-title">Coach</h2>
                            </a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </header>
    <main class="home" aria-label="Principales informations">
        <div class="container">
            <div class="row justify-content-center justify-content-xl-between">
                <div class="col-lg-10 col-xl-7">
                    <h2 class="sharped-title">Plateforme ouverte à tous</h2>
                    <h3 class="h2-title mb-3 mb-lg-5">Vous êtes un professionnel du sport & loisirs?</h3>
                    <article class="stats">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="stats__item" >
                                    <div class="stats__number" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="500">+ 100</div>
                                    <div class="stats__description" data-aos="fade-up" data-aos-delay="300" data-aos-duration="500">sports et loisirs référencés</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="stats__item">
                                    <div class="stats__number" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="500">+ 10 000</div>
                                    <div class="stats__description" data-aos="fade-up" data-aos-delay="500" data-aos-duration="500">réservations par mois</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="stats__item">
                                    <div class="stats__number" data-aos="zoom-in" data-aos-delay="600" data-aos-duration="500">2 000 activités</div>
                                    <div class="stats__description" data-aos="fade-up" data-aos-delay="700" data-aos-duration="500">proposées</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="stats__item">
                                    <div class="stats__number" data-aos="zoom-in" data-aos-delay="800" data-aos-duration="500">Une réservation</div>
                                    <div class="stats__description" data-aos="fade-up" data-aos-delay="900" data-aos-duration="500">toutes les 5 secondes</div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-10 col-xl-4 d-none d-xl-block">
                    <img src="src/assets/img/home/img-forma-home.png" alt="" class="home__img">
                </div>
            </div>
        </div>
    </main>

    <?php include "src/includes/prefooter.php"; ?>
    <?php include "src/includes/footer.php"; ?>
</body>