<?php 
  $pageTitle = 'Categories| DFSTORE ADMIN';
  include $_SERVER['DOCUMENT_ROOT'] . '/admin/shared/_head.php';
?>
<body>
  <div class="c-main">
    <div class="c-main__head">
      <?php 
        include $_SERVER['DOCUMENT_ROOT'] . '/admin/shared/_c-header.php';
      ?>
    </div>
    <div class="c-main__body">

      <div class="c-content">
        <div class="c-content__inner">
          <?php 
            $pageHeaderText = "Categories";
            $pageHeaderButtonText = "Add category";
            $pageHeaderButtonLink = "/backend/categories/add_category";
            include $_SERVER['DOCUMENT_ROOT'] . '/admin/shared/_c-pageHeader.php';
          ?>    
        </div>
      </div>
      <div class="c-content">
        <div class="c-content__inner">
          <div id="categories_list">
            
          </div>    
        </div>
      </div>

    </div>
    <div class="c-main__foot">
      <?php 
        include $_SERVER['DOCUMENT_ROOT'] . '/admin/shared/_c-footer.php';
      ?>
    </div>
  </div>
  <?php 
    include $_SERVER['DOCUMENT_ROOT'] . '/admin/shared/_c-navList.php';
  ?>
  <?php 
    include $_SERVER['DOCUMENT_ROOT'] . '/admin/shared/_scripts.php';
  ?>

</body>
</html>
