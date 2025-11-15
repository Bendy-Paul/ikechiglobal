    <footer class="footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <h3 class="text-white mb-4"><span class="text-primary">Ikechi</span>Global</h3>
                    <p>Leading the way in security, leasing, logistics and engineering solutions. We operate with
                        integrity, quality, and a commitment to excellence.</p>
                    <div class="mt-4">
                        <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <h4 class="text-white mb-4">Quick Links</h4>
                    <ul class="list-unstyled footer-links">
                        <li class="mb-2"><a href="./">Home</a></li>
                        <li class="mb-2"><a href="./about.php">About Us</a></li>
                        <li class="mb-2"><a href="./projects.php">Projects</a></li>
                        <!-- <li class="mb-2"><a href="#" class="services-link">Services</a></li> -->
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4">
                    <h4 class="text-white mb-4">Services</h4>
                    <ul class="list-unstyled footer-links">
                        <li class="mb-2"><a href="./security-services.php" class="services-link">Security Services</a></li>
                        <li class="mb-2"><a href="./security-services.php" class="services-link">Leasing Services</a></li>
                        <li class="mb-2"><a href="./marine-logistics.php" class="services-link">Marine Logistics</a></li>
                        <li class="mb-2"><a href="./engineering-services.php" class="services-link">Engineering</a></li>
                        <li class="mb-2"><a href="./procurement-consultancy.php" class="services-link">Procurement</a></li>
                        <li class="mb-2"><a href="./clearing-forwarding.php" class="services-link">Clearing & Forwarding</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4" id="contact">
                    <h4 class="text-white mb-4">Contact Us</h4>
                    <ul class="list-unstyled footer-links">
                        <li class="mb-3"><i class="bi bi-geo-alt-fill me-2 text-warning"></i> Head Office: Lagos,
                            Nigeria</li>
                        <li class="mb-3"><i class="bi bi-telephone-fill me-2 text-warning"></i> (123) 456-7890</li>
                        <li class="mb-3"><i class="bi bi-envelope-fill me-2 text-warning"></i> info@ikechiglobalservices.com
                        </li>
                        <li class="mb-3"><i class="bi bi-clock-fill me-2 text-warning"></i> Mon-Fri: 8:00 AM - 6:00 PM
                        </li>
                    </ul>
                </div>
            </div>
            <hr class="mt-5 mb-4" style="border-color: rgba(255,255,255,0.1);">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; 2023 Ikechi Global Services. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Designed with <i class="bi bi-heart-fill text-danger"></i> by Ikechi Global Team</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="./js/script.js"></script>
    <script>
                // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            offset: 100
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
        
        // *** NEW SIMPLIFIED SCRIPT ***

        document.addEventListener('DOMContentLoaded', () => {

            // Mobile menu functionality
            const hamburger = document.querySelector('.hamburger');
            const mobileNavPanel = document.querySelector('.mobile-nav-panel');
            const overlay = document.querySelector('.overlay');
            const mobileNavCloseBtn = document.querySelector('.mobile-nav-panel .close-btn');

            function openMobileMenu() {
                hamburger.classList.add('active');
                mobileNavPanel.classList.add('active');
                overlay.classList.add('active');
                document.body.classList.add('modal-open');
            }

            function closeMobileMenu() {
                hamburger.classList.remove('active');
                mobileNavPanel.classList.remove('active');
                overlay.classList.remove('active');
                document.body.classList.remove('modal-open');
            }

            hamburger.addEventListener('click', openMobileMenu);
            mobileNavCloseBtn.addEventListener('click', closeMobileMenu);
            overlay.addEventListener('click', closeMobileMenu);


            // *** NEW UNIFIED SERVICES MODAL SCRIPT ***
            const servicesDropdown = document.querySelector('.services-dropdown');
            const servicesModalCloseBtn = document.querySelector('.services-dropdown .dropdown-close');
            // Get ALL links that should open the services modal
            const servicesOpenLinks = document.querySelectorAll('.services-link, .services-link-mobile');

            function openServicesModal(e) {
                e.preventDefault();
                // Close mobile nav if it's open
                if (mobileNavPanel.classList.contains('active')) {
                    closeMobileMenu();
                }
                servicesDropdown.classList.add('active');
                document.body.classList.add('modal-open');
            }

            function closeServicesModal() {
                servicesDropdown.classList.remove('active');
                document.body.classList.remove('modal-open');
            }

            // Attach listener to all "Services" links
            servicesOpenLinks.forEach(link => {
                link.addEventListener('mouseenter', openServicesModal);
            });

            // Attach listener to the close button
            servicesModalCloseBtn.addEventListener('click', closeServicesModal);


            // Header scroll effect
            window.addEventListener('scroll', () => {
                const header = document.getElementById('main-header');
                if (window.scrollY > 50) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });

            // Stats counter animation
            function animateStats(entries, observer) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const counters = document.querySelectorAll('.stats-number');
                        const speed = 200; // Duration of the animation

                        counters.forEach(counter => {
                            const target = +counter.getAttribute('data-target');
                            const suffix = counter.innerText.replace(/[0-9]/g, '');

                            const updateCount = () => {
                                const countText = counter.innerText.replace(/[^0-9]/g, '');
                                const count = +countText;
                                const increment = target / speed;

                                if (count < target) {
                                    let newCount = Math.ceil(count + increment);
                                    if (newCount > target) newCount = target;
                                    counter.innerText = newCount + suffix;
                                    requestAnimationFrame(updateCount);
                                } else {
                                    counter.innerText = target + suffix;
                                }
                            };
                            updateCount();
                        });
                        observer.unobserve(entry.target);
                    }
                });
            }

            // Initialize stats animation when in viewport
            const statsSection = document.querySelector('.stats-section');
            if (statsSection) {
                const statsObserver = new IntersectionObserver(animateStats, { threshold: 0.5 });
                statsObserver.observe(statsSection);
            }

            // Fade-in sections on scroll
            const fadeInObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        fadeInObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1 });

            document.querySelectorAll('.fade-in-section').forEach(section => {
                fadeInObserver.observe(section);
            });


            // Initialize Owl Carousel (requires jQuery)
            if (window.jQuery) {
                $(".hero-carousel").owlCarousel({
                    items: 1,
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    autoplayHoverPause: true,
                    nav: true,
                    dots: true,
                    animateOut: 'fadeOut',
                    animateIn: 'fadeIn',
                    smartSpeed: 1000,
                    navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]
                });

                $(".client-carousel").owlCarousel({
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    margin: 30,
                    dots: false,
                    responsive:{
                        0:{ items:2 },
                        600:{ items:3 },
                        1000:{ items:5 }
                    }
                });
            } else {
                console.warn("jQuery not loaded, Owl Carousel will not work.");
            }

        });
    </script>