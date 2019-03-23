<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru-ru" lang="ru-ru" dir="ltr">

<head>
  <meta name=viewport content="width=device-width, initial-scale=1">
  <base href="http://pravogolosa.net/" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="robots" content="index, follow" />
  <meta name="keywords" content="отзывы, жалобы, отзывы о компаниях, отзывы о школах, авто отзывы, отзывы об отелях, отзывы о банках, сайт отзывы, отзывы о школах, отзывы о садиках, отзывы о больницах, страховые компании отзывы, отзывы о вузах, сайт отзывов, портал отзывы, сервис отзывов"
  />
  <meta name="description" content="Cайт отзывов, где вы можете добавить отзывы на любую тему." />
  <title><?php echo wp_get_document_title(); ?></title>
  <link href="/templates/yoo_pinboard/favicon.ico" rel="shortcut icon" type="image/x-icon" />
  <link rel="stylesheet" href="/templates/yoo_pinboard/css/template.css.php?colorHeader=plaster&amp;colorMenubar=varnish&amp;colorBody=steelboard" type="text/css" />
  <script type="text/javascript" src="/media/system/js/mootools.js"></script>
  <script type="text/javascript" src="/media/system/js/caption.js"></script>
  <script type="text/javascript">
    window.addEvent('domready', function() {
      var JTooltips = new Tips($$('.hasTip'), {
        maxTitleChars: 50,
        fixed: false
      });
    });
  </script>
  <script>
  var delete_abc = setTimeout(function delete_abc_func() {
      $("span > i.lb-tt.lb-share-tt").dislay = "none !important";
      delete_abc = setTimeout(delete_abc_func, 500);
    }, 500);
  </script>

  <script type="text/javascript">
    if (self != top) {
      top.location = document.location;
    }
  </script>
  <link rel="apple-touch-icon" href="/templates/yoo_pinboard/apple_touch_icon.png" />
  <?php wp_head(); ?>
</head>
<body id="page" class="yoopage left blog">
  <div id="page-header">
    <div class="page-header-b">
      <div id="header">
        <div class="wrapper floatholder">
          <div id="toolbar">
            <div class="floatbox ie_fix_floats">
              <?php if (!is_user_logged_in()) {?>
                <div id="topmenu">
                  <form name="loginform" id="loginform" action="<?php echo home_url(); ?>/wp-login.php" method="post" style="margin:0px;">
                    <input type="text" title="Логин или e-mail:: Введите свой логин или e-mail" name="log" id="user_login" class="inputbox hasTip" size="20" style="background-image:url(http://pravogolosa.net/modules/mod_cblogin/mod_cblogin/username.png); background-repeat: no-repeat; background-position: 0px 50%; padding-left: 25px; background-color:#fff !important;" placeholder="Логин или e-mail" title="Логин или e-mail" />
                    <span><input type="password" title="Пароль:: Введите пароль" name="pwd" id="mod_login_password" class="inputbox hasTip" size="20" style="background-image:url(http://pravogolosa.net/modules/mod_cblogin/mod_cblogin/password.png); background-repeat: no-repeat; background-position: 0px 50%; padding-left: 25px; background-color:#fff !important;" placeholder="Пароль" title="Пароль" /></span>
                    <input type="checkbox" name="rememberme" id="mod_login_remember" value="yes" checked="checked" />
                    <span id="mod_login_remembermetext"><label for="mod_login_remember">Запомнить</label></span>
                    <input type="submit" style="padding: 3px 8px 4px;" name="wp-submit" title="Вход на сайт:: Выполнить вход на сайт под своим ником и паролем." class="login_button hasTip" value="Вход" />
                    <input type="hidden" name="redirect_to" value="<?php echo home_url(); echo $_SERVER['REQUEST_URI']; ?>" />

                    <a href="<?php echo home_url(); ?>/wp-login.php?action=lostpassword" class="hasTip" title="Забыли пароль или логин? :: Перейдите по ссылке, чтобы восстановить забытый пароль или логин">Забыли пароль?</a>
                    <a href="<?php echo home_url(); ?>/wp-login.php?action=register" class="hasTip regbutton" title="Регистрация::Зарегистрировать нового пользователя">Зарегистрироваться</a></form>
                </div>
              <?php } ?>
            </div>
          </div>
          <div id="logo">
            <div style="float:left;margin-right:13px;">
              <a href="<?php echo home_url(); ?>" target="_self" title="На главную"><img src="/images/stories/logo_header.png" border="0" alt="logo header" /></a>
            </div>
            <div style="position: relative;float:left;margin:5px;">
              <table border="0">
                <tbody>
                  <tr>
                    <td>
                      <h4 style="letter-spacing:0.06em;color:#646464;">Нашим ОТЗЫВАМ можно доверять</h4>
                      <a style="color:#646464;font-size:90%;">Официальных ответов: <?php echo wp_count_comments()->approved; ?></a> <a style="color:#646464;font-size:90%;"> Официальных представителей: <?php $result = count_users(); echo $result['total_users']; ?></a></td>
                    <td><a style="color: #fff !important; text-decoration: none !important; box-shadow: 1px 1px 1px #CCC; padding: 3px 5px; border-radius: 3px; text-align: center; background: #F90 none repeat scroll 0% 0%; display: table; text-shadow: 1px 1px 1px #b95d1b; width: 130px;">ПРОВЕРИТЬ интернет-магазин</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div id="search">
            <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
              <div class="module-search">
                <input type="hidden" name="catid" value="0 " />
                <input type="hidden" name="page" value="search" />
                <input type="text" value="<?php if (!empty(get_search_query())) { echo get_search_query(); } else { ?>Поиск по отзывам<?php } ?>" name="s" id="s" onblur="if(this.value=='') this.value='Поиск по отзывам';" onfocus="if(this.value=='Поиск по отзывам') this.value='';" />
                <button value="" name="Submit" type="submit"></button>
              </div>
            </form>
          </div>
          <div id="menu">
            <ul class="menu">
              <li class="level1 item8 first active current"><a href="<?php echo home_url(); ?>" class="level1 item8 first active current"><span>Главная</span></a>
              </li>
              <li class="level1 item9"><a href="<?php echo home_url(); ?>/%d0%b2%d1%81%d0%b5-%d0%ba%d0%b0%d1%82%d0%b5%d0%b3%d0%be%d1%80%d0%b8%d0%b8/" class="level1 item9"><span>Читать отзывы</span></a>
                <ul class="level2">
                  <li class="level2 item2 first"><a href="<?php echo home_url(); ?>/category/%d0%b7%d0%b4%d0%be%d1%80%d0%be%d0%b2%d1%8c%d0%b5/" class="level2 item2 first"><span>Здоровье</span></a></li>
                  <li class="level2 item3"><a href="<?php echo home_url(); ?>/category/%d0%b3%d0%be%d1%81%d1%83%d0%b4%d0%b0%d1%80%d1%81%d1%82%d0%b2%d0%be-%d0%b8-%d0%b2%d0%bb%d0%b0%d1%81%d1%82%d1%8c/" class="level2 item3"><span>Государство и власть</span></a></li>
                  <li class="level2 item4"><a href="<?php echo home_url(); ?>/category/%d1%80%d0%b0%d0%b7%d0%b2%d0%bb%d0%b5%d1%87%d0%b5%d0%bd%d0%b8%d1%8f-%d0%b8-%d0%be%d1%82%d0%b4%d1%8b%d1%85/" class="level2 item4"><span>Развлечения и отдых</span></a></li>
                  <li class="level2 item5"><a href="<?php echo home_url(); ?>/category/%d0%ba%d0%be%d0%bc%d0%bc%d1%83%d0%bd%d0%b0%d0%bb%d1%8c%d0%bd%d1%8b%d0%b5-%d1%83%d1%81%d0%bb%d1%83%d0%b3%d0%b8/" class="level2 item5"><span>Коммунальные услуги</span></a></li>
                  <li class="level2 item6"><a href="<?php echo home_url(); ?>/category/%d1%82%d1%80%d1%83%d0%b4-%d0%b8-%d1%80%d0%b0%d0%b1%d0%be%d1%82%d0%b0/" class="level2 item6"><span>Труд и работа</span></a></li>
                  <li class="level2 item7"><a href="<?php echo home_url(); ?>/category/%d0%bd%d0%b5%d0%b4%d0%b2%d0%b8%d0%b6%d0%b8%d0%bc%d0%be%d1%81%d1%82%d1%8c-%d0%b8-%d1%81%d1%82%d1%80%d0%be%d0%b8%d1%82%d0%b5%d0%bb%d1%8c%d1%81%d1%82%d0%b2%d0%be/" class="level2 item7"><span>Недвижимость</span></a></li>
                  <li class="level2 item8"><a href="<?php echo home_url(); ?>/category/%d0%be%d0%b1%d1%80%d0%b0%d0%b7%d0%be%d0%b2%d0%b0%d0%bd%d0%b8%d0%b5/" class="level2 item8"><span>Образование</span></a></li>
                  <li class="level2 item9"><a href="<?php echo home_url(); ?>/category/%d1%82%d1%80%d0%b0%d0%bd%d1%81%d0%bf%d0%be%d1%80%d1%82/" class="level2 item9"><span>Транспорт</span></a></li>
                  <li class="level2 item10"><a href="<?php echo home_url(); ?>/category/%d1%81%d0%bf%d0%be%d1%80%d1%82-%d0%b8-%d1%82%d1%83%d1%80%d0%b8%d0%b7%d0%bc/" class="level2 item10"><span>Спорт и туризм</span></a></li>
                  <li class="level2 item11"><a href="<?php echo home_url(); ?>/category/%d0%ba%d1%83%d0%bb%d1%8c%d1%82%d1%83%d1%80%d0%b0/" class="level2 item11"><span>Культура</span></a></li>
                  <li class="level2 item12"><a href="<?php echo home_url(); ?>/category/%d1%81%d0%be%d1%86%d0%b8%d0%b0%d0%bb%d1%8c%d0%bd%d1%8b%d0%b5-%d1%83%d1%87%d1%80%d0%b5%d0%b6%d0%b4%d0%b5%d0%bd%d0%b8%d1%8f/" class="level2 item12"><span>Социальные учреждения</span></a></li>
                  <li class="level2 item13"><a href="<?php echo home_url(); ?>/category/%d0%b8%d0%bd%d1%82%d0%b5%d1%80%d0%bd%d0%b5%d1%82-%d1%81%d0%b2%d1%8f%d0%b7%d1%8c-%d0%b8-%d1%82%d0%b2/" class="level2 item13"><span>Интернет, Связь и ТВ</span></a></li>
                  <li class="level2 item15"><a href="<?php echo home_url(); ?>/category/%d1%84%d0%b8%d0%bd%d0%b0%d0%bd%d1%81%d0%be%d0%b2%d1%8b%d0%b9-%d1%81%d0%b5%d0%ba%d1%82%d0%be%d1%80/" class="level2 item15"><span>Финансовый сектор</span></a></li>
                </ul>
              </li>
              <li class="level1 item11"><a href="<?php echo home_url(); ?>/%d0%b2%d1%81%d0%b5-%d0%ba%d0%b0%d1%82%d0%b5%d0%b3%d0%be%d1%80%d0%b8%d0%b8/" class="level1 item11"><span>Добавить отзыв</span></a>
                <ul class="level2">
                  <li class="level2 item2 last"><a href="<?php echo home_url(); ?>/?s=" class="level2 item2 last"><span>Поиск по отзывам</span></a></li>
                </ul>
              </li>
              <li class="level1 item12"><a href="<?php echo home_url(); ?>/%d0%b2%d1%81%d0%b5-%d0%ba%d0%b0%d1%82%d0%b5%d0%b3%d0%be%d1%80%d0%b8%d0%b8/" class="level1 item12"><span>Каталог</span></a>
                <ul class="level2">
                  <li class="level2 item2 first"><a href="<?php echo home_url(); ?>/?s=" class="level2 item2 first"><span>Поиск по каталогу</span></a></li>
                </ul>
              </li>
            </ul>
          </div>
          <!--<div id="menu">
            <ul class="menu">
              <?php
              $menu_name = 'header_menu';
              $locations = get_nav_menu_locations();

              if( $locations && isset($locations[ $menu_name ]) ){
                $menu = wp_get_nav_menu_object( $locations[ $menu_name ] ); // получаем объект меню
                $menu_items = wp_get_nav_menu_items( $menu ); // получаем элементы меню
                // создаем список
                $menu_list = '';
                foreach ( (array) $menu_items as $key => $menu_item ){
                  $menu_list .= '<li class="level1 item'.$menu_item->ID.'"><a href="'.$menu_item->url.'" class="level1 item'.$menu_item->ID.'"><span>'.$menu_item->title.'</span></a>';
                }
                echo $menu_list;
              } ?>
            </ul>
          </div>-->
        </div>
        <!-- header end -->
      </div>
    </div>
  </div>
  <div id="page-body">
    <div class="wrapper floatholder">
