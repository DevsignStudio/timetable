<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Auth;

class PanelController extends Controller{
    public function getIndex() {
        return view("panel.index");
    }
}
