const accept = document.getElementById('cookie-accept-button');
const cookieModal = document.getElementById("cookie-container");

// This is a basic cookie using the users local storage to check if they have seen the modal.
window.addEventListener('load', function() {

    const cookieCheck = window.localStorage.getItem('PeterCookie');
    if (cookieCheck === null) {
        cookieModal.classList.add('cookie-check');
    } else {
        cookieModal.classList.remove('cookie-check');
        document.getElementById('cookie-container').style.display = "none";
    }
        
})

accept.addEventListener('click', function(){
    window.localStorage.setItem('PeterCookie', 1)
    cookieModal.classList.remove('cookie-check');
    document.getElementById('cookie-container').style.display = "none";
})