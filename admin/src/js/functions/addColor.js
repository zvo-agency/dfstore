function addColor() {
  var form = document.querySelector('#add_color_form');
  var data = {
    name: form.querySelector('#color_name').value,
    code: form.querySelector('#color_code').value
  }
  var fieldsToClear = ['#color_name', '#color_code'];
  toggleFormStatus(form, 'c-form--waitStatus');
  $.ajax({
    type: "POST",
    url: apiServerUrl + "/api/color/create",
    data: data,
    success: function(data) {
      var dataObj = JSON.parse(data);
      
      if(dataObj.result == 'success') {
        toggleFormStatus(form, 'c-form--waitStatus');
        toggleFormStatus(form, 'c-form--successStatus');
        clearFields(fieldsToClear);
        document.querySelector('#color_viewer').style.backgroundColor = "transparent";
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
