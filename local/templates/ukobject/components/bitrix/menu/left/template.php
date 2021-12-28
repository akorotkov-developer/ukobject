<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php if (!empty($arResult)) { ?>
    <ul class="list-marked">
        <?php foreach($arResult as $arItem) { ?>
            <?php if($arItem["SELECTED"]) { ?>
                <li><a href="<?=$arItem["LINK"]?>" class="alert-link"><?=$arItem["TEXT"]?></a></li>
            <?php } else { ?>
                <li><a href="<?=$arItem["LINK"]?>" class="link-default"><?=$arItem["TEXT"]?></a></li>
            <?php }?>

        <?php }?>
    </ul>
<?php }?>