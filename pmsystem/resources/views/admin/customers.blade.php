@extends('admin.layout.index')
@section('main-section')
<!-- This is an example component -->
<div class="w-full max-w-5xl p-6 bg-white shadow-md rounded-md">
    <table class="table-auto w-full border-collapse border border-gray-300">
      <!-- Table Headings -->
      <thead>
        <tr class="bg-blue-100">
          <th class="border border-gray-300 px-4 py-2 text-left">Name</th>
          <th class="border border-gray-300 px-4 py-2 text-left">Email</th>
          <th class="border border-gray-300 px-4 py-2 text-left">WhatsApp</th>
          <th class="border border-gray-300 px-4 py-2 text-left">City</th>
          <th class="border border-gray-300 px-4 py-2 text-center">Action</th>
        </tr>
      </thead>

      <!-- Form Row -->
		<tbody>
			<form action="{{ route('create.customer') }}" method="post">
			@csrf
			<tr class="bg-gray-50">
			<td class="border border-gray-300 px-4 py-2">
				<input type="text" placeholder="Enter Name" value="{{ old('name') }}" name="name" class="w-full p-2 border rounded">
				@error('name')
				<font color="red"><b>{{ $message }}</b></font>
				@enderror
			</td>
			<td class="border border-gray-300 px-4 py-2">
				<input type="email" name="email" placeholder="Enter Email" value="{{ old('email') }}" class="w-full p-2 border rounded">
				@error('email')
				<font color="red"><b>{{ $message }}</b></font>
				@enderror
			</td>
			<td class="border border-gray-300 px-4 py-2">
				<input type="text" name="whatsapp" placeholder="WhatsApp Number" value="{{ old('whatsapp') }}" class="w-full p-2 border rounded">
				@error('whatsapp')
				<font color="red"><b>{{ $message }}</b></font>
				@enderror
			</td>
			<td class="border border-gray-300 px-4 py-2">
				<input type="text" name="city" placeholder="Enter City" value="{{ old('city') }}" class="w-full p-2 border rounded">
				@error('city')
				<font color="red"><b>{{ $message }}</b></font>
				@enderror
			</td>
			<td class="border border-gray-300 px-4 py-2 text-center">
				<button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">Save</button>
			</td>
			</tr>
			</form>
			<!-- Sample Data Rows -->
			@foreach($customers as $customer)
        <tr>
          <td class="border border-gray-300 px-4 py-2">{{ $customer->name }}</td>
          <td class="border border-gray-300 px-4 py-2">{{ $customer->email }}</td>
          <td class="border border-gray-300 px-4 py-2">{{ $customer->whatsapp }}</td>
          <td class="border border-gray-300 px-4 py-2">{{ $customer->city }}</td>
          <td class="border border-gray-300 px-4 py-2 text-center">
            <button class="bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded mr-2">Edit</button>
            <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">Delete</button>
          </td>
        </tr>
        @endforeach

        <!-- Display message if no customers found -->
        @if($customers->isEmpty())
        <tr>
          <td colspan="5" class="border border-gray-300 px-4 py-2 text-center">No customers found.</td>
        </tr>
        @endif
	    </tbody>
    </table>
  </div>
@endsection
