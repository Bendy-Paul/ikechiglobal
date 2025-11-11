<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ikechi Global Services Limited | Projects</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #0d6efd;
            --secondary: #6c757d;
            --success: #198754;
            --warning: #ffc107;
            --danger: #dc3545;
            --dark: #1e2a38;
            --light: #f8f9fa;
            --accent: #20c997;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
            line-height: 1.6;
        }
        
        .modern-hero {
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e8ee 100%);
            padding: 100px 0 80px;
        }
        
        .hero-badge {
            display: inline-block;
            background: var(--primary);
            color: white;
            padding: 8px 16px;
            border-radius: 30px;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 20px;
        }
        
        .hero-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 20px;
            /* color: var(--dark); */
        }
        
        .hero-subtitle {
            font-size: 1.2rem;
            color: #6c757d;
            margin-bottom: 30px;
        }
        
        .btn-modern {
            background: var(--primary);
            color: white;
            padding: 12px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
        }
        
        .btn-modern:hover {
            background: #0b5ed7;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(13, 110, 253, 0.2);
            color: white;
        }
        
        .category-filter {
            background: white;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }
        
        .nav-pills .nav-link {
            padding: 10px 20px;
            border-radius: 30px;
            font-weight: 600;
            color: #6c757d;
            transition: all 0.3s ease;
        }
        
        .nav-pills .nav-link.active {
            background: var(--primary);
            color: white;
        }
        
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--dark);
            position: relative;
            margin-bottom: 40px;
        }
        
        .section-title:after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: var(--primary);
            margin: 15px auto 0;
            border-radius: 2px;
        }
        
        .project-card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }
        
        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }
        
        .project-card .badge {
            position: absolute;
            top: 15px;
            right: 15px;
            padding: 8px 15px;
            border-radius: 30px;
            font-size: 12px;
            font-weight: 600;
        }
        
        .project-card .card-body {
            padding: 25px;
        }
        
        .project-card h3 {
            font-weight: 700;
            margin-bottom: 10px;
            color: var(--dark);
        }
        
        .project-card .text-muted {
            margin-bottom: 15px;
        }
        
        .project-card img {
            height: 250px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .project-card:hover img {
            transform: scale(1.05);
        }
        
        .fade-in-section {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        
        .fade-in-section.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .btn-accent {
            background: var(--accent);
            color: white;
            padding: 12px 30px;
            border-radius: 30px;
            font-weight: 600;
            border: none;
            transition: all 0.3s ease;
        }
        
        .btn-accent:hover {
            background: #1ba87e;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(32, 201, 151, 0.2);
            color: white;
        }
        
        .footer {
            background: var(--dark);
            color: white;
            padding: 80px 0 30px;
        }
        
        .footer h3, .footer h4 {
            color: white;
            margin-bottom: 25px;
        }
        
        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .footer-links a:hover {
            color: white;
            padding-left: 5px;
        }
        
        .social-icon {
            display: inline-block;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            margin-right: 10px;
            color: white;
            transition: all 0.3s ease;
        }
        
        .social-icon:hover {
            background: var(--primary);
            transform: translateY(-3px);
        }
        
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.2rem;
            }
            
            .hero-subtitle {
                font-size: 1rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .nav-pills {
                flex-wrap: nowrap;
                overflow-x: auto;
                justify-content: flex-start !important;
                padding-bottom: 10px;
            }
            
            .nav-pills .nav-item {
                flex-shrink: 0;
            }
        }
    </style>
</head>

<body>
<?php include_once('header.php')?>
<section class="modern-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                <div class="hero-content">
                    <span class="hero-badge">Our Work</span>
                    <h1 class="hero-title">Projects & Case Studies</h1>
                    <p class="hero-subtitle">Explore selected civil, structural, fabrication, procurement and installation projects delivered across Nigeria and beyond. Proven track record in on-time, on-budget project delivery.</p>
                    <a href="#civil" class="btn-modern me-2">View Projects</a>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                <img src="./images/portfolio.jpg"
                     alt="Projects and Case Studies"
                     class="img-fluid rounded-4"
                     onerror="this.src='https://placehold.co/800x500/cccccc/333333?text=Projects'">
            </div>
        </div>
    </div>
</section>

    <div class="category-filter py-4 fade-in-section">
        <div class="container">
            <ul class="nav nav-pills justify-content-center gap-3">
                <li class="nav-item"><button class="nav-link active" data-bs-target="#civil">Civil</button></li>
                <li class="nav-item"><button class="nav-link" data-bs-target="#procurement">Procurement</button></li>
                <li class="nav-item"><button class="nav-link" data-bs-target="#fabrication">Fabrication</button></li>
                <li class="nav-item"><button class="nav-link" data-bs-target="#structural">Structural</button></li>
                <li class="nav-item"><button class="nav-link" data-bs-target="#installations">Installations</button></li>
                <li class="nav-item"><button class="nav-link" data-bs-target="#mechanical">Mechanical</button></li>
                <li class="nav-item"><button class="nav-link" data-bs-target="#pipeline">Pipeline</button></li>
                <li class="nav-item"><button class="nav-link" data-bs-target="#electrical">Electrical</button></li>
            </ul>
        </div>
    </div>

    <main class="container py-5">
        <section id="civil" class="project-category fade-in-section">
            <h2 class="section-title text-center mb-5">Civil Projects</h2>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/civil-2.jpg" class="card-img-top" alt="Civil Project">
                            <span class="badge bg-warning">Civil</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Site Development</h3>
                            <p class="text-muted">Land preparation and grading for construction</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Lagos</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/civil-3.jpg" class="card-img-top" alt="Civil Project">
                            <span class="badge bg-warning">Civil</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Foundation Works</h3>
                            <p class="text-muted">Deep foundation for industrial plant</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Port Harcourt</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/civil-4.jpg" class="card-img-top" alt="Civil Project">
                            <span class="badge bg-warning">Civil</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Road Construction</h3>
                            <p class="text-muted">Large-scale road network development</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Abuja</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2022</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/civil-5.jpg" class="card-img-top" alt="Civil Project">
                            <span class="badge bg-warning">Civil</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Drainage Systems</h3>
                            <p class="text-muted">Urban drainage and water management</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Lagos</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/civil-6.jpg" class="card-img-top" alt="Civil Project">
                            <span class="badge bg-warning">Civil</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Concrete Works</h3>
                            <p class="text-muted">Reinforced concrete structure</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Port Harcourt</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/civil-7.jpg" class="card-img-top" alt="Civil Project">
                            <span class="badge bg-warning">Civil</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Site Excavation</h3>
                            <p class="text-muted">Large-scale earthworks for development</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Abuja</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2022</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/civil-8.jpg" class="card-img-top" alt="Civil Project">
                            <span class="badge bg-warning">Civil</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Land Grading</h3>
                            <p class="text-muted">Preparing site for construction</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Lagos</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/civil-9.jpg" class="card-img-top" alt="Civil Project">
                            <span class="badge bg-warning">Civil</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Infrastructure Development</h3>
                            <p class="text-muted">Public works and infrastructure</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Port Harcourt</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/civil-10.jpg" class="card-img-top" alt="Civil Project">
                            <span class="badge bg-warning">Civil</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Site Preparation</h3>
                            <p class="text-muted">Land clearing and preparation</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Abuja</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2022</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/civil-11.jpg" class="card-img-top" alt="Civil Project">
                            <span class="badge bg-warning">Civil</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Construction Site</h3>
                            <p class="text-muted">Active construction project</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Lagos</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/construction-1.jpg" class="card-img-top" alt="Construction Project">
                            <span class="badge bg-warning">Civil</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Building Construction</h3>
                            <p class="text-muted">Commercial building development</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Port Harcourt</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/construction-2.jpg" class="card-img-top" alt="Construction Project">
                            <span class="badge bg-warning">Civil</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Structural Framework</h3>
                            <p class="text-muted">Building structural elements</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Abuja</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2022</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/construction-3.jpg" class="card-img-top" alt="Construction Project">
                            <span class="badge bg-warning">Civil</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Concrete Pouring</h3>
                            <p class="text-muted">Large-scale concrete placement</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Lagos</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/construction-4.jpg" class="card-img-top" alt="Construction Project">
                            <span class="badge bg-warning">Civil</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Foundation Work</h3>
                            <p class="text-muted">Building foundation construction</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Port Harcourt</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/construction-5.jpg" class="card-img-top" alt="Construction Project">
                            <span class="badge bg-warning">Civil</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Structural Elements</h3>
                            <p class="text-muted">Reinforced concrete columns</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Abuja</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2022</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/construction-6.jpg" class="card-img-top" alt="Construction Project">
                            <span class="badge bg-warning">Civil</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Construction Site</h3>
                            <p class="text-muted">Active construction project</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Lagos</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/construction-7.jpg" class="card-img-top" alt="Construction Project">
                            <span class="badge bg-warning">Civil</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Building Framework</h3>
                            <p class="text-muted">Structural steel framework</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Port Harcourt</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/construction-8.jpg" class="card-img-top" alt="Construction Project">
                            <span class="badge bg-warning">Civil</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Concrete Structure</h3>
                            <p class="text-muted">Reinforced concrete building</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Abuja</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2022</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/construction-9.jpg" class="card-img-top" alt="Construction Project">
                            <span class="badge bg-warning">Civil</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Site Development</h3>
                            <p class="text-muted">Construction site preparation</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Lagos</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/construction-10.jpg" class="card-img-top" alt="Construction Project">
                            <span class="badge bg-warning">Civil</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Building Construction</h3>
                            <p class="text-muted">Multi-story building project</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Port Harcourt</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="procurement" class="project-category d-none fade-in-section">
            <h2 class="section-title text-center mb-5">Procurement</h2>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="https://placehold.co/600x400/2962ff/ffffff?text=Procurement+1" class="card-img-top" alt="Project">
                            <span class="badge bg-primary">Procurement</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Heavy Machinery Sourcing</h3>
                            <p class="text-muted">Supply of 20-ton excavators</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-globe me-2"></i>Global</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="https://placehold.co/600x400/2962ff/ffffff?text=Procurement+2" class="card-img-top" alt="Project">
                            <span class="badge bg-primary">Procurement</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">PPE & Safety Gear</h3>
                            <p class="text-muted">Full-site safety equipment provision</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Nigeria</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="fabrication" class="project-category d-none fade-in-section">
            <h2 class="section-title text-center mb-5">Fabrication</h2>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/fabrication-2.jpg" class="card-img-top" alt="Fabrication Project">
                            <span class="badge bg-dark">Fabrication</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Metal Fabrication</h3>
                            <p class="text-muted">Custom metal component fabrication</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Warri</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/fabrication-3.jpg" class="card-img-top" alt="Fabrication Project">
                            <span class="badge bg-dark">Fabrication</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Structural Components</h3>
                            <p class="text-muted">Custom structural steel fabrication</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Warri</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/fabrication-4.jpg" class="card-img-top" alt="Fabrication Project">
                            <span class="badge bg-dark">Fabrication</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Metal Works</h3>
                            <p class="text-muted">Precision metal fabrication</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Warri</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/fabrication-5.jpg" class="card-img-top" alt="Fabrication Project">
                            <span class="badge bg-dark">Fabrication</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Industrial Components</h3>
                            <p class="text-muted">Heavy-duty industrial fabrication</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Warri</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/fabrication-6.jpg" class="card-img-top" alt="Fabrication Project">
                            <span class="badge bg-dark">Fabrication</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Custom Fabrication</h3>
                            <p class="text-muted">Specialized metal fabrication</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Warri</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/fabrication-7.jpg" class="card-img-top" alt="Fabrication Project">
                            <span class="badge bg-dark">Fabrication</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Structural Steel</h3>
                            <p class="text-muted">Heavy structural steel fabrication</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Warri</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/welding-1.jpg" class="card-img-top" alt="Welding Project">
                            <span class="badge bg-dark">Fabrication</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Precision Welding</h3>
                            <p class="text-muted">High-quality welding services</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Warri</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/welding-2.jpg" class="card-img-top" alt="Welding Project">
                            <span class="badge bg-dark">Fabrication</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Structural Welding</h3>
                            <p class="text-muted">Heavy structural welding work</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Warri</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/welding-3.jpg" class="card-img-top" alt="Welding Project">
                            <span class="badge bg-dark">Fabrication</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Custom Welding</h3>
                            <p class="text-muted">Specialized welding applications</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Warri</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/welding-4.jpg" class="card-img-top" alt="Welding Project">
                            <span class="badge bg-dark">Fabrication</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Industrial Welding</h3>
                            <p class="text-muted">Heavy industrial welding services</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Warri</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="structural" class="project-category d-none fade-in-section">
            <h2 class="section-title text-center mb-5">Structural</h2>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="https://placehold.co/600x400/c9c9c9/333333?text=Structural+1" class="card-img-top" alt="Project">
                            <span class="badge bg-secondary">Structural</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Steel Warehouse Frame</h3>
                            <p class="text-muted">10,000 sqm warehouse structure</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Ogun</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2022</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="installations" class="project-category d-none fade-in-section">
            <h2 class="section-title text-center mb-5">Installation Projects</h2>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/installation-1.jpg" class="card-img-top" alt="Installation Project">
                            <span class="badge bg-success">Installations</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Equipment Installation</h3>
                            <p class="text-muted">Industrial equipment setup</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Lekki</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/installation-2.jpg" class="card-img-top" alt="Installation Project">
                            <span class="badge bg-success">Installations</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">System Installation</h3>
                            <p class="text-muted">Industrial system setup</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Lekki</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/installation-3.jpg" class="card-img-top" alt="Installation Project">
                            <span class="badge bg-success">Installations</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Equipment Setup</h3>
                            <p class="text-muted">Heavy equipment installation</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Lekki</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/installation-4.jpg" class="card-img-top" alt="Installation Project">
                            <span class="badge bg-success">Installations</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Industrial Installation</h3>
                            <p class="text-muted">Large-scale industrial setup</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Lekki</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/installation-6.jpg" class="card-img-top" alt="Installation Project">
                            <span class="badge bg-success">Installations</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">System Commissioning</h3>
                            <p class="text-muted">Industrial system commissioning</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Lekki</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="mechanical" class="project-category d-none fade-in-section">
            <h2 class="section-title text-center mb-5">Mechanical Projects</h2>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/mechanical-1.jpg" class="card-img-top" alt="Mechanical Project">
                            <span class="badge bg-info">Mechanical</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Mechanical Systems</h3>
                            <p class="text-muted">Industrial mechanical systems</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Port Harcourt</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/mechanical-2.jpg" class="card-img-top" alt="Mechanical Project">
                            <span class="badge bg-info">Mechanical</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Equipment Assembly</h3>
                            <p class="text-muted">Mechanical equipment assembly</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Port Harcourt</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/mechanical-3.jpg" class="card-img-top" alt="Mechanical Project">
                            <span class="badge bg-info">Mechanical</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Mechanical Components</h3>
                            <p class="text-muted">Precision mechanical components</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Port Harcourt</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/mechanical-4.jpg" class="card-img-top" alt="Mechanical Project">
                            <span class="badge bg-info">Mechanical</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Industrial Mechanics</h3>
                            <p class="text-muted">Heavy industrial mechanical work</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Port Harcourt</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="pipeline" class="project-category d-none fade-in-section">
            <h2 class="section-title text-center mb-5">Pipeline Projects</h2>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/pipeline-1.jpg" class="card-img-top" alt="Pipeline Project">
                            <span class="badge bg-danger">Pipeline</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Pipeline Installation</h3>
                            <p class="text-muted">Large-scale pipeline installation</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Niger Delta</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/pipeline-2.jpg" class="card-img-top" alt="Pipeline Project">
                            <span class="badge bg-danger">Pipeline</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Pipeline Construction</h3>
                            <p class="text-muted">Pipeline construction project</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Niger Delta</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/pipeline-3.jpg" class="card-img-top" alt="Pipeline Project">
                            <span class="badge bg-danger">Pipeline</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Pipeline Works</h3>
                            <p class="text-muted">Pipeline installation and testing</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Niger Delta</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/pipeline-4.jpg" class="card-img-top" alt="Pipeline Project">
                            <span class="badge bg-danger">Pipeline</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Pipeline System</h3>
                            <p class="text-muted">Complete pipeline system installation</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Niger Delta</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/pipeline-5.jpg" class="card-img-top" alt="Pipeline Project">
                            <span class="badge bg-danger">Pipeline</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Pipeline Infrastructure</h3>
                            <p class="text-muted">Pipeline infrastructure development</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Niger Delta</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/pipeline-6.jpg" class="card-img-top" alt="Pipeline Project">
                            <span class="badge bg-danger">Pipeline</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Pipeline Network</h3>
                            <p class="text-muted">Extensive pipeline network installation</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Niger Delta</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="electrical" class="project-category d-none fade-in-section">
            <h2 class="section-title text-center mb-5">Electrical Projects</h2>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/electrical-1.jpg" class="card-img-top" alt="Electrical Project">
                            <span class="badge bg-accent">Electrical</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Electrical Systems</h3>
                            <p class="text-muted">Industrial electrical system installation</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Lagos</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/electrical-2.jpg" class="card-img-top" alt="Electrical Project">
                            <span class="badge bg-accent">Electrical</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Electrical Installation</h3>
                            <p class="text-muted">Commercial electrical installation</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Lagos</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/electrical-3.jpg" class="card-img-top" alt="Electrical Project">
                            <span class="badge bg-accent">Electrical</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Electrical Works</h3>
                            <p class="text-muted">Industrial electrical works</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Lagos</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/electrical-4.jpg" class="card-img-top" alt="Electrical Project">
                            <span class="badge bg-accent">Electrical</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Power Systems</h3>
                            <p class="text-muted">Industrial power system installation</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Lagos</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="project-card card h-100">
                        <div class="position-relative">
                            <img src="./images/portfolio/electrical-5.jpg" class="card-img-top" alt="Electrical Project">
                            <span class="badge bg-accent">Electrical</span>
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Electrical Infrastructure</h3>
                            <p class="text-muted">Commercial electrical infrastructure</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fas fa-map-marker-alt me-2"></i>Lagos</li>
                                <li class="list-inline-item"><i class="fas fa-calendar-alt me-2"></i>2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="text-center mt-5 fade-in-section">
            <button class="btn btn-accent btn-lg"><i class="fas fa-plus me-2"></i>Load More Projects</button>
        </div>
    </main>

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
            
            // *** PROJECT FILTER TAB SCRIPT (from your original code) ***
            document.querySelectorAll('.nav-pills .nav-link').forEach(link => {
                link.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = this.getAttribute('data-bs-target');
                    
                    // Hide all sections
                    document.querySelectorAll('.project-category').forEach(section => {
                        section.classList.add('d-none');
                    });
                    
                    // Show target section
                    const targetSection = document.querySelector(target);
                    if(targetSection) {
                        targetSection.classList.remove('d-none');
                        // Re-trigger fade-in if it was hidden
                        targetSection.classList.remove('visible'); 
                        void targetSection.offsetWidth; // Trigger reflow
                        targetSection.classList.add('visible');
                    }

                    // Update active class for buttons
                    document.querySelectorAll('.nav-pills .nav-link').forEach(nav => {
                        nav.classList.remove('active');
                    });
                    this.classList.add('active');
                });
            });

            // Fade-in sections on scroll
            const fadeInObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
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