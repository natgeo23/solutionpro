<?php
include "src/includes/site-config.php";
include "src/includes/head.php";
?>

<body class="intern coach-landing temoignages">
    <?php include "src/includes/nav-intern.php"; ?>
    <section class="testimonials">
        <div class="container">
            <h2 class="h2-title center mt-5 mb-0 mb-lg-5" id="testimonials">Temoignages</h2>
            <article class="testimonials__item">
                <div class="row justify-content-center align-items-center">
                    <div class="col-8 col-lg-auto" data-aos="fade-right" data-aos-duration="500">
                        <div class="testimonials__img-slider">
                            <div class="testimonials__img-wrapper">
                                <img src="src/assets/img/testimonials/testimonio_03.png" alt="Montpellier Futevolei" class="testimonials__img">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="testimonials__cards testimonials__text-slider_01">
                            <div class="testimonials__text-wrapper">
                                <h3 class="testimonials__name">Montpellier Futevolei</h3>
                                <p class="testimonials__text">L'application est vraiment très intuitive et s'il y a le moindre problème, l'équipe de My Sport Session est tout de suite là pour vous aider à trouver la solution. Vraiment satisfait et efficace.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article class="testimonials__item">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-5 order-lg-0 order-1">
                        <div class="testimonials__cards testimonials__text-slider">
                            <div class="testimonials__text-wrapper">
                                <h3 class="testimonials__name">Emiliana Gil</h3>
                                <p class="testimonials__text">Une solution adaptée à mon entreprise, avec une équipe à l'écoute et réactive. je recommande !</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-8 col-lg-auto order-lg-1 order-0" data-aos="fade-left" data-aos-duration="500">
                        <div class="testimonials__img-slider">
                            <div class="testimonials__img-wrapper">
                                <img src="src/assets/img/testimonials/testimonio_01.png" alt="Emiliana Gil" class="testimonials__img">
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article class="testimonials__item">
                <div class="row justify-content-center align-items-center">
                    <div class="col-8 col-lg-auto" data-aos="fade-right" data-aos-duration="500">
                        <div class="testimonials__img-slider">
                            <div class="testimonials__img-wrapper">
                                <img src="src/assets/img/testimonials/testimonio_02.png" alt="Hitton Bien Dans Ma Nature / Savonnerie Artisanale" class="testimonials__img">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="testimonials__cards testimonials__text-slider">
                            <div class="testimonials__text-wrapper">
                                <h3 class="testimonials__name">Hitton Bien Dans Ma Nature / Savonnerie Artisanale</h3>
                                <p class="testimonials__text">Grâce à My Sport Session , nous pouvons organiser les visites guidées de notre ferme de manière simple et efficace. Cela facilite notre organisation au quotidien et nous permet de contacter nos visiteurs en cas de changement d'horaire ou d'annulation. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>
    <section class="achievements" style="background-image:url('src/assets/img/landing-coach/bg-achievements.png');">
        <div class="container">
            <p class="achievements__bignum">+ 10 000</p>
            <h5 class="achievements__text">10 000 réservations par mois</h5>
            <p class="btn-wrapper mt-5"><a href="#decouvrir-gratuitement" class="btn_01">Découvrir gratuitement</a></p>
        </div>
    </section>

    <?php include "src/includes/prefooter.php"; ?>
    <?php include "src/includes/footer.php"; ?>
</body>