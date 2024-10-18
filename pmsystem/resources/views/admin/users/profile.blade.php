@extends('admin.layout.index')
@section('main-section')
<div class="flex flex-col md:flex-row p-6">
    <div class="w-full md:w-1/3 bg-[#f8f4f3]  p-4 rounded-lg shadow-md">
      <div class="flex flex-col items-center justify-center">
        <img src="https://placehold.co/100x100" alt="Profile Picture" class="rounded-full mb-4" />
        <h2 class="text-lg font-semibold">Nina Mcintire</h2>
        <p class="text-muted-foreground">Software Engineer</p>
        <p class="text-muted-foreground">Brief description about Nina.</p>
      </div>
    </div>
  
    <div class="w-full md:w-2/3 bg-[#f8f4f3]  p-6 rounded-lg shadow-md md:ml-4">
      <div class="flex justify-between mb-4">
        <h2 class="text-lg font-semibold">Edit Profile</h2>
      </div>
      <form>
        <div class="mb-4">
          <label class="block text-sm font-medium">Name</label>
          <input type="text" class="border border-zinc-300 p-2 w-full rounded" placeholder="Name" />
        </div>
        <div class="mb-4">
          <label class="block text-sm font-medium">Email</label>
          <input type="email" class="border border-zinc-300 p-2 w-full rounded" placeholder="Email" />
        </div>
        <div class="mb-4">
          <label class="block text-sm font-medium">Description</label>
          <textarea class="border border-zinc-300 p-2 w-full rounded" placeholder="Experience"></textarea>
        </div>
        <div class="mb-4">
          <label class="block text-sm font-medium">Skills</label>
          <input type="text" class="border border-zinc-300 p-2 w-full rounded" placeholder="Skills" />
        </div>
        <button type="submit" class="bg-blue-500 text-white p-2 rounded">Submit</button>
      </form>
    </div>
  </div>
  @endsection