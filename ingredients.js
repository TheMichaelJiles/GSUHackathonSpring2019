function addToCheckBox(id){
  console.log("func");
  console.log(id);
  var form = document.getElementById(id);
  var test = ["fuck", "you", "young"];
  console.log(form);
  for(var i = 0; i < test.length; i++){
      var item = document.createElement("input");
      var att1 = item.setAttribute("type", "checkbox");
      var att2 = item.setAttribute("name", test[i]);
      var att3 = item.setAttribute("value", test[i]);
      var att3 = item.setAttribute("id", test[i]);

      console.log(item);
      id.appendChild(item);
      document.write("test");
  }
}
