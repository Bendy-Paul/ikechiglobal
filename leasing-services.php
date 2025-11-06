<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ikechi Global Services Limited | Leasing Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

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
            --border-radius: 12px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--light);
            color: var(--text-dark);
            line-height: 1.6;
            overflow-x: hidden;
        }

        body.modal-open {
            overflow: hidden;
        }

        h1, h2, h3, h4, h5, h6 {
            font-weight: 700;
            line-height: 1.2;
        }

        .section-padding {
            padding: 100px 0;
        }

        .section-title {
            position: relative;
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 3.5rem;
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

        /* Modern Header Styles */
        #main-header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            padding: 15px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: var(--transition);
        }

        #main-header.scrolled {
            padding: 10px 5%;
            background: rgba(255, 255, 255, 0.98);
        }

        .logo {
            display: flex;
            align-items: center;
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--dark);
            z-index: 1001;
            text-decoration: none;
        }

        .logo-icon {
            margin-right: 10px;
            color: var(--primary);
        }

        .logo span {
            color: var(--primary);
        }

        .nav-links ul {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav-links li {
            margin: 0 10px;
            position: relative;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--dark);
            font-weight: 500;
            position: relative;
            padding: 8px 15px;
            border-radius: 30px;
            transition: var(--transition);
            cursor: pointer;
        }

        .nav-links a:hover {
            color: var(--primary);
            background: rgba(13, 110, 253, 0.05);
        }

        .nav-links a.active {
            color: var(--primary);
            background: rgba(13, 110, 253, 0.1);
        }

        .hamburger {
            display: none;
            cursor: pointer;
            flex-direction: column;
            width: 30px;
            height: 30px;
            justify-content: center;
            align-items: center;
            z-index: 1001;
        }

        .bar {
            display: block;
            width: 25px;
            height: 3px;
            margin: 3px 0;
            background: var(--dark);
            transition: var(--transition);
            border-radius: 2px;
        }

        .hamburger.active .bar:nth-child(1) {
            transform: rotate(45deg) translate(5px, 5px);
        }

        .hamburger.active .bar:nth-child(2) {
            opacity: 0;
        }

        .hamburger.active .bar:nth-child(3) {
            transform: rotate(-45deg) translate(7px, -6px);
        }

        /* Mobile Menu Styles */
        .mobile-nav-panel {
            position: fixed;
            top: 0;
            right: -100%;
            width: 300px;
            height: 100vh;
            background: white;
            z-index: 2000;
            padding: 80px 30px 30px;
            transition: var(--transition);
            box-shadow: -5px 0 30px rgba(0, 0, 0, 0.1);
            overflow-y: auto;
        }

        .mobile-nav-panel.active {
            right: 0;
        }

        .modal-logo {
            display: flex;
            align-items: center;
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 30px;
        }

        .modal-nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .modal-nav li {
            margin-bottom: 15px;
        }

        .modal-nav a {
            text-decoration: none;
            color: var(--dark);
            font-weight: 500;
            padding: 10px 15px;
            border-radius: 30px;
            display: block;
            transition: var(--transition);
            cursor: pointer;
        }

        .modal-nav a:hover {
            color: var(--primary);
            background: rgba(13, 110, 253, 0.05);
        }

        .close-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--dark);
            transition: var(--transition);
        }

        .close-btn:hover {
            color: var(--primary);
            transform: rotate(90deg);
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1999;
            opacity: 0;
            visibility: hidden;
            transition: var(--transition);
        }

        .overlay.active {
            opacity: 1;
            visibility: visible;
        }

        /* Services Modal */
        .services-dropdown {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: white;
            box-shadow: var(--shadow);
            z-index: 2010;
            padding: 3rem 2rem;
            overflow-y: auto;
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

        /* This is the new link wrapper for the service item */
        .service-item-link {
            text-decoration: none;
            color: inherit;
            display: block;
            border-radius: 15px;
            transition: var(--transition);
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
            height: 100%; /* Make sure all cards are same height */
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

        /* Apply hover effects to the link */
        .service-item-link:hover .service-item {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .service-item-link:hover .service-item:before {
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
            position: fixed;
            top: 1.5rem;
            right: 1.5rem;
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--text-light);
            transition: var(--transition);
            z-index: 2011;
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
            padding-top: 3rem;
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
        
        /* End of Services Modal Styles */

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
            cursor: pointer;
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
        
        /* --- MODERNIZED LEASING SERVICE PAGE STYLES --- */

        .modern-hero {
            background: linear-gradient(135deg, #102149 0%, #1e2a38 100%);
            color: white;
            padding: 180px 0 100px;
            margin-top: 70px;
            position: relative;
            overflow: hidden;
        }

        .modern-hero::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 50%;
            height: 100%;
            background: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB2aWV3Qm94PSIwIDAgMTAwIDEwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZGVmcz48cGF0dGVybiBpZD0icGF0dGVybiIgd2lkdGg9IjQwIiBoZWlnaHQ9IjQwIiBwYXR0ZXJuVW5pdHM9InVzZXJTcGFjZU9uVXNlIiBwYXR0ZXJuVHJhbnNmb3JtPSJyb3RhdGUoNDUpIj48cmVjdCB3aWR0aD0iNTAiIGhlaWdodD0iNTAiIGZpbGw9IiNmZmZmZmYiIG9wYWNpdHk9IjAuMDMiLz48L3BhdHRlcm4+PC9kZWZzPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjcGF0dGVybikiLz48L3N2Zz4=');
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-badge {
            display: inline-block;
            background: rgba(246, 182, 27, 0.2);
            color: var(--primary);
            padding: 8px 20px;
            border-radius: 30px;
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            border: 1px solid rgba(246, 182, 27, 0.3);
        }

        .hero-title {
            font-weight: 700;
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            line-height: 1.1;
        }

        .hero-subtitle {
            font-weight: 400;
            font-size: 1.25rem;
            margin-bottom: 2.5rem;
            max-width: 600px;
            opacity: 0.9;
        }
        
        /* Modern Service Content */
        .service-content-section {
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            padding: 3rem;
            margin-bottom: 2rem;
        }

        .service-content-section h2 {
            color: var(--dark);
            margin-bottom: 1.5rem;
            font-size: 2rem;
            font-weight: 700;
        }

        .service-content-section p {
            color: var(--text-light);
            font-size: 1.05rem;
            margin-bottom: 1.5rem;
        }

        .service-content-list {
            list-style: none;
            padding-left: 0;
        }

        .service-content-list li {
            position: relative;
            padding-left: 30px;
            margin-bottom: 15px;
            font-size: 1.05rem;
        }

        /* Modern Feature Grid */
        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .feature-card {
            background: white;
            border-radius: var(--border-radius);
            padding: 1rem;
            transition: var(--transition);
            text-align: center;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .feature-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 1.5rem;
        }

        .feature-card h4 {
            color: var(--dark);
            margin-bottom: 1rem;
            font-size: 1.3rem;
        }

        .feature-card p {
            color: var(--text-light);
            font-size: 0.95rem;
        }

        /* Modern Sidebar */
        .service-sidebar-widget {
            background: white;
            padding: 2rem;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            margin-bottom: 2rem;
            border-top: 4px solid var(--primary);
        }

        .service-sidebar-widget h4 {
            color: var(--dark);
            margin-bottom: 1.5rem;
            font-size: 1.3rem;
            font-weight: 600;
        }

        .service-sidebar-list {
            list-style: none;
            padding-left: 0;
        }

        .service-sidebar-list li {
            margin-bottom: 10px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            padding-bottom: 10px;
        }

        .service-sidebar-list a {
            text-decoration: none;
            color: var(--text-light);
            font-weight: 500;
            transition: var(--transition);
            display: block;
            padding: 8px 12px;
            border-radius: 8px;
        }

        .service-sidebar-list a:hover {
            background-color: rgba(13, 110, 253, 0.05);
            color: var(--primary);
        }
        
        .service-sidebar-list li.active a {
            background-color: var(--dark);
            color: white;
            font-weight: 600;
        }

        /* Modern CTA Section */
        .modern-cta {
            background: linear-gradient(135deg, var(--dark) 0%, #102149 100%);
            color: white;
            padding: 80px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .modern-cta::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 40%;
            height: 100%;
            background: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB2aWV3Qm94PSIwIDAgMTAwIDEwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZGVmcz48cGF0dGVybiBpZD0icGF0dGVybiIgd2lkdGg9IjQwIiBoZWlnaHQ9IjQwIiBwYXR0ZXJuVW5pdHM9InVzZXJTcGFjZU9uVXNlIiBwYXR0ZXJuVHJhbnNmb3JtPSJyb3RhdGUoNDUpIj48cmVjdCB3aWR0aD0iNTAiIGhlaWdodD0iNTAiIGZpbGw9IiNmZmZmZmYiIG9wYWNpdHk9IjAuMDMiLz48L3BhdHRlcm4+PC9kZWZzPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjcGF0dGVybikiLz48L3N2Zz4=');
            z-index: 1;
        }

        .modern-cta-content {
            position: relative;
            z-index: 2;
        }

        .modern-cta h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }

        .modern-cta p {
            font-size: 1.1rem;
            max-width: 700px;
            margin: 0 auto 2.5rem;
            opacity: 0.9;
        }

        .btn-modern {
            background: var(--primary);
            color: var(--dark);
            font-weight: 600;
            padding: 12px 30px;
            border-radius: 30px;
            border: none;
            transition: var(--transition);
            text-decoration: none;
            display: inline-block;
        }

        .btn-modern:hover {
            background: #e0a416;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        /* Modern Service Cards */
        .modern-service-card {
            background: white;
            border-radius: var(--border-radius);
            padding: 2.5rem;
            box-shadow: var(--shadow);
            transition: var(--transition);
            height: 100%;
            position: relative;
            overflow: hidden;
        }

        .modern-service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--gradient);
        }

        .modern-service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .modern-service-card h5 {
            color: var(--dark);
            margin-bottom: 1rem;
            font-size: 1.3rem;
            font-weight: 600;
        }

        .modern-service-card p {
            color: var(--text-light);
            font-size: 0.95rem;
        }

        .service-icon-modern {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 1.5rem;
        }

        /* Leasing Specific Styles */
        .leasing-stat {
            background: var(--gradient);
            color: white;
            padding: 2rem;
            border-radius: var(--border-radius);
            text-align: center;
            margin-bottom: 2rem;
        }

        .leasing-stat h3 {
            font-size: 3rem;
            margin-bottom: 0.5rem;
        }

        .leasing-stat p {
            font-size: 1.1rem;
            margin-bottom: 0;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .nav-links {
                display: none;
            }

            .hamburger {
                display: flex;
            }
            
            .hero-title {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2rem;
            }

            .services-grid {
                grid-template-columns: 1fr;
            }
            
            .mobile-nav-panel {
                width: 280px;
            }

            .service-content-section {
                padding: 2rem;
            }
        }

        @media (max-width: 576px) {
            .mobile-nav-panel {
                width: 100%;
            }

            .modern-hero {
                padding: 150px 0 80px;
            }
        }
    </style>
</head>

<body>
<?php include_once('header.php'); ?>

    <!-- Modern Hero Section -->
    <section class="modern-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content" data-aos="fade-right" data-aos-delay="100">
                        <span class="hero-badge">Flexible Leasing Solutions</span>
                        <h1 class="hero-title">Premium Leasing Services</h1>
                        <p class="hero-subtitle">Tailored leasing solutions for equipment, vehicles, and properties to help your business grow without capital constraints.</p>
                        <a href="#contact" class="btn-modern">Request Leasing Quote</a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                    <img src="https://placehold.co/600x400/1e2a38/f6b61b?text=Leasing+Services" 
                         alt="Leasing Services" 
                         class="img-fluid rounded-4">
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="row g-5">
                <!-- Main Content -->
                <div class="col-lg-8 service-content-section" data-aos="fade-up">
                    <!-- Overview Section -->
                    <div class="" data-aos="fade-up" data-aos-delay="100">
                        <h2>Why Choose Our Leasing Services?</h2>
                        <p>At Ikechi Global Services, we provide comprehensive leasing solutions that help businesses acquire the assets they need without significant capital investment. Our flexible leasing options cover equipment, vehicles, real estate, and specialized machinery, allowing you to focus on growing your business while we handle the financial arrangements.</p>
                    </div>
                    
                    <!-- Feature Grid -->
                    <div class="feature-grid">
                        <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                            <i class="bi bi-cash-coin feature-icon"></i>
                            <h4>Cost-Effective Solutions</h4>
                            <p>Preserve your capital while accessing the equipment and assets your business needs to thrive.</p>
                        </div>
                        <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-arrow-repeat feature-icon"></i>
                            <h4>Flexible Terms</h4>
                            <p>Customizable lease agreements with terms that work for your specific business requirements.</p>
                        </div>
                        <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-tools feature-icon"></i>
                            <h4>Maintenance Included</h4>
                            <p>Many of our leasing packages include maintenance and support services for worry-free operation.</p>
                        </div>
                        <div class="feature-card" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-graph-up-arrow feature-icon"></i>
                            <h4>Tax Benefits</h4>
                            <p>Lease payments are often tax-deductible as business expenses, providing financial advantages.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Sidebar -->
                <div class="col-lg-4">    
                    <!-- Contact Widget -->
                    <div class="service-sidebar-widget" data-aos="fade-left" data-aos-delay="100">
                        <h4>Get In Touch</h4>
                        <p>Interested in our leasing solutions? Contact our leasing specialists today for a customized quote.</p>
                        <a href="contact.html" class="btn-modern w-100 text-center mt-3">Contact Us</a>
                    </div>
                    
                    <!-- Image -->
                    <img src="./images/leasing.jpg" class="img-fluid rounded-4 mt-4" data-aos="fade-left" data-aos-delay="200" alt="Leasing Services">
                </div>
            </div>
        </div>
    </section>
    
    <!-- Services Section -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Our Leasing Solutions</h2>
                <p class="lead">Flexible leasing options tailored to your business needs</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="modern-service-card">
                        <i class="bi bi-truck service-icon-modern"></i>
                        <h5>Vehicle Leasing</h5>
                        <p>Comprehensive vehicle leasing solutions for cars, trucks, vans, and specialized transport vehicles with flexible terms.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="modern-service-card">
                        <i class="bi bi-gear service-icon-modern"></i>
                        <h5>Equipment Leasing</h5>
                        <p>Access to industrial machinery, construction equipment, and specialized tools without significant capital investment.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="modern-service-card">
                        <i class="bi bi-building service-icon-modern"></i>
                        <h5>Property Leasing</h5>
                        <p>Commercial and industrial property leasing solutions with locations that support your business operations.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="modern-service-card">
                        <i class="bi bi-laptop service-icon-modern"></i>
                        <h5>Technology Leasing</h5>
                        <p>Stay current with the latest technology through our computer, server, and office equipment leasing programs.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="modern-service-card">
                        <i class="bi bi-hospital service-icon-modern"></i>
                        <h5>Medical Equipment</h5>
                        <p>Specialized leasing for medical and healthcare equipment with maintenance and support services included.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="modern-service-card">
                        <i class="bi bi-bar-chart service-icon-modern"></i>
                        <h5>Finance Leasing</h5>
                        <p>Structured financial leasing solutions for capital-intensive assets with flexible payment options.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="section-padding">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Our Leasing Process</h2>
                <p class="lead">Simple and transparent leasing process from application to delivery</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card text-center">
                        <div class="feature-icon-wrapper mb-3">
                            <span class="feature-icon">1</span>
                        </div>
                        <h4>Application & Assessment</h4>
                        <p>Submit your leasing application and requirements. Our team assesses your needs and financial capacity.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card text-center">
                        <div class="feature-icon-wrapper mb-3">
                            <span class="feature-icon">2</span>
                        </div>
                        <h4>Customized Proposal</h4>
                        <p>We prepare a tailored leasing proposal with terms, conditions, and payment schedules that match your requirements.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card text-center">
                        <div class="feature-icon-wrapper mb-3">
                            <span class="feature-icon">3</span>
                        </div>
                        <h4>Delivery & Support</h4>
                        <p>Once approved, we arrange delivery of your leased assets and provide ongoing support throughout the lease term.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modern CTA Section -->
    <section class="modern-cta">
        <div class="container">
            <div class="modern-cta-content" data-aos="zoom-in">
                <h2>Ready to Explore Leasing Options?</h2>
                <p>Contact us today to discuss your leasing needs and discover how our flexible solutions can help your business grow without capital constraints.</p>
                <a href="contact.html" class="btn-modern">Get Started Now</a>
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
                        <li class="mb-2"><a href="security-services.html">Security Services</a></li>
                        <li class="mb-2"><a href="leasing-services.html">Leasing Services</a></li>
                        <li class="mb-2"><a href="marine-logistics.html">Marine Logistics</a></li>
                        <li class="mb-2"><a href="engineering-services.html">Engineering</a></li>
                        <li class="mb-2"><a href="procurement-consultancy.html">Procurement</a></li>
                        <li class="mb-2"><a href="clearing-forwarding.html">Clearing & Forwarding</a></li>
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
            const servicesOpenLinks = document.querySelectorAll('.services-link, .services-link-mobile');

            function openServicesModal(e) {
                e.preventDefault();
                if (mobileNavPanel.classList.contains('active')) {
                    closeMobileMenu();
                }
                servicesDropdown.classList.add('active');
                document.body.classList.add('modal-open');
            }

            function closeServicesModal() {
                servicesDropdown.classList.remove('active');
                if (!mobileNavPanel.classList.contains('active')) {
                    document.body.classList.remove('modal-open');
                }
            }

            servicesOpenLinks.forEach(link => {
                link.addEventListener('click', openServicesModal);
            });
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