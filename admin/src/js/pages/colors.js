(function() {
  var colorsList = document.querySelector('#colors_list');
  if(colorsList) {
    var colors;

    $.ajax({
      type: "POST",
      url: apiServerUrl + "/api/colors/get-list",
      data: '',
      success: function(data) {
        colorsJSON = JSON.parse(data);
        colors = colorsJSON.items;
        showColors(colors);
      }
    });

    function showColors(colors) {
      for(var i = 0; i < colors.length; i++) {
        createColorItem(colors[i], colorsList);
      }
    }
    function createColorItem(color, colorsList) {
      // div.c-colorItem
      var item = document.createElement("div");
      item.className = "c-colorItem";
      var name = document.createTextNode(color.name);
      item.appendChild(name);
      colorsList.appendChild(item); 
    }
  }
   
})();

