// Show categories options in select
(function() {
  var categorySelect = document.querySelector('#product_category');
  if(categorySelect) {
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
        createCategoryItem(categories[i], categorySelect);
      }
    }
    function createCategoryItem(category, catList) {
      // option
      var item = document.createElement("option");
      item.setAttribute("value", category.id);
      var name = document.createTextNode(category.name);
      item.appendChild(name);
      catList.appendChild(item); 
    }
  }
})();

// Show sizes sheckboxes 
(function() {
  var checkboxesWrap = document.querySelector('#sizes_checkboxes');
  if(checkboxesWrap) {
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
        createSizeItem(sizes[i], checkboxesWrap);
      }
    }
    function createSizeItem(size, checkboxesWrap) {
      // div.c-checkbox 
      var item = document.createElement("div");
      item.classList.add('c-checkbox');
      var labelEl = document.createElement("label");
      labelEl.setAttribute('for', size.id);
      var labelValue= document.createTextNode(size.label);
      labelEl.appendChild(labelValue);
      item.appendChild(labelEl);
      var input = document.createElement("input");
      input.setAttribute('type', 'checkbox');
      input.setAttribute('id', size.id);
      input.setAttribute('hidden', true);
      input.setAttribute('name', size.id);
      item.appendChild(input);
      var boxEl = document.createElement("div");
      boxEl.classList.add('c-checkbox__box');
      item.appendChild(boxEl);

      checkboxesWrap.appendChild(item); 
    }
  }
})();

// Show color radio 
(function() {
  var colorsWrap = document.querySelector('#color_radio');
  if(colorsWrap) {
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
        createColorItem(colors[i], colorsWrap);
      }
    }
    function createColorItem(color, colorsWrap) {
      // div.c-radio
      var item = document.createElement("div");
      item.classList.add('c-radio');
      item.classList.add('c-radio--color');
      var labelEl = document.createElement("label");
      labelEl.setAttribute('for', color.id + '_' + color.name);
      item.appendChild(labelEl);
      var input = document.createElement("input");
      input.setAttribute('type', 'radio');
      input.setAttribute('id', color.id + '_' + color.name);
      input.setAttribute('hidden', true);
      input.setAttribute('name', 'product_color');
      item.appendChild(input);
      var groupEl = document.createElement("div");
      groupEl.classList.add('c-radio__group');
      var groupCircle = document.createElement("div");
      groupCircle.classList.add('c-radio__groupCircle');
      groupCircle.style.backgroundColor = color.code;
      groupEl.appendChild(groupCircle); 
      var groupLabel = document.createElement("span");
      groupLabel.classList.add('c-radio__groupLabel');
      var groupLabelValue = document.createTextNode(color.name);
      groupLabel.appendChild(groupLabelValue);
      groupEl.appendChild(groupLabel);
      item.appendChild(groupEl);

      colorsWrap.appendChild(item); 
    }
  }
})();

// calc discount 
(function() {
  var productDiscountToggler = document.querySelector('#product_discount_toggler'); 
  if(productDiscountToggler) {
    var discountField,
        discountValue,
        newPriceField,
        newPriceValue;
    
    discountField = document.querySelector('#product_discount');
    newPriceField = document.querySelector('#product_price_new');

    productDiscountToggler.addEventListener('click', function() {
      if(this.checked) {
        discountField.removeAttribute('disabled');
        newPriceField.removeAttribute('disabled');
      } else {
        discountField.disabled = true;
        newPriceField.disabled = true;
      }
    });
  }
})();

