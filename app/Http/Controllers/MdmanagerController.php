<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MdmanagerController extends Controller
{
    public function list(){
        return view('mdmanager.mdmanagerList');
    }
}
