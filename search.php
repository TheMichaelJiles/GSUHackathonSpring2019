<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
    <script src="main.js"></script>
    <script>
        var query = <?php $_POST["query"]; ?>
        getRecipe(query);
    </script>

    <div id="output"></div>
    <a href="" id="sourceLink"></a>
    <div id="ingredients"></div>
</body>
</html>
