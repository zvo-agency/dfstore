(function() {
  var widget = document.querySelector('#panel_widget');
  if(widget) {
    setCategoriesCount();
    setColorsCount();
  }

  function setCategoriesCount() {
    var categoriesJSON,
        categoriesLength,
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

  function setColorsCount() {
    var colorsJSON,
        colorsLength,
        colorsCounter,
        colorsCounterText;

    $.ajax({
      type: "POST",
      url: "http://localhost:3000/api/colors/get-list",
      data: '',
      success: function(data) {
        colorsJSON = JSON.parse(data);
        colorsLength = colorsJSON.items.length;

        colorsCardCounter = widget.querySelector('#panel_card_colors .c-panelCard__count');
        colorsCardCounter.innerHTML = colorsLength;
      }
    });
  }
  
})();

