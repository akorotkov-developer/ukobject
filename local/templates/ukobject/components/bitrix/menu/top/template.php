<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<ul class="rd-navbar-nav">

<?
$previousLevel = 0;
foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		
                
                 <li class="rd-nav-item<?=($arItem["SELECTED"]?" active":"")?>"><a class="rd-nav-link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
                      <ul class="rd-menu rd-navbar-dropdown">
                
		

	<?else:?>

	
    
    
                

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li class="rd-nav-item<?=($arItem["SELECTED"]?" active":"")?>"><a class="rd-nav-link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				
                
                <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
                
			<?endif?>

		

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

</ul>

<?endif?>