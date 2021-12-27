<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

// подключение служебной части пролога
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$APPLICATION->SetTitle("404 Not Found");
$APPLICATION->SetPageProperty('show_top_left', 'N');

// подключение визуальной части пролога
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_after.php");
?>
<div class="grid-container page-error">
      <div class="grid-x grid-padding-x">
        <div class="cell">
          
          <p class="page-error__text-1">К сожалению, запрашиваемая страница не найдена</p>
          <p class="page-error__text-2">Попробуйте найти интересующий Вас материал через поиск, или свяжитесь с нами.</p>
          <form action="/search/"  method="get">
            <div class="grid-x grid-padding-x align-center">
              <div class="small-24 medium-9 cell">
              
              <input type="hidden" name="s" value="Y"/>
                <input name="q" class="page-error__input" type="text" placeholder="Поиск">
               
              </div>
              <div class="small-24 medium-2 cell medium-text-left text-center">
                <input class="button page-error__button show-for-medium" type="submit" value="">
                <input class="show-for-small-only page-error__button-mobile" type="submit" value="Искать">
              </div>
            </div>
          </form>
          <div class="grid-x grid-padding-x page-error__links">
            <div class="small-24 medium-12 cell text-right"><a class="news-title text-primary page-error__main" href="/">На главную</a></div>
            <div class="small-24 medium-12 cell text-left"><a class="news-title text-primary page-error__contacts" href="/contacts/">Контакты</a></div>
          </div>
        </div>
      </div>
    </div>
<?



require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>