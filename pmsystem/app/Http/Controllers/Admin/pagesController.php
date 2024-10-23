<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\property;

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
    public function edit($id){
        $room = property::find($id);
        return view('admin.rooms.edit',compact('room'));
    }
    public function rooms(){
        $properties = property::all();
        return view('admin.rooms.all',compact('properties'));
    }
    // customers ..
    public function customers(){
        return view('admin.customers');
    }
    // create room ..
}
