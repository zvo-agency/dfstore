<?php 
  $pageTitle = 'Add product | DFSTORE ADMIN';
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
            $pageHeaderText = "Добавление продукта";
            
            include $_SERVER['DOCUMENT_ROOT'] . '/admin/shared/_c-pageHeader.php';
          ?>    
        </div>
      </div>  
      <div class="c-content">
        <div class="c-content__inner">
          <form class="c-form" id="add_product_form">
            <div class="c-form__flex">
              <div class="c-form__column c-form__column--main">

                <div class="c-form__row">
                  <?php 
                    $select= array(
                      "label" => "Категория",
                      "id" => "product_category",
                      "name" => "category",
                      "default_option_text" => "Не выбрана"
                    );
                    include $_SERVER['DOCUMENT_ROOT'] . '/admin/shared/formkit/_c-select.php';
                  ?>  
                </div>

                <div class="c-form__row">
                  <?php 
                    $input = array(
                      "label" => "Название",
                      "type" => "text",
                      "id" => "product_name",
                      "name" => "name",
                      "value" => "",
                      "placeholder" => "Пусто"
                    );
                    include $_SERVER['DOCUMENT_ROOT'] . '/admin/shared/formkit/_c-input.php';
                  ?>  
                </div> 

                <div class="c-form__row">
                  <div class="c-form__blank">
                    <div class="c-form__blankRow">
                      <label>Показывать на сайте</label> 
                    </div> 
                    <div class="c-form__blankRow c-form__blankRow--radio">
                      <?php 
                        $radio = array(
                          "label" => "Да",
                          "id" => "product_display_on",
                          "name" => "name",
                          "value" => "yes",
                          "checked" => "checked"
                        );
                        include $_SERVER['DOCUMENT_ROOT'] . '/admin/shared/formkit/_c-radio.php';
                      ?>  
                      <?php 
                        $radio= array(
                          "label" => "Нет",
                          "id" => "product_display_off",
                          "name" => "name",
                          "value" => "no",
                          "checked" => ""
                        );
                        include $_SERVER['DOCUMENT_ROOT'] . '/admin/shared/formkit/_c-radio.php';
                      ?>      
                    </div>
                  </div> 
                </div>

                <div class="c-form__row">
                  <div class="c-form__blank">
                    <div class="c-form__blankRow c-form__blankRow--flex">
                      <div class="c-form__blankCol">
                        <?php 
                          $input = array(
                            "label" => "Цена, грн",
                            "type" => "number",
                            "id" => "product_price",
                            "name" => "price",
                            "value" => "",
                            "placeholder" => "Пусто"
                          );
                          include $_SERVER['DOCUMENT_ROOT'] . '/admin/shared/formkit/_c-input.php';
                        ?>
                      </div>
                      <div class="c-form__blankCol">
                        <?php 
                          $input = array(
                            "label" => "Скидка, %",
                            "type" => "number",
                            "id" => "product_discount",
                            "name" => "discount",
                            "value" => "",
                            "placeholder" => "Пусто",
                            "disabled" => "disabled",
                            "input_toggler" => array(
                              "label" => "Скидка, %",
                              "id" => "product_discount_toggler",
                              "name" => "discount_toggler",
                              "checked" => ""
                            ) 
                          );
                          include $_SERVER['DOCUMENT_ROOT'] . '/admin/shared/formkit/_c-input.php';
                        ?>
                      </div>
                    </div>
                  </div>  
                </div>
                
                <div class="c-form__row">
                  <div class="c-form__blank">
                    <div class="c-form__blankRow c-form__blankRow--flex">
                      <div class="c-form__blankCol">
                        <?php 
                          $input = array(
                            "label" => "Новая цена, грн",
                            "type" => "number",
                            "id" => "product_price_new",
                            "name" => "price_new",
                            "value" => "",
                            "placeholder" => "Пусто",
                            "disabled" => "disabled",
                            "input_toggler" => ""
                          );
                          include $_SERVER['DOCUMENT_ROOT'] . '/admin/shared/formkit/_c-input.php';
                        ?>
                      </div>
                    </div>
                  </div>  
                </div>
                
                <div class="c-form__row">
                  <div class="c-form__blank">
                    <div class="c-form__blankRow">
                      <label>Размеры</label> 
                    </div> 
                    <div class="c-form__blankRow c-form__blankRow--checkboxes" id="sizes_checkboxes">
                                                   
                    </div>
                  </div> 
                </div>

                <div class="c-form__row">
                  <div class="c-form__blank">
                    <div class="c-form__blankRow">
                      <label>Цвет</label> 
                    </div> 
                    <div class="c-form__blankRow c-form__blankRow--radio c-form__blankRow--colors" id="color_radio">
                            
                    </div>
                  </div> 
                </div>

                <div class="c-form__row">
                  <?php
                    $textarea= array(
                      "label" => "Описание",
                      "id" => "product_description",
                      "name" => "description",
                      "value" => "",
                      "placeholder" => "Пусто"
                    );
                    include $_SERVER['DOCUMENT_ROOT'] . '/admin/shared/formkit/_c-textarea.php';
                  ?>
                </div>

                <div class="c-form__row">
                  <?php
                    $textarea= array(
                      "label" => "Характеристики",
                      "id" => "product_characteristics",
                      "name" => "characteristics",
                      "value" => "",
                      "placeholder" => "Пусто"
                    );
                    include $_SERVER['DOCUMENT_ROOT'] . '/admin/shared/formkit/_c-textarea.php';
                  ?>
                </div>

                <div class="c-form__row">
                  <div class="c-form__status c-form__status--success">
                    <p>Category is added</p>
                  </div>
                  <div class="c-form__status c-form__status--error">
                    <p>Some error, please try again</p>
                  </div>
                </div>

                <div class="c-form__row">
                  <?php
                    $submitButton= array(
                      "id" => "category_submit",
                      "text" => "Сохранить"
                    );
                    include $_SERVER['DOCUMENT_ROOT'] . '/admin/shared/formkit/_c-submitButton.php';
                  ?>
                </div>

              </div>
              <div class="c-form__column c-form__column--side">

              </div>
            </div>
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
