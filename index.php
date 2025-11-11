<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ikechi Global Services Limited | Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
<style>
    :root {
        --primary: #f6b61b;
        --secondary: #0d6efd;
        --dark: #1e2a38;
        --light: #f8f9fa;
        --accent: #20c997;
        --text-dark: #333;
        --text-light: #6c757d;
        --gradient: linear-gradient(135deg, var(--primary), #0a58ca);
        --shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        --transition: all 0.3s ease;
        a{
            text-decoration: none;
        }
    }


    .section-title {
        position: relative;
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 3rem;
        text-align: center;
    }

    .section-title:after {
        content: '';
        position: absolute;
        bottom: -15px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: var(--gradient);
        border-radius: 2px;
    }


    /* ** NEW SERVICES MODAL **
    This CSS now styles the dropdown as a full-screen modal
    for ALL screen sizes.
    */
    .services-dropdown {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background: white;
        box-shadow: var(--shadow);
        z-index: 2010; /* Higher than mobile nav */
        padding: 3rem 2rem;
        border-radius: 0;
        overflow-y: auto;

        /* Hide by default */
        display: none;
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .services-dropdown.active {
        display: block;
        transform: translateY(0);
        opacity: 1;
    }

    .services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 2rem;
        max-width: 1200px;
        margin: 0 auto;
    }

    .service-item {
        padding: 2rem;
        border-radius: 15px;
        background: white;
        box-shadow: var(--shadow);
        transition: var(--transition);
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        border: 1px solid rgba(0, 0, 0, 0.05);
        position: relative;
        overflow: hidden;
    }

    .service-item:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 5px;
        height: 100%;
        background: var(--gradient);
        transition: var(--transition);
    }

    .service-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
    }

    .service-item:hover:before {
        width: 100%;
        opacity: 0.05;
    }

    .service-icon {
        font-size: 2.5rem;
        margin-bottom: 1.5rem;
        color: var(--primary);
        z-index: 1;
    }

    .service-item h3 {
        color: var(--dark);
        margin-bottom: 1rem;
        font-size: 1.3rem;
        z-index: 1;
    }

    .service-item p {
        color: var(--text-light);
        font-size: 0.95rem;
        z-index: 1;
    }

    .dropdown-close {
        /* Position fixed so it stays in view on scroll */
        position: fixed;
        top: 1.5rem;
        right: 1.5rem;
        background: none;
        border: none;
        font-size: 1.5rem;
        cursor: pointer;
        color: var(--text-light);
        transition: var(--transition);
        z-index: 2011; /* Above the dropdown */
    }

    .dropdown-close:hover {
        color: var(--primary);
        transform: rotate(90deg);
    }

    .services-header {
        text-align: center;
        margin-bottom: 3rem;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
        padding-top: 3rem; /* Add padding to account for fixed close btn */
    }

    .services-header h2 {
        color: var(--dark);
        font-size: 2.2rem;
        margin-bottom: 1rem;
    }

    .services-header p {
        color: var(--text-light);
        font-size: 1.1rem;
    }
    
    /* End of New Services Modal Styles */


    /* Modern Cards */
    .modern-card {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: var(--shadow);
        transition: var(--transition);
        height: 100%;
        position: relative;
    }

    .modern-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
    }

    .modern-card-img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .modern-card-body {
        padding: 1.5rem;
    }

    .modern-card-title {
        font-size: 1.25rem;
        font-weight: 700;
        margin-bottom: 0.75rem;
        color: var(--dark);
    }

    .modern-card-text {
        color: var(--text-light);
        margin-bottom: 1.5rem;
    }

    .modern-card-icon {
        position: absolute;
        top: 1.5rem;
        right: 1.5rem;
        width: 50px;
        height: 50px;
        background: var(--gradient);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.2rem;
        box-shadow: 0 5px 15px rgba(13, 110, 253, 0.3);
    }

    /* Stats Section */
    .stats-section {
        background: var(--gradient);
        color: white;
        padding: 80px 0;
        position: relative;
        overflow: hidden;
    }

    .stats-section:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"><path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" fill="white"/></svg>');
        background-size: cover;
        opacity: 0.1;
    }

    .stats-item {
        text-align: center;
        padding: 20px;
        position: relative;
        z-index: 1;
    }

    .stats-number {
        font-size: 3rem;
        font-weight: 800;
        margin-bottom: 0.5rem;
        display: block;
    }

    .stats-label {
        font-size: 1.1rem;
        opacity: 0.9;
    }

    /* About Section */
    .about-section {
        position: relative;
        overflow: hidden;
    }

    .about-img {
        border-radius: 15px;
        box-shadow: var(--shadow);
    }

    .custom-checkmarks li {
        position: relative;
        padding-left: 35px;
        margin-bottom: 20px;
        list-style: none;
    }

    .custom-checkmarks li:before {
        content: '\f00c';
        font-family: 'Font Awesome 6 Free'; /* Use correct family name */
        font-weight: 900;
        position: absolute;
        left: 0;
        top: 0;
        color: var(--primary);
        font-size: 1.2rem;
    }

    /* Client Section */
    .client-section {
        background: var(--light);
    }

    .client-logo {
        height: 80px;
        width: 150px;
        object-fit: contain;
        filter: grayscale(100%);
        opacity: 0.6;
        transition: var(--transition);
        margin: 0 auto;
    }

    .client-logo:hover {
        filter: grayscale(0);
        opacity: 1;
    }

    /* Footer */
    .footer {
        background: var(--dark);
        color: white;
        padding: 80px 0 20px;
    }

    .footer h4 {
        position: relative;
        padding-bottom: 15px;
        margin-bottom: 25px;
    }

    .footer h4:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 40px;
        height: 3px;
        background: var(--primary);
    }

    .footer-links li {
        margin-bottom: 12px;
    }

    .footer-links a {
        color: rgba(255, 255, 255, 0.7);
        text-decoration: none;
        transition: var(--transition);
    }

    .footer-links a:hover {
        color: white;
        padding-left: 5px;
    }

    .social-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        background: rgba(255, 255, 255, 0.1);
        color: white;
        border-radius: 50%;
        margin-right: 10px;
        transition: var(--transition);
    }

    .social-icon:hover {
        background: var(--primary);
        transform: translateY(-5px);
    }

    /* Animations */
    .fade-in-section {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.8s ease, transform 0.8s ease;
    }

    .fade-in-section.visible {
        opacity: 1;
        transform: translateY(0);
    }

    /* Responsive Design */
    @media (max-width: 992px) {
        .nav-links {
            display: none;
        }

        .hamburger {
            display: flex;
        }

        .hero-content h1 {
            font-size: 2.5rem;
        }

        .section-title {
            font-size: 2rem;
        }
    }

    @media (max-width: 768px) {
        .hero-content h1 {
            font-size: 2rem;
        }

        .hero-content p {
            font-size: 1rem;
        }

        .services-grid {
            grid-template-columns: 1fr;
        }

        .btn-modern {
            padding: 10px 20px;
            font-size: 0.9rem;
        }
        
        .mobile-nav-panel {
            width: 280px;
        }
        
        .section-padding {
            padding: 60px 0;
        }
    }

    @media (max-width: 576px) {
        .hero-content {
            width: 90%;
        }
        
        .hero-content h1 {
            font-size: 1.8rem;
        }
        
        .mobile-nav-panel {
            width: 100%;
        }
    }
</style>

</head>

<body>
<?php include_once('header.php') ?>
    <section class="hero-section m-auto" data-aos="fade-up">
        <div class="owl-carousel owl-theme hero-carousel m-auto">
            <div class="item m-auto">
                <img src="./images/security-hero.png" alt="Security and Logistics" class="hero-bg">
                <div class="hero-content  m-auto text-center">
                    <h1 class="display-3 fw-bold mb-2">Onshore/Offshore Security Services</h1>
                    <!-- note to change -->
                    <p class="lead mb-2">Professional Security Services, Leasing solutions, Marine Equipment & Logistics, and Engineering expertise to support your operations.</p>
                    <div class="d-flex gap-3 justify-content-center flex-wrap">
                        <a href="services.html" class="btn-modern btn-primary-modern">Our Services</a>
                        <a href="contact-us.html" class="btn-modern btn-outline-modern">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="./images/engineering-service.jpg" alt="Engineering Site" class="hero-bg">
                <div class="hero-content  m-auto text-center">
                    <h1 class="display-3 fw-bold mb-2">Engineering & Procurement</h1>
                    <p class="lead mb-2">We combine engineering precision with procurement and consultancy to deliver end-to-end solutions.</p>
                    <div class="d-flex gap-3 justify-content-center flex-wrap">
                        <a href="about.html" class="btn-modern btn-primary-modern">About Us</a>
                        <a href="projects.html" class="btn-modern btn-outline-modern">Our Projects</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="./images/marine-equipment-2.jpg" alt="Marine Equipment" class="hero-bg">
                <div class="hero-content  m-auto text-center">
                    <h1 class="display-3 fw-bold mb-2">Marine Equipment & Logistics</h1>
                    <p class="lead mb-2">Supply and logistics for marine operations including equipment hire</p>
                    <div class="d-flex gap-3 justify-content-center flex-wrap">
                        <a href="about.html" class="btn-modern btn-primary-modern">About Us</a>
                        <a href="projects.html" class="btn-modern btn-outline-modern">Our Projects</a>
                    </div>
                </div>
            </div>            
            <div class="item">
                <img src="./images/clearing.jpg" alt="Cargo and Forwarding" class="hero-bg">
                <div class="hero-content  m-auto text-center">
                    <h1 class="display-3 fw-bold mb-2">Clearing & Forwarding</h1>
                    <p class="lead mb-2">Trusted clearing, forwarding and logistics services to move your cargo safely and efficiently.</p>
                    <div class="d-flex gap-3 justify-content-center flex-wrap">
                        <a href="services.html" class="btn-modern btn-primary-modern">Learn More</a>
                        <a href="contact-us.html" class="btn-modern btn-outline-modern">Get in Touch</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="stats-section fade-in-section" data-aos="fade-up">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-3 col-6">
                    <div class="stats-item">
                        <span class="stats-number" data-target="25">0</span>+
                        <div class="stats-label">Completed Projects</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stats-item">
                        <span class="stats-number" data-target="500">0</span>+
                        <div class="stats-label">Equipments & Tools</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stats-item">
                        <span class="stats-number" data-target="120">0</span>+
                        <div class="stats-label">Professionals</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stats-item">
                        <span class="stats-number" data-target="100">0</span>%
                        <div class="stats-label">Client Satisfaction</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding about-section fade-in-section" data-aos="fade-up">
        <div class="container">
            <h2 class="section-title">About Us</h2>
            <div class="row align-items-center">
                <div class="col-lg-7 p-4">
                    <p class="lead">Ikechi Global Services is a leading construction, logistics and engineering firm dedicated to delivering exceptional quality and innovative solutions.</p>
                    <hr>
                    <ul class="custom-checkmarks ps-3">
                        <li>
                            <h5 class="mb-1">Our Expertise</h5>
                            <span>
                                Our team of highly skilled professionals combines technical expertise with creative problem-solving to tackle even the most complex construction challenges. With decades of combined experience across civil, mechanical, electrical, and marine disciplines, we deliver turnkey solutions from concept and design through procurement, construction, and commissioning. We maintain rigorous safety and quality management systems, hold industry-recognized certifications, and employ sustainable practices to minimize environmental impact.
                            </span>
                        </li>
                    </ul>

                    <div class="mt-4">
                        <a href="about.html" class="btn-modern btn-primary-modern">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <img src="./images/about-us-1.jpg" alt="About Us" class="img-fluid about-img">
                </div>
            </div>
        </div>
    </section>

        <!-- Our [pojects] Section -->
    <style>
        :root {
            --yellow-primary: #FFD700;
            --yellow-dark: #FFC000;
            --yellow-light: #FFF9C4;
        }

        .services-carousel {
            position: relative;
            overflow: hidden;
        }

        .portfolio-item {
            height: 500px;
            position: relative;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .service-bg {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .portfolio-item:hover .service-bg {
            transform: scale(1.05);
        }

        .service-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8) 0%, transparent 100%);
            padding: 30px;
            color: white;
        }

        .service-badge {
            background-color: var(--yellow-primary);
            color: #111;
            font-weight: 600;
            padding: 5px 15px;
            border-radius: 20px;
            display: inline-block;
            margin-bottom: 15px;
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .service-title {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .owl-nav {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
            padding: 0 15px;
        }

        .owl-dots {
            text-align: center;
            margin-top: 20px;
        }

        .owl-dot span {
            background: #ccc !important;
        }

        .owl-dot.active span {
            background: var(--yellow-primary) !important;
        }
    </style>
    <!-- Our Projects Section -->
    <section class="Projects py-5 bg-light fade-in-section" data-aos="fade-up">
        <div class="container">
            <h2 class="section-title text-center">Our Projects</h2>
            <p class="text-center mb-5">Explore some of our recent and notable construction projects.</p>
            <div class="owl-carousel owl-theme projects">
                <!-- Project Item 1 -->
                <div class="portfolio-item">
                    <img src="https://ghinternational.ng/images/portfolio/project/civil/full/item_civil3.jpg"
                        class="service-bg" alt="Design Service">
                    <div class="service-overlay">
                        <span class="service-badge">Civil</span>
                        <h3 class="service-title">Ologbo Access Road</h3>
                    </div>
                </div>

                <!-- Project Item 2 -->
                <div class="portfolio-item">
                    <img src="https://ghinternational.ng/images/portfolio/project/civil/full/item_civil6.jpg"
                        class="service-bg" alt="Development Service">
                    <div class="service-overlay">
                        <span class="service-badge">civil</span>
                        <h3 class="service-title">Ologbo Access Road</h3>
                    </div>
                </div>

                <!-- Project Item 3 -->
                <div class="portfolio-item">
                    <img src="https://ghinternational.ng/images/portfolio/project/pipeline/full/Item_pipe11.jpg"
                        class="service-bg" alt="Marketing Service">
                    <div class="service-overlay">
                        <span class="service-badge">Pipeline</span>
                        <h3 class="service-title">Laying Pipelines</h3>
                    </div>
                </div>

                <!-- Project Item 4 -->
                <div class="portfolio-item">
                    <img src="https://ghinternational.ng/images/portfolio/project/installation/full/item_installation7.jpg"
                        class="service-bg" alt="Consulting Service">
                    <div class="service-overlay">
                        <span class="service-badge">installation</span>
                        <h3 class="service-title">Installations Services</h3>
                    </div>
                </div>

                <!-- Project Item 5 -->
                <div class="portfolio-item">
                    <img src="https://ghinternational.ng/images/portfolio/project/structural/full/Item_structural8.jpg"
                        class="service-bg" alt="Branding Service">
                    <div class="service-overlay">
                        <span class="service-badge">Structure</span>
                        <h3 class="service-title">Creation of Bullding Structures</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section-padding fade-in-section" style="background-color: #fdfdfd;" data-aos="fade-up">
        <div class="container">
            <h2 class="section-title">Our Services</h2>
            <p class="text-center mb-5">Explore our comprehensive range of professional services</p>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="modern-card">
                        <img src="./images/security.jpg" class="modern-card-img" alt="Security Services">
                        <div class="modern-card-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div class="modern-card-body">
                            <h4 class="modern-card-title">Security Services</h4>
                            <p class="modern-card-text">Professional security solutions including static guards, mobile patrols and site protection tailored to your operations.</p>
                            <a href="#" class="text-dark">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="modern-card">
                        <img src="./images/leasing-2.jpg" class="modern-card-img" alt="Leasing Services">
                        <div class="modern-card-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <div class="modern-card-body">
                            <h4 class="modern-card-title">Leasing Services</h4>
                            <p class="modern-card-text">Flexible leasing solutions for equipment and manpower — short- or long-term arrangements to meet project demands.</p>
                            <a href="#" class="text-dark">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="modern-card">
                        <img src="./images/marine-equipment.jpg" class="modern-card-img" alt="Marine Equipment & Logistics">
                        <div class="modern-card-icon">
                            <i class="fas fa-ship"></i>
                        </div>
                        <div class="modern-card-body">
                            <h4 class="modern-card-title">Marine Equipment & Logistics</h4>
                            <p class="modern-card-text">Supply and logistics for marine operations including equipment hire, vessel support and offshore logistics coordination.</p>
                            <a href="#" class="text-dark">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="modern-card">
                        <img src="./images/engineering-service.jpg" class="modern-card-img" alt="Engineering Services">
                        <div class="modern-card-icon">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <div class="modern-card-body">
                            <h4 class="modern-card-title">Engineering Services</h4>
                            <p class="modern-card-text">Multidisciplinary engineering support — design, analysis, fabrication and commissioning across civil, mechanical and electrical disciplines.</p>
                            <a href="#" class="text-dark">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="modern-card">
                        <img src="./images/procurement-2.jpg" class="modern-card-img" alt="Procurement & Consultancy">
                        <div class="modern-card-icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <div class="modern-card-body">
                            <h4 class="modern-card-title">Procurement & Consultancy</h4>
                            <p class="modern-card-text">End-to-end procurement services combined with expert consultancy to optimize cost, lead times and supplier performance.</p>
                            <a href="#" class="text-dark">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="modern-card">
                        <img src="./images/clearing.jpg" class="modern-card-img" alt="Clearing & Forwarding">
                        <div class="modern-card-icon">
                            <i class="fas fa-truck-loading"></i>
                        </div>
                        <div class="modern-card-body">
                            <h4 class="modern-card-title">Clearing & Forwarding</h4>
                            <p class="modern-card-text">Reliable clearing, forwarding and freight services to ensure smooth cross-border movement and on-time delivery of cargo.</p>
                            <a href="#" class="text-dark">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="#" class="btn-modern btn-primary-modern services-link">View All Services</a>
            </div>
        </div>
    </section>

    <section class="section-padding client-section fade-in-section" data-aos="fade-up">
        <div class="container">
            <h2 class="section-title">Our Clients</h2>
            <p class="text-center mb-5">We're proud to have worked with these leading organizations</p>

            <div class="owl-carousel owl-theme client-carousel">
                <div class="item text-center">
                    <img src="https://placehold.co/150x80/eeeeee/999999?text=Alacrity" alt="Client Alacrity" class="img-fluid client-logo">
                </div>
                <div class="item text-center">
                    <img src="https://placehold.co/150x80/eeeeee/999999?text=Chevron" alt="Client Chevron" class="img-fluid client-logo">
                </div>
                <div class="item text-center">
                    <img src="https://placehold.co/150x80/eeeeee/999999?text=Desicon" alt="Client Desicon" class="img-fluid client-logo">
                </div>
                <div class="item text-center">
                    <img src="https://placehold.co/150x80/eeeeee/999999?text=G%26H" alt="Client G&H" class="img-fluid client-logo">
                </div>
                <div class="item text-center">
                    <img src="https://placehold.co/150x80/eeeeee/999999?text=Lekoil" alt="Client Lekoil" class="img-fluid client-logo">
                </div>
                <div class="item text-center">
                    <img src="https://placehold.co/150x80/eeeeee/999999?text=MidWtr" alt="Client MidWtr" class="img-fluid client-logo">
                </div>
                <div class="item text-center">
                    <img src="https://placehold.co/150x80/eeeeee/999999?text=NGC" alt="Client NGC" class="img-fluid client-logo">
                </div>
            </div>
        </div>
    </section>

    <footer class="footer fade-in-section" data-aos="fade-up">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <h3 class="text-white mb-4"><span class="text-primary">Ikechi</span>Global</h3>
                    <p>Leading the way in innovative construction and engineering solutions since 1995. We build with integrity, quality, and a commitment to excellence.</p>
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
                        <li class="mb-2"><a href="#">Home</a></li>
                        <li class="mb-2"><a href="#about">About Us</a></li>
                        <li class="mb-2"><a href="#services">Services</a></li>
                        <li class="mb-2"><a href="#projects">Projects</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4">
                    <h4 class="text-white mb-4">Services</h4>
                    <ul class="list-unstyled footer-links">
                        <li class="mb-2"><a href="#">Security Services</a></li>
                        <li class="mb-2"><a href="#">Leasing Services</a></li>
                        <li class="mb-2"><a href="#">Marine Logistics</a></li>
                        <li class="mb-2"><a href="#">Engineering</a></li>
                        <li class="mb-2"><a href="#">Procurement</a></li>
                        <li class="mb-2"><a href="#">Clearing & Forwarding</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4" id="contact">
                    <h4 class="text-white mb-4">Contact Us</h4>
                    <ul class="list-unstyled footer-links">
                        <li class="mb-3"><i class="bi bi-geo-alt-fill me-2 text-warning"></i> 123 Construction Ave, Building City, BC 12345</li>
                        <li class="mb-3"><i class="bi bi-telephone-fill me-2 text-warning"></i> (123) 456-7890</li>
                        <li class="mb-3"><i class="bi bi-envelope-fill me-2 text-warning"></i> info@ikechiglobalservices.com</li>
                        <li class="mb-3"><i class="bi bi-clock-fill me-2 text-warning"></i> Mon-Fri: 8:00 AM - 6:00 PM</li>
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
</body>

</html>