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
        <tbody class="bg-white text-gray-500 bg-[#FFFFFF] text-[#6b7280]" style="background-color: #FFFFFF; color: #6b7280;">
            <tr class="py-3">
                <form action="" method="">
                <td class="py-3 border text-center  p-4" >
                    <input class="w-full px-4 py-2 text-lg font-med rounded-lg border focus:outline focus:outline-2 focus:outline-offset-2 bg-[#ffffff] text-[#444444] focus:outline-[#aaaaaa] border-[#cccccc]" placeholder="Role..">
                </td>
                <td class="py-3 border text-center  p-4" >
                    <input class="w-full px-4 py-2 text-lg font-med rounded-lg border focus:outline focus:outline-2 focus:outline-offset-2 bg-[#ffffff] text-[#444444] focus:outline-[#aaaaaa] border-[#cccccc]" placeholder="Role Description..">
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
                <td class="py-2 border text-center font-bold p-4">ROles Name</td>
                <td class="py-2 border text-center font-bold p-4">Description</td>
                <td class="py-2 border text-center font-bold p-4">Assigned to Users</td>
                <td class="py-2 border text-center font-bold p-4">Action</td>
            </tr>
        </thead>
        <tbody class="bg-white text-gray-500 bg-[#FFFFFF] text-[#6b7280]" style="background-color: #FFFFFF; color: #6b7280;">
            <tr class="py-3">
                <td class="py-3 border text-center  p-4">Admin</td>
                <td class="py-3 border text-center  p-4">This is Admin Role</td>
                <td class="py-3 border text-center  p-4">2 users</td>
                <td class="py-3 border text-center  p-4">
                    <form action="" method="">
                        <input type="hidden" name="" id="">
                        <button class="text-red-500">Delete</button>

                </td>
            </tr>
            <tr class="py-3">
                <td class="py-3 border text-center  p-4">Manager</td>
                <td class="py-3 border text-center  p-4">Role for manager</td>
                <td class="py-3 border text-center  p-4">5 users</td>
                <td class="py-3 border text-center  p-4">
                    <form action="" method="">
                        <input type="hidden" name="" id="">
                        <button class="text-red-500">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
