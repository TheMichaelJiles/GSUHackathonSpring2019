apiKey = "7d471f73121e4243bfc8f4d270eefe58";

function getSource(id){
    $.ajax({
        url:"https://api.spoonacular.com/recipes/"+id+"/information?apiKey=" + apiKey,
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
                document.getElementById("ingredients").appendChild(div);
                console.log(ingredients[i].name);
            }
        }
    });
}

function getRecipe(q){
    $.ajax({
        url:"https://api.spoonacular.com/recipes/search?apiKey=" + apiKey + "&number=1&query=" + q,
        success: function(res) {
            //document.getElementById("output").innerHTML="<h1>"+res.results[0].title+"</h1><br><img src='"+res.baseUri+res.results[0].image+"' width='400' /><br>Ready in "+res.results[0].readyInMinutes+" minutes";

            var id = res.results[0].id;
            var title = res.results[0].title;
            var image = res.results[0].image;
            var preptime = res.results[0].readyInMinutes;

            document.getElementById("recipe-title").innerHTML = title;
            document.getElementById("recipe-image").src = res.baseUri + image;
            document.getElementById("recipe-preptime").innerHTML = preptime;

            getIngredients(id);
        }
    });
}
