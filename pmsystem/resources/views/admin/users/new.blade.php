@extends('admin.layout.index')
@section('main-section')
<!-- This is an example component -->
<div class="bg-background text-black flex flex-col items-center justify-center">
    <div class="bg-[#f8f4f3] w-full p-8 m-2 rounded-lg shadow-lg">
      <h2 class="text-2xl font-bold mb-4">Create A New User</h2>
      <form action="{{ route('save.user') }}" method="post" enctype="multipart/form-data" class="w-full grid grid-cols-1 md:grid-cols-2 gap-4">
        @csrf
        <div class="mb-4">
          <label for="user-name" class="block text-sm font-medium">User Name</label>
          <input
            type="text"
            id="user-name"
            name="name"
            placeholder="Enter Full name"
            class="w-full mt-1 p-2 border border-input rounded-md focus:outline-none focus:ring focus:ring-primary"
          />
          @error('name')
              <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>
        <div class="mb-4">
            <label for="user-email" class="block text-sm font-medium">User Email</label>
            <input
              type="text"
              id="user-email"
              name="email"
              placeholder="Enter Email"
              class="w-full mt-1 p-2 border border-input rounded-md focus:outline-none focus:ring focus:ring-primary"
            />
            @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
          </div>
        <div class="mb-4">
          <label for="user-gender" class="block text-sm font-medium">Gender</label>
          <select id="user-gender" name="gender" class="w-full mt-1 p-2 border border-input rounded-md focus:outline-none focus:ring focus:ring-primary">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select>
          @error('gender')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>
        <div class="mb-4">
            <label for="user-role" class="block text-sm font-medium">User Role</label>
            <select id="role" name="role" class="w-full mt-1 p-2 border border-input rounded-md focus:outline-none focus:ring focus:ring-primary">
              <option value="admin">Admin</option>
              <option value="manager">Manager</option>
              <option value="listings">Listings</option>
            </select>
            @error('role')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
          <label for="user-gender" class="block text-sm font-medium">Password</label>
          <input type="password" id="user-gender" name="password" class="w-full mt-1 p-2 border border-input rounded-md focus:outline-none focus:ring focus:ring-primary">
          @error('password')
              <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>
        <div class="mb-4">
          <label for="user-gender" class="block text-sm font-medium">Confirm Password</label>
          <input type="password" id="user-gender" name="password_confirmation" class="w-full mt-1 p-2 border border-input rounded-md focus:outline-none focus:ring focus:ring-primary">
        </div>
        <div class="mb-4">
          <label for="image" class="block text-sm font-medium">Image</label>
          <input type="file" id="image" name="image" accept="image/*" class="w-full mt-1 p-2 border border-input rounded-md focus:outline-none focus:ring focus:ring-primary" />
          @error('image')
              <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-500/80 focus:outline-none focus:ring focus:ring-primary mt-4 col-span-2">Add New user</button>
      </form>
    </div>
  </div>
@endsection
