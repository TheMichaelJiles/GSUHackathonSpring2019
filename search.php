<!DOCTYPE html>
<html lang="en">
<head>
<script src="main.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
<script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>

    <div id="output"></div>
    <a href="" id="sourceLink"></a>
    <div id="ingredients"></div>

    <script>
        var query = '<?php $_POST["query"]; ?>';
        console.log(query);
        getRecipe(query);
    </script>
</body>
</html>
