    <!-- ======= Footer ======= -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h3>About GCEE</h3>
                    <p style="color: rgba(255,255,255,0.8); margin-bottom: 20px; line-height:1.8;">Government College of Engineering, Erode, is a premier institution established in 1984, dedicated to excellence in engineering education and research.</p>
                    <div class="social-links">
                        <a href="https://www.facebook.com/profile.php?id=61551298765616" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/GceErode" target="_blank" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.youtube.com/channel/UCDOtasTYkBrmuZTSNCuo6jg" target="_blank" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <div class="footer-col">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="AICTE/MandatoryDisclosure2025-26.pdf" target="_blank">Mandatory Disclosure</a></li>
                        <li><a href="https://www.gcee.ac.in/HelpDesk.php">Help Desk</a></li>
                        <li><a href="edp.php.html">EDC</a></li>
                        <li><a href="IPDC.php.html">IPDC</a></li>
                        <li><a href="https://gcee.ac.in/webmail" target="_blank">GCEE Mail</a></li>
                        <li><a href="https://sites.google.com/view/nptel-gce-erode/home" target="_blank">NPTEL</a></li>
                        <li><a href="https://examgcee.blogspot.com" target="_blank">GCEE Exam Cell</a></li>
                        <li><a href="GCEE_Alumni_Donations.php.html">GCEE Alumni</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h3>Committees</h3>
                    <ul class="footer-links">
                        <li><a href="Committees/Antiragging.pdf" target="_blank">Anti-Ragging Committee</a></li>
                        <li><a href="Committees/GCEE_ICC_2025.jpg" target="_blank">Grievance Redressal</a></li>
                        <li><a href="Committees/IIC.pdf" target="_blank">Institution-Industry Cell</a></li>
                        <li><a href="Committees/HostelCommittee.pdf" target="_blank">Hostel Mess Committee</a></li>
                        <li><a href="Committees/R&D.pdf" target="_blank">R&D Committee</a></li>
                        <li><a href="Committees/QAC.pdf" target="_blank">Quality Assurance Committee</a></li>
                        <li><a href="http://www.antiragging.in/" target="_blank">Anti-Ragging Site</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h3>Contact Us</h3>
                    <ul class="footer-contact">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Government College of Engineering (IRTT),<br>Erode - 638 316, Tamilnadu, India.</span>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <span>gceeprincipal@gmail.com</span>
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <span>Principal: 9280091825<br>Help Desk: 9280091826<br>+91 0424 2533579</span>
                        </li>
                        <li>
                            <i class="fas fa-globe"></i>
                            <span><a href="Google_Map.php.html" style="color: #33ffff;">GCEE on Google Map</a></span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2025 Government College of Engineering, Erode. All Rights Reserved.</p>
                <p>Designed &amp; Maintained By: GCEE Website Administrators, Dept of IT. &nbsp;|&nbsp;
                   <a href="Committees/Antiragging.pdf" target="_blank" style="color:rgba(255,255,255,0.5);">Anti-Ragging</a> &nbsp;|&nbsp;
                   <span style="color:rgba(255,255,255,0.5);">1800-180-5522 (Toll Free)</span>
                </p>
            </div>
        </div>
    </footer>
    <!-- ======= End Footer ======= -->

    <!-- Back to Top Button -->
    <a href="#" class="back-to-top" id="backToTop" aria-label="Back to top"><i class="fas fa-chevron-up"></i></a>

    <!-- ======= Scripts ======= -->
    <script src="assets/js/ui.js"></script>
    <script>
        // Mobile Menu Toggle
        const btn = document.getElementById('mobileMenuBtn');
        const nav = document.getElementById('mainNav');
        if (btn && nav) {
            btn.addEventListener('click', function() {
                nav.classList.toggle('active');
                const icon = btn.querySelector('i');
                icon.classList.toggle('fa-bars');
                icon.classList.toggle('fa-times');
            });
        }

        // Mobile dropdown accordion
        document.querySelectorAll('.nav-item > .nav-link').forEach(function(link) {
            link.addEventListener('click', function(e) {
                if (window.innerWidth <= 992) {
                    const parent = this.parentElement;
                    const dropdown = parent.querySelector('.dropdown-menu');
                    if (dropdown) {
                        e.preventDefault();
                        parent.classList.toggle('active');
                    }
                }
            });
        });

        // Back to Top
        const backToTop = document.getElementById('backToTop');
        if (backToTop) {
            window.addEventListener('scroll', function() {
                backToTop.style.opacity = window.scrollY > 300 ? '1' : '0';
                backToTop.style.pointerEvents = window.scrollY > 300 ? 'auto' : 'none';
            });
            backToTop.addEventListener('click', function(e) {
                e.preventDefault();
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        }
    </script>
</body>
</html>
