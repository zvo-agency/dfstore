<a href="<?=$panelCards[$x]["link"]?>" 
   class="c-panelCard <?=$panelCards[$x]["class"]?>"
   id="<?=$panelCards[$x]["id"]?>"
>
  <?php if($panelCards[$x]["type"] === "addMode") : ?>
    <div class="c-panelCard__titlePrefix">Add</div>
    <div class="c-panelCard__title"><?=$panelCards[$x]["title"];?></div>
    <div class="c-panelCard__plus">+</div>
  <?php elseif($panelCards[$x]["type"] === "infoIcon") : ?>
    <div class="c-panelCard__title"><?=$panelCards[$x]["title"];?></div>
    <div class="c-panelCard__icon" 
         style="background-image: url('<?=$panelCards[$x]["icon"];?>');">
    </div>
  <?php else : ?>
    <div class="c-panelCard__title"><?=$panelCards[$x]["title"];?></div>
    <div class="c-panelCard__count"><span style="opacity:0;">0</span></div>
  <?php endif; ?>
</a>
