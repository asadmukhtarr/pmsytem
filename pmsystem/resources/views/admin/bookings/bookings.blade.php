@extends('admin.layout.index')
@section('main-section')
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
		<script src="https://unpkg.com/unlazy@0.11.3/dist/unlazy.with-hashing.iife.js" defer init></script>
		<script type="text/javascript">
			window.tailwind.config = {
				darkMode: ['class'],
				theme: {
					extend: {
						colors: {
							border: 'hsl(var(--border))',
							input: 'hsl(var(--input))',
							ring: 'hsl(var(--ring))',
							background: 'hsl(var(--background))',
							foreground: 'hsl(var(--foreground))',
							primary: {
								DEFAULT: 'hsl(var(--primary))',
								foreground: 'hsl(var(--primary-foreground))'
							},
							secondary: {
								DEFAULT: 'hsl(var(--secondary))',
								foreground: 'hsl(var(--secondary-foreground))'
							},
							destructive: {
								DEFAULT: 'hsl(var(--destructive))',
								foreground: 'hsl(var(--destructive-foreground))'
							},
							muted: {
								DEFAULT: 'hsl(var(--muted))',
								foreground: 'hsl(var(--muted-foreground))'
							},
							accent: {
								DEFAULT: 'hsl(var(--accent))',
								foreground: 'hsl(var(--accent-foreground))'
							},
							popover: {
								DEFAULT: 'hsl(var(--popover))',
								foreground: 'hsl(var(--popover-foreground))'
							},
							card: {
								DEFAULT: 'hsl(var(--card))',
								foreground: 'hsl(var(--card-foreground))'
							},
						},
					}
				}
			}
		</script>
  </head>
  <body>
    

<div class="p-6 bg-white rounded-lg shadow-md">
  <h2 class="text-2xl font-bold text-black mb-4">Bookings</h2>
  <h3 class="text-lg font-semibold text-muted">Booking List</h3>
  <div class="overflow-x-auto mt-4">
    <table class="min-w-full border-collapse border border-border">
      <thead>
        <tr class="bg-gray-500 text-white">
          <th class="border border-border p-2">No.</th>
          <th class="border border-border p-2">Booking_ID</th>
          <th class="border border-border p-2">Book_Date</th>
          <th class="border border-border p-2">Check In</th>
          <th class="border border-border p-2">Check Out</th>
          <th class="border border-border p-2">Booked_By</th>
          <th class="border border-border p-2">Status</th>
          <th class="border border-border p-2">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="border border-border p-2 text-center">1</td>
          <td class="border border-border p-2">BK2022001</td>
          <td class="border border-border p-2">2022-08-15</td>
          <td class="border border-border p-2">2022-08-15</td>
          <td class="border border-border p-2">2022-08-15</td>
          <td class="border border-border p-2">John Doe</td>
          <td class="border border-border p-2">Confirmed</td>
          <td class="border border-border p-2">
            <button class="bg-secondary text-secondary-foreground hover:bg-secondary/80 py-1 px-2 rounded">Edit</button>
          </td>
        </tr>
        <tr>
          <td class="border border-border p-2 text-center">2</td>
          <td class="border border-border p-2">BK2022002</td>
          <td class="border border-border p-2">2022-08-15</td>
          <td class="border border-border p-2">2022-08-15</td>
          <td class="border border-border p-2">2022-08-15</td>
          <td class="border border-border p-2">Jane Smith</td>
          <td class="border border-border p-2">Pending</td>
          <td class="border border-border p-2">
            <button class="bg-secondary text-secondary-foreground hover:bg-secondary/80 py-1 px-2 rounded">Edit</button>
          </td>
        </tr>
        <tr>
          <td class="border border-border p-2 text-center">3</td>
          <td class="border border-border p-2">BK2022003</td>
          <td class="border border-border p-2">2022-08-15</td>
          <td class="border border-border p-2">2022-08-15</td>
          <td class="border border-border p-2">2022-08-15</td>
          <td class="border border-border p-2">Alex Johnson</td>
          <td class="border border-border p-2">Cancelled</td>
          <td class="border border-border p-2">
            <button class="bg-secondary text-secondary-foreground hover:bg-secondary/80 py-1 px-2 rounded">Edit</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <button class="mt-4 bg-blue-500 text-white hover:bg-accent/80 py-2 px-4 rounded">+ New Booking</button>
</div>


  </body>
</html>
@endsection
