
    <style>
            /* <style> */
    :root {
        --primary-color: #f6b61b;
        --secondary-color: #f0ce0d;
        --dark-color: #212529;
        --light-color: #f8f9fa;
    }

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


    body {
        /* font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; */
        overflow-x: hidden;
        font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    /* Header Styles */
    header {
        background-color: #f5f7fa;
        /* Whitish grey background */
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        padding: 15px 40px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        /* position: relative; */
        border-radius: 10px;
        transition: all 0.3s ease;
        position: fixed;
        z-index: 1000;
        width: 100%;
    }

    .logo {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .logo-icon {
        color: #f0ce0d;
        font-size: 2.2rem;
    }

    .logo-text {
        font-size: 1.8rem;
        font-weight: 700;
        color: #2c3e50;
        letter-spacing: -0.5px;
    }

    .logo-text span {
        color: #f0ce0d;
    }

    nav ul {
        display: flex;
        list-style: none;
    }

    nav ul li a {
        text-decoration: none;
        color: #34495e;
        font-weight: 600;
        font-size: 1.1rem;
        padding: 8px 15px;
        border-radius: 6px;
        transition: all 0.3s ease;
        position: relative;
    }

    nav ul li a:hover {
        color: #f0ce0d;
        transition: all 0.3s ease;

    }

    nav ul li a::after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 15px;
        width: 0px;
        height: 3px;
        background: #f0ce0d;
        border-radius: 3px;
        transition: all 0.3s ease;
    }

    nav ul li a:hover::after {
        width: 30px;
    }

    .nav-buttons {
        display: flex;
        gap: 15px;
    }

    /* Hamburger Menu */
    .hamburger {
        display: none;
        cursor: pointer;
        background: #f0ce0d;
        border-radius: 8px;
        padding: 12px;
        transition: all 0.3s ease;
    }

    .hamburger:hover {
        background: #2980b9;
    }

    .hamburger .bar {
        display: block;
        width: 25px;
        height: 3px;
        margin: 5px auto;
        background-color: white;
        transition: all 0.3s ease;
        border-radius: 2px;
    }

    /* Modal Header for Mobile */
    .modal-header {
        position: fixed;
        top: 0;
        left: -100%;
        width: 75%;
        height: 100vh;
        background: #f5f7fa;
        box-shadow: 5px 0 25px rgba(0, 0, 0, 0.15);
        z-index: 1000;
        padding: 30px;
        display: flex;
        flex-direction: column;
        transition: left 0.4s ease;
    }

    .modal-header.active {
        left: 0;
    }

    .modal-logo {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 40px;
    }

    .modal-nav ul {
        list-style: none;
        display: flex;
        flex-direction: column;
    }

    .close-btn {
        position: absolute;
        top: 20px;
        right: 20px;
        font-size: 1.8rem;
        color: #e74c3c;
        cursor: pointer;
        background: none;
        border: none;
        transition: transform 0.3s ease;
    }

    .close-btn:hover {
        transform: rotate(90deg);
    }

    .overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        backdrop-filter: blur(4px);
        z-index: 999;
        opacity: 0;
        visibility: hidden;
        transition: all 0.4s ease;
    }

    .overlay.active {
        opacity: 1;
        visibility: visible;
    }

    /* Responsive Design */
    @media (max-width: 992px) {
        nav ul {
            gap: 15px;
        }

        .btn {
            padding: 10px 18px;
            font-size: 0.9rem;
        }
    }

    @media (max-width: 768px) {
        header {
            padding: 15px 25px;
        }

        .nav-links,
        .nav-buttons {
            display: none;
        }

        .hamburger {
            display: block;
        }

        .logo-text {
            font-size: 1.5rem;
        }

        .logo-icon {
            font-size: 1.8rem;
        }
    }

    @media (max-width: 480px) {
        header {
            padding: 12px 20px;
        }

        .logo-text {
            font-size: 1.3rem;
        }

        .modal-header {
            width: 85%;
        }
    }


    .hero-section {
        position: relative;
        height: 100vh;
        /* overflow: hidden; */
    }

    .hero-image {
        margin: 2rem;
        aspect-ratio: 16/9;
    }

    .owl-carousel,
    .owl-stage-outer,
    .owl-stage,
    .owl-item {
        height: 100%;
    }

    .item {
        position: relative;
        height: 100%;
        display: flex;
        align-items: center;
    }

    .hero-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: -1;
        transition: transform 10s ease;
    }

    .item:hover .hero-bg {
        transform: scale(1.05);
    }

    .container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .content-container {
        background: rgba(8, 0, 22, 0.774);
        height: 100%;
    }

/* --- Modern Hero Content Style --- */

.owl-carousel .hero-content {
    /* Responsive Sizing */
    max-width: 750px; /* Set a max width for large screens */
    width: 90%;       /* Use a percentage for small-screen responsiveness */
    
    /* Modern Glassmorphism Effect */
    background: rgba(138, 138, 138, 0.266); /* Slightly more opaque for better readability */
    backdrop-filter: blur(12px);
    border-radius: 16px; /* Softer, more modern corners */
    border: 1px solid rgba(255, 255, 255, 0.6); /* Subtle highlight border */
    box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.1); /* Soft, clean shadow */

    /* Layout & Spacing */
    display: flex;
    flex-direction: column;
    justify-content: center; /* Vertically centers the content inside */
    padding: 2.5rem 3rem;    /* Balanced padding on all sides */
    min-height: 350px;       /* Ensures a consistent minimum size */
    
    /* Typography */
    color: #ffffff; /* Darker color for high contrast and accessibility */
    text-align: left; /* Left-aligned text is often cleaner for hero content */

    /* Animation (using the one you commented out) */
    opacity: 0; /* Start hidden for animation */
    transform: translateY(20px);
    animation: fadeInUp 0.8s 0.2s ease-out forwards; /* Added a 0.2s delay */
}

/* Style for the title container */
.owl-carousel .hero-content .hero-title-container {
    position: relative;
    z-index: 1;
    margin-bottom: 1rem; /* Adds space between the title and description */
}

/* --- Example Child Element Styles --- */
/* (You can adapt these to your HTML) */

.owl-carousel .hero-content .hero-title {
    font-size: 2.75rem; /* Large, bold title */
    font-weight: 700;
    line-height: 1.2;
    margin: 0;
}

.owl-carousel .hero-content .hero-description {
    font-size: 1.1rem;
    line-height: 1.6;
    opacity: 0.85; /* Softer text for the description */
    margin-top: 1rem;
}

/* --- Keyframes for the Animation --- */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

    h1.display-3 {
        font-family: 'Montserrat', sans-serif;
        font-size: 3.5rem;
        font-weight: 800;
        line-height: 1.2;
        margin-bottom: 20px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .lead {
        font-size: 1.35rem;
        font-weight: 300;
        line-height: 1.6;
        margin-bottom: 30px;
        max-width: 90%;
    }


    .btn-outline-light {
        background: transparent;
        color: white;
        border: 2px solid white;
    }

    .btn-outline-light:hover {
        background: rgba(255, 255, 255, 0.2);
        transform: translateY(-3px);
    }

    /* Custom Navigation */
    .custom-nav {
        position: absolute;
        bottom: 40px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        gap: 15px;
        z-index: 10;
    }

    .nav-dot {
        width: 14px;
        height: 14px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.5);
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .nav-dot.active {
        background: #e74c3c;
        transform: scale(1.3);
    }

    /* Overlay */
    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to right, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.3) 100%);
        z-index: -1;
    }

    /* Animation */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(40px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Responsive */
    @media (max-width: 992px) {
        h1.display-3 {
            font-size: 2.8rem;
        }

        .lead {
            font-size: 1.2rem;
        }
    }

    @media (max-width: 768px) {
        h1.display-3 {
            font-size: 2.2rem;
        }

        .lead {
            font-size: 1.1rem;
        }

        .btn {
            padding: 12px 25px;
            font-size: 1rem;
            width: 100%;
        }

        .d-flex {
            flex-direction: column;
            gap: 15px;
        }

        .hero-content {
            padding: 25px 20px;
            margin: 0 15px;
        }
    }

    @media (max-width: 576px) {
        h1.display-3 {
            font-size: 1.8rem;
        }

        .hero-content {
            padding: 20px 15px;
        }

        .custom-nav {
            bottom: 25px;
        }
    }

    .section-title {
        position: relative;
        margin-bottom: 50px;
    }

    .section-title:after {
        content: '';
        position: absolute;
        bottom: -15px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 3px;
        background: var(--primary-color);
    }

    .service-card {
        border: none;
        border-radius: 10px;
        overflow: hidden;
        transition: all 0.3s ease;
        /* box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05); */
    }

    .service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    .service-icon {
        font-size: 2.5rem;
        color: var(--primary-color);
        margin-bottom: 20px;
    }

    .about {
        background-image: url(../about-us.webp);
        background-position: 60%;
        background-repeat: no-repeat;
        background-size: 1072px 696px;
        padding: 120px 15px;
    }

    .about-img {
        /* border-radius: 10px; */
        box-shadow: 15px 15px 0 0 var(--primary-color);
        height: 100%;
        object-fit: cover;
        /* aspect-ratio: 2/1.5; */
    }


    .project-card {
        position: relative;
        overflow: hidden;
        border-radius: 10px;
        margin-bottom: 30px;
    }

    .project-img {
        transition: transform 0.5s ease;
    }

    .project-overlay {
        position: absolute;
        bottom: -100%;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(184, 181, 41, 0.7);
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        transition: all 0.5s ease;
        opacity: 0;
    }

    .project-card:hover .project-overlay {
        bottom: 0;
        opacity: 1;
    }

    .project-card:hover .project-img {
        transform: scale(1.1);
    }

    .client-logo {
        filter: grayscale(100%);
        opacity: 0.7;
        transition: all 0.3s ease;
    }

    .client-logo:hover {
        filter: grayscale(0%);
        opacity: 1;
    }

    .footer {
        background-color: var(--dark-color);
        color: white;
        padding: 80px 0 30px;
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
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.1);
        color: white;
        margin-right: 10px;
        transition: all 0.3s ease;
    }

    .social-icon:hover {
        background-color: var(--primary-color);
        transform: translateY(-5px);
    }

    .stats-item {
        padding: 30px;
        border-radius: 10px;
        background-color: white;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        text-align: center;
        transition: all 0.3s ease;
    }

    .stats-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    .stats-number {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--primary-color);
    }

    .stats-label {
        font-size: 1rem;
        color: var(--dark-color);
    }

    ul.custom-checkmarks {
        list-style: none;
        padding-left: 1.5em;
    }

    ul.custom-checkmarks li {
        position: relative;
        margin-bottom: 0.5em;
    }

    ul.custom-checkmarks li:before {
        content: "";
        display: inline-block;
        position: absolute;
        left: -1.5em;
        width: 1em;
        height: 0.5em;
        border: solid black;
        /* Green color for the check */
        border-width: 0 0 2px 2px;
        transform: rotate(-45deg);
        top: 0.4em;
    }

    /* Alternative using Unicode checkmark */
    ul.unicode-checkmarks {
        list-style: none;
        padding-left: 1.5em;
    }

    ul.unicode-checkmarks li:before {
        content: "✓";
        color: black;
        display: inline-block;
        width: 1em;
        margin-left: -1em;
    }

    .w-w-d-img {
        aspect-ratio: 1/1;
        object-fit: cover
    }



    .content-left,
    .content-right {
        background-size: cover;
        margin-top: 2rem;
        margin-bottom: 2rem;
        background: rgba(246, 182, 27, 0.8);
        backdrop-filter: blur(10px);
    }

    .content-right {
        transform: translateX(100%);
    }

    .content-left {
        transform: translateX(-50%);
    }

    @media screen and (max-width: 900px) {

        .content-right,
        .content-left {
            transform: translateX(0%);
            /* left: 50%; */
            width: 100%;
            padding: 20px;
            background: rgba(199, 199, 199, 0.8);
            backdrop-filter: blur(10px);
        }
    }

    @media screen and (max-width: 576px) {

        .content-right,
        .content-left {
            padding: 15px;
            margin-top: 1rem;
            margin-bottom: 1rem;
        }

    }


    .section-padding {
        padding: 2rem 0;
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
        top: 10px;
        right: 20px;
        background: none;
        border: none;
        font-size: 5rem;
        cursor: pointer;
        color: var(--dark);
        transition: var(--transition);
        z-index: 50;
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
    }/* Services Modal - Redesigned */
.services-dropdown {
    position: fixed;
    top: 0;
    left: 0;
    height: 100vh;
    background: rgba(255, 255, 255, 0.98);
    backdrop-filter: blur(10px);
    box-shadow: var(--shadow);
    z-index: 1000;
    padding: 4rem 2rem 3rem;
    overflow-y: auto;
    display: none;
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    border-top: 3px solid var(--primary);
}

.services-dropdown.active {
    display: block;
    transform: translateY(0);
    opacity: 1;
    animation: modalSlideIn 0.4s ease-out;
}

@keyframes modalSlideIn {
    0% {
        opacity: 0;
        transform: translateY(30px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

.services-grid {
    /* display: grid; */
    /* grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 2.5rem;
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 1rem; */
}

.service-item-link {
    text-decoration: none;
    color: inherit;
    display: block;
    border-radius: 20px;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
}

.service-item-link::before {
    content: '';
    position: absolute;
    inset: 0;
    border-radius: 20px;
    padding: 2px;
    background: var(--gradient);
    mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
    mask-composite: exclude;
    opacity: 0;
    transition: var(--transition);
}

.service-item-link:hover::before {
    opacity: 1;
}

.service-item {
    padding: 2.5rem 2rem;
    border-radius: 20px;
    background: white;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    display: flex;
    flex-direction: column;
    align-items: center;
    border: 1px solid rgba(0, 0, 0, 0.06);
    position: relative;
    overflow: hidden;
    height: 100%;
    text-align: center;
}

.service-item::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: var(--gradient);
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

.service-item-link:hover .service-item {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
}

.service-item-link:hover .service-item::after {
    transform: scaleX(1);
}

.service-icon {
    font-size: 3rem;
    margin-bottom: 1.5rem;
    background: var(--gradient);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    z-index: 1;
    transition: transform 0.3s ease;
}

.service-item-link:hover .service-icon {
    transform: scale(1.1) translateY(-5px);
}

.service-item h3 {
    color: var(--dark);
    margin-bottom: 1rem;
    font-size: 1.4rem;
    font-weight: 600;
    z-index: 1;
    line-height: 1.3;
}

.service-item p {
    color: var(--text-light);
    font-size: 1rem;
    line-height: 1.6;
    z-index: 1;
    margin-bottom: 0.5rem;
}

.dropdown-close {
    position: fixed;
    top: 3rem;
    right: .2rem;
    background: white;
    border: none;
    width: 3rem;
    height: 3rem;
    border-radius: 50%;
    font-size: 1.5rem;
    cursor: pointer;
    color: var(--text-light);
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 2011;
    font-size: 2rem;
}

.dropdown-close:hover {
    color: var(--primary);
    transform: rotate(90deg) scale(1.1);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
}

.services-header {
    text-align: center;
    margin-bottom: 4rem;
    max-width: 700px;
    margin-left: auto;
    margin-right: auto;
    padding-top: 1rem;
}

.services-header h2 {
    color: var(--dark);
    font-size: 2.5rem;
    margin-bottom: 1.5rem;
    font-weight: 700;
    background: var(--gradient);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
}

.services-header p {
    color: var(--text-light);
    font-size: 1.2rem;
    line-height: 1.6;
}

/* Enhanced mobile styles */
@media (max-width: 768px) {
    .services-dropdown {
        padding: 3rem 1rem 2rem;
        max-height: 100vh;
    }
    
    .services-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
        padding: 0 0.5rem;
    }
    
    .service-item {
        padding: 2rem 1.5rem;
    }
    
    .services-header {
        margin-bottom: 2.5rem;
        padding-top: 0;
    }
    
    .services-header h2 {
        font-size: 2rem;
    }
    
    .services-header p {
        font-size: 1.1rem;
    }
    
    .dropdown-close {
        top: 3rem;
        right: 2.5rem;
        width: 3rem;
        height: 3rem;
    }
}

/* Smooth scrollbar */
.services-dropdown::-webkit-scrollbar {
    width: .8rem;
}

.services-dropdown::-webkit-scrollbar-track {
    background: rgba(0, 0, 0, 0.05);
}

.services-dropdown::-webkit-scrollbar-thumb {
    background: var(--primary);
    border-radius: 10px;
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

    /* --- MODERNIZED SERVICE PAGE STYLES --- */

    .modern-hero {
        background: linear-gradient(135deg, #102149 0%, #1e2a38 100%);
        color: white;
        padding: 100px 0 100px;
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
        /* margin-bottom: 2rem; */
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

    .service-content-list li::before {
        font-family: 'Font Awesome 6 Free';
        font-weight: 900;
        color: var(--primary);
        position: absolute;
        left: 0;
        top: 5px;
    }

    /* Modern Feature Grid */
    .feature-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 5px;
        margin-top: 2rem;
    }

    .feature-card {
        background: white;
        border-radius: var(--border-radius);
        padding: 1rem;
        /* box-shadow: var(--shadow); */
        transition: var(--transition);
        text-align: center;
        /* border-left: 4px solid var(--primary); */
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

    .marine-process,
    .cf-process {
        background: white;
        border-radius: var(--border-radius);
        padding: 2.5rem;
        box-shadow: var(--shadow);
        text-align: center;
        margin-bottom: 2rem;
        border-top: 4px solid var(--primary);
        min-height: 18rem;
    }

    .doc-list li {
        margin-bottom: 10px;
        padding: 10px 15px;
        background: #f8f9fa;
        border-radius: 8px;
        border-left: 4px solid var(--primary);
    }

    main {
        width: 100vw;
        overflow-x: hidden;
    }

    ul {
        list-style-type: none;
        margin: 0px;
    }


    .procurement-process {
        background: white;
        border-radius: var(--border-radius);
        padding: 2.5rem;
        box-shadow: var(--shadow);
        text-align: center;
        margin-bottom: 2rem;
        border-top: 4px solid var(--primary);
    }

    .consultancy-services-section .feature-card {
        background: white;
        border-radius: var(--border-radius);
        padding: 2rem;
        box-shadow: var(--shadow);
        transition: var(--transition);
        border-left: 4px solid var(--primary);
        text-align: left;
    }

    .process-icon {
        font-size: 3rem;
        color: var(--primary);
        margin-bottom: 1.5rem;
    }

    .engineering-services-section .feature-card {
        background: white;
        border-radius: var(--border-radius);
        padding: 2rem;
        box-shadow: var(--shadow);
        transition: var(--transition);
        border-left: 4px solid var(--primary);
        text-align: left;
    }
    </style>
    
    <link rel="stylesheet" href="./css/styles.css?3">
    <!-- AOS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">


    
    <header id="main-header" style="padding-left: 10vw;padding-right: 10vw; z-index:5000">
        <a href="index.php" class="logo">
            <i class="fas fa-drafting-compass logo-icon"></i>
            <div class="logo-text">Ikechi<span>Global</span></div>
        </a>

        <nav class="nav-links">
            <ul>
                <li><a href="index.php" class="">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li>
                    <a href="#" class="services-link">Services</a>
                </li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="contact-us.php">Contact</a></li>
            </ul>
        </nav>

        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </header>

    
    <div class="mobile-nav-panel">
        <button class="close-btn"></button>
        <div class="modal-logo">
            <i class="fas fa-drafting-compass logo-icon"></i>
            <div class="logo-text">Ikechi<span>Global</span></div>
        </div>

        <nav class="modal-nav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li>
                    <a href="#" class="services-link-mobile">Services</a>
                </li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="contact-us.php">Contact</a></li>
            </ul>
        </nav>

        <div class="nav-buttons" style="margin-top: 30px;">
            <button class="btn btn-primary w-100">Get Quote</button>
            <button class="btn btn-secondary w-100 mt-3">Login</button>
        </div>
    </div>
    <div class="overlay"></div>


    <div class="services-dropdown mt-4">
        <button class="dropdown-close">&times;</button>

        <div class="row">
            <div class="col-lg-4">
                <div class="services-header">
                    <h2>Our Services</h2>
                    <p>Comprehensive solutions tailored to meet your business needs across multiple industries</p>
                </div>
            </div>

            <div class="col-lg-8">                
                <div class="services-grid row">
                    <a href="security-services.php" class="service-item-link col-md-6 mb-4">
                        <div class="service-item">
                            <i class="fas fa-shield-alt service-icon"></i>
                            <h3>Onshore & Offshore Security Services</h3>
                            <p>Professional security solutions including static guards, mobile patrols and site protection.</p>
                        </div>
                    </a>
                    <a href="leasing-services.php" class="service-item-link col-md-6 mb-4">
                        <div class="service-item">
                            <i class="fas fa-handshake service-icon"></i>
                            <h3>Leasing Services</h3>
                            <p>Flexible leasing solutions for equipment and manpower.</p>
                        </div>
                    </a>
                    <a href="marine-logistics.php" class="service-item-link col-md-6 mb-4">
                        <div class="service-item">
                            <i class="fas fa-ship service-icon"></i>
                            <h3>Marine Equipment & Logistics</h3>
                            <p>Supply and logistics for marine operations including equipment hire.</p>
                        </div>
                    </a>
                    <a href="engineering-services.php" class="service-item-link col-md-6 mb-4">
                        <div class="service-item">
                            <i class="fas fa-cogs service-icon"></i>
                            <h3>Engineering Services</h3>
                            <p>Multidisciplinary engineering support — design, analysis and commissioning.</p>
                        </div>
                    </a>
                    <a href="procurement-consultancy.php" class="service-item-link col-md-6 mb-4">
                        <div class="service-item">
                            <i class="fas fa-clipboard-list service-icon"></i>
                            <h3>Procurement & Consultancy</h3>
                            <p>End-to-end procurement and specialist consultancy services.</p>
                        </div>
                    </a>
                    <a href="clearing-forwarding.php" class="service-item-link col-md-6 mb-4">
                        <div class="service-item">
                            <i class="fas fa-truck service-icon"></i>
                            <h3>Clearing & Forwarding</h3>
                            <p>Reliable clearing, forwarding and freight services for cross-border trade.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="./js/script.js"></script>

