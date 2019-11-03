var apiKey = "7d471f73121e4243bfc8f4d270eefe58";

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
        url:"https://api.spoonacular.com/recipes/" + id + "/ingredientWidget.json?apiKey=" + apiKey,
        success: function(res) {
            // document.getElementById("ingredients")
            var ingredients = res.ingredients;
            for (var i = 0; i < ingredients.length; i++) {
                var div = document.createElement("div");
                var content = document.createTextNode(ingredients[i].name);

                div.appendChild(content);
                // document.body.appendChild(div);
                document.getElementById("ingredients").appendChild(div);
            }
        }
    });
}

function getRecipeID(q){
    var id = "-1";
    $.ajax({
        url:"https://api.spoonacular.com/recipes/search?apiKey=" + apiKey + "&number=1&query=" + q,
        success: function(res) {
            // document.getElementById("output").innerHTML="<h2>"+res.results[0].title+"</h2><br><img src='"+res.baseUri+res.results[0].image+"' width='400' /><br>Ready in "+res.results[0].readyInMinutes+" minutes"
    
            console.log("getRecipeID" + ": " + res.results[0].id);
            id = JSON.parse(res.results[0].id);
            // getIngredients(id);
        }
    });
    return id;
}
