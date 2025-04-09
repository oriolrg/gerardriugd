//main.js
let slideIndex = 0;
let slideTimer;
let firstSlideDuration = 15000; // 15 segons per la primera diapositiva
let otherSlidesDuration = 5000; // 5 segons per la resta
let isFirstSlide = true;

function showSlides() {
    let slides = document.getElementsByClassName("slide");
    let dots = document.getElementsByClassName("dot");
    
    for (let i = 0; i < slides.length; i++) {
        slides[i].classList.remove("active");
    }
    
    for (let i = 0; i < dots.length; i++) {
        dots[i].classList.remove("active");
    }
    
    slides[slideIndex].classList.add("active");
    dots[slideIndex].classList.add("active");
    
    let delay = isFirstSlide ? firstSlideDuration : otherSlidesDuration;
    isFirstSlide = false;
    slideTimer = setTimeout(nextSlide, delay);
}

function nextSlide() {
    let slides = document.getElementsByClassName("slide");

    if (slideIndex < slides.length - 1) {
        slideIndex++;
        showSlides();
    } else {
        clearTimeout(slideTimer); // Atura el temporitzador quan arriba a l'última diapositiva
    }
}

function currentSlide(n) {
    clearTimeout(slideTimer);
    slideIndex = n - 1;
    isFirstSlide = (slideIndex === 0);
    showSlides();
}

document.addEventListener("DOMContentLoaded", function() {
    showSlides();
    
    document.addEventListener("click", function() {
        clearTimeout(slideTimer);
        nextSlide();
    });
});