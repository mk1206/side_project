let n=0;
let element = document.getElementById('slide');
let BTNCONTENT = document.getElementById('btncontent');
let myData = JSON.parse(element.getAttribute('data-mydata'));

function rotate() {
    document.getElementById("slide").src=myData[n]['e_img'];
    (n === (myData.length-1)) ? n=0 : n++;
    setTimeout(rotate, 5000) 
};

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

function logincheck(){
    fetch('/logincheck') // 로그인 상태 확인하는 API 또는 URL
    .then(response => response.json())
    .then(data => {
        console.log(data.authcheck);
        if (data.authcheck) {
            alert('게임시작');
            window.location.href = '/';
        } else {
            window.location.href = '/login';
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}

const GAMESTART = document.getElementById('gameStart');
GAMESTART.addEventListener('click', logincheck)