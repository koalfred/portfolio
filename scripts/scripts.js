jQuery(document).ready(function(){
  jQuery('.hamburger-icon').click(function(){
    jQuery('.nav-links').slideToggle("slow");
    jQuery('.hamburger-icon').toggleClass('change');
  });
});

var btn = document.querySelectorAll("button.modal-button");
var modals = document.querySelectorAll('.modal');
var spans = document.getElementsByClassName("close");

for (var i = 0; i < btn.length; i++) {
 btn[i].onclick = function(e) {
    e.preventDefault();
    var modal = document.querySelector(e.target.getAttribute("href"));
    modal.style.display = "block";
 }
}

for (var i = 0; i < spans.length; i++) {
 spans[i].onclick = function() {
    for (var index in modals) {
      if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";    
    }
 }
}

window.onclick = function(event) {
    if (event.target.classList.contains('modal')) {
     for (var index in modals) {
      if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";    
     }
    }
}

var main_body = document.querySelector('.main_body');
var loading = document.querySelector('.loading');

// setTimeout(mainPage, 1500);

// function mainPage() {
//   main_body.style.display = "block";
//   loading.style.display = "none";
// }

jQuery('.slick-items').slick({
  prevArrow: '<i class="fas fa-arrow-left">&#8592</i>',
  nextArrow: '<i class="fas fa-arrow-right">&#8594</i>',
});

jQuery('.slick-items-2').slick({
  prevArrow: '<i class="fas fa-arrow-left">&#8592</i>',
  nextArrow: '<i class="fas fa-arrow-right">&#8594</i>',
});