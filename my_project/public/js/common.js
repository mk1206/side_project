// const NAV = document.querySelector('.nav');
// NAV.style.top=0;
// NAV.style.position='fixed';

let n=0;
function rotate() {
    let imgs = new Array("../img/1.png","../img/2.png","../img/3.png","../img/4.png", "../img/5.png","../img/6.png","../img/7.png");
    document.getElementById("slide").src=imgs[n];
    (n === (imgs.length-1)) ? n=0 : n++;
    setTimeout(rotate, 5000) };

var TopMenu, TopMenuPosition; // 전역변수로 지정한다.
TopMenu = document.querySelector('.nav'); // 고정될 메뉴바를 인식한다.
TopMenuPosition = TopMenu.offsetTop; // 고정될 메뉴바의 처음 위치를 인식한다.
// 스크롤이 되면 실행될 함수
function submenu_bar_fixed(){
    // 스크롤되는 값과 고정될 메뉴바 위치를 비교해서 고정시킬 class 적용 또는 해제 한다.
    if ( window.pageYOffset >= TopMenuPosition ) {
        TopMenu.classList.add("sticky");
    } else {
        TopMenu.classList.remove("sticky");
    }
}
// 스크롤이 되면 실행될 함수 지정
document.addEventListener('scroll', submenu_bar_fixed)