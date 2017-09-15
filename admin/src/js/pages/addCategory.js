(function() {
  var addCategoryForm = document.querySelector('#add_category_form');

  if (addCategoryForm) {
    var submitButton = addCategoryForm.querySelector('#category_submit');

    submitButton.addEventListener('click', function(event) {
      event.preventDefault();

      addCategory();
      console.log('sending form...');
    });
  }
})();
