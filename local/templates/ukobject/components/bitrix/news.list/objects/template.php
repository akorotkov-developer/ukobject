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


                <?php
                foreach($arResult["ITEMS"] as $arItem) {?>
                    <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

                    $photos = '[';
                    $arPhotos = [];

                    foreach ($arItem['PROPERTIES']['FILES']['VALUE'] as $key => $value) {
                      if ($key >= count($arItem['PROPERTIES']['FILES']['VALUE']) - 1) {
                          $comma = '';
                      } else {
                          $comma = ',';
                      }
                      $photos = '{"thumb":"' . CFile::GetFileArray($value)['SRC'] . '","src":"' . CFile::GetFileArray($value)['SRC'] . '"}' . $comma;

                        $arPhotos[] = ['thumb' => CFile::GetFileArray($value)['SRC'], 'src' => CFile::GetFileArray($value)['SRC']];
                    }

                    $photos .= ']';
                    ?>
                    <div class="col-sm-6 col-lg-4">
                        <!-- Thumbnail Classic-->
                        <div id="<?=$this->GetEditAreaId($arItem['ID']);?>"
                             class="thumbnail-classic thumbnail-classic-sm"
                             data-lightgallery="dynamic"
                             data-lg-dynamic-elements='<?= json_encode($arPhotos)?>'>
                            <img class="thumbnail-classic-image" src="<?= $arItem["PREVIEW_PICTURE"]["SRC"];?>" alt="" width="370" height="256"/>
                            <div class="thumbnail-classic-caption">
                                <p class="thumbnail-classic-title"><?= $arItem["NAME"]?></p>
                            </div>
                            <div class="thumbnail-classic-dummy"></div>
                        </div>
                    </div>
                <?php }?>

        </div>
    </div>
</section>