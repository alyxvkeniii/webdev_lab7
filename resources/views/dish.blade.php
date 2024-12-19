@extends('Components.layout2')

@section('additional-styles')
<link rel="stylesheet" href="/assets/css/dish.css">
@endsection

@section('content')
<!--SECTION OF GET TO KNOW PICKK-->
<section id="about-section">
    <div class="about-container">
        <div class="about-text-container">
            <h2 style="color: #d13469;">ADOBO</h2>
            <p><b>Adobo</b> is a classic Filipino dish made with chicken or pork simmered in a flavorful blend of soy sauce, vinegar, garlic, and spices. It's savory, slightly tangy, and perfect with steamed rice.</p><br>
            <button class="button2">SAVED</button>
        </div>
    </div>

    <div class="image-container">
        <img src="/assets/images/adobo.jpg" alt="Adobo">
    </div>
</section>
<!--END SECTION OF GET TO KNOW PICKK-->

<!--SECTION OF INGREDIENTS and INSTRUCTIONS-->
<section id="ingredients-section">
    <div class="ingredients-container">
        <div class="ingredients-text-container">
            <h2 style="color: #d13469;">Ingredients</h2>
            <ul class="ingredients">
                <li>1 kg chicken or pork, cut into serving pieces</li>
                <li>1/2 cup soy sauce</li>
                <li>1/2 cup vinegar</li>
                <li>1 head garlic, minced</li>
                <li>1 onion, chopped</li>
                <li>2 bay leaves</li>
                <li>1 tsp black peppercorns</li>
                <li>1 cup water</li>
                <li>2 tbsp cooking oil</li>
                <li>Optional: 1 tbsp sugar</li>
            </ul>
        </div>
    </div>

    <div class="ingredients-container">
        <div class="ingredients-text-container">
            <h2 style="color: #d13469;">Instructions</h2>
            <div class="ingredients">
            <ol>
                <li>In a large bowl, marinate the chicken or pork in soy sauce and garlic for at least 30 minutes.</li>
                <li>Heat oil in a pan over medium heat. Sauté onions until translucent.</li>
                <li>Add the marinated meat and cook until lightly browned.</li>
                <li>Add vinegar, bay leaves, and black peppercorns. Let it simmer for 5 minutes without stirring.</li>
                <li>Pour in water and bring to a boil. Lower the heat and let it simmer for 30-40 minutes, or until the meat is tender.</li>
                <li>Adjust seasoning to taste. Add sugar if you prefer a slightly sweet adobo.</li>
                <li>Serve hot with steamed rice. Enjoy!</li>
            </ol>
        </div>
        </div>
    </div>
</section>
<!--END SECTION OF INGREDIENTS and INSTRUCTIONS-->

<!--COMMENTS SECTION OF PICKK-->
<section id="comment-section">
    <div id="comment-container">
        <h3>Add a new comment</h3>
        <textarea placeholder="Type Your Comment"></textarea>
        <p class="login-message">You must be logged in to comment.</p>
        <button class="button2">Post Comment</button>
    </div>
</section>
<!--END OF COMMENTS SECTION OF PICKK-->

<!--EXPLORE PICKK SECTION-->
<section id="celebrate-section">
    <div class="celebrate-container">
        <img src="/assets/images/explore.jpg" alt="Explore Recipes">
        <div class="celeb-text-container">
            <h2>Explore all our Filipino Recipes</h2>
            <p>Discover all PICKK's recipes with over 500+ tested dishes, featuring innovative Guided Cooking functionality.</p>
            <a href="/menu2" class="button2">DISCOVER</a>
        </div>
    </div>
</section>
<!--END OF EXPLORE PICKK SECTION-->
@endsection
