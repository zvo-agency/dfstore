<?php 
  $pageTitle = 'Main page | DFSTORE ADMIN';
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
      <div class="c-mainPanel">
        <div class="c-mainPanel__inner">
          <div class="c-mainPanel__cards"> 
            <?php 
              $panelCards = array([
                "title"=>"Products",
                "count"=>"254",
                "link"=>"/backend/products"
              ],
              [
                "type"=>"addMode",
                "class"=>"c-panelCard--addMode",
                "title"=>"Product",
                "link"=>"/backend/products/add_product"
              ],
              [
                "id"=>"panel_card_orders",
                "title"=>"Orders",
                "count"=>"321",
                "link"=>"/backend/orders"
              ],
              [
                "type"=>"infoIcon",
                "title"=>"Statistics",
                "link"=>"/backend/statistics",
                "icon"=>"/admin/app/img/design/icons/icon.svg"
              ],
              [
                "title"=>"Complects",
                "count"=>"34",
                "link"=>"/backend/complects"
              ],
              [
                "type"=>"addMode",
                "class"=>"c-panelCard--addMode",
                "title"=>"Complect",
                "link"=>"/backend/complects/add_complect"
              ],
              [
                "title"=>"Categories",
                "count"=>"8",
                "link"=>"/backend/categories"
              ],
              [
                "type"=>"addMode",
                "class"=>"c-panelCard--addMode",
                "title"=>"Category",
                "link"=>"/backend/categories/add_category"
              ],
              [
                "title"=>"Colors",
                "count"=>"9",
                "link"=>"/backend/colors"
              ],
              [
                "type"=>"addMode",
                "class"=>"c-panelCard--addMode",
                "title"=>"Color",
                "link"=>"/backend/colors/add_color"
              ],
              [
                "title"=>"Sizes",
                "count"=>"7",
                "link"=>"/backend/sizes"
              ],
              [
                "type"=>"addMode",
                "class"=>"c-panelCard--addMode",
                "title"=>"Size",
                "link"=>"/backend/sizes/add_size"
              ],
              [
                "title"=>"Pages",
                "count"=>"16",
                "link"=>"/backend/pages"
              ],
              [
                "title"=>"Users",
                "count"=>"2",
                "link"=>"/backend/users"
              ],
              [
                "type"=>"addMode",
                "class"=>"c-panelCard--addMode",
                "title"=>"User",
                "link"=>"/backend/users/add_user"
              ],
              [
                "title"=>"Customers",
                "count"=>"235",
                "link"=>"/backend/customers"
              ],
              [
                "type"=>"addMode",
                "class"=>"c-panelCard--addMode",
                "title"=>"Customer",
                "link"=>"/backend/customers/add_customer"
              ],
              [
                "id"=>"panel_card_messages",
                "title"=>"Messages",
                "count"=>"121",
                "link"=>"/backend/messages"
              ],
              [
                "type"=>"infoIcon",
                "title"=>"Profile",
                "link"=>"/backend/users/profile",
                "icon"=>"/admin/app/img/design/icons/icon.svg"
              ],
              [
                "id"=>"panel_card_reviews",
                "title"=>"Reviews",
                "count"=>"121",
                "link"=>"/backend/reviews"
              ],
              [
                "type"=>"addMode",
                "class"=>"c-panelCard--addMode",
                "title"=>"Review",
                "link"=>"/backend/reviews/add_review"
              ],
              [
                "title"=>"Languages",
                "count"=>"2",
                "link"=>"/backend/languages"
              ],
              [
                "type"=>"addMode",
                "class"=>"c-panelCard--addMode",
                "title"=>"Language",
                "link"=>"/backend/languages/add_language"
              ]
              ); 

              for ($x = 0; $x < count($panelCards); $x++) {
                include $_SERVER['DOCUMENT_ROOT'] . '/admin/shared/_c-panelCard.php';
              }
            ?>
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
