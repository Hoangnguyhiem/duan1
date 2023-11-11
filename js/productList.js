let items = document.querySelectorAll('.product .item');
let active = 3;
function loadShow(){
    items[active].style.transform = `none`;
    items[active].style.zIndex = 1;
    items[active].style.filter = 'none';
    items[active].style.opacity = 1;
    // show after
    let stt = 0;
    for(var i = active + 1; i < items.length; i ++){
        stt++;
        items[i].style.transform = `translateX(${150*stt}px) scale(${1 - 0.2*stt}) perspective(16px) rotateY(-0.3deg)`;
        items[i].style.zIndex = -stt;
        // items[i].style.filter = 'blur(5px)';
        items[i].style.opacity = stt > 2 ? 0 : 1;
    }
     stt = 0;
    for(var i = (active - 1); i >= 0; i --){
        stt++;
        items[i].style.transform = `translateX(${-150*stt}px) scale(${1 - 0.2*stt}) perspective(16px) rotateY(0.3deg)`;
        items[i].style.zIndex = -stt;
        // items[i].style.filter = 'blur(5px)';
        items[i].style.opacity = stt > 2 ? 0 : 1;
    }
}
loadShow();
let next = document.getElementById('next');
let prev = document.getElementById('prev');
next.onclick = function(){
   active = active + 1 < items.length ?  active + 1 : active;
   loadShow();
}
prev.onclick = function(){
    active = active - 1 >= 0 ? active -1 : active;
    loadShow();
}