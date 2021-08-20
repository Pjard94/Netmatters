const accept = document.getElementById('cookie-accept-button');
const cookieModal = document.getElementById("cookie-container");

window.addEventListener('load', function() {
    const cookieCheck = localStorage.getItem('PeterCookie');
    if (cookieCheck === null) {
        cookieModal.classList.add('cookie-check');
    } else {
        cookieModal.classList.remove('cookie-check');
        document.getElementById('cookie-container').style.display = "none";
    }
        
})

accept.addEventListener('click', function(){
    localStorage.setItem('PeterCookie', 1)
    cookieModal.classList.remove('cookie-check');
    document.getElementById('cookie-container').style.display = "none";
})