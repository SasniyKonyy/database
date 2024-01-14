let slideIndex = 0;
const slides = document.getElementsByClassName("slide");


setInterval(() => {
  showSlide(slideIndex);
  slideIndex++;
  if (slideIndex >= slides.length) {
    slideIndex = 0;
  }
}, 3000);

function showSlide(n) {
  for (let i = 0; i < slides.length; i++) {
    slides[i].classList.remove("active");
  }
  slides[n].classList.add("active");
}
