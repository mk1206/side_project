<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class UserController extends Controller
{
    public function loginget() {
        return view('login');
    }

    public function loginpost(Request $request) {
        $validator = Validator::make(
            $request->only('email', 'password')
            , [
                'email'     => 'required|email|max:50'
                , 'password'=> 'required'
            ]
        );

        if($validator->fails()) {
            return view('login')->withErrors($validator->errors());
        };

        $result = User::where('email', $request->email)->first();
        if(!$result || !(Hash::check($request->password, $result->password))) {
            $errorMsg = '아이디와 비밀번호를 다시 확인해 주세요';
            return redirect()->route('login.get')->withErrors($errorMsg);
        }

        Auth::login($result);
        if(Auth::check()) {
            session($result->only('id'));
        } else {
            $errorMsg = "인증 에러 발생";
            return view('login')->withErrors($errorMsg);
        }

        return redirect()->route('main');
    }

    public function registget() {
        return view('regist');
    }

    public function registpost(Request $request) {
        $validator = Validator::make(
            $request->only('email', 'password', 'passwordchk', 'name')
            , [
                'email'     => 'required|email|max:50'
                ,'name'     => 'required|regex:/^[a-zA-Z가-힣]+$/|min:2|max:50'
                , 'password'=> 'required|same:passwordchk'
            ]
        );

        if($validator->fails()) {
            return view('regist')->withErrors($validator->errors());
        };

        $data = $request->only('email', 'password', 'name');

        $data['password'] = Hash::make($data['password']);

        $result = User::create($data);

        return redirect()->route('login.get');
    }

    public function logoutget() {
        Session::flush();
        Auth::logout();
        return redirect()->route('main');
    }

    // public function logincheckget() {
    //     $logincheck = Auth::check();
    //     return redirect()->route('main')->with($logincheck);
    // }
}
