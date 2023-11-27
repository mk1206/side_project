@extends('layout.layout')

@section('title', '서든어택')

@section('main')
<div style="width: 100%" class="banner">
    <a href=""><img src="../img/1.png" id="slide"></a>
    <div class="bButton">
        <img class="btnleft" src="../img/arrow_left.png">
        <div class="btnbox">
            <div>aaa</div>
            <div>bbb</div>
            <div>ccc</div>
            <div>ddd</div>
            <div>eee</div>
        </div>
        <img class="btnright" src="../img/arrow_right.png">
    </div>
</div>
<div class="section1">
    <div class="block">SA뉴스</div>
    <div class="block">GUILLOTINE</div>
    <div class="block">오늘의 피플</div>
    <div class="block">GM이야기</div>
</div>

@endsection