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
<div class="row row-50 offset-top-2">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
    <div class="col-sm-6 col-lg-3" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
              <!-- Thumbnail Lightc-->
              <article class="thumbnail-light"><a class="thumbnail-light-media" href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><img class="thumbnail-light-image" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"/></a>
                <h5 class="thumbnail-light-title"><a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a></h5>
              </article>
            </div>
    
	
<?endforeach;?>

</div>
