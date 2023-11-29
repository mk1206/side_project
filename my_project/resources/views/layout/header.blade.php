<header>
    <div class="header">
        <div>
            <span class="menu">메뉴</span>
        </div>
        <div>
            <a href=""><img class="logoNexon" src="../img/logo_nexon.png"></a>
        </div>
        @auth
            <div class="sign">
                <a class="signIn" href="{{ route('logout.get') }}">로그아웃</a>
            </div>
        @endauth
        @guest
        <div>
            <div class="sign">
                <a href="{{ route('regist.get') }}">회원가입</a>
                <a class="signIn" href="{{ route('login.get') }}">로그인</a>
            </div>
        </div>
        @endguest
    </div>
    <div class="nav">
        <img class="logo" src="../img/logo.png">
        <div class="menus">
            <a href="">SA뉴스</a>
            <a href="">정보센터</a>
            <a href="">플리마켓</a>
            <a href="">커뮤니티</a>
            <a href="">SA클랜</a>
            <a href="">SA랭킹</a>
            <a href="">SA리그</a>
            <a href="" style="border: none">고객지원</a>
        </div>
        <div class="gameStart">
            <a href="/logincheck" id="gameStart"><img src="../img/btn_gamestart.png"></a>
        </div>
    </div>
</header>