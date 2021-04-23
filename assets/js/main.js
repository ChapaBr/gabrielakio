const btnNav = document.querySelector('.navbarList');

btnNav.addEventListener('click', function(){
    setTimeout(() => { document.querySelector('.btnHamburguer').click(); }, 120);
});