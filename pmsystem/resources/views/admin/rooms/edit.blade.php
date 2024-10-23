@extends('admin.layout.index')
@section('main-section')
<!-- This is an example component -->
<div class="bg-background text-black flex flex-col items-center justify-center">
    <div class="bg-[#f8f4f3] w-full p-8 m-2 rounded-lg shadow-lg">
      <h2 class="text-2xl font-bold mb-4">Edit Your Property</h2>
      <form action="{{ route('update.room',$room->id) }}" method="post" enctype="multipart/form-data" class="w-full grid grid-cols-1 md:grid-cols-2 gap-4">
        @csrf
        <div class="mb-4">
          <label for="property-name" class="block text-sm font-medium">Property Name</label>
          <input
            type="text"
            id="property-name"
            name="name"
            value="{{ $room->title }}"
            placeholder="Enter property name"
            class="w-full mt-1 p-2 border border-input rounded-md focus:outline-none focus:ring focus:ring-primary"
          />
          @error('name')
          <font color="red"><b>{{ $message }}</b></font>
          @enderror
        </div>
        <div class="mb-4">
          <label for="property-type" class="block text-sm font-medium">Property Type </label>
          <select id="property-type" name="type" class="w-full mt-1 p-2 border border-input rounded-md focus:outline-none focus:ring focus:ring-primary">
            <option value="house" @if($room->type == "House") Selected @endif>House</option>
            <option value="apartment" @if($room->type == "apartment") Selected @endif>Apartment</option>
            <option value="condo" @if($room->type == "condo") Selected @endif>Condo</option>
            <option value="land" @if($room->type == "land") Selected @endif>Land</option>
          </select>
          @error('type')
          <font color="red"><b>{{ $message }}</b></font>
          @enderror
        </div>
        <div class="mb-4">
          <label for="city" class="block text-sm font-medium">City </label>
          <select id="city" name="city" class="w-full mt-1 p-2 border border-input rounded-md focus:outline-none focus:ring focus:ring-primary">
            <option value="Lahore" @if($room->city == "Lahore") Selected @endif>Lahore</option>
            <option value="Karachi" @if($room->city == "Karachi") Selected @endif>Karachi</option>
            <option value="Faisalabad" @if($room->city == "Faisalabad") Selected @endif>Faisalabad</option>
            <option value="Peshawar" @if($room->city == "Peshawar") Selected @endif>Peshawar</option>
          </select>
          @error('city')
          <font color="red"><b>{{ $message }}</b></font>
          @enderror
        </div>
        <div class="mb-4">
          <label for="country" class="block text-sm font-medium">Country </label>
          <select id="country" name="country" class="w-full mt-1 p-2 border border-input rounded-md focus:outline-none focus:ring focus:ring-primary">
            <option value="usa" @if($room->country == "usa") Selected @endif>USA</option>
            <option value="canada" @if($room->country == "canada") Selected @endif>Canada</option>
            <option value="uk" @if($room->country == "uk") Selected @endif>UK</option>
            <option value="australia" @if($room->country == "australia") Selected @endif>Australia</option>
          </select>
          @error('country')
          <font color="red"><b>{{ $message }}</b></font>
          @enderror
        </div>
        <div class="mb-4">
          <label for="description" class="block text-sm font-medium">Description</label>
          <textarea
            id="description"
            name="description"
            placeholder="Enter property description"
            class="w-full mt-1 p-2 border border-input rounded-md focus:outline-none focus:ring focus:ring-primary"
          >
          {{ $room->description }}
          </textarea>
          @error('description')
          <font color="red"><b>{{ $message }}</b></font>
          @enderror
        </div>
        <div class="mb-4">
          <label for="price" class="block text-sm font-medium">Price</label>
          <input type="number" id="price" name="price" value="{{ $room->price }}" placeholder="Enter price" class="w-full mt-1 p-2 border border-input rounded-md focus:outline-none focus:ring focus:ring-primary" />
          @error('price')
          <font color="red"><b>{{ $message }}</b></font>
          @enderror
        </div>
        <label for=""><font color="red"><b> Please Upload Image If You want to change </b></font></label> <br />
        <div class="mb-4">
          <label for="image" class="block text-sm font-medium">Image</label>
          <input type="file" id="image" name="image" accept="image/*" class="w-full mt-1 p-2 border border-input rounded-md focus:outline-none focus:ring focus:ring-primary" />
          @error('image')
          <font color="red"><b>{{ $message }}</b></font>
          @enderror
        </div> <br />
        <h2>Upload Gallery Images</h2> <br />
        <div class="mb-4">
          <input type="file" id="image" name="imageg[]" accept="image/*" class="w-full mt-1 p-2 border border-input rounded-md focus:outline-none focus:ring focus:ring-primary" />
          @error('imageg')
          <font color="red"><b>{{ $message }}</b></font>
          @enderror
        </div>
        <div class="mb-4">
          <input type="file" id="image" name="imageg[]" accept="image/*" class="w-full mt-1 p-2 border border-input rounded-md focus:outline-none focus:ring focus:ring-primary" />
          @error('imageg')
          <font color="red"><b>{{ $message }}</b></font>
          @enderror
        </div>
        <div class="mb-4">
          <input type="file" id="image" name="imageg[]" accept="image/*" class="w-full mt-1 p-2 border border-input rounded-md focus:outline-none focus:ring focus:ring-primary" />
          @error('imageg')
          <font color="red"><b>{{ $message }}</b></font>
          @enderror
        </div>
        <div class="mb-4">
          <input type="file" id="image" name="imageg[]" accept="image/*" class="w-full mt-1 p-2 border border-input rounded-md focus:outline-none focus:ring focus:ring-primary" />
          @error('imageg')
          <font color="red"><b>{{ $message }}</b></font>
          @enderror
        </div>
        <div class="mb-4 col-span-2">
          <label class="block text-sm font-medium">Featured </label>
          <input type="checkbox" id="featured" name="featured" value="1" class="mt-2" @if($room->is_feature == 1) checked @endif />
          <label for="featured" class="ml-2 text-sm">Check if featured</label>
          @error('feature')
          <font color="red"><b>{{ $message }}</b></font>
          @enderror
        </div>
        <div class="mb-4 col-span-2">
        <label class="block text-sm font-medium">Amenities:</label>
        @php
            // Ensure $room->amenities is always treated as an array
            $amenities = json_decode($room->amenities);
        @endphp

        <div class="flex flex-row mt-2 gap-3">
            <label class="flex items-center">
                <input type="checkbox" name="amenities[]" value="pool" class="mr-2" 
                      @if(in_array("pool", $amenities)) checked @endif /> Pool
            </label>
            <label class="flex items-center">
                <input type="checkbox" name="amenities[]" value="gym" class="mr-2" 
                      @if(in_array("gym", $amenities)) checked @endif /> Gym
            </label>
            <label class="flex items-center">
                <input type="checkbox" name="amenities[]" value="parking" class="mr-2" 
                      @if(in_array("parking", $amenities)) checked @endif /> Parking
            </label>
            <label class="flex items-center">
                <input type="checkbox" name="amenities[]" value="wifi" class="mr-2" 
                      @if(in_array("wifi", $amenities)) checked @endif /> WiFi
            </label>
        </div>
        </div>
        </div>
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-500/80 focus:outline-none focus:ring focus:ring-primary mt-4 col-span-2">List Property</button>
      </form>
    </div>
  </div>
@endsection
