<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pagesController extends Controller
{
    // for dashboard ...
    public function dashboard(){
        return view('admin.dashboard');
    }
    // for create room ..
    public function create_room(){
        return view('admin.rooms.create');
    }
    public function rooms(){
        return view('admin.rooms.all');
    }
    // customers ..
    public function customers(){
        return view('admin.customers');
    }
    // create room ..
}
