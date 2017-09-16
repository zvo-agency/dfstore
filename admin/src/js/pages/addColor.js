(function() {
  var colorViewer = document.querySelector('#color_viewer');
  if(colorViewer) {
    var colorCode = document.querySelector('#color_code');
    if(colorCode) {
      addEventListenerMulti(colorCode, "click keyup", function() {
        var colorValue = this.value;
        colorViewer.style.backgroundColor = colorValue;
      });
    }
  }
})();

(function() {
  var addColorForm = document.querySelector('#add_color_form');

  if (addColorForm) {
    var submitButton = addColorForm.querySelector('#category_submit');

    submitButton.addEventListener('click', function(event) {
      event.preventDefault();

      addColor();
    });
  }
})();


