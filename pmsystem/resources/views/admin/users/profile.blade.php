@extends('admin.index')
@section('main-section')
<div class="flex flex-col md:flex-row bg-background p-6">
    <div class="w-full flex justify-center items-center md:w-1/3 bg-card p-4 rounded-lg shadow-md bg-[#f8f4f3]">
      <div class="flex flex-col items-center">
        <img src="https://placehold.co/100x100" alt="Profile Picture" class="rounded-full mb-4" />
        <h2 class="text-lg font-semibold">Nina Mcintire</h2>
        <p class="text-muted-foreground">Software Engineer</p>
      </div>
    </div>
  
    <div class="w-full md:w-2/3 bg-card p-4 rounded-lg shadow-md md:ml-4 bg-[#f8f4f3]">
      <div class="flex justify-between mb-4">
        <h2 class="text-lg font-semibold">Edit</h2>
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
          <label class="block text-sm font-medium">Experience</label>
          <textarea class="border border-zinc-300 p-2 w-full rounded" placeholder="Experience"></textarea>
        </div>
        <div class="mb-4">
          <label class="block text-sm font-medium">Skills</label>
          <input type="text" class="border border-zinc-300 p-2 w-full rounded" placeholder="Skills" />
        </div>
        <div class="flex items-center mb-4">
          <input type="checkbox" class="mr-2" />
          <label class="text-sm">I agree to the <a href="#" class="text-blue-500 hover:underline">terms and conditions</a></label>
        </div>
        <button type="submit" class="p-2 rounded bg-blue-500 text-white px-5">Submit</button>
      </form>
    </div>
  </div>
  @endsection