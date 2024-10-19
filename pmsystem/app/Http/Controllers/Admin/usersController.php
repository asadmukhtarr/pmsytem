<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class usersController extends Controller
{
    //

    public function loginView(){
        return view('frontend.login');
    }

    public function login(Request $request){
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($credetials)) {
            return redirect('/home')->with('success', 'Login berhasil');
        }
        return back()->with('error', 'Email or Password salah');
        
    }


    public function create(){
        return view('admin.users.new');
    }
    public function profile(){
        return view('admin.users.profile');
    }

    

    // for save user ..
    public function save(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'gender' => 'required|in:male,female,other',
            'role' => 'required',
            'password' => 'required|min:6|confirmed',
            'image' => 'required',
        ]);
        if($request->hasFile('image')){
            $image = "Asad".time().".".$request->image->getClientOriginalExtension();
            $request->image->storeAs('users',$image,'public');
        }
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->gender = $request->gender;
        $user->picture = $image;
        $user->save();
        return redirect()->back()->with('success','User Created Succesfully');
    }



}
