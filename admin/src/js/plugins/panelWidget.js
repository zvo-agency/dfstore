(function() {
  var widget = document.querySelector('#panel_widget');
  if(widget) {
    setCategoriesCount();
    setColorsCount();
    setSizesCount();
  }

  function setCategoriesCount() {
    var categoriesJSON,
        categoriesLength,
        categoriesCounter,
        categoriesCounterText;

    $.ajax({
      type: "POST",
      url: apiServerUrl + "/api/categories/get-list",
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
      url: apiServerUrl + "/api/colors/get-list",
      data: '',
      success: function(data) {
        colorsJSON = JSON.parse(data);
        colorsLength = colorsJSON.items.length;

        colorsCardCounter = widget.querySelector('#panel_card_colors .c-panelCard__count');
        colorsCardCounter.innerHTML = colorsLength;
      }
    });
  }

  function setSizesCount() {
    var sizesJSON,
        sizesLength,
        sizesCounter,
        sizesCounterText;

    $.ajax({
      type: "POST",
      url: apiServerUrl + "/api/sizes/get-list",
      data: '',
      success: function(data) {
        sizesJSON = JSON.parse(data);
        sizesLength = sizesJSON.items.length;

        sizesCardCounter = widget.querySelector('#panel_card_sizes .c-panelCard__count');
        sizesCardCounter.innerHTML = sizesLength;
      }
    });
  }
  
})();

