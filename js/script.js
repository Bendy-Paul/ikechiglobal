        // Toggle mobile navigation
        const hamburger = document.querySelector('.hamburger');
        const modalHeader = document.querySelector('.modal-header');
        const overlay = document.querySelector('.overlay');
        const closeBtn = document.querySelector('.close-btn');

        hamburger.addEventListener('click', () => {
            modalHeader.classList.add('active');
            overlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        });

        closeBtn.addEventListener('click', () => {
            modalHeader.classList.remove('active');
            overlay.classList.remove('active');
            document.body.style.overflow = 'auto';
        });

        overlay.addEventListener('click', () => {
            modalHeader.classList.remove('active');
            overlay.classList.remove('active');
            document.body.style.overflow = 'auto';
        });

        // Close modal when clicking on links
        const modalLinks = document.querySelectorAll('.modal-nav a');
        modalLinks.forEach(link => {
            link.addEventListener('click', () => {
                modalHeader.classList.remove('active');
                overlay.classList.remove('active');
                document.body.style.overflow = 'auto';
            });
        });

        // Initialize carousels
        $(document).ready(function () {
            // Hero Carousel
            $(".hero-carousel").owlCarousel({
                items: 1,
                loop: true,
                autoplay: true,
                autoplayTimeout: 6000,
                autoplayHoverPause: true,
                nav: false,
                dots: true,
                animateOut: 'fadeOut',
                animateIn: 'fadeIn'
            });

            // Projects Carousel
            $(".projects").owlCarousel({
                loop: true,
                margin: 20,
                nav: true,
                dots: true,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    992: {
                        items: 4
                    }
                }
            });

            // services Carousel
            $(".services-carousel").owlCarousel({
                loop: true,
                margin: 0,
                autoplay: true,
                autoplayTimeout: 3000,
                responsive: {
                    0: {
                        items: 2
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 3
                    }
                }
            });

            // Client Carousel
            $(".client-carousel").owlCarousel({
                loop: true,
                margin: 30,
                autoplay: true,
                autoplayTimeout: 3000,
                responsive: {
                    0: {
                        items: 2
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 7
                    }
                }
            });

            // Navbar scroll effect
            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    $('header').addClass('scrolled');
                    $('.back-to-top').fadeIn();
                } else {
                    $('header').removeClass('scrolled');
                    $('.back-to-top').fadeOut();
                }
            });

            // Back to top button
            $('.back-to-top').click(function () {
                $('html, body').animate({ scrollTop: 0 }, 800);
                return false;
            });

            // Smooth scrolling for anchor links
            $('a[href*="#"]').on('click', function (e) {
                e.preventDefault();

                $('html, body').animate(
                    {
                        scrollTop: $($(this).attr('href')).offset().top,
                    },
                    500,
                    'linear'
                );
            });
        });

        // Fade-in animation on scroll
        const fadeInElements = document.querySelectorAll('.fade-in-section, .fade-in-left, .fade-in-right');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');

                    // If it's the stats section, animate the counters
                    if (entry.target.querySelector('.stats-number')) {
                        animateStats();
                    }
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        fadeInElements.forEach(element => {
            observer.observe(element);
        });

        // Stats counter animation
        function animateStats() {
            const counters = document.querySelectorAll('.stats-number');
            const speed = 200; // The lower the slower

            counters.forEach(counter => {
                const updateCount = () => {
                    const target = +counter.getAttribute('data-target');
                    const count = +counter.innerText.replace(/\D/g, "");
                    const inc = target / speed;

                    // Check if target is reached
                    if (count < target) {
                        // Add inc to count and output in element
                        counter.innerText = Math.ceil(count + inc) + (counter.innerText.includes('%') ? '%' : '+');
                        // Call function every ms
                        setTimeout(updateCount, 1);
                    } else {
                        counter.innerText = target + (counter.innerText.includes('%') ? '%' : '+');
                    }
                };

                updateCount();
            });
        }

        // Header scroll effect
        window.addEventListener('scroll', function () {
            const header = document.querySelector('header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });