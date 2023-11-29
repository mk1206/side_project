@extends('layout.layout')

@section('title', '회원가입')

@section('main')
	<div class="login">
		<a href="/"><img style="width: 250px" src="../img/logo_nexon.png" alt=""></a>
		<div class="login-text">회원가입</div>
	</div>
	<br><br><br><br>
	<form action="{{ route('regist.post') }}" method="POST">
		@csrf
		@include('layout.errorlayout')
		<div class="input">
			<input type="text" class="input-tag" placeholder="이메일" name="email">
			<br><br>
			<input type="password" class="input-tag" placeholder="비밀번호" name="password">
			<br><br>
			<input type="password" class="input-tag" placeholder="비밀번호 확인" name="passwordchk">
			<br><br>
			<input type="text" class="input-tag" placeholder="이름" name="name">
			<br><br>
			<button type="submit" class="btn-login">회원가입</button>
			<br>
			<a href="{{ route('login.get') }}" class="btn-back">취소</a>
			<br>
		</div>
	</form>
@endsection
