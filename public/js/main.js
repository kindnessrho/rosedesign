const menuToggle = document.getElementsByClassName('menu-toggle');

function showMenuBar() {

  const nav = document.getElementById('nav');
  const menuIcon = document.getElementById('menu-icon');

  nav.classList.toggle('active');
  menuIcon.classList.toggle('fa-times');

}

// get all accordion headers
var accordionHeaders = document.querySelectorAll('.card-header');

// add event listener to each accordion header
accordionHeaders.forEach(function(header) {
  header.addEventListener('click', function() {
    // toggle the class 'active' on the header
    this.classList.toggle('active');
    // get the accordion content associated with this header
    var content = this.nextElementSibling;
    // toggle the display of the content
    if (content.style.display === 'block') {
      content.style.display = 'none';
    } else {
      content.style.display = 'block';
    }
  });
});
