@extends('Components.layout2')

@section('additional-styles')
<link rel="stylesheet" href="/assets/css/menu2.css">
@endsection

@section('content')

    <!--WELCOME SECTION-->
        <section id="welcome-section">
            <div class="welcome-container">
                <img src="/assets/images/welcome.jpg" alt="welcome image">
                    <div class="text-container cute-font">
                        <h2>MENU</h2>
                        <p>Your Go-To Platform for Tried-and-True Recipes</p>
                        <a href="/my-recipe" class="button1">TRY IT FOR FREE</a>
                        <br>
                        <div class="search-container">
                          <input type="text" placeholder="Search Recipe..." class="search-input">
                          <button class="search-button">Search</button>
                      </div>
                    </div>
                </div>
            </div>
        </section>
        
        <br>
        <section id="headline-section">
              <h2>Top Notch Recipes</h2>
                <p> Savor the Flavors of the Philippines – One Dish, One Region, One Story at a Time.</p>
        </section>  

    <!--END OF WELCOME SECTION-->
    
    <br>

    <!--FOOD CATEGORIES  SECTION-->
        <div class="food-categories">
            <div class="category" onclick="showFoods('appetizers')">
                <img src="/assets/images/appetizers.jpg" alt="Appetizers">
                <span>Appetizers</span>
            </div>
            <div class="category" onclick="showFoods('soups')">
                <img src="/assets/images/soups.jpg" alt="Soups">
                <span>Soups</span>
            </div>
            <div class="category" onclick="showFoods('main-courses')">
                <img src="/assets/images/maincourses.jpg" alt="Main Courses">
                <span>Main Courses</span>
            </div>
            <div class="category" onclick="showFoods('side-dishes')">
                <img src="/assets/images/sidedish.jpg" alt="Side Dishes">
                <span>Side Dishes</span>
            </div>
            <div class="category" onclick="showFoods('desserts')">
                <img src="/assets/images/desserts.jpg" alt="Desserts">
                <span>Desserts</span>
            </div>
            <div class="category" onclick="showFoods('beverages')">
                <img src="/assets/images/beverages.jpg" alt="Beverages">
                <span>Beverages</span>
            </div>
            <div class="category" onclick="showFoods('breakfast')">
                <img src="/assets/images/bfast.jpg" alt="Breakfast">
                <span>Breakfast</span>
            </div>
        </div>
        <div id="food-cards" class="food-cards"></div>
            <div class="buttons">
                <button onclick="alert('Make Recipes')">Start to Make Your Own Recipe</button>
                <button onclick="alert('Download Your Favorite Recipes')">Download Your Favorite Recipes</button>
            </div>
        </div>
    <!--END OF FOOD CATEGORIES  SECTION-->

    <br>

    <!--JAVASCRIPT-->
    <script>
        const foodData = {
            appetizers: [
                { name: "Lumpiang Shanghai (Spring Rolls)", img: "/assets/images/lumpia.jpg" }, 
                { name: "Chicharon (Fried Pork Rinds)", img: "/assets/images/chicharon.jpg" },
                { name: "Tokwa't Baboy (Tofu and Pork)", img: "/assets/images/tofu.jpg" },
                { name: "Kilawin (Ceviche)", img: "/assets/images/kilawin.jpg" },
                { name: "Dynamite (Stuffed Chili Peppers)", img: "/assets/images/dyn.jpg" },
                { name: "Cheese Sticks", img: "/assets/images/chz.jpg" },
                { name: "Empanada", img: "/assets/images/emp.jpg" },
                { name: "Calamares (Fried Squid)", img: "/assets/images/cal.jpg" },
                { name: "Fish Balls", img: "/assets/images/fishb.jpg" },
                { name: "Ukoy (Shrimp Fritters)", img: "/assets/images/ok.jpg" }
            ],
            
            soups: [
                { name: "Sinigang (Sour Soup with Pork or Shrimp)", img: "/assets/images/sinigang.jpg" },
                { name: "Bulalo (Beef Shank Soup)", img: "/assets/images/bulalo.jpg" },
                { name: "Tinola (Chicken Ginger Soup)", img: "/assets/images/tnl.jpg" },
                { name: "Nilaga (Boiled Beef Soup)", img: "/assets/images/nlg.jpg" },
                { name: "Molo Soup (Pork Dumpling Soup)", img: "/assets/images/molo.jpg" },
                { name: "Lomi (Thick Noodle Soup)", img: "/assets/images/lml.jpg" },
                { name: "Batchoy (Pork and Noodle Soup)", img: "/assets/images/btchy.jpg" },
                { name: "La Paz Batchoy (Iloilo's Special Noodle Soup)", img: "/assets/images/lpzB.jpg" },
                { name: "KBL (Kadios, Baboy, Langka)", img: "/assets/images/kbl.jpg" },
                { name: "Misua (Misua Noodle Soup)", img: "/assets/images/missu.jpg" }
            ],
  
            'main-courses': [
                { name: "Adobo (Marinated Meat)", img: "/assets/images/adobo.jpg", href: "{{ route('adobo') }}" },
                { name: "Kare-Kare (Peanut Stew)", img: "/assets/images/krkr.jpg" },
                { name: "Lechon (Roast Pig)", img: "/assets/images/lchn.jpg" },
                { name: "Bistek Tagalog (Beefsteak)", img: "/assets/images/bstk.jpg" },
                { name: "Caldereta (Stew with Tomato Sauce)", img: "/assets/images/calds.jpg" },
                { name: "Mechado (Beef Stew)", img: "/assets/images/mechu.jpg" },
                { name: "Pinakbet (Mixed Vegetables with Shrimp Paste)", img: "/assets/images/kbt.jpg" },
                { name: "Inihaw na Liempo (Grilled Pork Belly)", img: "/assets/images/liemps.jpg" },
                { name: "Sisig (Sizzling Pork)", img: "/assets/images/sigsig.jpg" },
                { name: "Chicken Inasal (Grilled Chicken)", img: "/assets/images/inasal.jpg" }
            ],
    
            'side-dishes': [ 
                { name: "Atchara (Pickled Papaya)", img: "/assets/images/atch.jpg" },      
                { name: "Ensaladang Talong (Eggplant Salad)", img: "/assets/images/egsal.jpg" },       
                { name: "Burong Mangga (Pickled Mango)", img: "/assets/images/mango.jpg" },      
                { name: "Salted Egg and Tomato", img: "/assets/images/saltomato.jpg" },        
                { name: "Laing (Taro Leaves in Coconut Milk)", img: "/assets/images/laing.jpg" },        
                { name: "Gising-Gising (Spicy Green Beans)", img: "/assets/images/wakey.jpg" },        
                { name: "Adobong Kangkong (Water Spinach Adobo)", img: "/assets/images/adobskang.jpg" },        
                { name: "Crispy Kangkong (Fried Water Spinach)", img: "/assets/images/crispkang.jpg" },        
                { name: "Lumpiang Sariwa (Fresh Spring Rolls)", img: "/assets/images/fresh.jpg" },        
                { name: "Pritong Talong (Fried Eggplant)", img: "/assets/images/ome.jpg" }
    
            ],
    
            desserts: [
                { name: "Halo-Halo (Mixed Shaved Ice Dessert)", img: "/assets/images/mixmix.jpg" },        
                { name: "Leche Flan (Caramel Custard)", img: "/assets/images/lechugas.jpg" },        
                { name: "Bibingka (Rice Cake)", img: "/assets/images/bingks.jpg" },        
                { name: "Turon (Banana Spring Rolls)", img: "/assets/images/rontu.jpg" },        
                { name: "Puto (Steamed Rice Cake)", img: "/assets/images/putu.jpg" },        
                { name: "Cassava Cake", img: "/assets/images/cascake.jpg" },        
                { name: "Buko Pandan (Young Coconut with Pandan Jelly)", img: "/assets/images/bukpan.jpg" },        
                { name: "Suman (Sticky Rice in Banana Leaves)", img: "/assets/images/sum.jpg" },       
                { name: "Sapin-Sapin (Layered Rice Cake)", img: "/assets/images/sap.jpg" },        
                { name: "Maja Blanca (Coconut Milk Pudding)", img: "/assets/images/maj.jpg" }
            ],
    
            beverages: [
                { name: "Buko Juice (Coconut Juice)", img: "/assets/images/bukjo.jpg" },        
                { name: "Calamansi Juice", img: "/assets/images/caljo.jpg" },        
                { name: "Sago't Gulaman (Tapioca and Gelatin Drink)", img: "/assets/images/sagjo.jpg" },        
                { name: "Taho (Silken Tofu with Syrup)", img: "/assets/images/tajo.jpg" },        
                { name: "Salabat (Ginger Tea)", img: "/assets/images/salbs.jpg" },        
                { name: "Mango Shake", img: "/assets/images/mangsh.jpg" },        
                { name: "Pineapple Juice", img: "/assets/images/pineju.jpg" },        
                { name: "Pandan Juice", img: "/assets/images/panjo.jpg" },        
                { name: "Tsokolate (Filipino Hot Chocolate)", img: "/assets/images/chikolet.jpg" }
            ],
    
            breakfast: [      
                { name: "Tapsilog (Beef Tapa, Egg, and Rice)", img: "/assets/images/tapsi.jpg" },        
                { name: "Longsilog (Longganisa, Egg, and Rice)", img: "/assets/images/lonsi.jpg" },        
                { name: "Tocilog (Tocino, Egg, and Rice)", img: "/assets/images/toci.jpg" },        
                { name: "Daingsilog (Dried Fish, Egg, and Rice)", img: "/assets/images/dayngs.jpg" },        
                { name: "Champorado (Chocolate Rice Porridge)", img: "/assets/images/champ.jpg" },        
                { name: "Arroz Caldo (Chicken Rice Porridge)", img: "/assets/images/lugaws.jpg" },        
                { name: "Pandesal (Bread Rolls)", img: "/assets/images/abs.jpg" },        
                { name: "Tortang Talong (Eggplant Omelette)", img: "/assets/images/omel.jpg" },        
                { name: "Bangsilog (Bangus, Egg, and Rice)", img: "/assets/images/bangs.jpg" },        
                { name: "Corned Beef and Egg", img: "/assets/images/red.jpg" }    
            ]
        };

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
                    <a href="${food.href}" class="view-recipe">View Recipe</a>
                </div>
            `;
            foodCards.appendChild(card);
        });
        }
    </script>

    <!--END OF JAVASCRIPT-->

@endsection