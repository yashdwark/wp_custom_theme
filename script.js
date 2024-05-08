let slideIndex = 0;
const slides = document.getElementsByClassName("slide");

function showSlide(index) {
    if (index >= slides.length) {
        slideIndex = 0;
    } else if (index < 0) {
        slideIndex = slides.length - 1;
    }
    
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    
    slides[slideIndex].style.display = "block";
}

function nextSlide() {
    showSlide(++slideIndex);
}

function prevSlide() {
    showSlide(--slideIndex);
}

document.getElementById("nextBtn").addEventListener("click", nextSlide);
document.getElementById("prevBtn").addEventListener("click", prevSlide);

showSlide(slideIndex);
