<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
<section class="section section-sm novi-background">
        <div class="container">
          <div class="layout-bordered">
          
          <?$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/include/contact.php",Array(),Array("MODE"=>"html"));?>
            
            
          </div>
        </div>
      </section>
      <!-- Contacts-->
      <section class="section bg-gray-100 novi-background">
        <div class="range justify-content-xl-between">
          <div class="cell-xl-6 align-self-center container">
            <div class="row row-fix">
              <div class="col-lg-9 cell-inner">
                <div class="section-lg">
                  <h3 class="wow-outer"><span class="wow slideInDown">Написать нам</span></h3>
                  <p class="frmcres"></p>
                  <!-- RD Mailform-->
                  <form class="rd-form rd-mailform frmcnt" data-form-output="form-output-global" data-form-type="contact" method="post" action="">
                    <div class="row row-10 row-fix">
                      <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp">
                          <label class="form-label-outside" for="contact-first-name">Имя</label>
                          <input class="form-input" id="contact-first-name" type="text" name="name" data-constraints="@Required">
                        </div>
                      </div>
                      <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp">
                          <label class="form-label-outside" for="contact-last-name">Фамилия</label>
                          <input class="form-input" id="contact-last-name" type="text" name="name" data-constraints="@Required">
                        </div>
                      </div>
                      <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp">
                          <label class="form-label-outside" for="contact-email">E-mail</label>
                          <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                        </div>
                      </div>
                      <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp">
                          <label class="form-label-outside" for="contact-phone">Телефон</label>
                          <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@PhoneNumber">
                        </div>
                      </div>
                      <div class="col-12 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp">
                          <label class="form-label-outside" for="contact-message">Ваше сообщение</label>
                          <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="group group-middle">
                      <div class="wow-outer"> 
                        <button class="button button-primary button-winona wow slideInRight" type="submit">ОТПРАВИТЬ</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="cell-xl-5 height-fill wow fadeIn">
            <div class="google-map-container google-map-align">
              <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A83e915da1ccf16555c27f9016e4eabc74d19fdfb389b4b326e03ed2a542257e8&amp;source=constructor" width="100%" height="100%" frameborder="0"></iframe>
            </div>
          </div>
        </div>
      </section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>