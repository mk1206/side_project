<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Board;
use App\Models\Event;

class BoardController extends Controller
{
    public function main() {
        $result = Event::get();

        return view('main')->with('data', $result);
    }
}
