<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\property;
use App\Models\gallery;

class roomController extends Controller
{
    //
    public function create_room(Request $request){
        //return sizeof($request->imageg);
      
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
    $property_id = $property->id;

    $gallery = $request->imageg;
    foreach ($gallery as $image) {
        $imageName = "property" . time() . "." . $image->getClientOriginalExtension();
        $image->storeAs('public/Images', $imageName);
        
        $galleryEntry = new gallery();
        $galleryEntry->property_id = $property_id;
        $galleryEntry->picture = $imageName;
        $galleryEntry->save();
    }
    // Redirect with a success message
    return redirect()->back()->with('success', 'Property listed successfully!');
    }
    public function update_room($id,Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'type' => 'required',
            'city' => 'required',
            'country' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);
        $property = property::find($id);
        $property->title = $validatedData['name'];
        $property->type = $validatedData['type'];
        $property->city = $validatedData['city'];
        $property->country = $validatedData['country'];
        $property->description = $validatedData['description'];
        $property->price = $validatedData['price'];
        if($request->hasFile('image')){
            $image = "property".time().".".$request->image->getClientOriginalExtension();
            $request->image->storeAs('Images',$image,'public');
            $property->image = $image;
        }
        $property->is_feature = $request->has('is_feature');
        $property->amenities = json_encode($request->amenities); // Stored as JSON

        // Save the property to the database
        $property->save();
        $property_id = $property->id;
        if(!empty($request->imageg) && sizeof($request->imageg) > 0){
            $gallery = $request->imageg;
            foreach ($gallery as $image) {
                $imageName = "property" . time() . "." . $image->getClientOriginalExtension();
                $image->storeAs('public/Images', $imageName);
                
                $galleryEntry = new gallery();
                $galleryEntry->property_id = $property_id;
                $galleryEntry->picture = $imageName;
                $galleryEntry->save();
            }
        }
        return redirect()->back()->with('success','Room Is Updated Sucessfully');
    }
}

