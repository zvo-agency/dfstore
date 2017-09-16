(function() {
  var addSizeForm = document.querySelector('#add_size_form');

  if (addSizeForm) {
    var submitButton = addSizeForm.querySelector('#size_submit');

    submitButton.addEventListener('click', function(event) {
      event.preventDefault();

      addSize();
    });
  }
})();
