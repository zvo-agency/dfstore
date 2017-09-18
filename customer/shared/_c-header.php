<div class="c-header <?php if($headerColorModificator) echo $headerColorModificator;?>">
  <div class="inner">
    <?php 
      include $_SERVER['DOCUMENT_ROOT'] . '/customer/shared/_c-navButton.php';
    ?>
    <a href="/" class="c-header__logo">
      <img src="/customer/app/img/design/logo-white.svg">
      <img src="/customer/app/img/design/logo-dark.svg">
    </a>
    <nav>
      <?php 
        include $_SERVER['DOCUMENT_ROOT'] . '/customer/shared/_c-navButton.php';
      ?>
      <div class="c-header__navScrollable">
        <ul class="c-header__navGroup c-header__navGroup--first">
          <li class="c-header__navItemExtended">
            <div onmouseover="overExtendedItem()" onmouseout="outExtendedItem()">
              <a href="/products">ТОВАРЫ</a>
            </div>
          </li>
          <li><a href="">О НАС</a></li>
          <li><a href="">КЛИЕНТАМ</a></li>
        </ul>
        <ul class="c-header__navGroup c-header__navGroup--second">
          <li><a href="">FAQ</a></li>
          <li><a href="">БЛОГ</a></li>
          <li><a href="">КОНТАКТЫ</a></li>
        </ul>
      </div>
    </nav>
    <ul class="c-header__buttons">
      <li class="c-header__button c-header__button--search"><span></span></li>
      <li class="c-header__button c-header__button--liked"><span></span></li>
      <li class="c-header__button c-header__button--cart" onclick="toggleCart()"><span></span></li>
    </ul>
  </div>
</div>
