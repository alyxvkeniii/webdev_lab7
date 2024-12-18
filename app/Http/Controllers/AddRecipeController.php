<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AddRecipeController extends Controller
{
    public function store(Request $request)
    {
        // Validate incoming data
        $validator = Validator::make($request->all(), [
            'recipetitle' => 'required|string|max:255',
            'description' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:30720', // 30MB
            'ingredients' => 'required|string', // Handle ingredients as a string
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        // Handle photo upload
        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('recipe_photos', 'public');
        }

        // Save recipe
        $recipe = Recipe::create([
            'title' => $request->recipetitle,
            'description' => $request->description,
            'user_id' => Auth::id(),
            'image' => $photoPath,
            'instructions' => $request->ingredients, // Store ingredients as plain text
            'ratings' => null,
            'categories' => $request->categories ?? null,
            'status' => 'pending',
        ]);

        return response()->json(['message' => 'Recipe added successfully!', 'recipe' => $recipe], 201);
    }
}

