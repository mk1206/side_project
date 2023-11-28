@extends('layout.layout')

@section('title', '로그인')

@section('main')
	<div class="login">
		<a href="/"><img style="width: 250px" src="../img/logo_nexon.png" alt=""></a>
		<div class="login-text">로그인</div>
	</div>
	<br><br><br><br>
	<form action="{{ route('login.post') }}" method="POST">
		@csrf
		@include('layout.errorlayout')
		<div class="input">
			<input type="text" class="input-tag" placeholder="이메일" name="email">
			<br><br>
			<input type="password" class="input-tag" placeholder="비밀번호" name="password">
			<br><br>
			<button type="submit" class="btn-login">로그인</button>
			<br>
			<a href="{{ route('regist.get') }}" class="regist">회원가입</a>
		</div>
	</form>
@endsection