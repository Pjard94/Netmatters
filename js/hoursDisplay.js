const drop = document.getElementById('hours-info');
const out = document.getElementById('drop-down');

// This will show/hide the info about out of hours contact
drop.addEventListener('click', function(){
    out.classList.toggle("revealed-hours");
});