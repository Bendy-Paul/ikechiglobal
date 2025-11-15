<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ikechi Global Services Limited | Security Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

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
 

    </style>
</head>

<body>
<?php include_once('header.php'); ?>

    <!-- AOS CSS (will load in-body if not already in head) -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />

<main>
        <!-- Modern Hero Section -->
    <section class="modern-hero" data-aos="fade-up" data-aos-delay="100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <span class="hero-badge" data-aos="fade-right" data-aos-delay="150">Premium Security Services</span>
                        <h1 class="hero-title" data-aos="fade-up" data-aos-delay="250">Professional Security Solutions</h1>
                        <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="350">Comprehensive protection for your assets, operations, and personnel with state-of-the-art security services.</p>
                        <a href="#contact" class="btn-modern" data-aos="zoom-in" data-aos-delay="450">Get Security Consultation</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="./images/services/security-1.png" 
                         alt="Security Solutions" 
                         class="img-fluid rounded-4" data-aos="fade-left" data-aos-delay="300">
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding" data-aos="fade-up" data-aos-delay="120">
        <div class="container">
            <div class="row g-5">
                <!-- Main Content -->
                <div class="col-lg-8 service-content-section" data-aos="fade-right" data-aos-delay="140">
                    <!-- Overview Section -->
                    <div class="">
                        <h2>Why Choose Our Security Services?</h2>
                        <p>At Ikechi Global Services, we deliver comprehensive security solutions including armed and unarmed guards, intelligence services, security equipment, escort services, armored vehicles, and gunboat support in partnership with military forces. Our integrated approach combines expert personnel with advanced technology to ensure maximum protection.</p>
                    </div>
                    
                    <!-- Feature Grid -->
                    <div class="feature-grid">
                        <div class="feature-card" data-aos="fade-up" data-aos-delay="180">
                            <i class="bi bi-shield-check feature-icon"></i>
                            <h4>24/7 Protection</h4>
                            <p>Round-the-clock security monitoring and response with our expert team always on standby.</p>
                        </div>
                        <div class="feature-card" data-aos="fade-up" data-aos-delay="260">
                            <i class="bi bi-people feature-icon"></i>
                            <h4>Expert Team</h4>
                            <p>Highly trained and certified security professionals with years of experience in the field.</p>
                        </div>
                        <div class="feature-card" data-aos="fade-up" data-aos-delay="340">
                            <i class="bi bi-camera-video feature-icon"></i>
                            <h4>Advanced Technology</h4>
                            <p>State-of-the-art surveillance and monitoring systems with real-time reporting capabilities.</p>
                        </div>
                        <div class="feature-card" data-aos="fade-up" data-aos-delay="420">
                            <i class="bi bi-graph-up feature-icon"></i>
                            <h4>Risk Assessment</h4>
                            <p>Comprehensive security audits and planning to identify and mitigate potential threats.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Sidebar -->
                <div class="col-lg-4">
                    <!-- Image -->
                    <img src="./images/security.jpg" class="img-fluid rounded-4" alt="Security Services" data-aos="fade-up" data-aos-delay="260">
                    <img src="./images/services/security-2.jpg" class="img-fluid rounded-4 mt-4" alt="Security Services" data-aos="fade-up" data-aos-delay="260">
                    <img src="./images/services/security-3.jpg" class="img-fluid rounded-4 mt-4" alt="Security Services" data-aos="fade-up" data-aos-delay="260">
                </div>
            </div>
        </div>
    </section>
    
    <!-- Services Section -->
    <section class="section-padding bg-white" data-aos="fade-up" data-aos-delay="140">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title" data-aos="fade-down" data-aos-delay="160">Our Security Solutions</h2>
                <p class="lead" data-aos="fade-up" data-aos-delay="200">Protecting what matters most with comprehensive security solutions</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="modern-service-card" data-aos="fade-up" data-aos-delay="100">
                        <i class="bi bi-shield service-icon-modern"></i>
                        <h5>Static Guarding</h5>
                        <p>Professional uniformed officers providing access control and visible security presence at your facilities.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="modern-service-card" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-car-front service-icon-modern"></i>
                        <h5>Mobile Patrols</h5>
                        <p>Regular surveillance routes with rapid response capabilities and real-time reporting.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="modern-service-card" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-building-lock service-icon-modern"></i>
                        <h5>Site Protection</h5>
                        <p>Specialized security for construction sites, industrial facilities, and commercial properties.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="modern-service-card" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-camera service-icon-modern"></i>
                        <h5>CCTV Monitoring</h5>
                        <p>24/7 surveillance monitoring with immediate incident response and detailed reporting.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="modern-service-card" data-aos="fade-up" data-aos-delay="500">
                        <i class="bi bi-shield-lock service-icon-modern"></i>
                        <h5>Access Control</h5>
                        <p>Advanced access control systems to manage entry and exit points with precision.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="modern-service-card" data-aos="fade-up" data-aos-delay="600">
                        <i class="bi bi-person-check service-icon-modern"></i>
                        <h5>Executive Protection</h5>
                        <p>Discreet and professional protection services for executives and high-profile individuals.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modern CTA Section -->
    <section class="modern-cta" data-aos="zoom-in" data-aos-delay="150">
        <div class="container">
            <div class="modern-cta-content">
                <h2 data-aos="fade-up" data-aos-delay="200">Ready to Secure Your Business and Critical Infrastructure?</h2>
                <p data-aos="fade-up" data-aos-delay="260">Contact us today to discuss your security needs and receive a customized solution tailored to your specific requirements.</p>
                <a href="contact.html" class="btn-modern" data-aos="fade-up" data-aos-delay="320">Contact Us</a>
            </div>
        </div>
    </section>

</main>
    <!-- AOS JS and init -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            easing: 'ease-out-cubic',
            offset: 120
        });
        // Refresh AOS after images load to ensure proper offsets
        window.addEventListener('load', function(){ AOS.refresh(); });
    </script>

<?php
include_once('footer.php')
?>

</body>
</html>