<?php 
  $pageTitle = 'Верстка. Products page';
  include $_SERVER['DOCUMENT_ROOT'] . '/customer/shared/_head.php';
?>
<body>
<?php 
  include $_SERVER['DOCUMENT_ROOT'] . '/customer/shared/_c-cart.php';
  $headerColorModificator = "c-header--white";
  include $_SERVER['DOCUMENT_ROOT'] . '/customer/shared/_c-header.php';
  include $_SERVER['DOCUMENT_ROOT'] . '/customer/shared/_c-extendedNav.php';
  include $_SERVER['DOCUMENT_ROOT'] . '/customer/shared/_c-containerWithSidenav.php';
  include $_SERVER['DOCUMENT_ROOT'] . '/customer/shared/_c-footer.php';
  include $_SERVER['DOCUMENT_ROOT'] . '/customer/shared/_scripts.php';
?>
</body>
</html>
