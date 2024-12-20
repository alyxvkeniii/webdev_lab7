<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Recipe;

class AdminDashboardController extends Controller
{
    public function index()
    {
        // Check if the user is authenticated
        $user = Auth::user();
    
        // Check if the user is an admin (role 1)
        if ($user && $user->role == 1) {
            // Fetch all users and recipes to display in the admin dashboard
            $users = User::all();
            $recipes = Recipe::all();
    
            // Pass the authenticated user, users, and recipes to the admin view
            return view('admin', compact('user', 'users', 'recipes')); // Ensure 'admin' matches your Blade file name
        }
    
        // If not admin, redirect to the regular user dashboard
        return redirect()->route('dashboard');
    }

    public function approvePost($id)
    {
        // Find the recipe by ID and approve it
        $recipe = Recipe::findOrFail($id);
        $recipe->status = 'approved';
        $recipe->save();

        return redirect()->route('admin')->with('success', 'Recipe approved successfully!');
    }

    public function deletePost($id)
    {
        // Find the recipe by ID and delete it
        $recipe = Recipe::findOrFail($id);
        $recipe->delete();

        return redirect()->route('admin')->with('success', 'Recipe deleted successfully!');
    }
}