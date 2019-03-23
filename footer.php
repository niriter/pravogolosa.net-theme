<div id="bottom">
  <div class="floatbox ie_fix_floats">


    <div class="bottomblock width100 float-left">
      <div class="_blank">
        <div class="module deepest">

          <h3 style="text-align:center;">Некоторые компании, которые используют <?php echo $_SERVER['HTTP_HOST']; ?>, чтобы слышать своих клиентов.</h3>
          <p style="margin:0px;padding:8px;line-height:100%;text-align: center;text-decoration:none;background-color:#fff;">
            <a><img class="activity_image" src="/images/com_adsmanager/ads/1223a_t.jpg" border="0" alt="Сбербанк" /></a>
            <a><img class="activity_image" src="/images/com_adsmanager/ads/1447a_t.jpg" border="0" alt="Билайн" /></a>
            <a><img class="activity_image" src="/images/com_adsmanager/ads/1473a_t.jpg" border="0" alt="ПриватБанк" /></a>
            <a><img class="activity_image" src="/images/com_adsmanager/ads/1380a_t.jpg" border="0" alt="Дом.ру" /></a>
            <a><img class="activity_image" src="/images/com_adsmanager/ads/810a_t.jpg" border="0" alt="Воля" /></a>
            <a><img class="activity_image" src="/images/com_adsmanager/ads/1007a_t.jpg" border="0" alt="Ситилинк" /></a>
            <a><img class="activity_image" src="/images/comprofiler/830_4f5f30879f294.jpg" border="0" alt="Мегафон" style="border: 0px none;" /></a>
            <a> </a>
            <a><img class="activity_image" src="/images/com_sobi2/clients/6523_img.jpg" border="0" alt="Wikimart Онлайн торговый центр Викимарт" height="75" /></a>
            <a><img class="activity_image" src="/images/com_sobi2/clients/samsung.png" border="0" alt="Samsung" height="75" /></a>
          </p>
        </div>
      </div>
      <div class="pin_red">
        <div class="module deepest">

          <table width="100%" border="0" cellpadding="0" cellspacing="1">
            <tr>
              <!--<td nowrap="nowrap">
                <?php
                $menu_name = 'footer_menu';
                $locations = get_nav_menu_locations();

                if( $locations && isset($locations[ $menu_name ]) ){
                	$menu = wp_get_nav_menu_object( $locations[ $menu_name ] ); // получаем объект меню
                	$menu_items = wp_get_nav_menu_items( $menu ); // получаем элементы меню
                	// создаем список
                	$menu_list = '';
                	foreach ( (array) $menu_items as $key => $menu_item ){
                    $menu_list .= '<a href="'.$menu_item->url.'" class="mainlevel">'.$menu_item->title.'</a>';
                    $menu_list .= '<span class="mainlevel">  | </span>';
                	}
                  echo $menu_list;
                } ?>
              </td>-->
            </tr>
          </table>
        </div>
      </div>

    </div>

  </div>
</div>
<!-- bottom end -->

<div id="footer">
  <div class="footer-bg">
    <div style="font-size:75%;">Все права защищены © <?php echo date("Y"); ?> <?php echo $_SERVER['HTTP_HOST']; ?> [12+]
      <br />Любое копирование и размещение материалов сайта возможно только с письменного разрешения администрации портала <?php echo $_SERVER['HTTP_HOST']; ?>. Все торговые марки и логотипы на портале - собственность компаний владельцев.</div>
  </div>

</div>
<!-- footer end -->

</div>
</div>
</body>
<?php wp_footer(); ?>
</html>
