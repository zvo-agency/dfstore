function toggleCart() {
  var bodyEl = document.querySelector('body');
  var isActiveCart = 0;
  var bodyMask = document.createElement('div');
  bodyMask.onclick = function() {
    toggleIsActive();
  } 
  toggleIsActive();

  function toggleIsActive() {
    if(bodyEl.classList.contains('is-active-cart')) 
      isActiveCart = 1;
    if(isActiveCart) {
      bodyMask = document.querySelector('.c-bodyMask');
      bodyMask.style.opacity = 0;
      bodyMask.style.pointerEvents = 'none';
      setTimeout(function() {
        bodyEl.removeChild(bodyMask);
      }, 900);

      bodyEl.classList.remove('is-active-cart');
    } else {
      bodyMask.className = 'c-bodyMask';
      bodyEl.appendChild(bodyMask);
      bodyMask.classList.add('c-bodyMask--animate');
      bodyMask.style.pointerEvents = 'all';
      setTimeout(function() {
        bodyMask.style.opacity = 1;
      }, 30);

      bodyEl.classList.add('is-active-cart');
    } 
  }
}
