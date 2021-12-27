<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
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

$arCloudParams = array(
	"SEARCH" => $arResult["REQUEST"]["~QUERY"],
	"TAGS" => $arResult["REQUEST"]["~TAGS"],
	"CHECK_DATES" => $arParams["CHECK_DATES"],
	"arrFILTER" => $arParams["arrFILTER"],
	"SORT" => $arParams["TAGS_SORT"],
	"PAGE_ELEMENTS" => $arParams["TAGS_PAGE_ELEMENTS"],
	"PERIOD" => $arParams["TAGS_PERIOD"],
	"URL_SEARCH" => $arParams["TAGS_URL_SEARCH"],
	"TAGS_INHERIT" => $arParams["TAGS_INHERIT"],
	"FONT_MAX" => $arParams["FONT_MAX"],
	"FONT_MIN" => $arParams["FONT_MIN"],
	"COLOR_NEW" => $arParams["COLOR_NEW"],
	"COLOR_OLD" => $arParams["COLOR_OLD"],
	"PERIOD_NEW_TAGS" => $arParams["PERIOD_NEW_TAGS"],
	"SHOW_CHAIN" => $arParams["SHOW_CHAIN"],
	"COLOR_TYPE" => $arParams["COLOR_TYPE"],
	"WIDTH" => $arParams["WIDTH"],
	"CACHE_TIME" => $arParams["CACHE_TIME"],
	"CACHE_TYPE" => $arParams["CACHE_TYPE"],
	"RESTART" => $arParams["RESTART"],
);

if(is_array($arCloudParams["arrFILTER"]))
{
	foreach($arCloudParams["arrFILTER"] as $strFILTER)
	{
		if($strFILTER=="main")
		{
			$arCloudParams["arrFILTER_main"] = $arParams["arrFILTER_main"];
		}
		elseif($strFILTER=="forum" && IsModuleInstalled("forum"))
		{
			$arCloudParams["arrFILTER_forum"] = $arParams["arrFILTER_forum"];
		}
		elseif(mb_strpos($strFILTER, "iblock_") === 0)
		{
			if (isset($arParams["arrFILTER_".$strFILTER]) && is_array($arParams["arrFILTER_".$strFILTER]))
			{
				foreach($arParams["arrFILTER_".$strFILTER] as $strIBlock)
					$arCloudParams["arrFILTER_".$strFILTER] = $arParams["arrFILTER_".$strFILTER];
			}
		}
		elseif($strFILTER=="blog")
		{
			$arCloudParams["arrFILTER_blog"] = $arParams["arrFILTER_blog"];
		}
		elseif($strFILTER=="socialnetwork")
		{
			$arCloudParams["arrFILTER_socialnetwork"] = $arParams["arrFILTER_socialnetwork"];
		}
	}
}

$APPLICATION->IncludeComponent("bitrix:search.tags.cloud", ".default", $arCloudParams, $component);

?>


<section class="section section-xs novi-background">
    <div class="container">
        <div class="row">
            <div class="col-lg-11 col-xl-8">
                <!-- RD Search-->
                <form class="rd-form rd-search rd-search-classic" action="" method="GET">


                    <input type="hidden" name="tags" value="<?echo $arResult["REQUEST"]["TAGS"]?>" />
                    <div class="form-wrap">
                        <label class="form-label-outside" for="rd-search-form-input">Поиск</label>
                        <div class="form-wrap-inner">


                            <input type="text" name="q" class="form-input" id="rd-search-form-input" value="<?=$arResult["REQUEST"]["QUERY"]?>" size="40" />


                            <input type="hidden" name="how" value="<?echo $arResult["REQUEST"]["HOW"]=="d"? "d": "r"?>" />

                            <button class="rd-search-submit" type="submit" aria-label="Submit"></button>
                        </div>
                    </div>
                </form>
                <!--<div class="rd-search-results">dffg</div>-->

            </div>
        </div>
    </div>
</section>



<section class="section section-xs novi-background">
    <div class="container">
        <div class="row row-50 row-xxl-70">

            <?if(isset($arResult["REQUEST"]["ORIGINAL_QUERY"])):
                ?>
                <div class="search-language-guess">
                    <?echo GetMessage("CT_BSP_KEYBOARD_WARNING", array("#query#"=>'<a href="'.$arResult["ORIGINAL_QUERY_URL"].'">'.$arResult["REQUEST"]["ORIGINAL_QUERY"].'</a>'))?>
                </div><br /><?
            endif;?>

            <?if($arResult["REQUEST"]["QUERY"] === false && $arResult["REQUEST"]["TAGS"] === false):?>
            <?elseif($arResult["ERROR_CODE"]!=0):?>
                <p><?=GetMessage("SEARCH_ERROR")?></p>
                <?ShowError($arResult["ERROR_TEXT"]);?>
                <p><?=GetMessage("SEARCH_CORRECT_AND_CONTINUE")?></p>
                <br /><br />
                <p><?=GetMessage("SEARCH_SINTAX")?><br /><b><?=GetMessage("SEARCH_LOGIC")?></b></p>
                <table border="0" cellpadding="5">
                    <tr>
                        <td align="center" valign="top"><?=GetMessage("SEARCH_OPERATOR")?></td><td valign="top"><?=GetMessage("SEARCH_SYNONIM")?></td>
                        <td><?=GetMessage("SEARCH_DESCRIPTION")?></td>
                    </tr>
                    <tr>
                        <td align="center" valign="top"><?=GetMessage("SEARCH_AND")?></td><td valign="top">and, &amp;, +</td>
                        <td><?=GetMessage("SEARCH_AND_ALT")?></td>
                    </tr>
                    <tr>
                        <td align="center" valign="top"><?=GetMessage("SEARCH_OR")?></td><td valign="top">or, |</td>
                        <td><?=GetMessage("SEARCH_OR_ALT")?></td>
                    </tr>
                    <tr>
                        <td align="center" valign="top"><?=GetMessage("SEARCH_NOT")?></td><td valign="top">not, ~</td>
                        <td><?=GetMessage("SEARCH_NOT_ALT")?></td>
                    </tr>
                    <tr>
                        <td align="center" valign="top">( )</td>
                        <td valign="top">&nbsp;</td>
                        <td><?=GetMessage("SEARCH_BRACKETS_ALT")?></td>
                    </tr>
                </table>
            <?elseif(count($arResult["SEARCH"])>0):?>

                <?php foreach($arResult["SEARCH"] as $arItem) {?>
                    <div class="col-md-6 scaleFadeInWrap">
                        <!-- Post Modern-->
                        <div class="wow scaleFadeIn">
                            <article class="post-modern">

                                <a href="<?echo $arItem["URL"]?>"><?echo $arItem["TITLE_FORMATED"]?></a>
                                <p><?echo $arItem["BODY_FORMATED"]?></p>
                                <?if (
                                    $arParams["SHOW_RATING"] == "Y"
                                    && $arItem["RATING_TYPE_ID"] <> ''
                                    && $arItem["RATING_ENTITY_ID"] > 0
                                ):?>
                                    <div class="search-item-rate"><?
                                        $APPLICATION->IncludeComponent(
                                            "bitrix:rating.vote", $arParams["RATING_TYPE"],
                                            Array(
                                                "ENTITY_TYPE_ID" => $arItem["RATING_TYPE_ID"],
                                                "ENTITY_ID" => $arItem["RATING_ENTITY_ID"],
                                                "OWNER_ID" => $arItem["USER_ID"],
                                                "USER_VOTE" => $arItem["RATING_USER_VOTE_VALUE"],
                                                "USER_HAS_VOTED" => $arItem["RATING_USER_VOTE_VALUE"] == 0? 'N': 'Y',
                                                "TOTAL_VOTES" => $arItem["RATING_TOTAL_VOTES"],
                                                "TOTAL_POSITIVE_VOTES" => $arItem["RATING_TOTAL_POSITIVE_VOTES"],
                                                "TOTAL_NEGATIVE_VOTES" => $arItem["RATING_TOTAL_NEGATIVE_VOTES"],
                                                "TOTAL_VALUE" => $arItem["RATING_TOTAL_VALUE"],
                                                "PATH_TO_USER_PROFILE" => $arParams["~PATH_TO_USER_PROFILE"],
                                            ),
                                            $component,
                                            array("HIDE_ICONS" => "Y")
                                        );?>
                                    </div>
                                <?endif;?>
                                <small><?=GetMessage("SEARCH_MODIFIED")?> <?=$arItem["DATE_CHANGE"]?></small><br /><?
                                if (!empty($arItem["TAGS"]))
                                {
                                    ?><small><?
                                    $first = true;
                                    foreach ($arItem["TAGS"] as $tags):
                                        if (!$first)
                                        {
                                            ?>, <?
                                        }
                                        ?><a href="<?=$tags["URL"]?>"><?=$tags["TAG_NAME"]?></a> <?
                                        $first = false;
                                    endforeach;
                                    ?></small><br /><?
                                }
                                if($arItem["CHAIN_PATH"]):?>
                                    <small><?=GetMessage("SEARCH_PATH")?>&nbsp;<?=$arItem["CHAIN_PATH"]?></small><?
                                endif;
                                ?><hr />

                            </article>
                        </div>
                    </div>
                <?php }?>


            <?else:?>
                <?ShowNote(GetMessage("SEARCH_NOTHING_TO_FOUND"));?>
            <?endif;?>

        </div>

        <?if($arParams["DISPLAY_BOTTOM_PAGER"] != "N") echo $arResult["NAV_STRING"]?>

    </div>
</section>
