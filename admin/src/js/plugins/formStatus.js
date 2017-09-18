function toggleFormStatus(formEl, formStatus) {
  if(formEl.classList.contains(formStatus)) {
    formEl.classList.remove(formStatus);
  } else {
    formEl.classList.add(formStatus);
  }
}
