<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\property;
use App\Models\customer;

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
        $customers = customer::orderby('id','desc')->get();
        return view('admin.customers',compact('customers'));
    }
    // create room ..
    public function save_customer(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:customers',
            'whatsapp' => 'required|unique:customers|max:11',
            'city' => 'required'
        ]);
        $customer = customer::create($request->all());
        return redirect()->back()->with('success','Customer Created Succesfully');
    }
}
