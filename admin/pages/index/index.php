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
      <div class="c-mainPanel" id="panel_widget">
        <div class="c-mainPanel__inner">
          <div class="c-mainPanel__cards"> 
            <?php 
              $panelCards = array([
                "title"=>"Products",
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
                "link"=>"/backend/complects"
              ],
              [
                "type"=>"addMode",
                "class"=>"c-panelCard--addMode",
                "title"=>"Complect",
                "link"=>"/backend/complects/add_complect"
              ],
              [
                "id"=>"panel_card_categories",
                "title"=>"Categories",
                "link"=>"/backend/categories"
              ],
              [
                "type"=>"addMode",
                "class"=>"c-panelCard--addMode",
                "title"=>"Category",
                "link"=>"/backend/categories/add_category"
              ],
              [
                "id"=>"panel_card_colors",
                "title"=>"Colors",
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
                "link"=>"/backend/pages"
              ],
              [
                "title"=>"Users",
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
