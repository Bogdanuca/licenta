const recipes = window.recipesFromBlade || [];
let currentIndex = 0;

function updateCard() {
    const recipe = recipes[currentIndex];
    document.getElementById('recipe-image').src = '/' + recipe.image_path;
    document.getElementById('recipe-title').textContent = recipe.title;
    document.getElementById('recipe-description').textContent = recipe.description;
    document.getElementById('recipe-link').href = '/recipe/' + recipe.slug;
}

function showNextRecipe() {
    currentIndex = (currentIndex + 1) % recipes.length;
    updateCard();
}

window.onload = updateCard;
