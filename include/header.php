<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : "Government College of Engineering, Erode"; ?></title>
    <meta name="description" content="Government College of Engineering, Erode - A premier government engineering institution in Tamil Nadu affiliated to Anna University.">
    
    <!-- Favicon -->
    <link rel="icon" href="assets/img/icons/GCEE.png"/>

    <!-- Modern Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Design System CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/layout.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <link rel="stylesheet" href="assets/css/inner-page.css">
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
                <a href="AICTE/AICTE_2025-26.PDF" target="_blank">AICTE</a>
                <a href="NIRF/NIRF2024.pdf" target="_blank">NIRF</a>
                <a href="https://examgcee.blogspot.com/" target="_blank">EXAM CELL</a>
                <a href="GCEE_Alumni_Donations.php">ALUMNI</a>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header class="header">
        <div class="container nav-container">
            <a href="index.php" class="logo-display">
                <img src="assets/img/icons/GCEE.png" alt="GCEE Logo">
                <div class="logo-text">
                    <h1>Government College of Engineering</h1>
                    <p>Erode (Formerly IRTT)</p>
                </div>
            </a>
            
            <button class="mobile-menu-btn" id="mobileMenuBtn">
                <i class="fas fa-bars"></i>
            </button>

            <nav id="mainNav">
                <ul class="main-nav">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="aboutus.php" class="nav-link">About Us <i class="fas fa-chevron-down" style="font-size: 0.8rem;"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="aboutus.php" class="dropdown-item">Overview of the college</a></li>
                            <li><a href="irttmedia.php" class="dropdown-item">Gallery</a></li>
                            <li><a href="Fees/GCEEFees.jpeg" target="_blank" class="dropdown-item">Fees Details</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Academics <i class="fas fa-chevron-down" style="font-size: 0.8rem;"></i></a>
                        <ul class="dropdown-menu">
                            <li><strong style="padding: 10px 24px; display: block; color: var(--secondary-color);">UG Courses</strong></li>
                            <li><a href="civil.php" class="dropdown-item">Civil Engineering</a></li>
                            <li><a href="automobile.php" class="dropdown-item">Automobile Engineering</a></li>
                            <li><a href="mech.php" class="dropdown-item">Mechanical Engineering</a></li>
                            <li><a href="eee.php" class="dropdown-item">Electrical &amp; Electronics</a></li>
                            <li><a href="ece.php" class="dropdown-item">Electronics &amp; Communication</a></li>
                            <li><a href="cse.php" class="dropdown-item">Computer Science</a></li>
                            <li><a href="cse-ds.php" class="dropdown-item">Computer Science (AI &amp; DS)</a></li>
                            <li><a href="it.php" class="dropdown-item">Information Technology</a></li>
                            <li><strong style="padding: 10px 24px; display: block; color: var(--secondary-color);">PG Courses</strong></li>
                            <li><a href="mecse.php" class="dropdown-item">M.E. Computer Science &amp; Engg</a></li>
                            <li><a href="mestruct.php" class="dropdown-item">M.E. Structural Engineering</a></li>
                            <li><strong style="padding: 10px 24px; display: block; color: var(--secondary-color);">Admission</strong></li>
                            <li><a href="admissionug.php" class="dropdown-item">UG Program</a></li>
                            <li><a href="admissionpg.php" class="dropdown-item">PG Program</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="placementstatistics.php" class="nav-link">Placement <i class="fas fa-chevron-down" style="font-size: 0.8rem;"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="placementstatistics.php" class="dropdown-item">Placement Statistics</a></li>
                            <li><a href="placementtraining.php" class="dropdown-item">Placement Trainings</a></li>
                            <li><a href="placementrequiters.php" class="dropdown-item">Our Recruiters</a></li>
                            <li><a href="placementcontact.php" class="dropdown-item">Placement Contact</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Facilities <i class="fas fa-chevron-down" style="font-size: 0.8rem;"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="library.php" class="dropdown-item">Library</a></li>
                            <li><a href="hostel.php" class="dropdown-item">Hostels</a></li>
                            <li><a href="sports.php" class="dropdown-item">Sports</a></li>
                            <li><a href="irttauditorium.php" class="dropdown-item">Auditorium</a></li>
                            <li><a href="medicalfacilities.php" class="dropdown-item">Medical Facilities</a></li>
                            <li><a href="cafeteria.php" class="dropdown-item">Cafeteria</a></li>
                            <li><a href="transport.php" class="dropdown-item">Transport Facilities</a></li>
                            <li><a href="scholorships.php" class="dropdown-item">Scholarships</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Research <i class="fas fa-chevron-down" style="font-size: 0.8rem;"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="r&dconsultancy.php" class="dropdown-item">R&amp;D &amp; Consultancy</a></li>
                            <li><a href="edp.php" class="dropdown-item">EDC</a></li>
                            <li><a href="IPDC.php" class="dropdown-item">IPDC</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">More <i class="fas fa-chevron-down" style="font-size: 0.8rem;"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="clubs&events.php" class="dropdown-item">Clubs &amp; Events</a></li>
                            <li><a href="nssteam.php" class="dropdown-item">NSS</a></li>
                            <li><a href="campusevent.php" class="dropdown-item">Campus Events</a></li>
                            <li><a href="performers.php" class="dropdown-item">Top Performers</a></li>
                            <li><a href="Committees/Antiragging.pdf" target="_blank" class="dropdown-item">Anti-Ragging Committee</a></li>
                            <li><a href="Committees/GCEE_ICC_2025.jpg" target="_blank" class="dropdown-item">Internal Complaints Committee</a></li>
                            <li><a href="GCEE_Alumni_Donations.php" class="dropdown-item">Alumni</a></li>
                            <li><a href="science&humanities.php" class="dropdown-item">Science &amp; Humanities</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="contactus.php" class="nav-link">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
