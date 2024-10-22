<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\property;

class roomController extends Controller
{
    //
    public function create_room(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'type' => 'required',
            'city' => 'required',
            'country' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required',
        ]);
        // Validate the request

    // Handle image upload
    // $imagePath = null;
    // if ($request->hasFile('image')) {
    //     $imagePath = $request->file('image')->store('images', 'public');
    // }

    if($request->hasFile('image')){
        $image = "property".time().".".$request->image->getClientOriginalExtension();
        $request->image->storeAs('Images',$image,'public');
    }

    // Create a new property instance and assign values
    $property = new property();
    $property->title = $validatedData['name'];
    $property->type = $validatedData['type'];
    $property->city = $validatedData['city'];
    $property->country = $validatedData['country'];
    $property->description = $validatedData['description'];
    $property->price = $validatedData['price'];
    $property->image = $image;
    $property->is_feature = $request->has('is_feature');
    $property->amenities = json_encode($request->amenities); // Stored as JSON

    // Save the property to the database
    $property->save();


    // Redirect with a success message
    return redirect()->back()->with('success', 'Property listed successfully!');
    }
}

