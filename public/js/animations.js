// Navbar scroll effect
window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
        navbar.style.padding = '0.5rem 1rem';
        navbar.style.boxShadow = '0 2px 10px rgba(0,0,0,0.1)';
    } else {
        navbar.style.padding = '1rem';
        navbar.style.boxShadow = 'none';
    }
});

// Smooth scroll para los enlaces de navegación
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Inicialización del carrusel con opciones personalizadas
const carousel = new bootstrap.Carousel(document.querySelector('#carouselExampleCaptions'), {
    interval: 5000,
    wrap: true,
    touch: true
});

// Animación de entrada para secciones
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('fade-in');
            observer.unobserve(entry.target);
        }
    });
}, observerOptions);

document.querySelectorAll('.section-container').forEach(section => {
    section.classList.add('opacity-0');
    observer.observe(section);
});

// Animación de entrada para los desplegables


document.addEventListener('DOMContentLoaded', function() {
    // Dropdown hover effect for larger screens
    if (window.innerWidth > 991) {
        const dropdowns = document.querySelectorAll('.navbar-nav .dropdown');
        
        dropdowns.forEach(dropdown => {
            dropdown.addEventListener('mouseenter', function() {
                this.querySelector('.dropdown-toggle').setAttribute('aria-expanded', 'true');
                this.querySelector('.dropdown-menu').classList.add('show');
            });
            
            dropdown.addEventListener('mouseleave', function() {
                this.querySelector('.dropdown-toggle').setAttribute('aria-expanded', 'false');
                this.querySelector('.dropdown-menu').classList.remove('show');
            });
        });
    }

    // Optional: Search functionality
    const searchInput = document.querySelector('.navbar-search input');
    searchInput.addEventListener('keyup', function(e) {
        const searchTerm = e.target.value.toLowerCase();
        // Implement search logic here
        console.log('Searching for:', searchTerm);
    });
});
