const drop = document.getElementById('hours-info');
const out = document.getElementById('drop-down');

drop.addEventListener('click', function(){
    out.classList.toggle("revealed-hours");
});