const btnHamburguer = document.querySelector('.btnHamburguer');
const collapseBox = document.querySelector('.collapseBox');
btnHamburguer.addEventListener('click', function(){
    if(collapseBox.classList.contains('showCollapse') && screen.width < 769){
        document.documentElement.style.overflowY = 'auto';
        collapseBox.classList.remove('showCollapse');
    } else {
        document.documentElement.style.overflowY = 'hidden';
        collapseBox.classList.add('showCollapse');
    }
});
$(document).ready(function(){
    $(".owl-carousel").owlCarousel();
});