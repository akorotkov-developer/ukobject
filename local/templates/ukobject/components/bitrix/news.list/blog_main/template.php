<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
  <h3 class="wow-outer text-center"><span class="wow">Новости</span></h3>
          <div class="row row-40">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
    
    <div class="col-md-6 wow-outer">
              <!-- Post Modern-->
              <article class="post-modern wow"><a class="post-modern-media" href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?echo $arItem["NAME"]?>"/></a>
                <h4 class="post-modern-title"><a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a></h4>
                <ul class="post-modern-meta">
                <?
                if(!empty($arItem["PROPERTIES"]["SOURCE"]["VALUE"]))
                {
                ?>
                  <li>Источник: <?=$arItem["PROPERTIES"]["SOURCE"]["VALUE"]?></li>
                  <?}?>
                  <li>
                    <time><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></time>
                  </li>
                  
                </ul>
                <p class="post-modern-description"><?echo $arItem["PREVIEW_TEXT"];?></p>
              </article>
            </div>
    
    
<?endforeach;?>

</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?
    if(!empty($arResult["NAV_STRING"]))
    {
        ?>
        <div class="wow-outer button-outer button-outer-big"><a class="button button-primary-outline button-winona wow slideInUp" href="/blog/">ПОСМОТРЕТЬ ВСЕ ПОСТЫ БЛОГА</a></div>
        <?
    }
    ?>
<?endif;?>
