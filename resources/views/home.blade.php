@extends('Components.layout')

@section('additional-styles')
<link rel="stylesheet" href="/assets/css/home.css">
@endsection

@section('content')
        <!--WELCOME SECTION-->
        <section id="welcome-section">
            <div class="welcome-container">
                <img src="/assets/images/welcome.jpg" alt="welcome image">
                    <div class="text-container cute-font">
                        <h2>Join PICKK Recipe!</h2>
                        <p>Your Go-To Platform for Tried-and-True Recipes</p>
                        <a href="/sign-up" class="button1">TRY IT FOR FREE</a>
                    </div>
            </div>
        </section>
        <!--END OF WELCOME SECTION-->

        <!--SECTION OF GET TO KNOW PICKK-->
        <section id="about-section">
            <div class="about-container">
                    <div class="about-text-container">
                        <h2 style="color: #d13469;">About PICKK Recipe!</h2>
                        <p><b>PICKK Recipe</b> is a filipino recipe sharing site where food lovers can post recipes from anywhere on the web. Use it to discover a new favorite food blog—or figure out what's for dinner tonight.</p><br>
                        <p>To save and share content, <a href="/sign-up" class="see-more">create a account</a> and start posting today.</p>
                        
                    </div>
            </div>
    
            <div class="image-container">
                <img src="/assets/images/filipino-foods.jpg" alt="Right Image">
            </div>
        </section>
        <!--END SECTION OF GET TO KNOW PICKK-->

        <!--EXPLORE SECTION-->
            <section id="latestPICKK-section">
                <div class="latest-container">
                    <div class="title">
                        <h2>Latest PICKK Recipe</h2>
                        <a href="/menu" class="see-more">See more &gt;&gt;&gt;</a>
                    </div>

                    <div class="home-wrapper">    
                        <div class="home-card">
                            <img src="/assets/images/adobo.jpg">
                            <div class="info">
                                <h3>Adobo</h3>
                            </div>
                        </div>

                        <div class="home-card">
                            <img src="/assets/images/caldereta.jpg">
                            <div class="info">
                                <h3>Caldereta</h3>
                            </div>
                        </div>

                        <div class="home-card">
                            <img src="/assets/images/bicol-express.jpg">
                            <div class="info">
                                <h3>Bicol Express</h3>
                            </div>
                        </div>

                        <div class="home-card">
                            <img src="/assets/images/kare-kare.jpg">
                            <div class="info">
                                <h3>Kare-kare</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!--END OF EXPLORE SECTION-->

        <!--CELEBRATE PICKK SECTION-->
        <section id="celebrate-section">
            <div class="celebrate-container">
                <img src="/assets/images/celebrate.jpg" alt="celebrate image">
                    <div class="celeb-text-container">
                        <h2>Welcoming PICKK Recipe!</h2>
                        <p>Celebrate with us by throwing a fantastic party! Check out our article to explore recipes perfect for any occasion.</p>
                        <a href="/menu" class="button2">THROW A PARTY</a>
                    </div>
            </div>
        </section>
        <!--END OF CELEBRATE PICKK SECTION-->

        <!--SECTION OF DISCOVER PICKK-->
         <section id="discover-section">

            <div class="image-container">
                <img src="/assets/images/discover.jpg" alt="Left Image">
            </div>

            <div class="discover-container">
                    <div class="discover-text-container">
                        <h2 style="color: #d13469;">Discover Personalized Filipino Recipes with PICKK Recipe</h2>
                        <p>PICKK Recipe is cooking up something special! The platform learns your tastes, preferences, and cooking habits, 
                            offering personalized recipe recommendations. Whether you're craving a classic Filipino dish or something new, 
                            PICKK Recipe suggests recipes tailored to your flavor profile. From comforting favorites to exciting culinary surprises, 
                            explore dishes that match your mood and satisfy your cravings. Get started today and discover meals that are perfect for you!</p>  
                            <a href="/menu" class="button3">GET STARTED</a>      
                    </div>
            </div>
        </section>
        <!--END SECTION OF DISCOVER PICKK-->

        <!--SECTION OF CREATE RECIPE WITH PICKK-->
         <section id="discover-section">

            <div class="discover-container">
                    <div class="discover-text-container">
                        <h2 style="color: #d13469;">NEW: Share your Created Recipes!</h2>
                        <p>We know you love creating your own delicious Filipino dishes or modifying recipes to suit your taste. Now, there's even better 
                            news: You can share your culinary creations with friends and family through your favorite social media platforms! Whether you’ve 
                            put your unique spin on a classic recipe or made something entirely new, spreading the joy of cooking has never been easier. 
                            Share your recipes today and inspire others to cook up something special!</p>  
                            <a href="/sign-up" class="button3">CREATE AND SHARE TODAY</a>      
                    </div>
            </div>

            <div class="image-container">
                <img src="/assets/images/create-recipe.jpg" alt="Left Image">
            </div>

        </section>
        <!--END SECTION OF CREATE RECIPE WITH PICKK-->

        <!--SECTION OF DISCOVER PICKK-->
         <section id="discover-section">

            <div class="image-container">
                <img src="/assets/images/trending.jpg" alt="Left Image">
            </div>

            <div class="discover-container">
                    <div class="discover-text-container">
                        <h2 style="color: #d13469;">NEW: Discover Trending Filipino Recipes!</h2>
                        <p>Stay on top of the latest Filipino food trends with PICKK Recipe! Now, you can explore a curated collection of trending recipes, 
                            from modern twists on traditional dishes to new flavor combinations that everyone is talking about. Whether you’re looking to try 
                            something new or recreate the hottest dish in Filipino cuisine, you’ll find fresh inspiration to fuel your culinary adventures. 
                            Don’t miss out on what’s cooking – check out the trending recipes today!</p>  
                            <a href="/menu" class="button3">CHECK OUT</a>      
                    </div>
            </div>
        </section>
        <!--END SECTION OF DISCOVER PICKK-->

        <!--EXPLORE PICKK SECTION-->
        <section id="celebrate-section">
            <div class="celebrate-container">
                <img src="/assets/images/explore.jpg" alt="explore image">
                    <div class="celeb-text-container">
                        <h2>Explore all our Filipino Recipes</h2>
                        <p>Discover all PICKK's Recipe has to offer, with over 500+ tested recipes all with innovative Guided Cooking functionality.</p>
                        <a href="/menu" class="button2">DISCOVER</a>
                    </div>
            </div>
        </section>
        <!--END OF CELEBRATE PICKK SECTION-->
@endsection
