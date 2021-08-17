const accept = document.getElementById('cookie-accept-button');
const cookieModal = document.getElementById("cookie-container")

window.addEventListener('load', function () {
    cookieModal.classList.add('cookie-check');
})

accept.addEventListener('click', function(){
    cookieModal.classList.remove('cookie-check');
    document.getElementById('cookie-container').style.display = "none";
})