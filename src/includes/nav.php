<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>

<nav class="nav navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand order-lg-0 order-0" href="https://union-atlantica.com/nogooglebot/mss/">
            <img src="src/assets/img/logo.svg" alt="Logo" title="Logo" class="nav__logo d-none d-lg-block" width="189" height="45">
            <img src="src/assets/img/logo-secondary.svg" alt="Logo" title="Logo" class="nav__logo d-lg-none" width="147" height="35">
        </a>
        <div class="collapse navbar-collapse justify-content-center order-lg-1 order-3" id="navbarNav">
            <ul class="navbar-nav nav__navbar">
                <li class="nav-item nav__item <?= ($currentPage === 'club-de-sport-loisirs.php') ? 'active' : '' ?>">
                    <a href="club-de-sport-loisirs" class="nav-link nav__link">
                        Club
                    </a>
                </li>
                <li class="nav-item nav__item <?= ($currentPage === 'association.php') ? 'active' : '' ?>">
                    <a href="association" class="nav-link nav__link">
                        Association
                    </a>
                </li>
                <li class="nav-item nav__item <?= ($currentPage === 'coach.php') ? 'active' : '' ?>">
                    <a href="coach" class="nav-link nav__link">
                        Coach
                    </a>
                </li>
                <li class="nav-item nav__item <?= ($currentPage === 'estimateur.php') ? 'active' : '' ?>">
                    <a href="estimateur" class="nav-link nav__link">
                        Estimateur de rentabilité
                    </a>
                </li>
                <li class="nav-item nav__item nav__item--register d-lg-none">
                    <a href="club-de-sport-loisirs#decouvrir-gratuitement" class="nav-link nav__link">
                        Découvrir gratuitement
                    </a>
                </li>
            </ul>
        </div>
        <div class="nav-item nav__item nav__item--register order-lg-2 order-4 d-none d-lg-inline-block">
            <a href="club-de-sport-loisirs#decouvrir-gratuitement" class="nav-link nav__link">
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