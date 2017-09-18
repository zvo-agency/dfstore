
(function() {
  var categoriesList = document.querySelector('#categories_list');
  if(categoriesList) {
    var categories;

    $.ajax({
      type: "POST",
      url: apiServerUrl + "/api/categories/get-list",
      data: '',
      success: function(data) {
        categoriesJSON = JSON.parse(data);
        categories = categoriesJSON.items;
        showCategories(categories);
      }
    });

    function showCategories(categories) {
      for(var i = 0; i < categories.length; i++) {
        createCategoryItem(categories[i], categoriesList);
      }
    }
    function createCategoryItem(category, catList) {
      // div.c-categoryItem
      var item = document.createElement("div");
      item.className = "c-categoryItem";
      var name = document.createTextNode(category.name);
      item.appendChild(name);
      catList.appendChild(item); 
    }
  }
   
})();

