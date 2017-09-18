<div class="c-select">
  <div class="c-select__row">
    <label><?=$select["label"]?></label>
  </div>
  <div class="c-select__row">
    <select name="<?=$select["name"]?>" id="<?=$select["id"]?>">
      <?php if($select["default_option_text"]):?>    
        <option value="default"><?=$select["default_option_text"]?></option>
      <?php endif;?>
    </select>
  </div>
   
</div>
