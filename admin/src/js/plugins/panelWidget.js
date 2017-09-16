(function() {
  var widget = document.querySelector('#panel_widget');
  if(widget) {
    setCategoriesCount();
  }

  function setCategoriesCount() {
    var categoriesJSON,
        categoriesLength,
        categoriesCard,
        categoriesCounter,
        categoriesCounterText;

    $.ajax({
      type: "POST",
      url: "http://localhost:3000/api/categories/get-list",
      data: '',
      success: function(data) {
        categoriesJSON = JSON.parse(data);
        categoriesLength = categoriesJSON.items.length;

        categoriesCardCounter = widget.querySelector('#panel_card_categories .c-panelCard__count');
        categoriesCardCounter.innerHTML = categoriesLength;
      }
    });
  }
  
})();

