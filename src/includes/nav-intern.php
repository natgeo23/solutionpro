<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>

<nav class="nav navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand order-lg-0 order-0" href="https://union-atlantica.com/nogooglebot/mss/">
            <img src="src/assets/img/logo-secondary.svg" alt="Logo" title="Logo" class="nav__logo" width="144" height="45">
        </a>
        <div class="collapse navbar-collapse justify-content-center order-lg-1 order-3" id="navbarNav">
            <ul class="navbar-nav nav__navbar">
                <?php
                $currentUrl = basename($_SERVER['REQUEST_URI'], ".php");
                ?>

                <li class="nav-item nav__item <?= ($currentUrl === '') ? 'active' : '' ?>">
                    <a class=" nav__link" href="https://union-atlantica.com/nogooglebot/mss/">
                        Vous êtes
                        <img src="src/assets/img/down-nav-arrow.svg" alt="" class="nav__link-arrow">
                    </a>
                    <div class="nav__item-menu">
                        <div class="nav__drop-down">
                            <?php if ($currentUrl === 'association') : ?>
                                <a class="nav__link" href="club-de-sport-loisirs">Club</a>
                                <a class="nav__link" href="coach">Coach</a>
                            <?php elseif ($currentUrl === 'coach') : ?>
                                <a class="nav__link" href="association">Association</a>
                                <a class="nav__link" href="club-de-sport-loisirs">Club</a>
                            <?php elseif ($currentUrl === 'club-de-sport-loisirs') : ?>
                                <a class="nav__link" href="association">Association</a>
                                <a class="nav__link" href="coach">Coach</a>
                            <?php else : ?>
                                <a class="nav__link" href="association">Association</a>
                                <a class="nav__link" href="club-de-sport-loisirs">Club</a>
                                <a class="nav__link" href="coach">Coach</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </li>
                <li class="nav-item nav__item <?= ($currentUrl === 'temoignages') ? 'active' : '' ?>">
                    <a href="<?= ($currentUrl === 'estimateur' || $currentUrl === 'temoignages') ? 'club-de-sport-loisirs#testimonials' : '#testimonials' ?>" class="nav-link nav__link">
                        Témoignages
                    </a>
                </li>
                <li class="nav-item nav__item <?= ($currentPage === 'estimateur.php') ? 'active' : '' ?>">
                    <a href="estimateur" class="nav-link nav__link">
                        Estimateur de rentabilité
                    </a>
                </li>
                <li class="nav-item nav__item nav__item--register d-lg-none">
                    <a href="<?= ($currentUrl === 'estimateur' || $currentUrl === 'temoignages') ? 'club-de-sport-loisirs#decouvrir-gratuitement' : '#decouvrir-gratuitement' ?>" class="nav-link nav__link">
                        Découvrir gratuitement
                    </a>
                </li>
            </ul>
        </div>
        <div class="nav-item nav__item nav__item--register order-lg-2 order-4 d-none d-lg-inline-block">
            <a href="<?= ($currentUrl === 'estimateur' || $currentUrl === 'temoignages') ? 'club-de-sport-loisirs#decouvrir-gratuitement' : '#decouvrir-gratuitement' ?>" class="nav-link nav__link">
                Découvrir gratuitement
            </a>
        </div>
        <button class="navbar-toggler hamburger hamburger--elastic" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="hamburger-box" class="navbar-toggler-icon">
                <span class="hamburger-inner"></span>
            </span>
        </button>
    </div>
</nav>

<script>
    window.addEventListener('scroll', function() {
        var navWrapper = document.querySelector('.navbar');
        var scrollPosition = window.scrollY;

        if (scrollPosition > 50) {
            navWrapper.classList.add('sticky');
        } else {
            navWrapper.classList.remove('sticky');
        }
    });
</script>

<script>
    var forEach = function(t, o, r) {
        if ("[object Object]" === Object.prototype.toString.call(t))
            for (var c in t) Object.prototype.hasOwnProperty.call(t, c) && o.call(r, t[c], c, t);
        else
            for (var e = 0, l = t.length; l > e; e++) o.call(r, t[e], e, t)
    };

    var hamburgers = document.querySelectorAll(".hamburger");
    if (hamburgers.length > 0) {
        forEach(hamburgers, function(hamburger) {
            hamburger.addEventListener("click", function() {
                this.classList.toggle("is-active");
            }, false);
        });
    }
</script>