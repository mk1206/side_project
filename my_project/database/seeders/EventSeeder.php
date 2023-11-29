<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            ['e_name' => '랭크전 2023 특별시즌: 부스트 ALL', 'e_img' => '../img/1.png', 'created_at' => NOW(), 'updated_at' => NOW()]
            , ['e_name' => 'Gaming 스킨 무기 출시', 'e_img' => '../img/2.png', 'created_at' => NOW(), 'updated_at' => NOW()]
            , ['e_name' => '신규 마이건2 로얄 출시', 'e_img' => '../img/3.png', 'created_at' => NOW(), 'updated_at' => NOW()]
            , ['e_name' => '겨울맞이 탐험 이벤트', 'e_img' => '../img/4.png', 'created_at' => NOW(), 'updated_at' => NOW()]
            , ['e_name' => '넥슨 현대카드 1주년 대축제', 'e_img' => '../img/5.png', 'created_at' => NOW(), 'updated_at' => NOW()]
            , ['e_name' => '11월 넷째 주 버닝 핫타임', 'e_img' => '../img/6.png', 'created_at' => NOW(), 'updated_at' => NOW()]
            , ['e_name' => '레아 신규 파츠 세트 출시', 'e_img' => '../img/7.png', 'created_at' => NOW(), 'updated_at' => NOW()]
        ]);
    }
}
