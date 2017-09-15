function addCategory() {
  var form = document.querySelector('#add_category_form');
  var data = {
    name: form.querySelector('#category_name').value,
    description: form.querySelector('#category_description').value
  }
  console.log(data);
  $.ajax({
    type: "POST",
    url: "http://localhost/api/category/create",
    data: data,
    success: function(data) {
      var dataObj = JSON.parse(data);
      
      if(dataObj.result == 'success') {
        console.log('Category is created!');
      } else {
        console.log('error');
      }
    }
  });
}
