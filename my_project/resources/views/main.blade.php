@extends('layout.layout')

@section('title', '짭든어택')

@section('main')
<div style="width: 100%" class="banner">
    <a href=""><img src="{{ $data[0]['e_img'] }}" id="slide" data-mydata="{{ json_encode($data) }}"></a>
    <div class="bButton">
        <div class="btnbox">

        </div>
    </div>
</div>
<div class="section1">
    <div class="block">SA뉴스</div>
    <div class="block">GUILLOTINE</div>
    <div class="block">오늘의 피플</div>
    <div class="block">GM이야기</div>
</div>
<br><br>
<div id="map" style="width:500px; height:400px;"></div>
@endsection