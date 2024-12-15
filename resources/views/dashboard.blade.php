@extends('Components.layout2')

@section('additional-styles')
<link rel="stylesheet" href="/assets/css/dashboard.css">
@endsection

@section('content')
        <!--WELCOME SECTION-->
        <section id="welcome-section">
            <div class="welcome-container">
                <img src="/assets/images/welcome.jpg" alt="welcome image">
                <div class="text-container cute-font">
                    <h2>{{ $welcomeSection['title'] }}</h2>
                    <p>{{ $welcomeSection['subtitle'] }}</p>
                    <br>
                    <div class="search-container">
                        <input type="text" placeholder="{{ $welcomeSection['searchPlaceholder'] }}" class="search-input">
                        <button class="search-button">Search</button>
                    </div>
                </div>
            </div>
        </section>
    <!--END OF WELCOME SECTION-->

    <!--SECTION OF GET TO KNOW PICKK-->
            <section id="about-section">
                <div class="about-container">
                    <div class="about-text-container">
                        <h2 style="color: #d13469;">{{ $aboutSection['title'] }}</h2>
                        <p><b>PICKK Recipe</b> is a Filipino recipe sharing site where food lovers can post recipes from anywhere on the web. Use it to discover a new favorite food blog—or figure out what's for dinner tonight.</p><br>
                        <p>{{ $aboutSection['cta'] }} <a href="{{ $aboutSection['linkUrl'] }}" class="see-more">{{ $aboutSection['linkText'] }}</a> and start posting today.</p>
                    </div>
                </div>

                <div class="image-container">
                    <img src="/assets/images/{{ $aboutSection['image'] }}" alt="{{ $aboutSection['altText'] }}">
                </div>
            </section>
    <!--END SECTION OF GET TO KNOW PICKK-->

           <!--EXPLORE SECTION-->
           <section id="latestPICKK-section">
            <div class="latest-container">
                <div class="title">
                    <h2>Latest PICKK Recipe</h2>
                    <a href="/menu2" class="see-more">See more &gt;&gt;&gt;</a>
                </div>

                <div class="home-wrapper">    
                    @foreach ($latestRecipes as $recipe)
                        <div class="home-card">
                            <img src="/assets/images/{{ $recipe['image'] }}" alt="{{ $recipe['name'] }}">
                            <div class="info">
                                <h3>{{ $recipe['name'] }}</h3>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!--END OF EXPLORE SECTION-->

        <!-- CELEBRATE PICKK SECTION -->
        <section id="celebrate-section">
            <div class="celebrate-container">
                <img src="/assets/images/{{ $celebrateSection['image'] }}" alt="{{ $celebrateSection['altText'] }} image">
                <div class="celeb-text-container">
                    <h2>{{ $celebrateSection['title'] }}</h2>
                    <p>{{ $celebrateSection['description'] }}</p>
                    <a href="{{ $celebrateSection['link'] }}" class="button2">{{ $celebrateSection['buttonText'] }}</a>
                </div>
            </div>
        </section>
        <!-- END OF CELEBRATE PICKK SECTION -->

        <!-- SECTION OF DISCOVER PICKK -->
            <section id="discover-section">

            <div class="image-container">
                <img src="/assets/images/{{ $discoverSection['image'] }}" alt="{{ $discoverSection['altText'] }} image">
            </div>

            <div class="discover-container">
                <div class="discover-text-container">
                    <h2 style="color: #d13469;">{{ $discoverSection['title'] }}</h2>
                    <p>{{ $discoverSection['description'] }}</p>  
                    <a href="{{ $discoverSection['link'] }}" class="button3">{{ $discoverSection['buttonText'] }}</a>      
                </div>
            </div>

            </section>
        <!-- END OF DISCOVER PICKK SECTION -->
        <!-- SECTION OF CREATE RECIPE WITH PICKK -->
        <section id="create-recipe-section">
            <div class="create-recipe-container">
                <div class="create-recipe-text-container">
                    <h2 style="color: #d13469;">{{ $createRecipeSection['title'] }}</h2>
                    <p>{{ $createRecipeSection['description'] }}</p>
                    <a href="{{ $createRecipeSection['link'] }}" class="button3">{{ $createRecipeSection['buttonText'] }}</a>
                </div>
            </div>

            <div class="image-container">
            <img src="/assets/images/{{ $createRecipeSection['image'] }}" alt="{{ $createRecipeSection['altText'] }}" class="move-left-image">
            </div>
        </section>
        <!-- END OF CREATE RECIPE WITH PICKK SECTION -->

        <!-- SECTION OF DISCOVER PICKK -->
        <section id="discover-section">

        <div class="image-container">
            <img src="/assets/images/{{ $discoverTrendingSection['image'] }}" alt="{{ $discoverTrendingSection['altText'] }}">
        </div>

        <div class="discover-container">
            <div class="discover-text-container">
                <h2 style="color: #d13469;">{{ $discoverTrendingSection['title'] }}</h2>
                <p>{{ $discoverTrendingSection['description'] }}</p>  
                <a href="{{ $discoverTrendingSection['link'] }}" class="button3">{{ $discoverTrendingSection['buttonText'] }}</a>      
            </div>
        </div>

        </section>
        <!-- END OF DISCOVER PICKK SECTION -->
        <!-- EXPLORE PICKK SECTION -->
        <section id="celebrate-section">
            <div class="celebrate-container">
                <img src="/assets/images/{{ $explorePickkSection['image'] }}" alt="{{ $explorePickkSection['altText'] }}">
                <div class="celeb-text-container">
                    <h2>{{ $explorePickkSection['title'] }}</h2>
                    <p>{{ $explorePickkSection['description'] }}</p>
                    <a href="{{ $explorePickkSection['link'] }}" class="button2">{{ $explorePickkSection['buttonText'] }}</a>
                </div>
            </div>
        </section>

        <!--END OF CELEBRATE PICKK SECTION-->
@endsection
