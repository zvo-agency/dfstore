<div class="c-header">
  <div class="inner">
    <div class="c-header__content">
      <a class=  "c-header__logo" 
         href=   "/backend" 
         alt=    "Logo. Link to admin main page" 
         style=  "background-image: url('/admin/app/img/design/logo-white.svg');">
      </a>
      <div class="c-header__navButtonWrap">
        <?php 
          include $_SERVER['DOCUMENT_ROOT'] . '/admin/shared/_c-navButton.php';
        ?>
      </div>
      <div class="c-header__buttonsList">
        <?php 
          $headerButtonText = "Products";
          $headerButtonLink = "/backend/products";

          include $_SERVER['DOCUMENT_ROOT'] . '/admin/shared/_c-headerButton.php';
        ?>
        <?php 
          $headerButtonText = "Orders";
          $headerButtonLink = "/backend/orders";

          include $_SERVER['DOCUMENT_ROOT'] . '/admin/shared/_c-headerButton.php';
        ?>
      </div>
      <div class="c-header__avatarWrap">
        <?php 
          include $_SERVER['DOCUMENT_ROOT'] . '/admin/shared/_c-avatar.php';
        ?>
      </div> 
    </div>
  </div>
  
</div>
