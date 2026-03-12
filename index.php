<?php $pageTitle = 'Government College of Engineering, Erode'; include 'include/header.php'; ?>

    <!-- 2. Hero Section -->
    <section class="hero">
        <div class="hero-slider">
            <div class="hero-slide active">
                <img src="assets/img/sliders/layer/CollegeBirdView.jpeg" alt="Campus View">
            </div>
            <div class="hero-slide">
                <img src="assets/img/sliders/layer/NammaGCEE2.jpeg" alt="GCEE Campus">
            </div>
            <div class="hero-slide">
                <img src="assets/img/sliders/layer/bg1.jpg" alt="Campus Facilities">
            </div>
        </div>
        <div class="hero-overlay">
            <div class="container hero-content">
                <h1>Welcome to Government College of Engineering, Erode</h1>
                <p>Empowering the next generation of engineers with cutting-edge technology, top-notch facilities, and excellence in education since 1984.</p>
                <div style="display: flex; gap: 16px;">
                    <a href="admissionug.php" class="btn btn-primary">Apply Now <i class="fas fa-arrow-right"></i></a>
                    <a href="aboutus.php" class="btn btn-primary" style="background: transparent; border: 2px solid var(--white);">Discover GCEE</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Quick Links Dashboard -->
    <div class="container quick-links">
        <div class="quick-links-grid">
            <a href="admissionug.php" class="quick-link-card">
                <i class="fas fa-user-graduate"></i>
                <h3>Admissions</h3>
            </a>
            <a href="#departments" class="quick-link-card">
                <i class="fas fa-building"></i>
                <h3>Departments</h3>
            </a>
            <a href="r&dconsultancy.php" class="quick-link-card">
                <i class="fas fa-microscope"></i>
                <h3>Research</h3>
            </a>
            <a href="placementstatistics.php" class="quick-link-card">
                <i class="fas fa-briefcase"></i>
                <h3>Placements</h3>
            </a>
            <a href="MQApplication.php" class="quick-link-card">
                <i class="fas fa-download"></i>
                <h3>Downloads</h3>
            </a>
            <a href="https://examgcee.blogspot.com/" target="_blank" class="quick-link-card">
                <i class="fas fa-laptop-code"></i>
                <h3>Student Portal</h3>
            </a>
        </div>
    </div>

    <!-- About Section -->
    <section class="section">
        <div class="container" style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center;">
            <div>
                <h2 style="font-size: 2.5rem; margin-bottom: 20px; color: var(--primary-color);">GCEE at a Glance</h2>
                <p style="text-align: justify; margin-bottom: 20px;">The college was established in 1984 under Institute of Road and Transport by the Tamil Nadu State Transport Corporation. In 2021, the college was transferred to under the governance of Directorate of Technical Education (DoTE) and subsequently renamed as Government College of Engineering, Erode.</p>
                <p style="text-align: justify; margin-bottom: 30px;">It is a premier Government Engineering College affiliated to Anna University, Chennai. The Institute is located on a sprawling lush green campus of 200 acres between Chithode and Bhavani in Erode district. It provides a congenial atmosphere for Technical Education with excellent infrastructure, well-equipped laboratories, library and highly qualified faculty members.</p>
                <a href="aboutus.php" class="btn btn-primary">Read Our Story</a>
            </div>
            <div>
                <img src="NannMuthalvan.jpeg" alt="GCEE Overview" style="border-radius: var(--radius-lg); box-shadow: var(--shadow-hover);">
            </div>
        </div>
    </section>

    <!-- 4. Departments Section -->
    <section id="departments" class="section" style="background: var(--bg-color);">
        <div class="container">
            <div class="section-title">
                <h2>Our Departments</h2>
                <p>Explore our diverse academic offerings tailored to create industry-ready professionals and innovative researchers.</p>
            </div>
            
            <div class="dept-grid">
                <!-- Department 1 -->
                <div class="card">
                    <div class="card-img">
                        <img src="assets/img/blog/img1-1.jpg" alt="Computer Science">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Computer Science & Engg</h3>
                        <p class="card-text">Building the software architects of tomorrow with advanced computing facilities.</p>
                        <a href="cse.php" class="card-link">Explore Department <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Department 2 -->
                <div class="card">
                    <div class="card-img">
                        <img src="assets/img/blog/img2.jpg" alt="IT">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Information Technology</h3>
                        <p class="card-text">Pioneering in IT solutions and fostering innovation in digital technologies.</p>
                        <a href="it.php" class="card-link">Explore Department <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Department 3 -->
                <div class="card">
                    <div class="card-img">
                        <img src="assets/img/blog/img4.jpg" alt="ECE">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Electronics & Communication</h3>
                        <p class="card-text">Empowering students in modern electronics, telecommunication and signal processing.</p>
                        <a href="ece.php" class="card-link">Explore Department <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Department 4 -->
                <div class="card">
                    <div class="card-img">
                        <img src="assets/img/blog/img7.jpg" alt="Mechanical">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Mechanical Engineering</h3>
                        <p class="card-text">From classical mechanics to modern robotics, shaping the physical world.</p>
                        <a href="mech.php" class="card-link">Explore Department <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Department 5 -->
                <div class="card">
                    <div class="card-img">
                        <img src="assets/img/blog/img8.jpg" alt="Civil">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Civil Engineering</h3>
                        <p class="card-text">Designing, constructing, and maintaining the built environment sustainably.</p>
                        <a href="civil.php" class="card-link">Explore Department <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Department 6 -->
                <div class="card">
                    <div class="card-img">
                        <img src="assets/img/blog/img11.jpg" alt="EEE">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Electrical & Electronics</h3>
                        <p class="card-text">Powering the future through advanced electrical systems and automation.</p>
                        <a href="eee.php" class="card-link">Explore Department <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            
            <div style="text-align: center; margin-top: 40px;">
                <a href="#academics" class="btn btn-primary" style="background: transparent; color: var(--secondary-color); border: 2px solid var(--secondary-color);">View All Programs</a>
            </div>
        </div>
    </section>

    <!-- 6. Placement Highlights -->
    <section class="stats-section">
        <div class="container stats-grid">
            <div class="stat-item">
                <h3>38.5</h3>
                <p>Highest LPA Offered</p>
            </div>
            <div class="stat-item">
                <h3>90+</h3>
                <p>Top Recruiters</p>
            </div>
            <div class="stat-item">
                <h3>40+</h3>
                <p>Years of Legacy</p>
            </div>
            <div class="stat-item">
                <h3>200</h3>
                <p>Acres Green Campus</p>
            </div>
        </div>
    </section>

    <!-- 7. News & 8. Events -->
    <section class="section">
        <div class="container">
            <div class="section-title">
                <h2>Campus Updates</h2>
                <p>Stay informed with the latest news, announcements, and upcoming events from GCEE.</p>
            </div>

            <div class="news-events-container">
                <!-- News Column -->
                <div>
                    <h3 style="margin-bottom: 24px; font-size: 1.5rem;">Latest News</h3>
                    
                    <div class="news-card">
                        <div class="news-date">
                            <span>01</span>
                            <small>News</small>
                        </div>
                        <div class="news-content">
                            <h4><a href="#">Pre-Incubation Centre at GCE Erode</a></h4>
                            <p>Delighted to announce that our college has been sanctioned a Pre-Incubator by StartupTN. Fostering innovation and entrepreneurship.</p>
                        </div>
                    </div>

                    <div class="news-card">
                        <div class="news-date">
                            <span>02</span>
                            <small>News</small>
                        </div>
                        <div class="news-content">
                            <h4><a href="#">LABMAN Probe Sonicator Installed</a></h4>
                            <p>Mechanical department has enhanced its facilities with the installation of a LABMAN "Probe Sonicator", procured through the CMRG project grant.</p>
                        </div>
                    </div>

                    <div class="news-card">
                        <div class="news-date">
                            <span>03</span>
                            <small>News</small>
                        </div>
                        <div class="news-content">
                            <h4><a href="#">Congratulations to our Proud Students</a></h4>
                            <p>Our Students R. GOWTHAM and C. SAHANA PRIYA from ECE got placed in CADENCE DESIGN SYSTEMS with Annual Salary 20.49 Lakhs.</p>
                        </div>
                    </div>
                </div>

                <!-- Events Column -->
                <div>
                    <h3 style="margin-bottom: 24px; font-size: 1.5rem;">Upcoming Events</h3>
                    
                    <div class="news-card event-card">
                        <div class="news-date" style="background: var(--primary-color); color: var(--white);">
                            <span>12</span>
                            <small>Jul</small>
                        </div>
                        <div class="news-content">
                            <h4><a href="#">2000 Batch Silver Jubilee Meet</a></h4>
                            <p>Alumni meet to celebrate the silver jubilee of the class of 2000.</p>
                        </div>
                    </div>
                    
                    <div class="news-card event-card">
                        <div class="news-date" style="background: var(--primary-color); color: var(--white);">
                            <span>TBA</span>
                            <small>2025</small>
                        </div>
                        <div class="news-content">
                            <h4><a href="#">Creative Thinking Training</a></h4>
                            <p>Special training sessions by our esteemed alumni.</p>
                        </div>
                    </div>

                    <div class="news-card event-card">
                        <div class="news-date" style="background: var(--primary-color); color: var(--white);">
                            <span>TBA</span>
                            <small>2025</small>
                        </div>
                        <div class="news-content">
                            <h4><a href="#">New Hostel Inauguration</a></h4>
                            <p>Foundation stone laying and inauguration of new facilities.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Campus Facilities -->
    <section class="section" style="background: var(--bg-color);">
        <div class="container">
            <div class="section-title">
                <h2>Campus Life & Facilities</h2>
                <p>Everything you need to thrive both academically and personally.</p>
            </div>
            
            <div class="dept-grid">
                <a href="library.php" class="quick-link-card" style="background: var(--white); height: auto;">
                    <i class="fas fa-book-reader" style="font-size: 3rem; margin-bottom: 20px;"></i>
                    <h3 style="font-size: 1.2rem;">Central Library</h3>
                    <p style="color: var(--text-light); margin-top: 10px;">Vast collection of resources, journals, and digital media.</p>
                </a>
                
                <a href="hostel.php" class="quick-link-card" style="background: var(--white); height: auto;">
                    <i class="fas fa-bed" style="font-size: 3rem; margin-bottom: 20px;"></i>
                    <h3 style="font-size: 1.2rem;">Modern Hostels</h3>
                    <p style="color: var(--text-light); margin-top: 10px;">Comfortable lodging facilities for boys and girls.</p>
                </a>
                
                <a href="sports.php" class="quick-link-card" style="background: var(--white); height: auto;">
                    <i class="fas fa-futbol" style="font-size: 3rem; margin-bottom: 20px;"></i>
                    <h3 style="font-size: 1.2rem;">Sports Complex</h3>
                    <p style="color: var(--text-light); margin-top: 10px;">Indoor stadium and outdoor grounds for physical well-being.</p>
                </a>
                
                <a href="medicalfacilities.php" class="quick-link-card" style="background: var(--white); height: auto;">
                    <i class="fas fa-first-aid" style="font-size: 3rem; margin-bottom: 20px;"></i>
                    <h3 style="font-size: 1.2rem;">Medical Facilities</h3>
                    <p style="color: var(--text-light); margin-top: 10px;">24/7 health center ensuring student wellness.</p>
                </a>
            </div>
        </div>
    </section>

    <!-- 9. Photo Gallery -->
    <section class="section">
        <div class="container">
            <div class="section-title">
                <h2>Life at GCEE</h2>
                <p>A glimpse into our vibrant campus, events, and student life.</p>
            </div>
            
            <div class="gallery-grid">
                <div class="gallery-item large">
                    <img src="assets/img/sliders/layer/Auditorium1.jpeg" alt="Auditorium">
                </div>
                <div class="gallery-item">
                    <img src="Events/BuildingInauguration1.jpeg" alt="Event">
                </div>
                <div class="gallery-item">
                    <img src="Events/StoneLaying2.jpeg" alt="Labs">
                </div>
                <div class="gallery-item">
                    <img src="assets/img/sliders/layer/IndoorStadiumInnerView.jpeg" alt="Indoor Stadium">
                </div>
                <div class="gallery-item">
                    <img src="assets/img/sliders/layer/ForeignLanLab.jpeg" alt="Language Lab">
                </div>
            </div>
        </div>
    </section>

    <!-- Recruiter Section -->
    <section class="section" style="background: var(--white); text-align: center; border-top: 1px solid rgba(0,0,0,0.05);">
        <div class="container">
            <h2 style="margin-bottom: 40px; color: var(--primary-color);">Top Corporate Partners</h2>
            <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 30px; align-items: center; opacity: 0.7;">
                <img src="assets/img/companylogo/tcs.png" alt="TCS" style="height: 40px; max-width: 150px; object-fit: contain;">
                <img src="assets/img/companylogo/zoho.png" alt="Zoho" style="height: 40px; max-width: 150px; object-fit: contain;">
                <img src="assets/img/companylogo/cts.png" alt="CTS" style="height: 40px; max-width: 150px; object-fit: contain;">
                <img src="assets/img/companylogo/infosys.png" alt="Infosys" style="height: 40px; max-width: 150px; object-fit: contain;">
                <img src="assets/img/companylogo/ibm.png" alt="IBM" style="height: 40px; max-width: 150px; object-fit: contain;">
                <img src="assets/img/companylogo/techmahindra.png" alt="Tech Mahindra" style="height: 40px; max-width: 150px; object-fit: contain;">
            </div>
        </div>
    </section>

    <?php include 'include/footer.php'; ?>

