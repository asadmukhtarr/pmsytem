<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use App\Models\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;


class usersController extends Controller
{
    //

    public function loginView(){
        return view('frontend.login');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($credetials)) {
            //return "okay";
            return redirect(route('admin.dashboard'));
        }
        
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }

    public function index(){
        $users = User::all();
        return view('admin.users.users', compact('users'));
        // return view('admin.users.users');
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
    // for update user
    public function updateUser($id, Request $request)
    {
        // Validation rules for updating the user
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required',
            'gender' => 'required|in:male,female,other',
            'role' => 'required|in:admin,manager,listings',
            'password' => 'nullable|string|min:6|confirmed',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // Handle image upload if present
        if($request->hasFile('image')){
            $image = "Asad".time().".".$request->image->getClientOriginalExtension();
            $request->image->storeAs('users',$image,'public');
        }
        $user = user::find($id);
        // Updating user data
        $user->name = $request->name;
        $user->email = $request->email;
        $user->gender = $request->gender;
      //  $user->role = $request->role;

        if (!empty($request->password)) {
            $user->password = Hash::make($request->password);
        }
        $user->save();
        return redirect()->back()->with('success', 'User updated successfully');
    }

    public function useredit($id) {
        $user = User::findOrFail($id);
        return view('admin.users.new', compact('user'));
    }

    public function userdelete($id) {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back()->with('success', 'User deleted successfully');
    }


    // Permissions 
    public function permissionlist(){
        $permissions = Permission::all();
        return view('admin.users.permissions', compact('permissions'));
    }

    public function permissionsave( Request $request ){
        $request->validate([
            'title' => 'required|string|max:255',
            'permission_slug' => 'required|string|unique:permissions,permission_slug|max:255',
        ]);
        
        $permission = new Permission;
        $permission->title = $request->title;
        $permission->permission_slug = $request->permission_slug;
        $permission->save();
        return redirect()->back()->with('success','Permission Created Succesfully');

    }
    public function permissiondelete($id) {
        $permission = Permission::findOrFail($id);
        $permission->delete();
        return redirect()->back()->with('success', 'Permission deleted successfully');
    }


    // Roles 
    public function rolelist(){
        $roles = Role::all();
        return view('admin.users.roles', compact('roles'));
    }

    public function rolesave( Request $request ){
        $request->validate([
            'role_title' => 'required|string|max:255',
            'role_description' => 'max:255',
        ]);
        
        $roles = new Role;
        $roles->role_title = $request->role_title;
        $roles->role_description = $request->role_description;
        $roles->save();
        return redirect()->back()->with('success','Role Created Succesfully');
    }
    
    public function roledelete($id) {
        $role = Role::findOrFail($id);
        $role->delete();
        return redirect()->back()->with('success', 'Role deleted successfully');
    }

}
