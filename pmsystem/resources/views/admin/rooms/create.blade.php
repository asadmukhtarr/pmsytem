@extends('admin.layout.index')
@section('main-section')
<!-- This is an example component -->
<div class="bg-background text-black flex flex-col items-center justify-center">
    <div class="bg-[#f8f4f3] w-full p-8 m-2 rounded-lg shadow-lg">
      <h2 class="text-2xl font-bold mb-4">List Your Property</h2>
      <form class="w-full grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="mb-4">
          <label for="property-name" class="block text-sm font-medium">Property Name</label>
          <input
            type="text"
            id="property-name"
            name="property-name"
            placeholder="Enter property name"
            class="w-full mt-1 p-2 border border-input rounded-md focus:outline-none focus:ring focus:ring-primary"
          />
        </div>
        <div class="mb-4">
          <label for="property-type" class="block text-sm font-medium">Property Type</label>
          <select id="property-type" name="property-type" class="w-full mt-1 p-2 border border-input rounded-md focus:outline-none focus:ring focus:ring-primary">
            <option value="house">House</option>
            <option value="apartment">Apartment</option>
            <option value="condo">Condo</option>
            <option value="land">Land</option>
          </select>
        </div>
        <div class="mb-4">
          <label for="city" class="block text-sm font-medium">City</label>
          <select id="city" name="city" class="w-full mt-1 p-2 border border-input rounded-md focus:outline-none focus:ring focus:ring-primary">
            <option value="city">city</option>
            <option value="city">city</option>
            <option value="city">city</option>
            <option value="city">city</option>
          </select>
        </div>
        <div class="mb-4">
          <label for="country" class="block text-sm font-medium">Country</label>
          <select id="country" name="country" class="w-full mt-1 p-2 border border-input rounded-md focus:outline-none focus:ring focus:ring-primary">
            <option value="usa">USA</option>
            <option value="canada">Canada</option>
            <option value="uk">UK</option>
            <option value="australia">Australia</option>
          </select>
        </div>
        <div class="mb-4">
          <label for="description" class="block text-sm font-medium">Description</label>
          <textarea
            id="description"
            name="description"
            placeholder="Enter property description"
            class="w-full mt-1 p-2 border border-input rounded-md focus:outline-none focus:ring focus:ring-primary"
          ></textarea>
        </div>
        <div class="mb-4">
          <label for="price" class="block text-sm font-medium">Price</label>
          <input type="number" id="price" name="price" placeholder="Enter price" class="w-full mt-1 p-2 border border-input rounded-md focus:outline-none focus:ring focus:ring-primary" />
        </div>
        <div class="mb-4">
          <label for="image" class="block text-sm font-medium">Image</label>
          <input type="file" id="image" name="image" accept="image/*" class="w-full mt-1 p-2 border border-input rounded-md focus:outline-none focus:ring focus:ring-primary" />
        </div>
        <div class="mb-4 col-span-2">
          <label class="block text-sm font-medium">Featured Property</label>
          <input type="checkbox" id="featured" name="featured" class="mt-2" />
          <label for="featured" class="ml-2 text-sm">Check if featured</label>
        </div>
        <div class="mb-4 col-span-2">
          <label class="block text-sm font-medium">Amenities</label>
          <div class="flex flex-row mt-2 gap-3">
            <label class="flex items-center"> <input type="checkbox" name="amenities" value="pool" class="mr-2" /> Pool </label>
            <label class="flex items-center"> <input type="checkbox" name="amenities" value="gym" class="mr-2" /> Gym </label>
            <label class="flex items-center"> <input type="checkbox" name="amenities" value="parking" class="mr-2" /> Parking </label>
            <label class="flex items-center"> <input type="checkbox" name="amenities" value="wifi" class="mr-2" /> WiFi </label>
          </div>
        </div>
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-500/80 focus:outline-none focus:ring focus:ring-primary mt-4 col-span-2">List Property</button>
      </form>
    </div>
  </div>
@endsection
