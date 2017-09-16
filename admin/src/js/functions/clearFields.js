function clearFields(fieldsArr) {
  for (var i = 0; i < fieldsArr.length; i++) {
    document.querySelector(fieldsArr[i]).value = "";
  }
}
