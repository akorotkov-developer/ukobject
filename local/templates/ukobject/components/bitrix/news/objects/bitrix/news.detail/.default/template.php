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
          <div class="row row-30">

<?
foreach($arResult["PROPERTIES"]["FILES"]["VALUE"] as $k=>$photo)
{
    ?>
    <div class="col-sm-6 col-lg-4">
              <a class="thumbnail-classic thumbnail-classic-sm" href="<?=CFile::GetPath($photo)?>" data-lightgallery="item"><img class="thumbnail-classic-image" src="<?=CFile::GetPath($photo)?>" alt=""/>
              
               <div class="thumbnail-classic-caption">
                  <p class="thumbnail-classic-title"><?=$arResult["NAME"]?></p>
                  <p class="thumbnail-classic-text"><?echo $arResult["DETAIL_TEXT"];?></p>
                </div>
              
              
            </div>    
    <?    
    
}
?>
 </div>
        </div>
      </section>