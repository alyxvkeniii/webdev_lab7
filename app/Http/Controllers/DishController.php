<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;



class DishController extends Controller
{
    public function showRecipe($recipeId)
    {
        // Query the database using Eloquent or Query Builder
        $recipe = DB::table('recipes') // Replace 'your_table_name' with the actual table name
                    ->where('id', $recipeId)
                    ->first();

        // Check if recipe exists
        if (!$recipe) {
            abort(404, 'Recipe not found');
        }

        $comments = DB::table('comments')
        ->join('users', 'comments.user_id', '=', 'users.id')
        ->select('users.username as username', 'comments.comment', 'comments.created_at')
        ->where('comments.recipe_id', $recipeId)
        ->orderBy('comments.created_at', 'desc')
        ->get();
    

        // Pass the recipe data to the Blade view
        return view('dish', compact('recipe','comments'));
    }

    public function store(Request $request)
    {
        try {
            // Validate the incoming request
            $validated = $request->validate([
                'recipe_id' => 'required|integer|exists:recipes,id',
                'comment' => 'required|string|max:65535',
            ]);
    
            // Create a new comment
            Comment::create([
                'recipe_id' => $validated['recipe_id'],
                'user_id' => Auth::id(),
                'comment' => $validated['comment'],
            ]);
    
            // Flash success message to the session
            session()->flash('success', 'Comment successfully added!');
    
            // Return the view (or redirect to the current page if needed)
            return back();
        } catch (\Exception $e) {
            // Flash error message to the session
            session()->flash('error', 'Failed to add comment. Please try again.');
    
            // Return the view (or redirect to the current page if needed)
            return back();
        }
    }
    

    
}
