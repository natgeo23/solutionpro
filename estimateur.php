<?php
include "src/includes/site-config.php";
include "src/includes/head.php";
?>

<body class="intern">
    <?php include "src/includes/nav-intern.php"; ?>

    <main class="estimateur">
        <img src="src/assets/img/form-estimateur/float-img.svg" alt="" class="float-img">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-5">
                    <form action="#" class="estimateur__form" id="estimateurForm" name="estimateur">
                        <header class="estimateur__header">
                            <p class="estimateur__pretitle">Gérant d’un établissement de sport & loisirs?</p>
                            <h1 class="h1-title">Estimez la rentabilité de My Sport Session</h1>
                            <p class="p-text">Estimez le temps et les revenus additionnels que
                                <br>My Sport Session pourrait vous apporter
                            </p>
                        </header>
                        <section class="estimateur__item">
                            <h2 class="h2-title">Quelle est votre principale offre? <br>
                                Que proposez-vous comme activité?</h2>
                            <label for="votre-offre" class="estimateur__label">Votre offre</label>
                            <select id="votre-offre" name="votre-offre" required>
                                <option value="" disabled selected>Sélectionner une option</option>
                                <option value="Je propose des cours particuliers">Je propose des cours particuliers</option>
                                <option value="Je propose des cours collectifs">Je propose des cours collectifs</option>
                                <option value="Je loue des installations sportives (terrains,…)">Je loue des installations sportives (terrains,…)</option>
                                <option value="Je loue du matériel de sport ou loisir (vélos, planches,..)">Je loue du matériel de sport ou loisir (vélos, planches,..)</option>
                                <option value="Je vends des places (entrées, places, tickets,…)">Je vends des places (entrées, places, tickets,…)</option>
                            </select>
                            <article class="estimateur__alert" data-aos="zoom-out" data-aos-duration="500">
                                <div class="row align-items-top g-0">
                                    <div class="col-auto">
                                        <img src="src/assets/img/alert-icon.svg" alt="Alert Icon" class="estimateur__alert-icon">
                                    </div>
                                    <div class="col">
                                        <p class="p-text">My Sport Session permet d'augmenter votre visibilité et générer de nouveaux clients tous les mois.</p>
                                    </div>
                                </div>
                            </article>
                        </section>
                        <section class="estimateur__item">
                            <h2 class="h2-title">Quel est le prix moyen de votre
                                offre/activité principale?</h2>
                            <label for="montant-moyen" class="estimateur__label">Montant moyen</label>
                            <input type="number" id="montant-moyen" name="montant-moyen" required placeholder="Entrer un montant">
                            <article class="estimateur__alert" data-aos="zoom-out" data-aos-duration="500">
                                <div class="row align-items-top g-0">
                                    <div class="col-auto">
                                        <img src="src/assets/img/alert-icon.svg" alt="Alert Icon" class="estimateur__alert-icon">
                                    </div>
                                    <div class="col">
                                        <p class="p-text">Le prix moyen d'un cours collectif se situe aux alentours de 15€ à la séance.</p>
                                    </div>
                                </div>
                            </article>
                        </section>
                        <section class="estimateur__item">
                            <h2 class="h2-title">Combien de prestations sont disponibles à la réservation chaque semaine dans votre établissement?</h2>
                            <label for="prestations-proposees-par-semaine-etablissement" class="estimateur__label">Prestations proposées par semaine</label>
                            <input type="number" id="prestations-proposees-par-semaine-etablissement" name="prestations-proposees-par-semaine-etablissement" required placeholder="Entrer un nombre">
                            <article class="estimateur__alert" data-aos="zoom-out" data-aos-duration="500">
                                <div class="row align-items-top g-0">
                                    <div class="col-auto">
                                        <img src="src/assets/img/alert-icon.svg" alt="Alert Icon" class="estimateur__alert-icon">
                                    </div>
                                    <div class="col">
                                        <p class="p-text">My Sport Session permet de réduire le nombre d'appels entrants non essentiels et vous fait gagner du temps au quotidien sur la gestion de votre établissement.</p>
                                    </div>
                                </div>
                            </article>
                        </section>
                        <section class="estimateur__item">
                            <h2 class="h2-title">Combien d'unités (places, entrées, terrains, matériels, etc.) sont disponibles à la réservation en moyenne pour chaque prestation?</h2>
                            <label for="prestations-proposees-par-semaine-event" class="estimateur__label">Unités disponibles par prestation</label>
                            <input type="number" id="prestations-proposees-par-semaine-event" name="prestations-proposees-par-semaine-event" required placeholder="Entrer un nombre">
                            <article class="estimateur__alert" data-aos="zoom-out" data-aos-duration="500">
                                <div class="row align-items-top g-0">
                                    <div class="col-auto">
                                        <img src="src/assets/img/alert-icon.svg" alt="Alert Icon" class="estimateur__alert-icon">
                                    </div>
                                    <div class="col">
                                        <p class="p-text">My Sport Session permet de réduire le nombre d'appels entrants non essentiels et vous fait gagner du temps au quotidien sur la gestion de votre établissement.</p>
                                    </div>
                                </div>
                            </article>
                        </section>
                        <section class="estimateur__item">
                            <h2 class="h2-title">Quel est le taux de réservation (occupation) moyen de vos prestations?</h2>
                            <label for="taux-de-resevation" class="estimateur__label">Taux de résevation</label>
                            <input type="number" id="taux-de-resevation" name="taux-de-resevation" required placeholder="Entrer un nombre en %" min="0" max="100">
                            <article class="estimateur__alert" data-aos="zoom-out" data-aos-duration="500">
                                <div class="row align-items-top g-0">
                                    <div class="col-auto">
                                        <img src="src/assets/img/alert-icon.svg" alt="Alert Icon" class="estimateur__alert-icon">
                                    </div>
                                    <div class="col">
                                        <p class="p-text">My Sport Session permet d'augmenter le taux de réservation (occupation) de vos prestations proposées dans votre établissement.</p>
                                    </div>
                                </div>
                            </article>
                        </section>

                        <section class="estimateur__item">
                            <h2 class="h2-title">Combien de réservations non honorées (no shows) avez-vous par semaine?</h2>
                            <label for="creneaux-proposes-par-semaine" class="estimateur__label">Créneaux proposés par semaine</label>
                            <input type="number" id="creneaux-proposes-par-semaine" name="creneaux-proposes-par-semaine" required placeholder="Entrer un nombre">
                            <article class="estimateur__alert" data-aos="zoom-out" data-aos-duration="500">
                                <div class="row align-items-top g-0">
                                    <div class="col-auto">
                                        <img src="src/assets/img/alert-icon.svg" alt="Alert Icon" class="estimateur__alert-icon">
                                    </div>
                                    <div class="col">
                                        <p class="p-text">My Sport Session permet de réduire le nombre de no shows par semaine au strict minimum.</p>
                                    </div>
                                </div>
                            </article>
                        </section>
                    </form>
                </div>
                <div class="col-xl-5">
                    <section class="estimateur__results" id="resultsSection">
                        <div class="estimateur__box-position">
                            <div class="estimateur__box">
                                <div class="estimateur__box-img-wrapper">
                                    <img src="src/assets/img/form-estimateur/img-estimateur.png" alt="" class="estimateur__box-img">
                                </div>
                                <div class="estimateur__stats">
                                    <div class="row">
                                        <div class="col-6">
                                            <h3 class="estimateur__num blur">+ <span id="hoursSaved">0</span>h</h3>
                                            <p class="estimateur__text center">par semaine gagnées grâce à la réduction des appels</p>
                                        </div>
                                        <div class="col-6">
                                            <h3 class="estimateur__num blur"><span id="additionalRevenue">000</span>€</h3>
                                            <p class="estimateur__text center">de revenus supplémentaires par mois grâce à l’augmentation du taux de remplissage de 25%</p>
                                        </div>
                                    </div>
                                </div>
                                <p class="estimateur__wrapper"><span class="estimateur__price blur">+ <span id="newClientsRevenue">000</span>€</span></p>
                                <p class="estimateur__text big">grâce à l’apport de 3 nouveaux clients par mois</p>
                                <p class="estimateur__wrapper"><span class="estimateur__price blur">+ <span id="noShowReductionRevenue">000</span>€</span></p>
                                <p class="estimateur__text big">grâce à la diminution de 50% des réservations non honorées</p>
                                <p class="btn-wrapper"><span id="openPopupButton" class="btn_01">Voir mes résultats</span></p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>

    <div class="results-popup modal fade" id="results-popup" tabindex="-1" aria-labelledby="results-popup" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content form">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="container">
                    <div id="the-form">
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
                            <p class="form__copy">En soumettant vos données, vous acceptez qu'elles puissent être utilisées par My Sport Session à des fins commerciales. Consultez notre <a href="https://mysportsession.com/confidentialite-des-donnees" target="_blank">Politique de Confidentialité</a> pour plus d'infos.</p>
                        </form>
                    </div>
                    <div id="thank-you">
                        <p class="p-thanks">Merci, vos informations ont bien été prises en compte.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const scriptURL1 = 'https://script.google.com/macros/s/AKfycbwHu_8G4RA5DH2xOeBIM0ZkhNz162US0cPW6KfX_vxrQSN4e3jV1_FqRzNmTd09cqLBhA/exec';
        const form1 = document.forms['registro'];
        const btnTxt1 = form1.querySelector('[type=submit]').value;

        form1.addEventListener('submit', function(event) {
            event.preventDefault();
            let isValid = true;

            // Validate each field
            const fields = [{
                    id: 'name',
                    message: 'Veuillez entrer votre prénom.'
                },
                {
                    id: 'lastname',
                    message: 'Veuillez entrer votre nom.'
                },
                {
                    id: 'postalcode',
                    message: 'Veuillez entrer un code postal valide à 5 chiffres.',
                    pattern: /^\d{5}$/
                },
                {
                    id: 'phone',
                    message: 'Veuillez entrer votre numéro de téléphone.'
                },
                {
                    id: 'email',
                    message: 'Veuillez entrer une adresse e-mail valide.',
                    type: 'email'
                },
                {
                    id: 'dataPolicyCheckbox',
                    message: 'Vous devez accepter les conditions.',
                    type: 'checkbox'
                }
            ];

            // Clear previous error messages
            fields.forEach(function(field) {
                const errorElement = document.getElementById(field.id + 'Error');
                if (errorElement) {
                    errorElement.textContent = '';
                }
            });

            // Perform validation
            fields.forEach(function(field) {
                const input = document.getElementById(field.id);
                const errorElement = document.getElementById(field.id + 'Error');
                if (field.type === 'checkbox' && !input.checked) {
                    isValid = false;
                    if (errorElement) {
                        errorElement.textContent = field.message;
                    }
                } else if (input.value.trim() === '') {
                    isValid = false;
                    if (errorElement) {
                        errorElement.textContent = field.message;
                    }
                } else if (field.type === 'email' && !input.validity.valid) {
                    isValid = false;
                    if (errorElement) {
                        errorElement.textContent = input.validity.valueMissing ? 'Veuillez entrer votre e-mail.' : field.message;
                    }
                } else if (field.pattern && !field.pattern.test(input.value)) {
                    isValid = false;
                    if (errorElement) {
                        errorElement.textContent = field.message;
                    }
                }
            });

            if (!isValid) {
                return;
            }

            form1.querySelector('[type=submit]').disabled = true;
            form1.querySelector('[type=submit]').value = 'Envoi en cours';

            fetch(scriptURL1, {
                    method: 'POST',
                    body: new FormData(form1)
                })
                .then(response => {
                    console.log('Succès!', response);
                    form1.querySelector('[type=submit]').disabled = false;
                    form1.querySelector('[type=submit]').value = btnTxt1;
                    form1.style.display = 'none';
                    document.getElementById('thank-you').style.display = 'block';
                    executeCalculateFunction();
                })
                .catch(error => {
                    console.error("Error!", error.message);
                    form1.querySelector('[type=submit]').disabled = false;
                    form1.querySelector('[type=submit]').value = btnTxt1;
                });
        });

        function executeCalculateFunction() {
            const form = document.getElementById('estimateurForm');
            const formData = new FormData(form);

            fetch('calculate.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    document.getElementById('hoursSaved').innerText = data.hoursSaved;
                    document.getElementById('additionalRevenue').innerText = data.additionalRevenue;
                    document.getElementById('newClientsRevenue').innerText = data.newClientsRevenue;
                    document.getElementById('noShowReductionRevenue').innerText = data.noShowReductionRevenue;
                    document.getElementById('openPopupButton').classList.add('d-none');
                    document.querySelectorAll('.estimateur__num.blur, .estimateur__price.blur').forEach(function(element) {
                        element.classList.remove('blur');
                    });
                    const modal = bootstrap.Modal.getInstance(document.getElementById('results-popup'));
                    if (modal) {
                        modal.hide();
                    }
                })
                .catch(error => console.error('Error:', error));
        }

        document.getElementById('openPopupButton').addEventListener('click', function(event) {
            // Prevenir la apertura del popup inicialmente
            event.preventDefault();

            // Obtener el formulario y sus campos
            const form = document.getElementById('estimateurForm');
            const fields = form.querySelectorAll('input, select');
            let isValid = true;

            // Validar cada campo
            fields.forEach(function(field) {
                if (!field.value.trim()) {
                    isValid = false;
                    // Puedes añadir mensajes de error aquí si deseas
                    // Ejemplo: field.classList.add('error');
                }
            });

            // Si el formulario es válido, abrir el popup
            if (isValid) {
                // Trigger Bootstrap modal manually
                const modal = new bootstrap.Modal(document.getElementById('results-popup'));
                modal.show();
            } else {
                alert('Veuillez compléter tous les champs avant de continuer.');
            }
        });
    </script>

    <?php include "src/includes/prefooter.php"; ?>

    <!-- start JQuery -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha384-rY/jv8mMhqDabXSo+UCggqKtdmBfd3qC2/KvyTDNQ6PcUJXaxK1tMepoQda4g5vB" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/0.9.9/jquery.magnific-popup.min.js"></script>
    <!-- end JQuery -->

    <!-- start Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <!-- end Scripts -->

    <!-- start JQuery -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha384-rY/jv8mMhqDabXSo+UCggqKtdmBfd3qC2/KvyTDNQ6PcUJXaxK1tMepoQda4g5vB" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- end JQuery -->

    <!-- start Slick -->
    <script src="dist/slick/slick.min.js"></script>

    <!-- start Aos -->
    <script src="dist/aos/dist/aos.js"></script>
    <script src="src/js/main.js"></script>
    <script>
        AOS.init({
            disable: function() {
                // Desactiva AOS en pantallas menores a 992px
                return window.innerWidth < 992;
            }
        });
    </script>
    <!-- end Aos -->
</body>

</html>