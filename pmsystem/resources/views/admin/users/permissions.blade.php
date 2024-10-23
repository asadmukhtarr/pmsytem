@extends('admin.layout.index')
@section('main-section')

<!-- Add a role form -->
<div class="relative overflow-hidden shadow-md rounded-lg">
    <table class="table-fixed w-full text-left">
        <div class="uppercase bg-[#6b7280]" style="background-color: #6b7280;">
            <tr class=" bg-[#6b7280]">
                <td colspan="3" class="py-2 border text-white text-left font-bold p-4">Add Permission</td>
                
            </tr>
        </div>
        <tbody class="bg-white text-gray-500">
            <tr class="py-3">
                <form action="{{ route('permission.save') }}" method="post">
                    @csrf
                <td class="py-3 border text-center  p-4" >
                    <input name="title" class="w-full px-4 py-2 text-lg font-med rounded-lg border focus:outline focus:outline-2 focus:outline-offset-2 bg-[#ffffff] text-[#444444] focus:outline-[#aaaaaa] border-[#cccccc]" placeholder="Permission Title">
                </td>
                <td class="py-3 border text-center  p-4" >
                    <input name="permission_slug" class="w-full px-4 py-2 text-lg font-med rounded-lg border focus:outline focus:outline-2 focus:outline-offset-2 bg-[#ffffff] text-[#444444] focus:outline-[#aaaaaa] border-[#cccccc]" placeholder="Permission Slug">
                </td>
                
                <td class="py-3 border text-center  p-4">
                    <button class="font-bold rounded-lg text-xl  w-full h-12 bg-blue-500 text-[#ffffff] justify-center">Add Permission</button>
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
                <td class="py-2 border text-center font-bold p-4">Permission</td>
                <td class="py-2 border text-center font-bold p-4">slug</td>
                <td class="py-2 border text-center font-bold p-4">Action</td>
            </tr>
        </thead>
        <tbody class="bg-white text-gray-500">
            @foreach($permissions as $permission)
            <tr class="py-3">
                <td class="py-3 border text-center  p-4">{{ $permission->title }}</td>
                <td class="py-3 border text-center  p-4">{{ $permission->permission_slug }}</td>
                <td class="py-3 border text-center  p-4">
                    <form action="{{ route('permission.delete', $permission->id) }}" method="post">
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
