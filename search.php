<!DOCTYPE html>
<html lang="en">
<head>
<script src="main.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        * {
            box-sizing: border-box;
        }
        body {
            overflow-x: hidden;
        }
        h2 {
            font-family: 'britannica bold';
        }
        .main {
            width: 100vw;
            height: 100vh;
        }
        .search-left {
            background-color: white;
            color: #141935;
            padding: 32px;
        }
        .search-right {
            background-color: #141935;
            color: white;
            padding: 32px;
        }
        .recipe-image {
            width: 100%;
            height: auto;
        }
        .btn {
            border: 12px solid white;
        }
        .review-img {
            max-height: 50px;
            width: auto;
        }
    </style>
</head>
<body>
<script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>

        <?php 
        include 'main.php';

        session_start();

        $query = $_POST["query"];
        
        $overview = getRecipeTitle($query);

        $id = $overview["id"];
        $title = $overview["title"];
        $imageSrc = $overview["imageUrl"].$overview["image"];
        $prepTime = $overview["prepTime"];

        $ingredients = getIngredients($id);
        $steps = getSteps($id);

        $_SESSION['ingredients'] = $ingredients;
        
    ?>

    <div class="row main">
        <div class="col-6 search-left">
            <h2 id="recipe-title"><?php echo $title ?></h2>
            <img id="recipe-image" src="<?php echo $imageSrc; ?>">
            <p id="recipe-preptime"><?php $prepTime; ?></p>

            <?php
                foreach($steps as $value) {
                    $step = $value -> step;
                    echo "<p>$step</p>";
                }
            ?>
        </div>
        <div class="col-6 search-right">
            <h2> Ingredients </h2>
            
            <?php
                foreach($ingredients as $value) {
                    $name = $value -> name;
                    echo "<p>$name</p>";
                }
            ?>

            <a href="ingredientList.php?ingredients=<?php echo $ingredients ?>">
                <img class="review-img" src="assets/QuickChef_ReviewOrderButton.png">
            </a>
        </div>
    </div> 

</body>
</html>
