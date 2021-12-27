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
 <section class="section section-lg novi-background">
        <div class="container">
          <div class="row row-50 row-xxl-70">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
    <div class="col-md-6 scaleFadeInWrap" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
              <!-- Post Modern-->
              <div class="wow scaleFadeIn">
                <article class="post-modern">
                <?
                if(is_array($arItem["PREVIEW_PICTURE"]))
                {
                ?>
                <a class="post-modern-media" href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?echo $arItem["NAME"]?>"/></a>
                <?}?>
                  <h4 class="post-modern-title"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a></h4>
                  <ul class="post-modern-meta">
                    
                    <li>
                      <time><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></time>
                    </li>
                    
                  </ul>
                  <p><?echo $arItem["PREVIEW_TEXT"];?></p>
                </article>
              </div>
            </div>
    
    
    
    
	
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif;?>
  </div>
      </section>