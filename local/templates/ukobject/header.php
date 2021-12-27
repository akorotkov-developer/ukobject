
<!-- Thumbnail corporate-->
<!-- Thumbnail classic--><!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title><? $APPLICATION->ShowTitle() ?></title>
    	<?$APPLICATION->ShowHead()?>
	<?
	if (!$USER->IsAuthorized()) {
		CJSCore::Init(array('ajax', 'json', 'ls', 'session', 'jquery', 'popup', 'pull'));
	}
	?>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0 maximum-scale=1.0 user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
     <?
    $APPLICATION->SetAdditionalCSS("//fonts.googleapis.com/css?family=Work+Sans:300,700,800%7COswald:300,400,500");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/bootstrap.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/fonts.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/style.css");
    
    
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/core.min.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/script.js");
     $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/main.js");
    
    ?>
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="<?=SITE_TEMPLATE_PATH?>/images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/html5shiv.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <? $APPLICATION->ShowPanel() ?>
    <div class="page">
      <!-- Page Header-->
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="118px" data-xl-stick-up-offset="118px" data-xxl-stick-up-offset="118px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-aside-outer novi-background">
              <div class="rd-navbar-aside">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle="#rd-navbar-nav-wrap-1"><span></span></button>
                  <!-- RD Navbar Brand--><a class="brand rd-navbar-brand" href="/"><img src="<?=SITE_TEMPLATE_PATH?>/images/logo_horizontal_web.svg" alt="" width="432" height="122
                  "/></a>
                </div>
                <div class="rd-navbar-collapse">
                  <button class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle="#rd-navbar-collapse-content-1"><span></span></button>
                  <div class="rd-navbar-collapse-content" id="rd-navbar-collapse-content-1">
                    <article class="rd-navbar-info">
                      <div class="unit align-items-center">
                        <div class="unit-left"><span class="icon novi-icon icon-md icon-modern mdi mdi-phone"></span></div>
                        <div class="unit-body">
                          <ul class="list-0">
                          	<!--<li>Диспетчер:</li>-->
                            <li>Диспетчерская:</li>
                            <li><a class="link-default" href="tel:#"><?$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/include/phone.php",Array(),Array("MODE"=>"html"));?></a></li>
                          </ul>
                        </div>
                      </div>
                    </article>
                    <article class="rd-navbar-info">
                      <div class="unit align-items-center">
                        <div class="unit-left"><span class="icon novi-icon icon-md icon-modern mdi mdi-map-marker"></span></div>
                        <div class="unit-body">
                          <ul class="list-0">
                            <li><a class="link-default" href="tel:#"><?$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/include/address.php",Array(),Array("MODE"=>"html"));?></a></li>
                          </ul>
                        </div>
                      </div>
                    </article><a class="button button-primary-outline button-winona" href="#">ПЕРЕЗВОНИТЕ МНЕ</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="rd-navbar-main-outer novi-background">
              <div class="rd-navbar-main">
                <div class="rd-navbar-nav-wrap" id="rd-navbar-nav-wrap-1">
                  <!-- RD Navbar Search-->
                  <div class="rd-navbar-search" id="rd-navbar-search-1">
                    <button class="rd-navbar-search-toggle" data-rd-navbar-toggle="#rd-navbar-search-1"><span></span></button>
                    <form class="rd-search" action="/search/" data-search-live="rd-search-results-live-1" method="GET">
                    <input type="hidden" name="s" value="Y"/>
                      <div class="form-wrap">
                        <label class="form-label" for="rd-navbar-search-form-input-1">Поиск...</label>
                        <input class="form-input rd-navbar-search-form-input" id="rd-navbar-search-form-input-1" type="text" name="q" value="<?=$_REQUEST["q"]?>" autocomplete="off">
                        <div class="rd-search-results-live" id="rd-search-results-live-1"></div>
                      </div>
                      <button class="rd-search-form-submit fa-search" type="submit"></button>
                    </form>
                  </div>
                  <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"top",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(""),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "N",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N"
	)
);?>                  
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      
      <?
      if($APPLICATION->GetCurPage()!="/")
      {
        ?>
        <section class="section breadcrumbs-custom bg-image novi-background" style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/images/breadcrumbs-image-2.jpg);">
        <div class="breadcrumbs-custom-inner">
          <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
              <h6 class="breadcrumbs-custom-subtitle title-decorated"><?$APPLICATION->ShowTitle(false)?></h6>
              <h1 class="breadcrumbs-custom-title"><?$APPLICATION->ShowTitle(false)?></h1>
            </div>
            <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"nav",
	Array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0"
	)
);?>
            
          </div>
        </div>
      </section>
        <?
      }
      ?>
     