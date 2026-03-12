<?php
// header.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Government College of Engineering, Erode</title>
    <meta name="description" content="Government College of Engineering, Erode, GCE Erode, GECE, gece,www.gcee.ac.in">
    
    <!-- Favicon -->
    <link rel="icon" href="/assets/img/icons/GCEE.png"/>

    <!-- Modern Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- New Design System -->
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/layout.css">
    <link rel="stylesheet" href="/assets/css/components.css">
</head>
<body>

    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container top-bar-content">
            <div>
                <i class="fas fa-envelope"></i> gceeprincipal@gmail.com 
                <span style="margin: 0 10px;">|</span>
                <i class="fas fa-phone"></i> +91 0424 2533579
            </div>
            <div>
                <a href="https://examgcee.blogspot.com/" target="_blank">Student Portal</a>
                <a href="https://gcee.ac.in/webmail" target="_blank">Staff Portal</a>
            </div>
        </div>
    </div>

    <!-- Header Section -->
    <header class="header">
        <div class="container nav-container">
            <a href="/index.php" class="logo-display">
                <img src="/assets/img/icons/GCEE.png" alt="GCEE Logo">
                <div class="logo-text">
                    <h1>Government College of Engineering</h1>
                    <p>Erode (Formerly IRTT)</p>
                </div>
            </a>
            
            <button class="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </button>

            <nav>
                <ul class="main-nav">
                    <li class="nav-item">
                        <a href="/index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/aboutus.php" class="nav-link">About Us <i class="fas fa-chevron-down" style="font-size: 0.8rem;"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="/aboutus.php" class="dropdown-item">Overview of the college</a></li>
                            <li><a href="/irttmedia.php" class="dropdown-item">Gallery</a></li>
                        </ul>
                    </li>
                    <li class="nav-item mega-menu-wrapper">
                        <a href="#" class="nav-link">Departments <i class="fas fa-chevron-down" style="font-size: 0.8rem;"></i></a>
                        <div class="mega-menu dropdown-menu">
                            <div class="mega-menu-grid">
                                <div>
                                    <h4 class="mega-menu-title">UG Courses</h4>
                                    <ul class="mega-menu-list">
                                        <li><a href="/civil.php">Civil Engineering</a></li>
                                        <li><a href="/automobile.php">Automobile Engineering</a></li>
                                        <li><a href="/mech.php">Mechanical Engineering</a></li>
                                        <li><a href="/eee.php">Electrical & Electronics</a></li>
                                        <li><a href="/ece.php">Electronics & Communication</a></li>
                                        <li><a href="/cse.php">Computer Science</a></li>
                                        <li><a href="/cse-ds.php">Computer Science (AI & DS)</a></li>
                                        <li><a href="/it.php">Information Technology</a></li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="mega-menu-title">PG Courses</h4>
                                    <ul class="mega-menu-list">
                                        <li><a href="/mecse.php">M.E (CSE)</a></li>
                                        <li><a href="/mestruct.php">M.E (Structural Engineering)</a></li>
                                    </ul>
                                    <h4 class="mega-menu-title" style="margin-top: 20px;">Others</h4>
                                    <ul class="mega-menu-list">
                                        <li><a href="/science&humanities.php">Science & Humanities</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Admissions <i class="fas fa-chevron-down" style="font-size: 0.8rem;"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="/admissionug.php" class="dropdown-item">UG Admissions</a></li>
                            <li><a href="/admissionpg.php" class="dropdown-item">PG Admissions</a></li>
                            <li><a href="/Fees/GCEEFees.jpeg" target="_blank" class="dropdown-item">Fees Details</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="/r&dconsultancy.php" class="nav-link">Research</a>
                    </li>
                    <li class="nav-item">
                        <a href="/placementstatistics.php" class="nav-link">Placements</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Campus Life <i class="fas fa-chevron-down" style="font-size: 0.8rem;"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="/library.php" class="dropdown-item">Library</a></li>
                            <li><a href="/hostel.php" class="dropdown-item">Hostels</a></li>
                            <li><a href="/sports.php" class="dropdown-item">Sports</a></li>
                            <li><a href="/irttauditorium.php" class="dropdown-item">Auditorium</a></li>
                            <li><a href="/medicalfacilities.php" class="dropdown-item">Medical Facilities</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="/contactus.php" class="nav-link">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
