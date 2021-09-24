// this si the coding for the side menu

const smallHamburger = document.getElementById('hamburger--sm');
const hamburger = document.getElementById('hamburger--more');
const body = document.body;
const page = document.getElementById('menu-overlay')
let binary = 0;

page.addEventListener('click', function (){
    body.classList.remove('menu-showing');
    body.classList.remove('large-menu-showing');
    smallHamburger.classList.remove('is-active');
    hamburger.classList.remove('is-active');
    binary = 0;
})

smallHamburger.addEventListener('click', function () {
    if (binary === 0) {
       smallHamburger.classList.add('is-active');
       body.classList.add('menu-showing');
       binary = 1;
    }
})

hamburger.addEventListener('click', function () {
    if (binary === 0) {
        hamburger.classList.add('is-active');
        body.classList.add('menu-showing'); 
        binary = 1;
    }
})


// This will be the sticky header coding

const main = document.getElementById('main');
let sticker = document.getElementById('sticker');
let thershold = 209;
let curScroll;
let prevScroll;
let hasScrolled;


    main.addEventListener('scroll', function(){
        hasScrolled = true;
        curScroll = main.scrollTop;
    })

    function headerToggle() {
        
        if(prevScroll > curScroll){
            main.classList.remove('hideHeader');
            // console.log('header should reveal');
        } else {
            main.classList.add('hideHeader');
            // console.log('header should be hidden')
        } 
        
    }

    setInterval(function() {
        if (hasScrolled === true) {
            headerToggle();
            prevScroll = curScroll;
            hasScrolled = false;
        } 
    }, 250);