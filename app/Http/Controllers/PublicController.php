<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class PublicController extends Controller{
    public function getIndex() {
        return view("index");
    }

}
