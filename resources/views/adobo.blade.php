@extends('Components.layout2')

@section('additional-styles')
<link rel="stylesheet" href="/assets/css/dish.css">
@endsection

@section('content')
<section id="recipe-container">
    <div class="card recipe-card">
        <div class="image-container">
            <img src="assets/images/adobo.jpg" class="image" alt="Adobo">
            <div class="favorite-icon" data-is-favorite="false">
                <i class="fas fa-heart"></i>
            </div>
            <div class="rating-stars">
                <span class="rating-star" data-value="1">&#9733;</span>
                <span class="rating-star" data-value="2">&#9733;</span>
                <span class="rating-star" data-value="3">&#9733;</span>
                <span class="rating-star" data-value="4">&#9733;</span>
                <span class="rating-star" data-value="5">&#9733;</span>
            </div>
        </div>
    </div>
        <h2 class="text-left">Chicken Adobo</h2>
        <div class="contentsss">
            <p class="description">
                Adobo is a classic Filipino dish made with chicken or pork simmered in a flavorful blend of soy sauce, vinegar, garlic, and spices. It's savory, slightly tangy, and perfect with steamed rice.
            </p>
            <p class="category">
                <strong>Category:</strong> Main Dish
            </p>
            <h2>Ingredients:</h2>
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
        <h2>Instructions:</h2>
        <div class="instructions">
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
        <p class="serving"><strong>Serving:</strong> 4-6 people</p>
        <p class="time"><strong>Cooking Time:</strong> 1 hour</p>
    </div>
</section>

<!-- comment Section -->
<div class="comment-container">
        <div class="head"><h1>Let us know your feedback</h1></div>
        <div class="text"><p>We are happy to hear from you! </p></div>
        <div><span id="comment">0</span> Comments</div>
          <div class="comments"></div>
            <div class="commentbox">
            <img src="./img/user1.png" alt="img">
            <div class="content">
                <h2>Comment as: </h2>
                <input type="text" value="Anonymous" class="user">

                <div class="commentinput">
                    <input type="text" placeholder="Enter comment" class="usercomment">
                    <div class="buttons">
                        <button type="submit" disabled id="publish">Publish</button>
                        <div class="notify">
                            <input type="checkbox" class="notifyinput"> <span>Notify me</span>
                        </div>
                    </div>
                </div>
                <p class="policy">This is the <a href="">privacy policy</a> and <a href="">Terms of Service</a> apply.</p>
            </div>
        </div>
    </div>


 <!-- comment Section -->


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/js/all.min.js"></script>
<script>
    $(document).ready(function() {
        $('.favorite-icon').click(function() {
            $(this).toggleClass('active');
            const isFavorite = $(this).data('is-favorite');
            $(this).data('is-favorite', !isFavorite);
        });

        $('.rating-star').click(function() {
            const ratingValue = $(this).data('value');
            $('.rating-star').removeClass('active');
            $(this).prevAll().addClass('active');
            $(this).addClass('active');
        });
    });
</script>
<script>

const USERID = {
    name: null,
    identity: null,
    image: null,
    message: null,
    date: null
}

const userComment = document.querySelector(".usercomment");
const publishBtn = document.querySelector("#publish");
const comments = document.querySelector(".comments");
const userName = document.querySelector(".user");
const notify = document.querySelector(".notifyinput");

    userComment.addEventListener("input", e => {
        if(!userComment.value) {
            publishBtn.setAttribute("disabled", "disabled");
            publishBtn.classList.remove("abled")
        }else {
            publishBtn.removeAttribute("disabled");
            publishBtn.classList.add("abled")
        }
    })

    function addPost() {
        if(!userComment.value) return;
        USERID.name = userName.value;
        if(USERID.name === "Anonymous") {
            USERID.identity = false;
            USERID.image = "anonymous.png"
        }else {
            USERID.identity = true;
            USERID.image = "./img/user.png"
        }

        USERID.message = userComment.value;
        USERID.date = new Date().toLocaleString();
        let published = 
        `<div class="parents">
            <img src="${USERID.image}">
            <div>
                <h1>${USERID.name}</h1>
                <p>${USERID.message}</p>
                <div class="engagements"><img src="./img/like.png" id="like"><img src="./img/share.png" alt="img"></div>
                <span class="date">${USERID.date}</span>
            </div>    
        </div>`

        comments.innerHTML += published;
        userComment.value = "";
        publishBtn.classList.remove("abled")

        let commentsNum = document.querySelectorAll(".parents").length;
        document.getElementById("comment").textContent = commentsNum;

    }

    publishBtn.addEventListener("click", addPost);

</script>
@endsection