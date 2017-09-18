<div class="c-input">
  <?php if($input["label"] && $input["input_toggler"])  : ?>
    <div class="c-input__row">
      <?php 
        $checkbox = array(
          "label" => $input["input_toggler"]["label"],
          "id" => $input["input_toggler"]["id"], 
          "name" => $input["input_toggler"]["name"],
          "checked" => $input["input_toggler"]["checked"]
        );
        include $_SERVER['DOCUMENT_ROOT'] . '/admin/shared/formkit/_c-checkbox.php';
      ?>
    </div>
  <?php endif; ?>
  <?php if($input["label"] && !$input["input_toggler"])  : ?>
    <div class="c-input__row">
      <label><?=$input["label"]?></label>
    </div>
  <?php endif; ?>
  <div class="c-input__row">
    <input type="<?=$input["type"]?>"
           name="<?=$input["name"]?>"
           id="<?=$input["id"]?>"
           value="<?=$input["value"]?>"
           placeholder="<?=$input["placeholder"]?>" 
           <?=$input["disabled"]?>
    >
  </div>
</div>
