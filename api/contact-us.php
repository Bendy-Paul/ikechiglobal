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


<?php
include_once('footer.php')
?>
</body>

</html>