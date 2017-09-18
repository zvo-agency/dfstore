<button class="c-submitButton" id="<?=$submitButton["id"]?>">
  <div class="c-submitButton__inner">
    <span><?=$submitButton["text"]?></span>
    <?php 
      include $_SERVER['DOCUMENT_ROOT'] . '/admin/shared/_c-spinner.php';
    ?>
  </div>
</button>
