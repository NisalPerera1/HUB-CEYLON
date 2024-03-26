<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function edit($userId)
    {
        $user = User::findOrFail($userId);
        return view('selleraccount.profile.ManageAccount', compact('user'));
    }


    public function update(Request $request, $userId)
    {
        $user = User::findOrFail($userId);
    
        // Validate input
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'photo' => 'nullable|image|max:2048', // Assuming photo will be an image file and maximum size is 2MB
            // 'address' => 'nullable|string|max:255',
            // 'postal_code' => 'nullable|string|max:20',
            // 'city' => 'nullable|string|max:100',
            // 'state' => 'nullable|string|max:100',
            // 'country' => 'nullable|string|max:100',
            'password' => 'nullable|string|min:6|confirmed', // Add password validation rules

        ]);
    
        // Update user information
        $userData = $request->only([
            'name',
            // 'email',
            'phone',
            // 'address',
            // 'postal_code',
            // 'city',
            // 'state',
            // 'country',
        ]);
    
        // Handle photo upload
        if ($request->hasFile('photo')) {
            // Store the photo in the 'user_images' directory
            $photoPath = $request->file('photo')->store('user_images');
            $userData['photo'] = $photoPath;
        }
    
          // Update password if provided
    if ($request->filled('password')) {
        $userData['password'] = bcrypt($request->input('password')); // Hash the password
    }

        $user->update($userData);
    
        return redirect()->route('seller.ManageAccount', $user->id)->with('success', 'Email updated successfully');

    }


    public function updateEmail(Request $request, $userId)
    {
        $user = User::findOrFail($userId);

        // Validate the request data
        $request->validate([
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,

        ]);

        // Update the user's email
        $user->email = $request->input('email');
        $user->save();

        return redirect()->route('seller.ManageAccount', $user->id)->with('success', 'Email updated successfully');

    }


    public function updateAddress(Request $request, $userId)
    {
        // Validate input
        $request->validate([
            'address' => 'required|string|max:255',
            'postal_code' => 'required|string|max:20',
            'city' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'country' => 'required|string|max:100',
        ]);

        $user = User::findOrFail($userId);

        // Update user's address information
        $user->update([
            'address' => $request->input('address'),
            'postal_code' => $request->input('postal_code'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'country' => $request->input('country'),
        ]);

        return redirect()->route('seller.ManageAccount', $user->id)->with('success', 'Address updated successfully');
    }

}
