<?php
$curDir = $APPLICATION->GetCurDir();
$menu = new CMenu('left');
if ($menu->Init($curDir) && http_response_code() != 404) { ?>
                    </article>
                </div>
                <div class="col-lg-4">
                    <!-- Profile Thin-->
                    <article class="profile-thin novi-background">
                        <? $APPLICATION->IncludeComponent('bitrix:menu', 'left',
                            [
                                'DELAY' => 'N',
                                'DEPTH_LEVEL' => 99,
                                'MAX_LEVEL' => 99,
                                "CHILD_MENU_TYPE" => "left",
                                'MENU_CACHE_TIME' => 3600,
                                'MENU_CACHE_TYPE' => 'A',
                                'MENU_CACHE_USE_GROUPS' => 'N',
                                'ROOT_MENU_TYPE' => 'left',
                                'USE_EXT' => 'Y',
                            ]);
                        ?>
                    </article>
                </div>
            </div>
        </div>
    </section>
<?php } ?>

<!-- Page Footer-->
      <footer class="section footer-advanced bg-gray-800 novi-background">
        <div class="footer-advanced-main">
          <div class="container">
            <div class="row row-50">
              <div class="col-lg-4">
              
              <?$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/include/about.php",Array(),Array("MODE"=>"html"));?>
               
              </div>
              <div class="col-sm-7 col-md-5 col-lg-4">
                <h4>Новости ЖКХ</h4>
                <div class="post-inline-wrap">
                  <!-- Post Inline-->
                  <article class="post-inline">
                    <p class="post-inline-title"><a href="single-blog-post.html">В Москве выросли тарифы на коммунальные услуги</a></p>
                    <ul class="post-inline-meta">
                      <li>Российская газета</li>
                      <li><a href="single-blog-post.html">02.07.2021</a></li>
                    </ul>
                  </article>
                  <!-- Post Inline-->
                  <article class="post-inline">
                    <p class="post-inline-title"><a href="single-blog-post.html">Отложен новый порядок субсидий на оплату ЖКУ</a></p>
                    <ul class="post-inline-meta"> 
                      <li>Российская газета</li>
                      <li><a href="single-blog-post.html">01.07.2021</a></li>
                    </ul>
                  </article>
                </div>
              </div>
              <div class="col-sm-5 col-md-7 col-lg-4">
                <h4>Наши объекты</h4>
                <div class="row row-x-10" data-lightgallery="group">
                  <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="<?=SITE_TEMPLATE_PATH?>/images/slide-1.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="<?=SITE_TEMPLATE_PATH?>/images/discovery_preview85x85.jpg" alt="">
                      <div class="thumbnail-minimal-caption"></div></a></div>
                  <!--<div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/gallery-11-1200x800-original.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/footer-gallery-2-85x85.jpg" alt="">
                      <div class="thumbnail-minimal-caption"></div></a></div>
                  <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/gallery-12-1200x800-original.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/footer-gallery-3-85x85.jpg" alt="">
                      <div class="thumbnail-minimal-caption"></div></a></div>
                  <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/gallery-13-535x800-original.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/footer-gallery-4-85x85.jpg" alt="">
                      <div class="thumbnail-minimal-caption"></div></a></div>
                  <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/gallery-14-1200x800-original.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/footer-gallery-5-85x85.jpg" alt="">
                      <div class="thumbnail-minimal-caption"></div></a></div>
                  <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/gallery-15-1200x800-original.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/footer-gallery-6-85x85.jpg" alt="">
                      <div class="thumbnail-minimal-caption"></div></a></div>
                  <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/gallery-16-1200x800-original.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/footer-gallery-7-85x85.jpg" alt="">
                      <div class="thumbnail-minimal-caption"></div></a></div>
                  <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="images/gallery-17-1200x800-original.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="images/footer-gallery-8-85x85.jpg" alt="">
                      <div class="thumbnail-minimal-caption"></div></a></div>-->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-advanced-aside">
          <div class="container">
            <div class="footer-advanced-layout">
              <div>
               
                
                <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"bottom",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(""),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "N",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N"
	)
);?>         
                
              </div>
              <div>
              <?$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/include/social.php",Array(),Array("MODE"=>"html"));?>
                
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <hr>
        </div>
        <div class="footer-advanced-aside">
          <div class="container">
            <div class="footer-advanced-layout"><a class="brand" href="index.html"><img src="<?=SITE_TEMPLATE_PATH?>/images/logo_horizontal_web.svg" alt="" width="180" height="50"/></a>
              <!-- Rights-->
              <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>Все права защищены.</span><span>&nbsp;</span><br class="d-sm-none"/><a href="/rules/">Политика Конфиденциальности</a>.</p>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!--<div class="preloader">
      <div class="preloader-body">
        <div id="loadingProgressG">
          <div class="loadingProgressG" id="loadingProgressG_1"></div>
        </div>
      </div>
    </div>-->
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    
  </body>
</html>