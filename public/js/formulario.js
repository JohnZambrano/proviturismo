 // Animación de elementos al hacer scroll
 function reveal() {
    const reveals = document.querySelectorAll('.history-card, .contact-info-item');
    reveals.forEach(element => {
        const windowHeight = window.innerHeight;
        const elementTop = element.getBoundingClientRect().top;
        const elementVisible = 150;
        
        if (elementTop < windowHeight - elementVisible) {
            element.style.opacity = '1';
            element.style.transform = 'translateY(0)';
        }
    });
}

window.addEventListener('scroll', reveal);
reveal();

// Animación del formulario
const formInputs = document.querySelectorAll('.form-group input, .form-group textarea');
formInputs.forEach(input => {
    input.addEventListener('focus', function() {
        this.parentElement.classList.add('active');
    });
    input.addEventListener('blur', function() {
        if (!this.value) {
            this.parentElement.classList.remove('active');
        }
    });
});


document.addEventListener('input', function(e) {
    if (e.target.classList.contains('auto-expand')) {
        e.target.style.height = 'auto';
        const maxHeight = parseInt(getComputedStyle(e.target).maxHeight) || 300;
        const newHeight = Math.min(e.target.scrollHeight, maxHeight);
        e.target.style.height = newHeight + 'px';
        e.target.style.overflowY = e.target.scrollHeight > maxHeight ? 'auto' : 'hidden';
    }
});