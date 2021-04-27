const btnHamburguer = document.getElementById('burger');
const collapseBox = document.querySelector('.collapseBox');
btnHamburguer.addEventListener('click', function(){
    if(collapseBox.classList.contains('showCollapse') && screen.width < 769){
        document.documentElement.style.overflowY = 'auto';
        collapseBox.classList.remove('showCollapse');
    } else {
        document.documentElement.style.overflowY = 'hidden';
        collapseBox.classList.add('showCollapse');
        window.scrollTo(0, 0);
    }
});

$('.owl-carousel').owlCarousel({
    loop:false,
    margin:10,
    responsiveClass:true,
    autoHeightClass: 'owl-height',
    dots: false,
    navText: ["<img src='assets/img/arrowLeft.svg'>","<img src='assets/img/arrowRight.svg'>"],
    center: true,
    navContainer : '#customNav' , 
    responsive:{
        0:{
            items:1,
            nav:true
        }
    }
})