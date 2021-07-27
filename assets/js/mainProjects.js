const btnHamburguer = document.getElementById('burger');
const collapseBox = document.querySelector('.collapseBox');

let btnMenu = document.querySelector('.btnMenu');
let navBar = document.querySelector('.nav-bar');
let navIcon = document.querySelector('#nav-icon');
btnMenu.addEventListener("click", function(event){
    if(navBar.classList.contains('activedMenu')){
        navBar.classList.remove("activedMenu");
        navIcon.classList.remove("open");
    } else {
        navBar.classList.add("activedMenu");
        navIcon.classList.add("open");
    }
}, false);

/* btnHamburguer.addEventListener('click', function(){
    if(collapseBox.classList.contains('showCollapse') && screen.width < 769){
        document.documentElement.style.overflowY = 'auto';
        collapseBox.classList.remove('showCollapse');
    } else {
        document.documentElement.style.overflowY = 'hidden';
        collapseBox.classList.add('showCollapse');
        window.scrollTo(0, 0);
    }
}); */

$('.owl-carousel').owlCarousel({
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:false,
    loop:true,
    margin:10,
    responsiveClass:true,
    autoHeightClass: 'owl-height',
    dots: false,
    navText: ["<img src='assets/img/arrowLeft.svg'>","<img src='assets/img/arrowRight.svg'>"],
    center: true,
    responsive:{
        0:{
            items:1,
            nav:false
        }
    }
})