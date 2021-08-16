const accept = document.getElementById('cookie-accept-button');

window.addEventListener('load', function () {
    document.getElementById("cookie-container").classList.add('cookie-check');
    document.body.classList.add('modal-showing');
})

accept.addEventListener('click', function(){
    document.getElementById("cookie-container").classList.remove('cookie-check')
    document.body.classList.remove('modal-showing');
})