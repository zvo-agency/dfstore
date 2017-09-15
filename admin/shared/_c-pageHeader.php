<div class="c-pageHeader">
  <div class="c-pageHeader__row">
    <div class="c-pageHeader__breadcrumbsWrap">
      <?php 
        include $_SERVER['DOCUMENT_ROOT'] . '/admin/shared/_c-breadcrumbs.php';
      ?>
    </div> 
  </div>
  <div class="c-pageHeader__row">
    <div class="c-pageHeader__bodyFlex">
      <div class="c-pageHeader__bodyColumn">
        <h1><?=$pageHeaderText?></h1>
      </div>
      <?php if (!empty($pageHeaderButtonText)) { ?>
        <div class="c-pageHeader__bodyColumn">
          <?php 
            $buttonOpenTag = "a href=\"" . $pageHeaderButtonLink . "\"";
            $buttonCloseTag = "a";
            $buttonText = $pageHeaderButtonText;
            $buttonModificators = "c-button--small";          

            include $_SERVER['DOCUMENT_ROOT'] . '/admin/shared/_c-button.php';
          ?>  
        </div>
      <?php ;}?>
    </div>
  </div>
</div>
