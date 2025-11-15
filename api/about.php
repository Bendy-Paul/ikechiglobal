<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ikechi Global Services Limited | About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Global site styles -->
    <link rel="stylesheet" href="/css/styles.css">
    <!-- AOS (Animate On Scroll) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <style>
        /* --- STYLES FROM ABOUT PAGE --- */

        /* Stats Section */
        .stats-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--dark);
        }

        .stat-divider {
            border-right: 2px solid #212529;
        }

        /* Mission Section */
        .mission {
            background-size: cover;
        }

        .about-img {
            border-radius: 10px;
        }

        .tag {
            font-weight: 500;
            color: var(--primary);
        }

        .about-progress-wrapper {
            margin-bottom: 1.5rem;
        }

        .about-progress-text-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 0.3rem;
            font-weight: 500;
        }

        .about-progress-text-main {
            width: 100%;
            height: 5px;
            background: #e9ecef;
            border-radius: 3px;
            position: relative;
            overflow: hidden;
        }

        .progress-bg-color {
            position: absolute;
            width: 100%;
            height: 5px;
            background: #e9ecef;
            left: 0;
            top: 0;
            z-index: 1;
        }

        .progress-fg-color {
            position: relative;
            display: block;
            height: 5px;
            border-radius: 3px;
            background: var(--dark);
            z-index: 2;
            transition: width 1s cubic-bezier(.4, 0, .2, 1);
        }

        .bg-dark-blue {
            background: #212529 !important;
        }

        .home-three-experience-title-block {
            font-size: 1rem;
        }

        /* Why Choose Us Section */
        .why-choose-us-section {
            background: url(./crane.webp) center/cover no-repeat;
            min-height: 400px;
            padding: 2rem 1rem;
        }

        .why-choose-us-content {
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(10px);
            border-radius: 0.5rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        /* Core Values Section */
        .core-values-section {
            background:
                linear-gradient(rgba(255, 255, 255, 0.85), rgba(255, 255, 255, 0.85)),
                url('./wireframe-4.jpg') top/cover;
        }

        .icon-wrapper-lg {
            width: 80px;
            height: 80px;
            line-height: 80px;
        }

        .hover-shadow:hover {
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1) !important;
        }

        .transition-all {
            transition: all 0.3s ease;
        }


        /* Responsive Design */
        @media (max-width: 992px) {

            .stat-divider {
                border-right: none;
                border-bottom: 2px solid #dee2e6;
                padding-bottom: 1rem;
                margin-bottom: 1rem;
            }

            .stats-section .col-lg-3:last-child .stat-divider {
                border-bottom: none;
                padding-bottom: 0;
                margin-bottom: 0;
            }
        }
    </style>
</head>

<body>
    <?php include_once('header.php') ?>
    <!-- Modern Hero Section -->
    <section data-aos="fade-up" class="modern-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <div class="hero-content">
                        <span class="hero-badge">Our Company</span>
                        <h1 class="hero-title">About Us</h1>
                        <p class="hero-subtitle">We are a multidisciplinary team that delivers end-to-end solutions for the marine and industrial sectors. Our integrated services include Engineering, Procurement & Consultancy, Marine Equipment Leasing & Logistics, and Onshore & Offshore Security, all supported by expert Clearing & Forwarding. </p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                    <img src="./images/portfolio/construction-10.jpg" alt="Engineering Team" class="img-fluid hero-image rounded-4" style="height: 24rem;">
                </div>
            </div>
        </div>
    </section>

    <section data-aos="fade-up" class="mission py-5 fade-in-section" style="background: url(./wireframe-3.webp);background-size: cover;">
        <div class="row container m-auto fade-in">
            <div class="col-lg-6 p-4">
                <div class="about-img">
                    <img src="./images/about-us-1.jpg" alt="About Us" class="img-fluid about-img shadow-lg">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="">
                    <div class="tag">ABOUT US</div>
                    <div class="overflow-hidden">
                        <h2 class="margin-top-seventeen padding-bottom-six">Delivering Security, Leasing and Logistics
                            Excellence</h2>
                    </div>
                    <p class="padding-bottom-seventeen">Our team of highly skilled professionals combines technical expertise with creative problem-solving to deliver integrated solutions across a diverse service portfolio. With decades of combined experience, we provide end-to-end support in Onshore & Offshore Security, Marine Equipment Leasing, and specialized Logistics. Our capabilities extend from expert Engineering Services and Procurement & Consultancy to efficient Clearing & Forwarding.
                    <div class="about-progress-wrapper m-4">
                        <div class="about-progress-text-wrapper">
                            <div class="home-three-experience-title-block">Safety</div>
                            <div class="home-three-experience-title-block">100%</div>
                        </div>
                        <div class="about-progress-text-main">
                            <div class="progress-bg-color"></div>
                            <div style="width:100%; height: 5px;" class="progress-fg-color"></div>
                        </div>
                    </div>
                    <div class="about-progress-wrapper m-4">
                        <div class="about-progress-text-wrapper">
                            <div class="home-three-experience-title-block">Assurance</div>
                            <div class="home-three-experience-title-block">100%</div>
                        </div>
                        <div class="about-progress-text-main">
                            <div class="progress-bg-color"></div>
                            <div style="width: 100%; height: 5px;" class="progress-fg-color"></div>
                        </div>
                    </div>
                    <div class="about-progress-wrapper m-4">
                        <div class="about-progress-text-wrapper">
                            <div class="home-three-experience-title-block">Reliability</div>
                            <div class="home-three-experience-title-block">100%</div>
                        </div>
                        <div class="about-progress-text-main">
                            <div class="progress-bg-color"></div>
                            <div style="width: 100%; height: 5px;" class="progress-fg-color"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section data-aos="fade-up" class="py-5 fade-in-section bg-light">
        <div class="container py-lg-4">
            <div class="text-center mb-5">
                <h2 class="mb-3">Our Core Values</h2>
                
                
                <p class="mb-0">The foundation of everything we do</p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-3 fade-in-section">
                        <div class="card h-100 border-0 shadow-sm hover-shadow transition-all text-center p-4">
                            <div class="icon-wrapper-lg bg-warning bg-opacity-10 text-warning rounded-circle mx-auto mb-4">
                                <i class="bi bi-shield-check fs-3"></i>
                            </div>
                            <h4 class="mb-3">Safety First</h4>
                            <p class="text-muted mb-0">Uncompromising commitment to workplace safety</p>
                        </div>
                    </div>
    
                    <div class="col-md-6 col-lg-3 fade-in-section">
                        <div class="card h-100 border-0 shadow-sm hover-shadow transition-all text-center p-4">
                            <div class="icon-wrapper-lg bg-success bg-opacity-10 text-success rounded-circle mx-auto mb-4">
                                <i class="bi bi-tree fs-3"></i>
                            </div>
                            <h4 class="mb-3">Sustainability</h4>
                            <p class="text-muted mb-0">Eco-friendly and compliant operational practices</p>
                        </div>
                    </div>
    
                    <div class="col-md-6 col-lg-3 fade-in-section">
                        <div class="card h-100 border-0 shadow-sm hover-shadow transition-all text-center p-4">
                            <div class="icon-wrapper-lg bg-primary bg-opacity-10 text-primary rounded-circle mx-auto mb-4">
                                <i class="bi bi-people fs-3"></i>
                            </div>
                            <h4 class="mb-3">Teamwork</h4>
                            <p class="text-muted mb-0">Collaborative approach to excellence</p>
                        </div>
                    </div>
    
                    <div class="col-md-6 col-lg-3 fade-in-section">
                        <div class="card h-100 border-0 shadow-sm hover-shadow transition-all text-center p-4">
                            <div class="icon-wrapper-lg bg-info bg-opacity-10 text-info rounded-circle mx-auto mb-4">
                                <i class="bi bi-lightbulb fs-3"></i>
                            </div>
                            <h4 class="mb-3">Innovation</h4>
                            <p class="text-muted mb-0">Pioneering smart logistics and engineering solutions</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <section data-aos="fade-up" class="p-0 py-md-4 fade-in-section why-choose-us-section">
        <div class="row g-0">
            <div class="col-12">
                <div class="content p-5 mt-4 col-12 col-md-10 col-lg-6 why-choose-us-content m-auto text-white text-center">
                    <div class="row g-4 g-lg-5">
                        <div class="col-lg-12">
                            <h2 class="mb-3 mb-md-4">Why Choose Us?</h2>
                            <p class="mb-4">We are committed to delivering exceptional security, logistics and
                                engineering services with a focus on quality, compliance and client success.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-aos="fade-up" class="py-5 fade-in-section bg-light core-values-section">
        <div class="container py-lg-4">
            <!-- <div class="text-center mb-5">
                <h2 class="mb-3">Why Choose Us</h2>
                <p class="mb-0">What sets us apart</p>
            </div> -->
            <div class="row g-4 justify-content-center">
                <div class="col-12 col-md-6 col-lg-3 fade-in-section">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition-all text-center p-4">
                        <div class="icon-wrapper-lg bg-success bg-opacity-10 text-success rounded-circle mx-auto mb-4">
                            <i class="bi bi-cpu fs-3"></i>
                        </div>
                        <h4 class="mb-3">Advanced Technology</h4>
                        <p class="text-muted mb-0">State-of-the-art technology and equipment powering our services.</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 fade-in-section">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition-all text-center p-4">
                        <div class="icon-wrapper-lg bg-primary bg-opacity-10 text-primary rounded-circle mx-auto mb-4">
                            <i class="bi bi-shield-check fs-3"></i>
                        </div>
                        <h4 class="mb-3">Integrated Security</h4>
                        <p class="text-muted mb-0">Trained personnel and modern systems to protect your people and assets.</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 fade-in-section">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition-all text-center p-4">
                        <div class="icon-wrapper-lg bg-info bg-opacity-10 text-info rounded-circle mx-auto mb-4">
                            <i class="bi bi-truck fs-3"></i>
                        </div>
                        <h4 class="mb-3">Reliable Logistics</h4>
                        <p class="text-muted mb-0">End-to-end supply chain and marine logistics tailored to your requirements.</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 fade-in-section">
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition-all text-center p-4">
                        <div class="icon-wrapper-lg bg-warning bg-opacity-10 text-warning rounded-circle mx-auto mb-4">
                            <i class="bi bi-gear fs-3"></i>
                        </div>
                        <h4 class="mb-3">Engineering & Leasing</h4>
                        <p class="text-muted mb-0">Equipment leasing and technical expertise to move projects forward efficiently.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php
    include_once('footer.php')
    ?>
</body>

</html>