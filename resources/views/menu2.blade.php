@extends('Components.layout2')

@section('additional-styles')
<link rel="stylesheet" href="/assets/css/menu.css">
@endsection

@section('content')

    <!--WELCOME SECTION-->
    <section id="welcome-section">
        <div class="welcome-container">
            <img src="{{ $data['welcome']['image'] }}" alt ="welcome image">
            <div class="text-container cute-font">
                <h2>{{ $data['welcome']['title'] }}</h2>
                <p>{{ $data['welcome']['subtitle'] }}</p>
                <br>
                <div class="search-container">
                    <input type="text" placeholder="Search Recipe..." class="search-input">
                    <button class="search-button">Search</button>
                </div>
            </div>
        </div>
    </section>
    
    <br>
    <section id="headline-section">
        <h2>{{ $data['headline']['title'] }}</h2>
        <p>{{ $data['headline']['description'] }}</p>
    </section>  
    <!--END OF WELCOME SECTION-->

    <br>

    <!--FOOD CATEGORIES SECTION-->
    <div class="food-categories">
        @foreach($data['food_categories'] as $category => $info)
            <div class="category" onclick="showFoods('{{ $category }}')">
                <img src="{{ $info['image'] }}" alt="{{ $info['label'] }}">
                <span>{{ $info['label'] }}</span>
            </div>
        @endforeach
    </div>
    <div id="food-cards" class="food-cards"></div>
    <div class="buttons">
        <button onclick="alert('Unlock Recipes')">Unlock Recipes</button>
        <button onclick="alert('Download Your Favorite Recipes')">Download Your Favorite Recipes</button>
    </div>
    <!--END OF FOOD CATEGORIES SECTION-->

    <br>

    <!--JAVASCRIPT-->
    <script>
        const foodData = @json($data['food_data']);

        function showFoods(category) {
            const foodCards = document.getElementById('food-cards');
            foodCards.innerHTML = ''; // Clear previous cards
            foodData[category].forEach(food => {
                const card = document.createElement('div');
                card.className = 'card';
                card.innerHTML = `
                    <img src="${food.img}">
                    <div class="card-content">
                        <h3>${food.name}</h3>
                        <div class="star-rating">★★★★☆</div> <!-- You can customize the rating here -->
                        <button class="view-recipe" onclick="alert('Viewing ${food.name} Recipe')">View Recipe</button>
                    </div>
                `;
                foodCards.appendChild(card);
            });
        }
    </script>
    <!--END OF JAVASCRIPT-->

@endsection
