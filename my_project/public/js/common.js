let n=0;
let element = document.getElementById('slide');
let myData = JSON.parse(element.getAttribute('data-mydata'));
// document.querySelector(`.btnbox :nth-child(${n + 1})`).style.color='#8d8d8d';

startSlideshow();

function startSlideshow() {
    interval = setInterval(rotate, 5000);
};

function stopSlideshow() {
    clearInterval(interval);
};

function rotate() {
    element.src=myData[n]['e_img'];
    (n === (myData.length-1)) ? n = 0 : n++;
};

let BTNBOX = document.querySelector('.btnbox');

for(i = 0; i < myData.length; i++) {
    let DIVCONTENT = document.createElement('span');
    DIVCONTENT.innerHTML = myData[i]['e_name'];
    DIVCONTENT.classList = 'divcontent';
    BTNBOX.appendChild(DIVCONTENT);
    DIVCONTENT.setAttribute('onmouseover', `changeImage(${i})`);
};

function changeImage(index) {
    stopSlideshow();
    element.src = myData[index]['e_img'];
    n = index;
};

document.querySelectorAll('.divcontent')[n].addEventListener('onmouseout', startSlideshow());

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
GAMESTART.addEventListener('click', logincheck);