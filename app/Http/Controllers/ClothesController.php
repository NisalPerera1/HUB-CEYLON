<?php

namespace App\Http\Controllers;

use App\Models\Clothes;
use Illuminate\Http\Request;

class ClothesController extends Controller
{
    public function index(Request $request)
    {
        $imagePaths = []; // Initialize $imagePaths as an empty array
    
        // Check if images exist in the storage
        $clothes = Clothes::all();
    
        // Convert $imagePaths to an array if it's not already
        $imagePaths = is_array($imagePaths) ? $imagePaths : [$imagePaths];
    
        return view('admin_clothes.index', compact('clothes', 'imagePaths'));
    }
    

    public function create(Request $request)
    {
        return view('admin_clothes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'item_name' => 'required|string',
            'gender' => 'required|string',
            'goods_or_services' => 'required|string',
            'unit_of_measure' => 'required|string',
            'color' => 'required|string',
            'size' => 'required|string',
            'age_limits' => 'required|string',
            'return_exchange_policy' => 'required|string',
            'tailor_made' => 'nullable|boolean', 
            'product_description' => 'required|string',
            'product_specifications' => 'nullable|string',
            'whole_sale_supply' => 'nullable|boolean', 
            'no_of_units_available' => 'required|integer',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Validate each image file
        ]);
    

// Split the input string into an array of colors
// $colors = $request->input('color') ? array_map('trim', $request->input('color')) : [];
// $colorsString = implode(',', $colors);
          // Store the images in the 'clothes_images' folder
    $imagePaths = [];
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('clothes_images'), $imageName);
            $imagePaths[] = 'clothes_images/' . $imageName;
        }
    }
    // Convert $imagePaths array to a JSON string
    $imagePathsJson = json_encode($imagePaths);


        // Create a new Clothes instance
        $clothes = new Clothes([
            'item_name' => $request->input('item_name'),
            'gender' => $request->input('gender'),
            'goods_or_services' => $request->input('goods_or_services'),
            'unit_of_measure' => $request->input('unit_of_measure'),
            'color' => $request->input('color'),      
            'size' => $request->input('size'),
            'age_limits' => $request->input('age_limits'),
            'return_exchange_policy' => $request->input('return_exchange_policy'),
            'tailor_made' => filter_var($request->input('tailor_made'), FILTER_VALIDATE_BOOLEAN),
            'product_description' => $request->input('product_description'),
            'product_specifications' => $request->input('product_specifications'),
            'whole_sale_supply' => filter_var($request->input('whole_sale_supply'), FILTER_VALIDATE_BOOLEAN),
            'no_of_units_available' => $request->input('no_of_units_available'),
             'images' => $imagePathsJson,
        ]);
        $clothes->save();
    
        return redirect()->route('clothes.index')->with('success', 'Clothes created successfully');
    }
    
    
    
    
}
