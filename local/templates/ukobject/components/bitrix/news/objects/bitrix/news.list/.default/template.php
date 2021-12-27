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
 <section class="section section-lg bg-default novi-background">
        <div class="container">
          <div class="row row-30" data-lightgallery="group">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
    
    <div class="col-sm-6 col-lg-4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
              <a class="thumbnail-classic thumbnail-classic-sm" href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><img class="thumbnail-classic-image" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"/>
                <div class="thumbnail-classic-caption">
                  <p class="thumbnail-classic-title"><?echo $arItem["NAME"]?></p>
                  <p class="thumbnail-classic-text"><?echo $arItem["PREVIEW_TEXT"];?></p>
                </div>
                <div class="thumbnail-classic-dummy"></div></a>
            </div>
    
   
<?endforeach;?>
</div>
        </div>
      </section>
