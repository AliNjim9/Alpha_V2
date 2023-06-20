
$(function() {
    $('.navbar-toggler').on('click', function() {
        $('.navbar').toggleClass('show');
    });
});
$(document).on('click', function(event) {
    var navbar = $('.navbar');
    if (!navbar.is(event.target) && navbar.has(event.target).length === 0) {
        navbar.removeClass('show');
    }
});
$(function() {
    // Function to handle the resize event
    function handleResize() {
      if (window.matchMedia("(min-width: 769px)").matches) {
          $('.navbar').removeAttr('style');
      }
    }
    handleResize();
    window.addEventListener('resize', handleResize);
});




function toggleCart(event) {
    event.preventDefault(); // Prevent default link behavior
    const cartContainer = document.getElementById('cart-container');
    const isCartVisible = cartContainer.classList.contains('show');

    if (!isCartVisible) {
      cartContainer.classList.add('show');
      document.addEventListener('click', handleClickOutside);
    } else {
      cartContainer.classList.remove('show');
      document.removeEventListener('click', handleClickOutside);
    }
  }

  function handleClickOutside(event) {
    const cartContainer = document.getElementById('cart-container');
    const cartIcon = document.querySelector('.cart-icon');

    if (!cartContainer.contains(event.target) && !cartIcon.contains(event.target)) {
      cartContainer.classList.remove('show');
      document.removeEventListener('click', handleClickOutside);
    }
  }