<?php
// header.php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="<?php echo $site_url; ?>/assets/images/favicon.png">
    <title><?php echo $acronym; ?> - <?php echo $site_name; ?></title>
    <style>
        :root {
            --primary-blue: #0056b3;
            --secondary-blue: #007bff;
            --light-blue: #e9f0f7;
            --dark-blue: #003d7a;
            --white: #ffffff;
            --light-gray: #f8f9fa;
            --dark-gray: #343a40;
            --text-gray: #555;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--white);
            color: var(--dark-gray);
            line-height: 1.6;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        /* Header Styles */
        header {
            background-color: var(--white);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            top: 0;
            z-index: 1000;
        }

        .logo-section {
            text-align: center;
            padding: 20px 0;
            border-bottom: 1px solid #eee;
        }

        .logo-container {
            display: inline-block;
            text-align: center;
        }

        .logo {
            background-color: var(--primary-blue);
            color: white;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 2rem;
            margin: 0 auto 10px;
        }

        .site-name {
            color: var(--dark-blue);
            font-size: 1.8rem;
            font-weight: 600;
        }

        .site-tagline {
            color: var(--text-gray);
            font-size: 0.9rem;
            margin-top: 5px;
        }

        /* Navigation */
        nav {
            background-color: var(--dark-blue);
        }

        /* Mobile Hamburger Icon */
        .hamburger-menu {
            display: none;
            /* Hidden by default for desktop */
            position: absolute;
            top: 25px;
            /* Adjust as needed */
            right: 15px;
            /* Adjust as needed */
            cursor: pointer;
            padding: 10px;
            z-index: 1010;
            /* Above everything else */
        }

        .hamburger-menu span {
            display: block;
            width: 25px;
            height: 3px;
            margin: 5px 0;
            background-color: var(--dark-blue);
            transition: all 0.3s ease-in-out;
        }

        .nav-wrapper {
            /* Flex for desktop menu */
            display: flex;
            justify-content: center;
        }

        nav ul {
            display: flex;
            list-style: none;
            justify-content: center;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            position: relative;
        }

        nav ul li a {
            color: var(--white);
            text-decoration: none;
            padding: 15px 20px;
            display: block;
            transition: background-color 0.3s;
            font-weight: 500;
        }

        nav ul li a:hover {
            background-color: var(--primary-blue);
        }

        /* Dropdown Menu */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: var(--white);
            min-width: 220px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            z-index: 1;
            /* Ensure text contrast for dropdown links */
            color: var(--dark-gray);
        }

        .dropdown-content a {
            color: var(--dark-gray);
            padding: 12px 16px;
            border-bottom: 1px solid #eee;
        }

        .dropdown-content a:hover {
            background-color: var(--light-blue);
            color: var(--dark-blue);
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Main Content */
        main {
            min-height: 70vh;
        }

        .page-header {
            background: linear-gradient(rgba(0, 84, 179, 0.8), rgba(0, 84, 179, 0.9)), url('<?php echo $site_url; ?>/assets/images/page-banner.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 80px 0;
            text-align: center;
            margin-bottom: 40px;
        }

        .page-header h2 {
            font-size: 2.5rem;
            margin-bottom: 15px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
        }

        .breadcrumb {
            color: rgba(255, 255, 255, 0.9);
        }

        .breadcrumb a {
            color: white;
            text-decoration: none;
        }

        .breadcrumb a:hover {
            text-decoration: underline;
        }

        .content-section {
            margin-bottom: 40px;
        }

        .content-section h3 {
            color: var(--dark-blue);
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 1px solid #ddd;
            font-size: 1.8rem;
        }

        /* Footer Styles */
        footer {
            background-color: var(--white);
            color: var(--dark-gray);
            padding: 50px 0 20px;
            border-top: 1px solid #eee;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 30px;
        }

        .footer-logo {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .footer-logo .logo {
            width: 60px;
            height: 60px;
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        .footer-logo .site-name {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .footer-section h3 {
            margin-bottom: 20px;
            font-size: 1.3rem;
            color: var(--dark-blue);
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 10px;
        }

        .footer-section ul li a {
            color: var(--text-gray);
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-section ul li a:hover {
            color: var(--primary-blue);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #eee;
            color: var(--text-gray);
            font-size: 0.9rem;
        }

        /* Table Styles */
        .data-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
        }

        .data-table th {
            background-color: var(--primary-blue);
            color: white;
            text-align: left;
            padding: 12px 15px;
        }

        .data-table td {
            padding: 10px 15px;
            border-bottom: 1px solid #ddd;
        }

        .data-table tr:nth-child(even) {
            background-color: var(--light-gray);
        }

        .data-table tr:hover {
            background-color: var(--light-blue);
        }

        /* Card Layout */
        .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 25px;
            margin: 30px 0;
        }

        .card {
            background-color: var(--white);
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
        }

        .card-img {
            height: 180px;
            background-color: var(--light-blue);
            background-size: cover;
            background-position: center;
        }

        .card-body {
            padding: 20px;
        }

        .card h4 {
            color: var(--dark-blue);
            margin-bottom: 10px;
            font-size: 1.3rem;
        }

        .card p {
            color: var(--text-gray);
            margin-bottom: 15px;
        }

        .card-link {
            color: var(--primary-blue);
            text-decoration: none;
            font-weight: 600;
            display: inline-block;
        }

        .card-link:hover {
            text-decoration: underline;
        }

        /* Slider Styles */
        .slider {
            position: relative;
            height: 500px;
            overflow: hidden;
            margin-bottom: 40px;
        }

        .slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1s ease;
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
        }

        .slide.active {
            opacity: 1;
        }

        .slide-content {
            background: rgba(0, 84, 179, 0.85);
            color: white;
            padding: 40px;
            max-width: 600px;
            margin-left: 10%;
            border-radius: 5px;
        }

        .slide-content h2 {
            font-size: 2.5rem;
            margin-bottom: 15px;
        }

        .slide-content p {
            font-size: 1.1rem;
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            background: white;
            color: var(--primary-blue);
            padding: 12px 25px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
        }

        .btn:hover {
            background: var(--light-blue);
            transform: translateY(-2px);
        }

        .slider-nav {
            position: absolute;
            bottom: 20px;
            left: 0;
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .slider-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            margin: 0 5px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .slider-dot.active {
            background: white;
        }

        /* Mobile Menu-specific Styles */
        @media (max-width: 768px) {

            /* Show hamburger menu and hide navigation list by default */
            .hamburger-menu {
                display: block;
            }

            nav {
                position: relative;
                /* To position hamburger inside header if needed, but it's now outside nav */
            }

            .nav-wrapper {
                /* Hide the navigation list by default on mobile */
                display: none;
                flex-direction: column;
                position: absolute;
                top: 0;
                /* Align with the top of the logo section or a calculated height */
                left: 0;
                width: 100%;
                background-color: var(--dark-blue);
                /* Same background as desktop nav */
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                z-index: 999;
                /* Add top padding to account for the logo section */
                padding-top: 10px;
                /* Adjust this value based on your logo-section height to drop menu below it */
            }

            .nav-wrapper.active {
                display: flex;
                /* Show when active */
            }

            nav ul {
                flex-direction: column;
                align-items: flex-start;
                /* Align menu items to the left */
                width: 100%;
            }

            nav ul li {
                width: 100%;
                border-bottom: 1px solid var(--primary-blue);
            }

            nav ul li:last-child {
                border-bottom: none;
            }

            nav ul li a {
                padding: 12px 15px;
            }

            .dropdown-content {
                position: static;
                box-shadow: none;
                width: 100%;
                background-color: var(--primary-blue);
                /* Different color for sub-menu */
            }

            .dropdown-content a {
                color: var(--white);
                padding-left: 30px;
                /* Indent sub-items */
                border-bottom: 1px solid var(--dark-blue);
            }

            /* Remove hover effect for dropdown on mobile, will be toggled by click/tap */
            .dropdown:hover .dropdown-content {
                display: none;
            }

            /* Class to display dropdown content on mobile via JavaScript */
            .dropdown.open .dropdown-content {
                display: block;
            }

            /* Hamburger animation */
            .hamburger-menu.open span:nth-child(1) {
                transform: rotate(45deg) translate(5px, 5px);
            }

            .hamburger-menu.open span:nth-child(2) {
                opacity: 0;
            }

            .hamburger-menu.open span:nth-child(3) {
                transform: rotate(-45deg) translate(5px, -5px);
            }

            .slide-content {
                margin: 0 5%;
                padding: 20px;
            }

            .slide-content h2 {
                font-size: 1.8rem;
            }

            .slider {
                height: 400px;
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="logo-section">
            <a href="<?php echo $site_url; ?>/index.php">
                <div class="logo-container">
                    <div class="logo"><img src="<?php echo $site_url; ?>/assets/images/logo.png"
                            style="width: 100px;" />
                        <!--<?php echo $acronym; ?>-->
                    </div>
                    <div class="site-name"><?php echo $site_name; ?></div>
                    <div class="site-tagline">Global Trade Insights & Research</div>
                </div>
            </a>
        </div>
        <div class="hamburger-menu" id="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <nav>
            <div class="container">
                <div class="nav-wrapper" id="nav-wrapper">
                    <ul>
                        <li><a href="<?php echo $site_url; ?>/index.php">Home</a></li>
                        <li class="dropdown" id="dropdown-about">
                            <a href="#">About</a>
                            <div class="dropdown-content">
                                <a href="<?php echo $site_url; ?>/pages/about/about-project.php">About the
                                    Project</a>
                                <a href="<?php echo $site_url; ?>/pages/about/project-goals.php">Project Goals</a>
                                <a href="<?php echo $site_url; ?>/pages/about/team.php">Team</a>
                                <a
                                    href="<?php echo $site_url; ?>/pages/about/acknowledgements.php">Acknowledgements</a>
                            </div>
                        </li>
                        <li class="dropdown" id="dropdown-development">
                            <a href="#">Development</a>
                            <div class="dropdown-content">
                                <a href="<?php echo $site_url; ?>/pages/development/methodology.php">Methodology</a>
                                <a href="<?php echo $site_url; ?>/pages/development/data-sources.php">Data
                                    Sources</a>


                            </div>
                        </li>
                        <li class="dropdown" id="dropdown-trade">
                            <a href="#">Trade</a>
                            <div class="dropdown-content">
                                <a href="<?php echo $site_url; ?>/pages/trade/basics.php">Basics</a>
                                <a href="<?php echo $site_url; ?>/pages/trade/theories.php">Theories</a>
                                <a href="<?php echo $site_url; ?>/pages/trade/agreements.php">Agreements</a>
                                <a href="<?php echo $site_url; ?>/pages/trade/logistics-supply-chains.php">Logistics
                                    &
                                    Supply Chains</a>
                                <a href="<?php echo $site_url; ?>/pages/trade/global-trade-history.php">Global Trade
                                    History</a>
                            </div>
                        </li>
                        <li class="dropdown" id="dropdown-monetary">
                            <a href="#">Monetary</a>
                            <div class="dropdown-content">
                                <a href="<?php echo $site_url; ?>/pages/monetary/policies.php">Policies</a>
                                <a href="<?php echo $site_url; ?>/pages/monetary/exchange-rates.php">Exchange
                                    Rates</a>
                                <a href="<?php echo $site_url; ?>/pages/monetary/central-banks.php">Central
                                    Banks</a>
                                <a href="<?php echo $site_url; ?>/pages/monetary/inflation-controls.php">Inflation
                                    Controls</a>
                            </div>
                        </li>
                        <li class="dropdown" id="dropdown-countries">
                            <a href="#">Countries</a>
                            <div class="dropdown-content">
                                <a href="<?php echo $site_url; ?>/pages/countries/overview.php">Overview</a>
                                <a href="<?php echo $site_url; ?>/pages/countries/regions.php">Regions</a>
                                <a href="<?php echo $site_url; ?>/pages/countries/country-profile.php">Country
                                    Profile</a>
                            </div>
                        </li>
                        <li class="dropdown" id="dropdown-research">
                            <a href="#">Research</a>
                            <div class="dropdown-content">
                                <a href="<?php echo $site_url; ?>/pages/research/research-articles.php">Research
                                    Articles</a>
                                <a href="<?php echo $site_url; ?>/pages/research/case-studies.php">Case Studies</a>
                                <a href="<?php echo $site_url; ?>/pages/research/data-visualization.php">Data
                                    Visualization</a>
                            </div>
                        </li>
                        <li class="dropdown" id="dropdown-contact">
                            <a href="#">Contact</a>
                            <div class="dropdown-content">
                                <a href="<?php echo $site_url; ?>/pages/contact/contact.php">Contact</a>
                                <a href="<?php echo $site_url; ?>/pages/contact/faq.php">FAQ</a>
                                <!--<a href="<?php echo $site_url; ?>/pages/contact/feedback.php">Feedback</a>-->
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const hamburger = document.getElementById('hamburger');
            const navWrapper = document.getElementById('nav-wrapper');
            const dropdowns = document.querySelectorAll('.dropdown');

            // 1. Toggle mobile menu
            hamburger.addEventListener('click', function() {
                navWrapper.classList.toggle('active');
                hamburger.classList.toggle('open');
            });

            // 2. Toggle mobile dropdown menus
            dropdowns.forEach(dropdown => {
                const link = dropdown.querySelector('a');
                // We only want to enable this for small screens (mobile)
                link.addEventListener('click', function(e) {
                    if (window.innerWidth <= 768) {
                        // Prevent the link from navigating if it's the dropdown toggle itself
                        if (link.getAttribute('href') === '#') {
                            e.preventDefault();
                        }

                        // Close other open dropdowns
                        dropdowns.forEach(otherDropdown => {
                            if (otherDropdown !== dropdown) {
                                otherDropdown.classList.remove('open');
                            }
                        });

                        // Toggle the clicked dropdown
                        dropdown.classList.toggle('open');
                    }
                });
            });

            // Optional: Close menu when resizing back to desktop
            window.addEventListener('resize', function() {
                if (window.innerWidth > 768) {
                    navWrapper.classList.remove('active');
                    hamburger.classList.remove('open');
                    // Ensure all dropdowns are closed when returning to desktop view
                    dropdowns.forEach(dropdown => {
                        dropdown.classList.remove('open');
                    });
                }
            });
        });
    </script>