// Festlegen und Funktion von Fadeup Elementen
const observerOptions = {
    root: null,
    threshold: 0,
    rootMargin: '0px 0px -50px 0px'
};
const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('in-view');
            observer.unobserve(entry.target);
        }
    });
}, observerOptions);

window.addEventListener('DOMContentLoaded', (event) => {
    const fadeUpElements = document.querySelectorAll('section, hr');

    for (let element of fadeUpElements) {
        element.classList.add('fadeup');
        observer.observe(element);
    }
});