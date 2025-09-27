import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

  // Counter Animation
  document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll(".counter");

    const animateCounter = (counter) => {
      const target = +counter.getAttribute("data-target");
      let count = 0;
      const increment = target / 200; // adjust speed here

      const updateCounter = () => {
        if (count < target) {
          count += increment;
          counter.innerText = Math.ceil(count).toLocaleString();
          requestAnimationFrame(updateCounter);
        } else {
          counter.innerText = target.toLocaleString();
        }
      };

      updateCounter();
    };

    // Trigger animation when section is in view
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            animateCounter(entry.target);
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.5 }
    );

    counters.forEach((counter) => observer.observe(counter));
  });
  $(document).ready(function(){
    $('#menu-toggle').click(function(){
      $('#mobile-menu').show();
    })
    $('mobile-menu').mouseleave(function(){
      $('#mobile-menu').hide();
    })
  })