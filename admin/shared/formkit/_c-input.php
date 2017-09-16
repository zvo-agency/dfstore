<div class="c-input">
  <?php if($input["label"]) : ?>
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
    >
  </div>
</div>
