<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ikechi Global Services Limited | Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <style>
        
        .hero-image {
            position: relative;
            z-index: 2;
            border-radius: 10px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        /* Contact Form Styles */
        .contact-form .form-control {
            border-radius: 10px;
            padding: 12px;
            border: 1px solid #dee2e6;
            transition: var(--transition);
        }

        .contact-form .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.25rem rgba(246, 182, 27, 0.25);
        }
        
        .btn-submit-modern {
            background: var(--gradient); 
            border: none; 
            padding: 12px 30px; 
            border-radius: 30px; 
            font-weight: 600;
            color: white;
            transition: var(--transition);
        }
        
        .btn-submit-modern:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(13, 110, 253, 0.4);
        }

        /* Contact Info Styles */
        .contact-info-item {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
        }

        .contact-info-icon {
            width: 50px;
            height: 50px;
            background: var(--gradient);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            margin-right: 20px;
            flex-shrink: 0;
        }
        
        .contact-info-item strong {
            display: block;
            margin-bottom: 2px;
            color: var(--text-dark);
        }
        
        .contact-info-item p {
            margin-bottom: 0;
            color: var(--text-light);
        }

        /* Map Container */
        .map-container {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: var(--shadow);
            height: 450px;
            background-color: #e0e0e0;
        }

        .map-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>

<body>
<?php include_once('header.php'); ?>


        <!-- Modern Hero Section -->
    <section data-aos="fade-up" class="modern-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <div class="hero-content">
                        <span class="hero-badge">Contact Us</span>
                        <h1 class="hero-title">Get in Touch with Ikechi Global</h1>
                        <p class="hero-subtitle">Have a question or need a consultation? Complete the form on this page, call us, or send an email and our team will respond within 24 hours.</p>
                        <div class="d-flex flex-wrap align-items-center gap-2">
                            <a href="#contact" class="btn-modern">Contact Details</a>
                            <a href="tel:+1234567890" class="btn-modern" style="background:#fff;color:#000;border:1px solid rgba(0,0,0,0.08);">Call: (123) 456-7890</a>
                            <a href="mailto:info@ikechiglobalservices.com" class="btn-modern" style="background:#fff;color:#000;border:1px solid rgba(0,0,0,0.08);">Email Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                    <img src="./images/services/engineering.jpg" 
                         alt="Engineering Services" 
                         class="img-fluid rounded-4">
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding fade-in-section">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                    <h2 class="mb-4">Send Us a Message</h2>
                    <form class="contact-form row g-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-label">Phone (Optional)</label>
                            <input type="tel" class="form-control" id="phone">
                        </div>
                        <div class="col-md-6">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" required>
                        </div>
                        <div class="col-12">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="6" required></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn-submit-modern">Send Message</button>
                        </div>
                    </form>
                </div>
                
                <div class="col-lg-5">
                    <h2 class="mb-4">Contact Information</h2>
                    <div class="contact-info-item">
                        <div class="contact-info-icon"><i class="bi bi-geo-alt-fill"></i></div>
                        <div>
                            <strong>Address:</strong>
                            <p>Head Office: Lagos, Nigeria</p>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="contact-info-icon"><i class="bi bi-telephone-fill"></i></div>
                        <div>
                            <strong>Phone:</strong>
                            <p>(123) 456-7890</p>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="contact-info-icon"><i class="bi bi-envelope-fill"></i></div>
                        <div>
                            <strong>Email:</strong>
                            <p>info@ikechiglobalservices.com</p>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="contact-info-icon"><i class="bi bi-clock-fill"></i></div>
                        <div>
                            <strong>Business Hours:</strong>
                            <p>Mon-Fri: 8:00 AM - 6:00 PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding pt-0 fade-in-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title text-center mb-5">Our Location</h2>
                    <div class="map-container">
                        <img src="https://placehold.co/1200x450/e0e0e0/999999?text=Google+Map+Placeholder" alt="Map Location">
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                        <li class="mb-2"><a href="index.html">Home</a></li>
                        <li class="mb-2"><a href="about.html">About Us</a></li>
                        <li class="mb-2"><a href="projects.html">Projects</a></li>
                        <li class="mb-2"><a class="services-link">Services</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4">
                    <h4 class="text-white mb-4">Services</h4>
                    <ul class="list-unstyled footer-links">
                        <li class="mb-2"><a class="services-link">Security Services</a></li>
                        <li class="mb-2"><a class="services-link">Leasing Services</a></li>
                        <li class="mb-2"><a class="services-link">Marine Logistics</a></li>
                        <li class="mb-2"><a class="services-link">Engineering</a></li>
                        <li class="mb-2"><a class="services-link">Procurement</a></li>
                        <li class="mb-2"><a class="services-link">Clearing & Forwarding</a></li>
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
                        <li class="mb-3"><i class="bi bi-clock-fill me-2 text-warning"></i> Mon-Fri: 8:00 AM - 6:00
                            PM
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
                    <p class="mb-0">Designed with <i class="bi bi-heart-fill text-danger"></i> by Ikechi Global Team
                    </p>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    
    <script>
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
                // Only remove modal-open if the services modal isn't also open
                if (!document.querySelector('.services-dropdown.active')) {
                    document.body.classList.remove('modal-open');
                }
            }

            hamburger.addEventListener('click', openMobileMenu);
            mobileNavCloseBtn.addEventListener('click', closeMobileMenu);
            overlay.addEventListener('click', closeMobileMenu);


            // *** UNIFIED SERVICES MODAL SCRIPT ***
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
                // Only remove modal-open if the mobile nav isn't also open
                if (!mobileNavPanel.classList.contains('active')) {
                    document.body.classList.remove('modal-open');
                }
            }

            // Attach listener to all "Services" links
            servicesOpenLinks.forEach(link => {
                link.addEventListener('click', openServicesModal);
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

        });
    </script>
</body>

</html>