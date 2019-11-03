<?php
    $ingredients;

    function getRecipeTitle($query) {
        $apiKey = "ea823db66af842d9a8287e8e97b872fb";

        
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
        $apiKey = "ea823db66af842d9a8287e8e97b872fb";

        $ingredientsAPI = "https://api.spoonacular.com/recipes/" .$id. "/ingredientWidget.json?apiKey=" .$apiKey;
        $jsonFile = file_get_contents($ingredientsAPI);
        $jsonData = json_decode($jsonFile);

        $ingredients = $jsonData -> ingredients;
        return $jsonData -> ingredients;
        
    }

    function getSteps($id) {
        $apiKey = "ea823db66af842d9a8287e8e97b872fb";

        $stepsAPI = "https://api.spoonacular.com/recipes/" .$id. "/analyzedInstructions?apiKey=" .$apiKey;
        $jsonFile = file_get_contents($stepsAPI);
        $jsonData = json_decode($jsonFile);
        
        return $jsonData[0] -> steps;
    }

    function getIngredientList() {
        return $ingredients;
    }
?>