@extends('Components.layout2')

@section('title', 'Add Recipe')

@section('additional-styles')
    <link rel="stylesheet" href="/assets/css/add-recipe.css">
@endsection

@section('content')
<meta name="csrf-token" content="abc123xyz">

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
                        <h4>Ingredients</h4>
                            <div class="ingredient-entry">
                                <textarea id="ingredient" type="text" placeholder="e.g. 1/2 cup soy sauce" class="wsywyg"></textarea>
                                <!-- <button type="button" class="remove-ingredient-btn">Remove Ingredient</button> -->
                            </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn">SUBMIT RECIPE</button>
            </form>
        </div>
    </section>
@endsection
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
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
            "outdent",
            "indent", // These buttons are for manual indentation
            "|",
            "undo",
            "redo",
        ],
    })
        .then((editor) => {
            editor.editing.view.change((writer) => {
                writer.setStyle("height", "390px", editor.editing.view.document.getRoot());
                editor.ui.view.element.style.width = "90%";
            });
        })
        .catch((error) => {
            console.error("Error initializing editor:", error);
        });

    // Handle form submission via AJAX
    const form = document.querySelector("form");
    form.addEventListener("submit", async (event) => {
        event.preventDefault(); // Prevent default form submission

        const formData = new FormData(form); // Collect form data
        const ingredientEditor = document.querySelector("#ingredient");

        // Include the ingredients from the editor
        formData.append("ingredients", ingredientEditor.value);

        try {
            const response = await fetch(form.action, {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content,
                },
                body: formData,
            });

            const result = await response.json();

            if (response.ok) {
                alert("Recipe added successfully!");
                console.log(result); // Optional: Handle the result as needed
                form.reset(); // Clear the form after submission
            } else {
                alert("Error adding recipe.");
                console.error(result.errors); // Log validation errors
            }
        } catch (error) {
            console.error("Error submitting form:", error);
            alert("An unexpected error occurred.");
        }
    });
});
</script>