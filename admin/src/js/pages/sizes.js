(function() {
  var sizesList = document.querySelector('#sizes_list');
  if(sizesList) {
    var sizes;

    $.ajax({
      type: "POST",
      url: apiServerUrl + "/api/sizes/get-list",
      data: '',
      success: function(data) {
        sizesJSON = JSON.parse(data);
        sizes = sizesJSON.items;
        showSizes(sizes);
      }
    });

    function showSizes(sizes) {
      for(var i = 0; i < sizes.length; i++) {
        createSizeItem(sizes[i], sizesList);
      }
    }
    function createSizeItem(size, sizesList) {
      // div.c-sizeItem
      var item = document.createElement("div");
      item.className = "c-sizeItem";
      var name = document.createTextNode(size.label);
      item.appendChild(name);
      sizesList.appendChild(item); 
    }
  }
   
})();

