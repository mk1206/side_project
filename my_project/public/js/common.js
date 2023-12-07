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
    let DIVCONTENT = document.createElement('a');
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

var address = '주소';
var geocoder = new kakao.maps.services.Geocoder();

geocoder.addressSearch(address, function(result, status) {
    if (status === kakao.maps.services.Status.OK) {
        var coords = new kakao.maps.LatLng(result[0].y, result[0].x);
        console.log('위도:', coords.getLat());
        console.log('경도:', coords.getLng());
    }
});

var container = document.getElementById('map'); //지도를 담을 영역의 DOM 레퍼런스
var options = { //지도를 생성할 때 필요한 기본 옵션
	center: new kakao.maps.LatLng(33.450701, 126.570667), //지도의 중심좌표.
	level: 3 //지도의 레벨(확대, 축소 정도)
};

var map = new kakao.maps.Map(container, options); //지도 생성 및 객체 리턴
