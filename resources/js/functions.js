const body = document.querySelector('body');
const hamburger = document.querySelector('.hamburger');
const topnavigation = document.querySelector('.topnav ul');

hamburger.addEventListener('click', function(){
    hamburger.classList.toggle('open');
    topnavigation.classList.toggle('show-flex');
    body.classList.toggle('noscroll-y');
});