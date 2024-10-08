<?php
include "src/includes/site-config.php";
$page_title = "My Sport Session Pro: logiciel pour Associations de Sport & Loisirs.";
$page_description = "Découvrez la solution complète pour les associations de Sport & Loisirs. Gérez vos réservations et optimisez votre emploi du temps grâce à un outil adapté à vos besoins.";
include "src/includes/head.php";
?>

<body class="intern coach-landing">
    <?php include "src/includes/nav-intern.php"; ?>
    <style>
        .error-message {
            color: red;
            position: relative;
            top: -11px;
            font-size: 12px;
            display: block;
            line-height: 130%;
        }

        #dataPolicyCheckboxError {
            top: 0;
        }
    </style>
    <header class="heroshot" style="background-image:url('src/assets/img/landing-coach/bg-img-hero-coach.png');" aria-label="À la une">
        <div class="heroshot__float-img-wrapper">
            <img src="src/assets/img/landing-coach/img-hero-coach.png" alt="" class="heroshot__img-float">
            <img src="src/assets/img/landing-coach/scroll-down-icon.svg" alt="" class="heroshot__scroll-down-icon">
        </div>
        <div class="container">
            <div class="heroshot__content" id="decouvrir-gratuitement">
                <div class="row justify-content-between">
                    <div class="col-lg-5">
                        <h1 class="h1-title left big">Le logiciel pensé pour les associations</h1>
                        <p class="p-text white">Optimisez la gestion des réservations de vos adhérents et clients extérieurs avec My Sport Session. Gagnez en facilité de gestion et de communication. Développez la relation avec vos adhérents et profitez des temps de partage.</p>
                        <ul class="check-text">
                            <li class="p-text white" data-aos="fade-right" data-aos-delay="200" data-aos-duration="500">Agendas connectés accessibles par tous les membres du bureau de votre association </li>
                            <li class="p-text white" data-aos="fade-right" data-aos-delay="300" data-aos-duration="500">Optimisation de la gestion des plannings des animateurs et des responsables d’activités </li>
                            <li class="p-text white" data-aos="fade-right" data-aos-delay="400" data-aos-duration="500">100% compatible avec votre site internet et tous vos outils existants </li>
                        </ul>
                    </div>
                    <div class="col-lg-7 col-xl-5 align-self-center">
                        <article class="form">
                            <div class="container">
                                <div id="the-form">
                                    <h2 class="h2-title center">Vous êtes une association de sport & loisirs ?</h2>
                                    <p class="sharped-title center no-line">Un de nos experts vous recontacte</p>
                                    <form class="form__content" name="registro" id="registro" novalidate>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label for="name" class="form__text">Prénom</label>
                                                <input type="text" id="name" name="name" placeholder="Entrer votre prénom" required>
                                                <span class="error-message" id="nameError"></span>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="lastname" class="form__text">Nom</label>
                                                <input type="text" id="lastname" name="lastname" placeholder="Entrer votre nom" required>
                                                <span class="error-message" id="lastnameError"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label for="postal-code" class="form__text">Code Postal</label>
                                                <input type="text" id="postalcode" name="postalcode" placeholder="XXXXX" required pattern="\d{5}">
                                                <span class="error-message" id="postalcodeError"></span>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="phone" class="form__text">Téléphone</label>
                                                <input type="text" id="phone" name="phone" placeholder="0600000000" required>
                                                <span class="error-message" id="phoneError"></span>
                                            </div>
                                        </div>
                                        <label for="email" class="form__text">Email</label>
                                        <input type="email" id="email" name="email" placeholder="Entrer votre email" required>
                                        <span class="error-message" id="emailError"></span>

                                        <div class="mt-3 mb-2 my-lg-1">
                                            <div class="row align-items-lg-center align-items-start gx-2">
                                                <div class="col-auto">
                                                    <input class="mb-0" type="checkbox" id="dataPolicyCheckbox" name="dataPolicyCheckbox" required>
                                                </div>
                                                <div class="col">
                                                    <label class="form__label" for="dataPolicyCheckbox">J'accepte de recevoir des courriels de My Sport Session</label>
                                                </div>
                                                <span class="error-message" id="dataPolicyCheckboxError"></span>
                                            </div>
                                        </div>
                                        <input class="btn-register" type="submit" value="Découvrir gratuitement">
                                    </form>
                                </div>
                                <div id="thank-you">
                                    <p class="p-thanks">Merci, vos informations ont bien été prises en compte.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="home" aria-label="Principales informations">
        <div class="container">
            <article class="stats">
                <div class="row g-0">
                    <div class="col-lg-4">
                        <div class="stats__item">
                            <div class="stats__number" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="500">+ 100</div>
                            <div class="stats__description" data-aos="fade-up" data-aos-delay="300" data-aos-duration="500">sports & loisirs référencés</div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="stats__item">
                            <div class="stats__number" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="500">+ 10 000</div>
                            <div class="stats__description" data-aos="fade-up" data-aos-delay="500" data-aos-duration="500">réservations par mois</div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="stats__item">
                            <div class="stats__number" data-aos="zoom-in" data-aos-delay="600" data-aos-duration="500">2 000 activités</div>
                            <div class="stats__description" data-aos="fade-up" data-aos-delay="700" data-aos-duration="500">proposées</div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </main>
    <section class="info">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <p class="sharped-title">Revenez à l’essentiel</p>
                    <h2 class="h2-title">Dédiez votre temps à votre association</h2>
                    <p class="p-text">Génération de nouveaux adhérents tout au long de l’année. Gestion de la base adhérents et outils de communication simplifiés. Voici la solution de gestion idéale pour les associations.</p>
                    <p class="btn-wrapper"><a href="#decouvrir-gratuitement" class="btn_01">Découvrir gratuitement</a></p>
                </div>
                <div class="col-lg-6">
                    <div class="info__item">
                        <div class="row">
                            <div class="col-auto">
                                <p class="info__num">01</p>
                            </div>
                            <div class="col">
                                <h3 class="h3-title">Plateforme de réservation</h3>
                                <ul class="check-text">
                                    <li class="p-text" data-aos="fade-right" data-aos-delay="200" data-aos-duration="500">Réservation 24/7 jours de vos clients en autonomie</li>
                                    <li class="p-text" data-aos="fade-right" data-aos-delay="300" data-aos-duration="500">Référencement sur la plateforme <a href="https://mysportsession.com" target="_blank">mysportsession.com</a> et celles de nos institutions* <span>*(Sous validation contractuelle)</span></li>
                                    <li class="p-text" data-aos="fade-right" data-aos-delay="400" data-aos-duration="500">Paramétrage des créneaux de réservation avec + 90 paramètres différents</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="info__item">
                        <div class="row">
                            <div class="col-auto">
                                <p class="info__num">02</p>
                            </div>
                            <div class="col">
                                <h3 class="h3-title">Agenda connecté</h3>
                                <ul class="check-text">
                                    <li class="p-text" data-aos="fade-right" data-aos-delay="200" data-aos-duration="500">Agenda connecté sur tous outils</li>
                                    <li class="p-text" data-aos="fade-right" data-aos-delay="300" data-aos-duration="500">Planning de tous les coachs synchronisés</li>
                                    <li class="p-text" data-aos="fade-right" data-aos-delay="400" data-aos-duration="500">Outils des sécurisations des rendez-vous</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="info__item">
                        <div class="row">
                            <div class="col-auto">
                                <p class="info__num">03</p>
                            </div>
                            <div class="col">
                                <h3 class="h3-title">Adhérents, Abonnements & Stages</h3>
                                <ul class="check-text">
                                    <li class="p-text" data-aos="fade-right" data-aos-delay="200" data-aos-duration="500">Adhérents, Abonnements & Stages</li>
                                    <li class="p-text" data-aos="fade-right" data-aos-delay="300" data-aos-duration="500">Abonnements en heures, ou en illimités</li>
                                    <li class="p-text" data-aos="fade-right" data-aos-delay="400" data-aos-duration="500">Gestion des Partenaires, Enfants et Stages</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="info dark-bg">
        <div class="container">
            <div class="row align-items-start justify-content-center justify-content-lg-between">
                <div class="col-lg-6 order-lg-0 order-1">
                    <h2 class="h2-title">Une meilleure visibilité de votre activité</h2>
                    <p class="p-text">Certains cherchent exactement votre spécialité. Certains sont nouveaux dans le quartier. Certains ont décidé de prendre soin d’eux. Laissez les trouver leur perle rare: vous.</p>
                    <ul class="check-text my-4 my-lg-5">
                        <li class="p-text" data-aos="fade-right" data-aos-delay="200" data-aos-duration="500">Page vitrine de votre association</li>
                        <li class="p-text" data-aos="fade-right" data-aos-delay="300" data-aos-duration="500">Avis certifiés de vos clients</li>
                        <li class="p-text" data-aos="fade-right" data-aos-delay="400" data-aos-duration="500">Référencement Google optimisé</li>
                    </ul>
                    <p class="btn-wrapper"><a href="#decouvrir-gratuitement" class="btn_01">Découvrir gratuitement</a></p>
                </div>
                <div class="col-8 col-lg-5 order-lg-1 order-0">
                    <div class="info__box">
                        <div class="info__box-img-wrapper" data-aos="zoom-in" data-aos-duration="500">
                            <img src="src/assets/img/landing-coach/img-meilleure.png" alt="" class="info__box-img">
                        </div>
                        <h3 class="info__box-title">2 000 ACTIVITÉS</h3>
                        <h4 class="info__box-text">PAR SEMAINE PROPOSÉES</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="info">
        <div class="container">
            <div class="row align-items-center justify-content-center justify-content-lg-between">
                <div class="col-8 col-lg-5">
                    <img src="src/assets/img/landing-coach/img-calendar-opportunites.png" alt="" class="info__img" data-aos="fade-right" data-aos-duration="500">
                </div>
                <div class="col-lg-6">
                    <p class="sharped-title">Une journée, mille opportunités</p>
                    <h2 class="h2-title">Remplacez les absences de vos adhérents par des réservations en ligne</h2>
                    <p class="p-text">Libérez-vous des contraintes téléphoniques, offrez aux intéressés la liberté de réserver un créneau et ainsi de déclencher de futures adhésions.</p>
                    <ul class="check-text my-4 my-lg-5">
                        <li class="p-text" data-aos="fade-right" data-aos-delay="200" data-aos-duration="500">Réservation 24h/7j</li>
                        <li class="p-text" data-aos="fade-right" data-aos-delay="300" data-aos-duration="500">Optimisation des heures creuses</li>
                        <li class="p-text" data-aos="fade-right" data-aos-delay="400" data-aos-duration="500">Réservation depuis les réseaux sociaux</li>
                        <li class="p-text" data-aos="fade-right" data-aos-delay="500" data-aos-duration="500">Gestion automatique de la liste d'attente</li>
                    </ul>
                    <p class="btn-wrapper"><a href="#decouvrir-gratuitement" class="btn_01">Découvrir gratuitement</a></p>
                </div>
            </div>
        </div>
    </section>
    <section class="info">
        <div class="container">
            <div class="row align-items-center justify-content-center justify-content-lg-between">
                <div class="col-8 col-lg-5 order-lg-1">
                    <img src="src/assets/img/landing-coach/img-gestion.png" alt="" class="info__img" data-aos="fade-left" data-aos-duration="500">
                </div>
                <div class="col-lg-6 order-lg-0">
                    <h2 class="h2-title">Une gestion de votre agenda automatisée</h2>
                    <p class="p-text">Libérez-vous des contraintes téléphoniques et offrez à vos clients la liberté de réserver leurs rendez-vous et de gérer leur emploi du temps en toute autonomie.</p>
                    <ul class="check-text my-4 my-lg-5">
                        <li class="p-text" data-aos="fade-right" data-aos-delay="200" data-aos-duration="500">Réservation depuis les réseaux sociaux et partenaires</li>
                        <li class="p-text" data-aos="fade-right" data-aos-delay="300" data-aos-duration="500">Gestion des réservations récurrentes</li>
                        <li class="p-text" data-aos="fade-right" data-aos-delay="400" data-aos-duration="500">Gestion des plannings des coachs du club</li>
                        <li class="p-text" data-aos="fade-right" data-aos-delay="500" data-aos-duration="500">Plusieurs mode d’affichage du planning <br>
                            (mode agenda - mode liste - mode terrain)</li>
                    </ul>
                    <p class="btn-wrapper"><a href="#decouvrir-gratuitement" class="btn_01">Découvrir gratuitement</a></p>
                </div>
            </div>
        </div>
    </section>
    <section class="info">
        <div class="container">
            <h2 class="h2-title blue center mb-4 mb-lg-5">Maximisez la participation de vos adhérents</h2>
            <div class="row align-items-center justify-content-center justify-content-lg-between">
                <div class="col-8 col-lg-5">
                    <img src="src/assets/img/landing-coach/img-reservations-phone.png" alt="" class="info__img" data-aos="fade-right" data-aos-duration="500">
                </div>
                <div class="col-lg-6">
                    <h2 class="h2-title">Minimisez les no-show</h2>
                    <ul class="check-text my-4 my-lg-5">
                        <li class="p-text" data-aos="fade-right" data-aos-delay="200" data-aos-duration="500">Email et SMS de rappels automatiques</li>
                        <li class="p-text" data-aos="fade-right" data-aos-delay="300" data-aos-duration="500">Politique d’annulation personnalisée</li>
                    </ul>
                    <p class="btn-wrapper"><a href="#decouvrir-gratuitement" class="btn_01">Découvrir gratuitement</a></p>
                </div>
            </div>
        </div>
    </section>
    <section class="info dark-bg py-5">
        <div class="container">
            <div class="row align-items-center justify-content-center justify-content-lg-between">
                <div class="col-lg-6 order-lg-0 order-1">
                    <h2 class="h2-title">Au plus proche de vos adhérents</h2>
                    <p class="p-text">Facilitez la vie de vos adhérents, communiquez de manière facile et rapide et partagez votre passion commune.</p>
                    <ul class="check-text my-4 my-lg-5">
                        <li class="p-text" data-aos="fade-right" data-aos-delay="200" data-aos-duration="500">Messagerie personnalisée</li>
                        <li class="p-text" data-aos="fade-right" data-aos-delay="300" data-aos-duration="500">Système de parrainage</li>
                        <li class="p-text" data-aos="fade-right" data-aos-delay="400" data-aos-duration="500">Facilité de gestion de réservation et d’annulation</li>
                    </ul>
                    <p class="btn-wrapper"><a href="#decouvrir-gratuitement" class="btn_01">Découvrir gratuitement</a></p>
                </div>
                <div class="col-8 col-lg-5 order-lg-1 order-0">
                    <img src="src/assets/img/landing-coach/img-clients.png" alt="" class="info__img" data-aos="fade-left" data-aos-duration="500">
                </div>
            </div>
        </div>
    </section>
    <section class="info">
        <div class="container">
            <div class="row align-items-center justify-content-center justify-content-lg-between">
                <div class="col-8 col-lg-5">
                    <img src="src/assets/img/landing-coach/commission-recuadro-info.png" alt="" class="info__img" data-aos="fade-right" data-aos-duration="500">
                </div>
                <div class="col-lg-6">
                    <p class="sharped-title">Sans encaissement et sans commission</p>
                    <h2 class="h2-title">Accueillez les non adhérents comme vous le souhaitez</h2>
                    <ul class="check-text my-4 my-lg-5">
                        <li class="p-text" data-aos="fade-right" data-aos-delay="200" data-aos-duration="500">Vous choisissez votre moyen d’encaissement</li>
                        <li class="p-text" data-aos="fade-right" data-aos-delay="300" data-aos-duration="500">Paiement en ligne possible</li>
                    </ul>
                    <p class="btn-wrapper"><a href="#decouvrir-gratuitement" class="btn_01">Découvrir gratuitement</a></p>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonials" id="testimonials">
        <div class="container">
            <h2 class="h2-title center mb-5">Rejoignez notre communauté</h2>
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8">
                    <div class="testimonials__new-slider">
                        <article class="testimonials__new-slider-item">
                            <div class="testimonials__new-slider-img-wrapper">
                                <img src="src/assets/img/landing-coach/testimonial_03.jpg" alt="" class="testimonials__new-slider-photo">
                            </div>
                            <p class="testimonials__new-slider-text">Depuis juin 2023, nous avons déployé My Sport Session pour les activités de l'office de tourisme et pour d'autres partenaires du domaine de la culture et des loisirs. MSS est partique, efficace et les équipes sont réactives pour prendre en compte nos demandes et améliorer l'outil en permanence.</p>
                            <p class="testimonials__new-slider-name">Sylvain Pechcontal, Directeur de l'office de tourisme Grand Auch Cœur de Gascogne</p>
                        </article>
                        <article class="testimonials__new-slider-item">
                            <div class="testimonials__new-slider-img-wrapper">
                                <img src="src/assets/img/testimonials/marianne.png" alt="Marianne du Golf de Castelanau-le-Lez" class="testimonials__new-slider-photo">
                            </div>
                            <p class="testimonials__new-slider-text">Il y a eu un vrai AVANT & APRES. <br>
                                Avant My Sport Session, mes clients réservaient sur
                                place ou par téléphone durant les horaires
                                d'ouverture. Ce n'était pas du tout pratique,
                                contraignant voire même ingérable lors des périodes
                                d'affluence. Très chronophage et une grosse
                                surcharge mentale. <br>
                                La solution sur mesure à nos besoins de My Sport
                                Session m'a libéré du temps et du téléphone et
                                facilite la vie à mes adhérents. <br>
                                Un vrai outil facilitateur devenu indispensable !</p>
                            <p class="testimonials__new-slider-name">Marianne du Golf de Castelanau-le-Lez</p>
                        </article>
                        <article class="testimonials__new-slider-item">
                            <div class="testimonials__new-slider-img-wrapper">
                                <img src="src/assets/img/landing-coach/testimonial_02.jpg" alt="" class="testimonials__new-slider-photo">
                            </div>
                            <p class="testimonials__new-slider-text">Avant My Sport Session, les réservations se faisaient pas SMS ou par Whatsapp.
                                Je faisais beaucoup d'allers et retours écrits avec mes
                                élèves pour la confirmation.
                                Avec la montée en charge de mon activité, la nécessité d’un outil comme My Sport Session est
                                devenu une évidence.
                                Au début, avec cette nouveauté, j’ai eu un peu peur et
                                de l’appréhension de perdre le contrôle. Et en fait, ce
                                fut tout le contraire !
                                Alors n'hésitez pas, ne perdez plus votre temps, utilisez-le pour vos cours, pour vos élèves.
                                Vous n'aurez plus à répondre à longueur de journée aux messages ou aux sollicitations !</p>
                            <p class="testimonials__new-slider-name">Conrado de Circcore Pilates</p>
                        </article>
                    </div>
                </div>
            </div>
            <p class="btn-wrapper mt-5 text-center"><a href="temoignages" class="btn_01--big">Voir les témoignages</a></p>
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