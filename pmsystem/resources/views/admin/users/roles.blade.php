@extends('admin.layout.index')
@section('main-section')

<!-- Add a role form -->
<div class="relative overflow-hidden shadow-md rounded-lg">
    <table class="table-fixed w-full text-left">
        <div class="uppercase bg-[#6b7280]" style="background-color: #6b7280;">
            <tr class=" bg-[#6b7280]">
                <td colspan="3" class="py-2 border text-white text-left font-bold p-4">Add Role</td>
                
            </tr>
        </div>
        <tbody class="bg-white text-gray-500">
            <tr class="py-3">
                <form action="{{ route('role.save') }}" method="post">
                    @csrf
                <td class="py-3 border text-center  p-4" >
                    <input name="role_title" class="w-full px-4 py-2 text-lg font-med rounded-lg border focus:outline focus:outline-2 focus:outline-offset-2 bg-[#ffffff] text-[#444444] focus:outline-[#aaaaaa] border-[#cccccc]" placeholder="Role Title">
                </td>
                <td class="py-3 border text-center  p-4" >
                    <input name="role_description" class="w-full px-4 py-2 text-lg font-med rounded-lg border focus:outline focus:outline-2 focus:outline-offset-2 bg-[#ffffff] text-[#444444] focus:outline-[#aaaaaa] border-[#cccccc]" placeholder="Role Description">
                </td>
                
                <td class="py-3 border text-center  p-4">
                    <button class="font-bold rounded-lg text-xl  w-full h-12 bg-blue-500 text-[#ffffff] justify-center">Add Role</button>
                </td>
                </form>
            </tr>
        </tbody>
    </table>
</div>
<!-- Roles list -->
<div class="relative overflow-hidden shadow-md rounded-lg mt-5">
    <table class="table-fixed w-full text-left">
        <thead class="uppercase bg-[#6b7280] text-[#e5e7eb]" style="background-color: #6b7280; color: #e5e7eb;">
            <tr>
                <td class="py-2 border text-center font-bold p-4">Role</td>
                <td class="py-2 border text-center font-bold p-4">Description</td>
                <td class="py-2 border text-center font-bold p-4">Action</td>
            </tr>
        </thead>
        <tbody class="bg-white text-gray-500">
            @foreach($roles as $role)
            <tr class="py-3">
                <td class="py-3 border text-center  p-4">{{ $role->role_title }}</td>
                <td class="py-3 border text-center  p-4">{{ $role->role_description }}</td>
                <td class="py-3 border text-center  p-4">
                    <form action="{{ route('role.delete', $role->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-500">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
