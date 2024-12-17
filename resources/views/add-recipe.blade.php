@extends('Components.layout2')

@section('title', 'Add Recipe')

@section('additional-styles')
    <link rel="stylesheet" href="/assets/css/add-recipe.css">
@endsection

@section('content')
    <div class="wrapper">
    
    <section id="header-text">
        <div class="header-add-recipe-text">
            <h1><button class="add-btn">+</button>ADD RECIPE</h1>
            <p>Uploading personal recipes is easy! Add yours to your favorites, share with friends, family, or the PICKK'S Recipe community.</p>
        </div>
    </section>

    <section id="recipe-form">
        <div class="form-container">
            <form method="POST" action="{{ route('my-recipe') }}">
                @csrf

                <!-- Recipe Input -->
                <div class="recipe-details">
                    <!-- Left Column for Recipe Title and Description -->
                    <div class="left-section">
                        <div class="form-group">
                            <label for="recipetitle"><strong>Recipe Title</strong></label>
                            <input type="text" id="recipetitle" name="recipetitle" placeholder="Give your recipe a title" required>
                        </div>

                        <div class="form-group">
                            <label for="description"><strong>Description</strong></label>
                            <textarea id="description" name="description" placeholder="Share the story behind your recipe and what makes it special." rows="5"></textarea>
                        </div>
                    </div>

                    <!-- Right Column for Photo Upload -->
                    <div class="right-section">
                        <label for="photo"><strong>Photo (optional)</strong></label>
                        <div class="photo-upload">
                            <input type="file" id="photo" name="photo" accept="image/png, image/jpeg">
                            <div class="photo-preview">
                                <img src="/images/placeholder-photo.png" alt="Your photo here">
                            </div>
                            <p>Use JPEG or PNG. Must be at least 960 x 960. Max file size: 30MB</p>
                        </div>
                    </div>
                </div>

                <!-- Ingredients Input -->
                <div class="ingredients-section">
                    <h3>Ingredients</h3>
                    <p>Enter one ingredient per line. Include the quantity (i.e. tablespoons, cloves) and any special preparation (i.e. minced, crushed, chopped). Use optional headers to organize the different parts of the recipe (i.e. Marinade, Sauce, Toppings).</p>

                    <div class="ingredients-inputs">
                        <h4>Marinade</h4>
                            <div class="ingredient-entry">
                                <textarea id="ingredient" type="text" placeholder="e.g. 1/2 cup soy sauce"></textarea>
                                <button type="button" class="remove-ingredient-btn">Remove Ingredient</button>
                            </div>
                            <div class="ingredient-entry">
                                <input type="text" placeholder="e.g. 1/4 cup vinegar">
                                <button type="button" class="remove-ingredient-btn">Remove Ingredient</button>
                            </div>
                            <div class="ingredient-entry">
                                <input type="text" placeholder="e.g. 4 cloves garlic, crushed">
                                <button type="button" class="remove-ingredient-btn">Remove Ingredient</button>
                            </div>

                        <h4>Main Ingredients</h4>
                            <div class="ingredient-entry">
                                <input type="text" placeholder="e.g. 1 kg chicken, cut into pieces">
                                <button type="button" class="remove-ingredient-btn">Remove Ingredient</button>
                            </div>
                            <div class="ingredient-entry">
                                <input type="text" placeholder="e.g. 1 bay leaf">
                                <button type="button" class="remove-ingredient-btn">Remove Ingredient</button>
                            </div>
                            <div class="ingredient-entry">
                                <input type="text" placeholder="e.g. 1 tablespoon whole peppercorns">
                                <button type="button" class="remove-ingredient-btn">Remove Ingredient</button>
                            </div>

                        <h4>Optional Toppings</h4>
                            <div class="ingredient-entry">
                                <input type="text" placeholder="e.g. 2 boiled eggs">
                                <button type="button" class="remove-ingredient-btn">Remove Ingredient</button>
                            </div>
                            <div class="ingredient-entry">
                                <input type="text" placeholder="e.g. Fried garlic bits">
                                <button type="button" class="remove-ingredient-btn">Remove Ingredient</button>
                            </div>
                    </div>

                    <!-- Buttons to Add More Ingredients or Headers -->
                    <div class="ingredient-buttons">
                        <button type="button" class="add-ingredient-btn">+ ADD INGREDIENT</button>
                        <button type="button" class="add-header-btn">+ ADD HEADER</button>
                    </div>
                </div>


                <!-- Directions Input Section -->
                <div class="directions-section">
                    <h3>Directions</h3>
                    <p>Provide step-by-step instructions on how to prepare your recipe.</p>
    
                    <!-- Directions Textarea -->
                    <textarea id="directions" name="directions" placeholder="Enter directions here..." rows="6"></textarea>

                    <!-- Add More Directions Button -->
                    <div class="directions-buttons">
                        <button type="button" class="add-direction-btn">+ ADD STEP</button>
                    </div>
                </div>

                <!-- Choose Categories -->


                <!-- Submit Button -->
                <button type="submit" class="btn">SUBMIT RECIPE</button>
            </form>
        </div>
    </section>
@endsection

<script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>
<script>
document.addEventListener("DOMContentLoaded", () => {

    ClassicEditor.create(document.querySelector("#ingredient"), {
        toolbar: [
            "heading",
            "|",
            "bold",
            "italic",
            "|",
            "bulletedList",
            "numberedList",
            "|",
            "blockQuote",
            "|",
            "undo",
            "redo",
        ],
    })
        .then((editor) => {
            editor.editing.view.change((writer) => {
                writer.setStyle("height", "190px", editor.editing.view.document.getRoot());
                editor.ui.view.element.style.width = "98%";
            });
        })
        .catch((error) => {
            console.error("Error initializing description editor:", error);
        });
    });
</script>