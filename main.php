<?php
    $ingredients;

    function getRecipeTitle($query) {
        $apiKey = "32267ae26de746f284d459133d968bcf";

        
        $overviewAPI = "https://api.spoonacular.com/recipes/search?apiKey=" .$apiKey. "&number=1&query=" .$query;
        $jsonFile = file_get_contents($overviewAPI);
        $jsonData = json_decode($jsonFile);

        $id = $jsonData -> results[0] -> id;
        $title = $jsonData -> results[0] -> title;
        $image = $jsonData -> results[0] -> image;
        $imageUrl = $jsonData -> baseUri;
        $prepTime = $jsonData -> results[0] -> readyInMinutes;

        $overview = array();
        $overview["id"] = $id;
        $overview["title"] = $title;
        $overview["image"] = $image;
        $overview["imageUrl"] = $imageUrl;
        $overview["prepTime"] = $prepTime;

        return $overview;
    }

    function getIngredients($id) {
        $apiKey = "32267ae26de746f284d459133d968bcf";

        $ingredientsAPI = "https://api.spoonacular.com/recipes/" .$id. "/ingredientWidget.json?apiKey=" .$apiKey;
        $jsonFile = file_get_contents($ingredientsAPI);
        $jsonData = json_decode($jsonFile);

        $ingredients = $jsonData -> ingredients;
        return $jsonData -> ingredients;
        
    }

    function getSteps($id) {
        $apiKey = "32267ae26de746f284d459133d968bcf";

        $stepsAPI = "https://api.spoonacular.com/recipes/" .$id. "/analyzedInstructions?apiKey=" .$apiKey;
        $jsonFile = file_get_contents($stepsAPI);
        $jsonData = json_decode($jsonFile);
        
        return $jsonData[0] -> steps;
    }

    function getIngredientList() {
        return $ingredients;
    }
?>