<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $latestRecipes = [
            [
                'name' => 'Adobo',
                'image' => 'adobo.jpg',
                'link' => '/menu2/adobo',
            ],
            [
                'name' => 'Caldereta',
                'image' => 'caldereta.jpg',
                'link' => '/menu2/caldereta',
            ],
            [
                'name' => 'Bicol Express',
                'image' => 'bicol-express.jpg',
                'link' => '/menu2/bicol-express',
            ],
            [
                'name' => 'Kare-kare',
                'image' => 'kare-kare.jpg',
                'link' => '/menu2/kare-kare',
            ],
        ];
    
        $welcomeSection = [
            'title' => 'Welcome to PICKK\'S Recipe',
            'subtitle' => 'What would you like to cook today?',
            'searchPlaceholder' => 'Search Recipe...',
        ];

        $aboutSection = [
            'title' => 'About PICKK Recipe!',
            'siteName' => 'PICKK Recipe',  
            'content' => 'PICKK Recipe is a Filipino recipe sharing site where food lovers can post recipes from anywhere on the web.',
            'cta' => 'To save and', 
            'linkText' => 'share content', 
            'linkUrl' => '/my-recipe',
            'image' => 'filipino-foods.jpg',
            'altText' => 'Right Image',
        ];
        $celebrateSection = [
            'image' => 'celebrate.jpg',
            'altText' => 'celebrate',
            'title' => 'Welcoming PICKK Recipe!',
            'description' => 'Celebrate with us by throwing a fantastic party! Check out our article to explore recipes perfect for any occasion.',
            'link' => '/menu2',
            'buttonText' => 'THROW A PARTY'
        ];
    
        $discoverSection = [
            'image' => 'discover.jpg',
            'altText' => 'discover',
            'title' => 'Discover Personalized Filipino Recipes with PICKK Recipe',
            'description' => 'NEW: Discover Trending Filipino Recipes!
Stay on top of the latest Filipino food trends with PICKK Recipe! Now, you can explore a curated collection of trending recipes, from modern twists on traditional dishes to new flavor combinations that everyone is talking about. Whether you’re looking to try something new or recreate the hottest dish in Filipino cuisine, you’ll find fresh inspiration to fuel your culinary adventures. Don’t miss out on what’s cooking – check out the trending recipes today!',
            'link' => '/menu2',
            'buttonText' => 'GET STARTED'
        ];
    
        $createRecipeSection = [
            'image' => 'create-recipe.jpg',
            'altText' => 'create-recipe',
            'title' => 'NEW: Share your Created Recipes!',
            'description' => 'NEW: Share your Created Recipes!
                             We know you love creating your own delicious Filipino dishes or modifying recipes to suit your taste. Now, theres even better news: You can share your culinary creations with friends and family through your favorite social media platforms! Whether you’ve put your unique spin on a classic 
                             recipe or made something entirely new, spreading the joy of cooking has never been easier. Share your recipes today and inspire others to cook up something special!',
            'link' => '/my-recipe',
            'buttonText' => 'CREATE AND SHARE TODAY'
        ];
    
        $discoverTrendingSection = [
            'image' => 'trending.jpg',
            'altText' => 'trending-recipes',
            'title' => 'NEW: Discover Trending Filipino Recipes!',
            'description' => 'Discover Personalized Filipino Recipes with PICKK Recipe
                              PICKK Recipe is cooking up something special! The platform learns your tastes, preferences, and cooking habits, offering personalized recipe recommendations. Whether youre craving a classic Filipino dish or something new, 
                              PICKK Recipe suggests recipes tailored to your flavor profile. From comforting favorites to exciting culinary surprises, explore dishes that match your mood and satisfy your cravings. Get started today and discover meals that are perfect for you!',
            'link' => '/menu2',
            'buttonText' => 'CHECK OUT'
        ];
    
        $explorePickkSection = [
            'image' => 'explore.jpg',
            'altText' => 'explore-recipes',
            'title' => 'Explore all our Filipino Recipes',
            'description' => 'Discover all PICKK\'s Recipe has to offer, with over 500+ tested recipes all with innovative Guided Cooking functionality.',
            'link' => '/menu2',
            'buttonText' => 'DISCOVER'
        ];
    
        return view('dashboard', compact(
            'latestRecipes',
            'celebrateSection',
            'discoverSection',
            'createRecipeSection',
            'discoverTrendingSection',
            'explorePickkSection',
            'welcomeSection',
            'aboutSection'
        ));
    }
}

