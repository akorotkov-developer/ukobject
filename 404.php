<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

// подключение служебной части пролога
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$APPLICATION->SetTitle("Страница не найдена");
$APPLICATION->SetPageProperty('show_top_left', 'N');

// подключение визуальной части пролога
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_after.php");
?>

    <section class="section section-sm">
        <div class="container">
            <h3>К сожалению, запрашиваемый вами контент не найден</h3>
        </div>
    </section>
    <!-- Call to action dark-->
    <section class="section section-xl bg-gray-800 bg-image bg-image-1 novi-background" style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/images/call-to-action-404-1920x584.jpg);">
        <div class="container">
            <div class="row row-50 justify-content-sm-end">
                <div class="col-sm-9 col-md-7 col-lg-6">
                    <div class="box-2">
                        <div class="wow-outer">
                            <div class="wow slideInUp">
                                <h4>Что делать?</h4>
                            </div>
                        </div>
                        <div class="wow-outer offset-top-4">
                            <div class="wow slideInDown">
                                <p>Вы можете воспользоваться поиском для уточнения запроса, или вернуться на главную страницу</p><a class="button button-primary button-winona" href="/">Вернуться на главную</a>                  </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-xs novi-background">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 col-xl-8">
                    <!-- RD Search-->
                    <form class="rd-form rd-search rd-search-classic" action="/search/" method="GET">
                        <div class="form-wrap">
                            <label class="form-label-outside" for="rd-search-form-input">Поиск</label>
                            <div class="form-wrap-inner">
                                <input class="form-input" id="rd-search-form-input" type="text" name="q" autocomplete="off">
                                <button class="rd-search-submit" type="submit" aria-label="Submit"></button>
                            </div>
                        </div>
                    </form>
                    <div class="rd-search-results"></div>
                </div>
            </div>
        </div>
    </section>

<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>