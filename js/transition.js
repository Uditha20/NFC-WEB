document.addEventListener('DOMContentLoaded', function() {
  // Function to check if an element is in the viewport
  function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }

  // Function to animate element
  function animateElement(el, className = 'visible') {
    if (!el.classList.contains(className) && isElementInViewport(el)) {
      el.classList.add(className);
      return true;
    }
    return false;
  }

  // Function to handle scroll events and animations
  function handleScroll() {
    let animationsOccurred = false;

    // Existing animations
    const heroSections = document.querySelectorAll('.hero-section');
    heroSections.forEach(section => {
      if (animateElement(section, 'loaded')) animationsOccurred = true;
    });
    const faqSection = document.querySelector('.faq-section');
    if (faqSection && isElementInViewport(faqSection)) {
      faqSection.classList.add('visible');
      
    }
    const animateSections = document.querySelectorAll('.animate-section');
    animateSections.forEach(section => {
      if (animateElement(section)) animationsOccurred = true;
    });

    const cards = document.querySelectorAll('.animated-card');
    cards.forEach(card => {
      if (animateElement(card)) animationsOccurred = true;
    });

    document.querySelectorAll('.fade-in-up, .design-content, .design-image, .animate-button').forEach(el => {
      if (animateElement(el)) animationsOccurred = true;
    });

    document.querySelectorAll('.design-text').forEach(el => {
      if (animateElement(el)) {
        el.style.opacity = '1';
        el.style.transform = 'translateY(0)';
        animationsOccurred = true;
      }
    });

    // New transitions
    document.querySelectorAll('.fade-in-slide, .rotate-fade-in, .scale-up').forEach(el => {
      if (animateElement(el)) animationsOccurred = true;
    });

    // Check if all animations are complete
    const allAnimationsComplete = 
      [...heroSections].every(section => section.classList.contains('loaded')) &&
      [...animateSections].every(section => section.classList.contains('visible')) &&
      [...cards].every(card => card.classList.contains('visible')) &&
      [...document.querySelectorAll('.fade-in-up, .design-content, .design-image, .animate-button, .design-text, .fade-in-slide, .rotate-fade-in, .scale-up')]
        .every(el => el.classList.contains('visible'));

    // Remove scroll listener if all animations are complete
    if (allAnimationsComplete) {
      window.removeEventListener('scroll', handleScroll);
    }
  }

  // Add scroll event listener
  window.addEventListener('scroll', handleScroll);

  // Initial check
  setTimeout(handleScroll, 100);
});
