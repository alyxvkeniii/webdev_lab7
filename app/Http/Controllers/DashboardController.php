<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the appropriate dashboard with data based on the user's role.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    /**
     * Show the user dashboard with data.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
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
            'buttonText' => 'THROW A PARTY',
        ];
    
        $discoverSection = [
            'image' => 'discover.jpg',
            'altText' => 'discover',
            'title' => 'Discover Personalized Filipino Recipes with PICKK Recipe',
            'description' => 'Stay on top of the latest Filipino food trends with PICKK Recipe! Explore trending recipes and find new inspirations.',
            'link' => '/menu2',
            'buttonText' => 'GET STARTED',
        ];
    
        $createRecipeSection = [
            'image' => 'create-recipe.jpg',
            'altText' => 'create-recipe',
            'title' => 'Share your Created Recipes!',
            'description' => 'Spread the joy of cooking by sharing your own recipes and culinary creations!',
            'link' => '/my-recipe',
            'buttonText' => 'CREATE AND SHARE TODAY',
        ];
    
        $discoverTrendingSection = [
            'image' => 'trending.jpg',
            'altText' => 'trending-recipes',
            'title' => 'Discover Trending Filipino Recipes!',
            'description' => 'Get personalized recipe suggestions tailored to your taste and preferences!',
            'link' => '/menu2',
            'buttonText' => 'CHECK OUT',
        ];
    
        $explorePickkSection = [
            'image' => 'explore.jpg',
            'altText' => 'explore-recipes',
            'title' => 'Explore all our Filipino Recipes',
            'description' => 'Discover over 500+ tested recipes with innovative guided cooking functionality.',
            'link' => '/menu2',
            'buttonText' => 'DISCOVER',
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