// const NAV = document.querySelector('.nav');
// NAV.style.top=0;
// NAV.style.position='fixed';

let n=0;
function rotate() {
    let imgs = new Array("../img/1.png","../img/2.png","../img/3.png","../img/4.png", "../img/5.png","../img/6.png","../img/7.png");
    document.getElementById("slide").src=imgs[n];
    (n === (imgs.length-1)) ? n=0 : n++;
    setTimeout(rotate, 5000) };