<?php 
  $pageTitle = 'Верстка. Одежда Designed for Fitness для занятий в тренажерном зале';
  include $_SERVER['DOCUMENT_ROOT'] . '/customer/shared/_head.php';
?>
<body>
<?php 
  include $_SERVER['DOCUMENT_ROOT'] . '/customer/shared/_c-cart.php';
  include $_SERVER['DOCUMENT_ROOT'] . '/customer/shared/_c-header.php';
  include $_SERVER['DOCUMENT_ROOT'] . '/customer/shared/_c-extendedNav.php';
  include $_SERVER['DOCUMENT_ROOT'] . '/customer/shared/_c-slider.php';
  $basicClasses = "c-basic--first";
  include $_SERVER['DOCUMENT_ROOT'] . '/customer/shared/_c-basic.php';
  include $_SERVER['DOCUMENT_ROOT'] . '/customer/shared/_c-basic--vertical.php';
  $basicClasses = "c-basic--last";
  include $_SERVER['DOCUMENT_ROOT'] . '/customer/shared/_c-basic.php';
  include $_SERVER['DOCUMENT_ROOT'] . '/customer/shared/_c-footer.php';
  include $_SERVER['DOCUMENT_ROOT'] . '/customer/shared/_scripts.php';
?>
</body>
</html>
