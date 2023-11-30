@extends('layout.layout')
@if (session('auth') === 1)
	@section('title', '관리자 페이지')
@else
	@section('title', '마이페이지')
@endif


@section('main')

@endsection