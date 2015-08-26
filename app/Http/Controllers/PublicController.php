<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Auth;

class PublicController extends Controller{
    public function getIndex() {
        return view("index");
    }

    public function getLogin() {
        return view("login");
    }

    public function postLogin(Request $request) {
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect("panel");
        }

        return redirect()->back()->with("err", "Error when try to login to system");
    }

    public function getLogout() {
        Auth::logout();

        return redirect("login");
    }
}
