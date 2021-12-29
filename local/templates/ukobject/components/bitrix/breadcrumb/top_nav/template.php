<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '';


$itemSize = count($arResult);

$strReturn .= '<h6 class="breadcrumbs-custom-subtitle title-decorated">Главная</h6>';

for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);


	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
		$strReturn .= '
			<h6 class="breadcrumbs-custom-subtitle title-decorated">
				
				
					'.$title.' 
				
				<meta itemprop="position" content="'.($index + 1).'" />
			</h6>';
	}
}

return $strReturn;
