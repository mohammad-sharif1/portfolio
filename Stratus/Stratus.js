var isCollapsed = true;
function toggleCollapse() {
  isCollapsed = !isCollapsed;
  var navbarCollapse = document.getElementById("navbarCollapse");
  if (!navbarCollapse.classList.contains("show")) {
    navbarCollapse.classList.add("show");
  } else {
    navbarCollapse.classList.remove("show");
  }
}

window.addEventListener('scroll', function() {
  var navbar = document.getElementById('navbar');
  var scrollPosition = window.pageYOffset || document.documentElement.scrollTop;

  if (scrollPosition > 0) {
    navbar.classList.add('scrolled');
  } else {
    navbar.classList.remove('scrolled');
  }
});

/******hero-start******/

var slideIndex = 0;
var slides = document.getElementsByClassName("carousel-item");
var prevBtn = document.querySelector(".carousel-control-prev");
var nextBtn = document.querySelector(".carousel-control-next");

// Function to show the current slide
function showSlide() {
  for (var i = 0; i < slides.length; i++) {
    slides[i].classList.remove("active");
    slides[i].classList.remove("animate__fadeIn");
  }
  slides[slideIndex].classList.add("active");
  slides[slideIndex].classList.add("animate__fadeIn");
}

// Function to show the next slide
function nextSlide() {
  slideIndex++;
  if (slideIndex >= slides.length) {
    slideIndex = 0;
  }
  showSlide();
}

// Function to show the previous slide
function prevSlide() {
  slideIndex--;
  if (slideIndex < 0) {
    slideIndex = slides.length - 1;
  }
  showSlide();
}

// Auto slide change every 5 seconds
setInterval(nextSlide, 4000);

// Event listeners for the arrow buttons
prevBtn.addEventListener("click", prevSlide);
nextBtn.addEventListener("click", nextSlide);

/******hero-end******/

var navbar = document.getElementById("navbar");
var scrollPosition = 0;

// Function to toggle the navbar background
function toggleNavbarBackground() {
  if (window.pageYOffset > scrollPosition) {
    // Scrolling down
    navbar.classList.add("navbar-solid");
    navbar.classList.remove("navbar-transparent");
  } 
  scrollPosition = window.pageYOffset;
}

// Event listener for scrolling
window.addEventListener("scroll", toggleNavbarBackground);

//nav-end//
// 'animated' class when the section is in the viewport
function animateOnScroll() {
  var sections = document.querySelectorAll('.animate-section');

  sections.forEach(function(section) {
    var sectionPosition = section.getBoundingClientRect().top;
    var windowHeight = window.innerHeight;

    if (sectionPosition < windowHeight) {
      section.classList.add('animated');
    }
  });
}

window.addEventListener('scroll', animateOnScroll);

//form//
var projectTypeSelect = document.getElementById('projectType');
var otherProjectTypeInput = document.getElementById('otherProjectType');

projectTypeSelect.addEventListener('change', function() {
  if (projectTypeSelect.value === 'Other') {
    otherProjectTypeInput.style.display = 'block';
  } else {
    otherProjectTypeInput.style.display = 'none';
  }
});
  