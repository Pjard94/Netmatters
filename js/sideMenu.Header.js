// this is the coding for the side menu

const smallHamburger = document.getElementById('hamburger--sm');
const hamburger = document.getElementById('hamburger--more');
const body = document.body;
const page = document.getElementById('menu-overlay');
const main = document.getElementById('main');
let binary = 0;

page.addEventListener('click', function (){
    body.classList.remove('menu-showing');
    body.classList.remove('large-menu-showing');
    smallHamburger.classList.remove('is-active');
    hamburger.classList.remove('is-active');
    setTimeout(function () {document.documentElement.classList.remove('overflow')}, 250);
    binary = 0;
})

smallHamburger.addEventListener('click', function () {
    if (binary === 0) {
       smallHamburger.classList.add('is-active');
       body.classList.add('menu-showing');
       document.documentElement.classList.add('overflow')
       binary = 1;
    }
})

hamburger.addEventListener('click', function () {
    if (binary === 0) {
        hamburger.classList.add('is-active');
        body.classList.add('menu-showing'); 
        document.documentElement.classList.add('overflow')
        binary = 1;
    }
})


// This will be the sticky header coding


let sticker = document.getElementById('sticker');
let curScroll;
let prevScroll;
let hasScrolled;


    window.addEventListener('scroll', function(){
        hasScrolled = true;
        curScroll = window.scrollY;
        // console.log(curScroll);
    })

    function headerToggle() {
        
        if(prevScroll > curScroll){
            sticker.classList.remove('hideHeader');
            sticker.classList.add('showHeader');
            // console.log('header should reveal');
        } else {
            sticker.classList.add('hideHeader');
            sticker.classList.remove('showHeader');
            // console.log('header should be hidden')
        } 
        
    }

    setInterval(function() {
        if (hasScrolled === true) {
            headerToggle();
            prevScroll = curScroll;
            hasScrolled = false;
            // console.log(prevScroll);
        } 
    }, 250);