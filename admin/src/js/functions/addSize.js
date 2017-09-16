function addSize() {
  var form = document.querySelector('#add_size_form');
  var data = {
    label: form.querySelector('#size_label').value,
  }
  var fieldsToClear = ['#size_label'];
  toggleFormStatus(form, 'c-form--waitStatus');
  $.ajax({
    type: "POST",
    url: apiServerUrl + "/api/size/create",
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
        setTimeout(function() {
          toggleFormStatus(form, 'c-form--errorStatus');
        }, 3000);

      }
    }
  });
}
