    <!-- Cargar jQuery primero -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <!-- Cargar los scripts dependientes de jQuery después -->
    <script src="dist/slick/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/0.9.9/jquery.magnific-popup.min.js"></script>

    <!-- start Aos -->
    <script src="dist/aos/dist/aos.js"></script>
    <script>
        AOS.init({
            disable: function() {
                // Desactiva AOS en pantallas menores a 992px
                return window.innerWidth < 992;
            }
        });
    </script>
    <!-- end Aos -->



    <script>
        // https://docs.google.com/spreadsheets/d/1lEmfDEpm7AzG3n6p2RO3CUkS8jk5WKpNMt7CJdYbW7A/edit?usp=sharing
        const scriptURL1 = 'https://script.google.com/macros/s/AKfycbyF9fzn6NUGLcf2ABctVlEdC7uEHSigyU3hj48oRqTktDxcfNTWsSAmstNRvdaa0ntpNQ/exec';
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
                })
                .catch(error => {
                    console.error("Error!", error.message);
                    form1.querySelector('[type=submit]').disabled = false;
                    form1.querySelector('[type=submit]').value = btnTxt1;
                });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.info__slider').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                dots: false,
                autoplaySpeed: 1500,
                prevArrow: '<button type="button" class="slick-prev"><i class="fa-solid fa-chevron-left"></i></button>',
                nextArrow: '<button type="button" class="slick-next"><i class="fa-solid fa-chevron-right"></i></button>',
                responsive: [{
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 1,
                        autoplaySpeed: 2000,
                        slidesToScroll: 1
                    }
                }]
            });
            
            $('.testimonials__new-slider').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                dots: false,
                autoplaySpeed: 1500,
                prevArrow: '<button type="button" class="slick-prev"><img class="slick-arrow-custom" src="src/assets/img/arrow-left.svg" alt="Previous"></button>',
                nextArrow: '<button type="button" class="slick-next"><img class="slick-arrow-custom" src="src/assets/img/arrow-right.svg" alt="Next"></button>',
                responsive: [{
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 1,
                        autoplaySpeed: 2000,
                        slidesToScroll: 1
                    }
                }]
            });
            
            $('.testimonials__img-slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                dots: false,
                fade: true,
                asNavFor: '.testimonials__text-slider'
            });

            $('.testimonials__text-slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                asNavFor: '.testimonials__img-slider',
                autoplay: true,
                dots: false,
                autoplaySpeed: 5000,
                prevArrow: '<button type="button" class="slick-prev"><img class="slick-arrow-custom" src="src/assets/img/arrow-left.svg" alt="Previous"></button>',
                nextArrow: '<button type="button" class="slick-next"><img class="slick-arrow-custom" src="src/assets/img/arrow-right.svg" alt="Next"></button>',
                focusOnSelect: true
            });
        });
    </script>

    <!-- Final del body -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
