@extends('layout.layout')

@section('title', '짭든어택')

@section('main')
<div style="width: 100%" class="banner">
    <a href=""><img src="{{ $data[0]['e_img'] }}" id="slide" data-mydata="{{ json_encode($data) }}"></a>
    <div class="bButton">
        <img class="btnleft" src="../img/arrow_left.png">
        <div class="btnbox">
            @forelse ($data as $item)
            <div>{{ $item->e_name }}</div>
            @if($loop->iteration == 5)
                @break
            @endif

            @empty
                
            @endforelse
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