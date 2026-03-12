document.addEventListener('DOMContentLoaded', () => {
    // Mobile Menu Toggle
    const mobileBtn = document.querySelector('.mobile-menu-btn');
    const mainNav = document.querySelector('.main-nav');
    
    if (mobileBtn) {
        mobileBtn.addEventListener('click', () => {
            mainNav.classList.toggle('active');
            const icon = mobileBtn.querySelector('i');
            if (mainNav.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
    }

    // Mobile Dropdowns
    const navItems = document.querySelectorAll('.nav-item');
    if (window.innerWidth <= 992) {
        navItems.forEach(item => {
            item.addEventListener('click', (e) => {
                const link = e.target.closest('.nav-link');
                if (link && item.querySelector('.dropdown-menu')) {
                    e.preventDefault();
                    // Close other dropdowns
                    navItems.forEach(otherItem => {
                        if(otherItem !== item) {
                            otherItem.classList.remove('active');
                        }
                    });
                    item.classList.toggle('active');
                }
            });
        });
    }

    // Hero Slider
    const slides = document.querySelectorAll('.hero-slide');
    if (slides.length > 0) {
        let currentSlide = 0;
        setInterval(() => {
            slides[currentSlide].classList.remove('active');
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].classList.add('active');
        }, 5000); // Change slide every 5 seconds
    }
});
