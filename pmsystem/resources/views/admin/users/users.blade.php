@extends('admin.layout.index')
@section('main-section')
<div class="min-w-full border-collapse block md:table">
    
	<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="p-4">
            <h1 class="md-only text-2xl mb-2">Users</h1>
			<label for="table-search" class="sr-only">Search</label>
			<div class="relative mt-1">
				<div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
					<svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
						xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd"
							d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
							clip-rule="evenodd"></path>
					</svg>
				</div>
				<input type="text" id="table-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for properties">
			</div>
		</div>
		<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
			<thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
				<tr>
					<th scope="col" class="p-4">
						<div class="flex items-center">
							<input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
							<label for="checkbox-all-search" class="sr-only">checkbox</label>
						</div>
					</th>
					<th scope="col" class="px-6 py-3">
						Name
					</th>
					<th scope="col" class="px-6 py-3">
						Role
					</th>
					<th scope="col" class="px-6 py-3">
						Email
					</th>
					<th scope="col" class="px-6 py-3">
						Status
					</th>
					<th scope="col" class="px-6 py-3">
						<span class="sr-only">Actions</span>
					</th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)
				<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
					<td class="w-4 p-4">
						<div class="flex items-center">
							<input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
							<label for="checkbox-table-search-1" class="sr-only">checkbox</label>
						</div>
					</td>
					<th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
						{{$user->name}}
					</th>
					<td class="px-6 py-4">
						-
					</td>
					<td class="px-6 py-4">
						{{$user->email}}
					</td>
					<td class="px-6 py-4">
						-
					</td>
					<td class="px-6 py-4 text-right">
						<form action="{{ route('user.edit', $user->id) }}" method="get">
							@csrf
							<button class="text-red-500">Edit</button>
						</form>
						<form action="{{ route('user.delete', $user->id) }}" method="post">
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
</div>
@endsection

