@extends('Components.layout2')

@section('additional-styles')
<link rel="stylesheet" href="/assets/css/my-recipe.css">
@endsection

@section('content')
    <!--MY RECIPE SECTION-->
    <div class="container">
        <div class="bookmarks-section">
            <div class="image">
                <img src="/assets/images/recipe.png" alt="Recipe illustration">
            </div>
            <div class="text">
                <h1>My Recipes</h1>
                <h2>No recipes yet</h2>
                <p>Want to create a recipe? Just click on the plus sign and select "Add Recipe".</p>
                <a href="/menu2" class="button1">EXPLORE RECIPES</a>
            </div>
        </div>

        <button class="add-btn">+</button>
    </div>
    <!--END OF MY RECIPE SECTION-->
@endsection