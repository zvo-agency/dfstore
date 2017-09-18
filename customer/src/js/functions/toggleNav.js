function toggleNav() {
  var bodyEl = document.querySelector('body');
  var headerEl = document.querySelector('.c-header');
  var isActiveNav = 0;
  var bodyMask = document.createElement('div');
  bodyMask.onclick = function() {
    toggleIsActive();
  } 
  toggleIsActive();

  function toggleIsActive() {
    if(bodyEl.classList.contains('is-active-nav')) 
      isActiveNav = 1;
    if(isActiveNav) {
      bodyMask = document.querySelector('.c-bodyMask');
      bodyMask.style.opacity = 0;
      bodyMask.style.pointerEvents = 'none';
      setTimeout(function() {
        headerEl.removeChild(bodyMask);
      }, 900);

      bodyEl.classList.remove('is-active-nav');
    } else {
      bodyMask.className = 'c-bodyMask';
      headerEl.appendChild(bodyMask);
      bodyMask.classList.add('c-bodyMask--animate');
      bodyMask.style.pointerEvents = 'all';
      setTimeout(function() {
        bodyMask.style.opacity = 1;
      }, 30);

      bodyEl.classList.add('is-active-nav');
    } 
  }
}
