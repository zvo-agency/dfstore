function addCategory() {
  var form = document.querySelector('#add_category_form');
  var data = {
    name: form.querySelector('#category_name').value,
    description: form.querySelector('#category_description').value
  }
  var fieldsToClear = ['#category_name', '#category_description'];
  toggleFormStatus(form, 'c-form--waitStatus');
  $.ajax({
    type: "POST",
    url: apiServerUrl + "/api/category/create",
    data: data,
    success: function(data) {
      var dataObj = JSON.parse(data);
      
      if(dataObj.result == 'success') {
        toggleFormStatus(form, 'c-form--waitStatus');
        toggleFormStatus(form, 'c-form--successStatus');
        clearFields(fieldsToClear);
        setTimeout(function() {
          toggleFormStatus(form, 'c-form--successStatus');
        }, 1000);
      } else {
        toggleFormStatus(form, 'c-form--waitStatus');
        toggleFormStatus(form, 'c-form--errorStatus');
      }
    }
  });
}
