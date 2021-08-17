// this si the coding for the side menu

const smallHamburger = document.getElementById('hamburger--sm');
const hamburger = document.getElementById('hamburger--more');
const body = document.body;
const page = document.getElementById('menu-overlay')
let binary = 0;

page.addEventListener('click', function (){
    body.classList.remove('menu-showing')
    body.classList.remove('large-menu-showing')
    binary = 0;
})

smallHamburger.addEventListener('click', function () {
    if (binary === 0) {
       body.classList.add('menu-showing'); 
       binary = 1;
    }
})

hamburger.addEventListener('click', function () {
    if (binary === 0) {
       body.classList.add('menu-showing'); 
       binary = 1;
    }
})


// This will be the sticky header coding

const main = document.getElementById('main');

let a = main.scrollTop;
let b = main.scrollHeight - window.innerHeight;
let scrollPosition = a / b;

main.onscroll = function () {stickyHeader()}

function stickyHeader() {
    console.log('scroll detected');
    console.log(scrollPosition);
    document.getElementById('header').classList.add('sticky');
}