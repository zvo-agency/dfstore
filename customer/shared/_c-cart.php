<div class="c-cart">
  <div class="c-cart__closeButton" onclick="toggleCart()">×</div>
  <div class="c-cart__innerFlex">
    <div class="c-cart__header">
      <h2>Корзина</h2>
    </div>
    <div class="c-cart__body">
      <div class="c-cart__bodyScrollable">
        <div class="c-cart__itemsList">
          <?php 
            for($i = 0; $i < 10; $i++) {
               include $_SERVER['DOCUMENT_ROOT'] . '/customer/shared/_c-cartItem.php';
            }
          ?>
        </div>
      </div>
    </div>
    <div class="c-cart__footer">
      <div class="c-cart__finalSum">
        <div>Итого</div>
        <div>
          <span>5510</span>
          <span>грн</span>
        </div> 
      </div>
      <div class="c-cart__buttonWrap">
        <?php 
          $buttonOpenTag = "a href=\"/products\"";
          $buttonCloseTag = "a";
          $buttonText = "Купить";
          $buttonModificators = "c-button--small";          

          include $_SERVER['DOCUMENT_ROOT'] . '/customer/shared/_c-button.php';
        ?>
      </div>
      <div class="c-cart__buttonWrap">
        <?php 
          $buttonOpenTag = "a href=\"/products\"";
          $buttonCloseTag = "a";
          $buttonText = "Купить в 1 клик";
          $buttonModificators = "c-button--small";          

          include $_SERVER['DOCUMENT_ROOT'] . '/customer/shared/_c-button.php';
        ?>
      </div>
    </div>
  </div>
</div>
