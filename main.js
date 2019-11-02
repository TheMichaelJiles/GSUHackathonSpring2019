function getSource(id){
    $.ajax({
        url:"https://api.spoonacular.com/recipes/"+id+"/information?apiKey=a4f986fc76204b56a35bd812904e53d4",
        success: function(res) {
            document.getElementById("sourceLink").innerHTML=res.sourceUrl
            document.getElementById("sourceLink").href=res.sourceUrl
        }
    });
}

function getIngredients(id) {
    $.ajax({
        url:"https://api.spoonacular.com/recipes/" + id + "/ingredientWidget.json?apiKey=a4f986fc76204b56a35bd812904e53d4",
        success: function(res) {
            // document.getElementById("ingredients")
            var ingredients = res.ingredients;

            for (var i = 0; i < ingredients.length; i++) {
                var div = document.createElement("div");
                var content = document.createTextNode(ingredients[i].name);

                div.appendChild(content);
                document.body.appendChild(div);
                console.log(ingredients[i].name);
            }
        }
    });
}

function getRecipe(q){
    $.ajax({
        url:"https://api.spoonacular.com/recipes/search?apiKey=a4f986fc76204b56a35bd812904e53d4&number=1&query=" + q,
        success: function(res) {
            document.getElementById("output").innerHTML="<h1>"+res.results[0].title+"</h1><br><img src='"+res.baseUri+res.results[0].image+"' width='400' /><br>Ready in "+res.results[0].readyInMinutes+" minutes"
        }
    });
}