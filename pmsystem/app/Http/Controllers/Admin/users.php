<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class users extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.users.users');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        return "Store User";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return "Single User";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        return "Edit Single User";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }


     /**
     * Update the specified resource role.
     */
    public function roleupdate(Request $request, string $id)
    {
        return "Role Update";
    }

     /**
     * Update the specified resource role.
     */
    public function rolelist()
    {
        return view('admin.users.roles');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        return "Delete Users or User";
    }
}
