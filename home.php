<?php get_header(); ?>
<div id="middle">
        <div class="background">


          <div id="left">
            <div id="left_container" class="clearfix">
              <div class="mod-papirus">

                <h3 class="header">ТОП-10 отзывов</h3>
                <ul class="mostreadpapirus stamp_sur">
                  <?php $recente_comments = get_comments( array(
                        'number'      => 10, // number of comments to retrieve.
                        'status'      => 'approve', // we only want approved comments.
                        'post_status' => 'publish' // limit to published comments.
                    ) );
                    if ( $recente_comments ) {
                        foreach ( (array) $recente_comments as $comment ) {
                          $stringer[$comment->comment_ID] = get_comment_meta($comment->comment_ID, 'ecr_total_count', true);
                          if (empty($stringer[$comment->comment_ID])) {
                            $stringer[$comment->comment_ID] = '0';
                          }
                        }
                        arsort($stringer);
                        foreach ( $stringer as $key_commente => $comment ) {
                          $comment_data = get_comment($key_commente);
                          ?>
                          <li style="float:left;" class="mostreadpapirus stamp_sur">
                            <span style='font-size:80%;color:#000;width:100%;display:table;'><?php echo date('n.j.Y', strtotime($comment_data->comment_date)); ?> <span style='float:right;background-color: #958464;color: #fff;width: 100px;text-align: center;border-bottom-left-radius: 5px;border-top-right-radius:5px;'>Рейтинг: <?php echo($comment); ?></span></span>
                            <a class="hasTip" title="Автор Агриппина::" href="<?php echo comment_link($key_commente); ?>"><img class="round-avatar" src="/components/com_comprofiler/plugin/templates/winclassic/images/avatar/nophoto_n.png" alt="аватар" /></a> <a href="<?php echo comment_link($key_commente); ?>"><span class="top-cell"><?php echo wp_trim_words( $comment_data->comment_content, '2', '...' ); ?></span><span style="display:block;color:#646464;">
                              <?php echo wp_trim_words( $comment_data->comment_content, '5' ); ?>
                            </span></a>
                          </li>
                          <?php if ($tmp++ > 8) { break; } ?>
                        <?php }

                    }
                    ?>
          </ul>
        </div>
        <div class="mod-clip">
          <div class="module">

            <div class="badge-paperclip"></div>
            <div class="box-t1">
              <div class="box-t2"></div>
            </div>

            <div class="box-1">
              <div class="box-2 deepest">
                <h3 class="header"><span class="header-2"><span class="header-3">Свежие<span class="color"> комментарии</span></span></span></h3>

                <ul class="ccomment">
                  <?php $recent_comments = get_comments( array(
                        'number'      => 5, // number of comments to retrieve.
                        'status'      => 'approve', // we only want approved comments.
                        'post_status' => 'publish' // limit to published comments.
                    ) );
                    if ( $recent_comments ) {
                        foreach ( (array) $recent_comments as $comment ) { ?>
                            <li class="ccomment">
                              <div class="ccomment_info">
                                <?php echo $comment->comment_author; ?>
                                <span class="ccomment_more">
                                  <span class="editlinktip hasTip" title="<?php echo wp_trim_words( $comment->comment_content, '5' ); ?>" >
                                    <a href="<?php echo get_permalink($comment->comment_post_ID); ?>">подробнее...</a>
                                  </span>
                                </span>
                              </div>
                              <div class="ccomment_comment">
                                <?php echo wp_trim_words( $comment->comment_content, '5' ); ?>
                                <span class="ccomment_date">
          										<?php echo date('n.j.Y', strtotime($comment->comment_date)); ?>
                                </span>
                                <div class="ccomment_clear"></div>
                              </div>
                            </li>
                        <?php }
                    }
                    ?>




                </ul>
              </div>
            </div>

            <div class="box-b1">
              <div class="box-b2">
                <div class="box-b3"></div>
              </div>
            </div>

          </div>
        </div>
        <div class="mod-clip">
          <div class="module">

            <div class="badge-paperclip"></div>
            <div class="box-t1">
              <div class="box-t2"></div>
            </div>


            <div class="box-b1">
              <div class="box-b2">
                <div class="box-b3"></div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
    <!-- left end -->

    <div id="main">

      <div id="main_container" class="clearfix">




        <div id="mainmiddle" class="floatbox">


          <div id="content">
            <div id="content_container" class="clearfix">


              <div class="floatbox">


                <div class="joomla ">
                  <div class="blog">
                    <div class="leadingarticles"
                      <div class="item ">
                        <div>
                          <table border="0">
                            <tbody>
                              <tr>
                                <td class="tezis"><img src="/images/stories/tezis1.png" border="0" alt="tezis" style="float: left; height: 56px; margin-right: 15px;" />
                                  <h1>Отзывы - это выгодно!</h1>
                                  <p style="margin-bottom:13px ;">Напишите свой отзыв, и мы проинформируем руководство компании о вашем мнении. Вы вернете свои средства или получите скидку. Это действительно работает.</p>
                                  <img src="/images/stories/tezis3.png" border="0" alt="tezis" style="float: left; height: 56px; margin-right: 15px;" />
                                  <h2>Лучший сайт отзывов</h2>
                                  <p style="margin-bottom:13px ;"><?php echo $_SERVER['HTTP_HOST']; ?> - это сервис реальных отзывов о компаниях и организациях. Наш алгоритм проверки отзывов, гарантирует достоверность информации на портале.</p>
                                  <img src="/images/stories/tezis2.png" border="0" alt="tezis" style="float: left; height: 56px; margin-right: 15px;" />
                                  <h2>Решаем Ваши проблемы</h2>
                                  <p style="margin-bottom:13px ;">Если объекты отзывов игнорируют ваш отзыв, мы проинформируем контролирующие органы о сложившейся ситуации, и тогда реакция не заставит себя ждать.</p>
                                  <img src="/images/stories/tezis4.png" border="0" alt="tezis" style="float: left; height: 56px; margin-right: 15px;" />
                                  <h2>Вы экономите</h2>
                                  <p style="margin-bottom:13px ;">Мы сохраним ваши средства и поможем выбрать лучший сервис, товар или услугу. Перед сделкой, ознакомьтесь с отзывами на <?php echo $_SERVER['HTTP_HOST']; ?></p>
                                  <img src="/images/stories/tezis5.png" border="0" alt="tezis" style="float: left; height: 56px; margin-right: 15px;" />
                                  <h2>Как сделать жизнь лучше?</h2>
                                  <p style="margin-bottom:13px ;">Если вам не безразлично будущее Ваше и Ваших детей, не оставайтесь равнодушными к окружающим проблемам. Напишите Ваш отзыв.</p>
                                  <p style="text-align: center;"><strong><span style="font-size: 10pt;"><input class="ad_button" onclick="window.location=&quot;<?php echo home_url(); ?>/wp-login.php?action=register&quot;" type="button" value="ЗАРЕГИСТРИРОВАТЬСЯ" /></span></strong></p>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div>
                          <div class="adsmanager_div">
                            <?php $recent_comments = get_comments( array(
                                  'number'      => 12, // number of comments to retrieve.
                                  'status'      => 'approve', // we only want approved comments.
                                  'post_status' => 'publish' // limit to published comments.
                              ) );
                              if ( $recent_comments ) {
                                  foreach ( (array) $recent_comments as $comment ) { ?>

                                      <!--// sample output - do something useful here
                                      // echo get_comment_meta( $comment->comment_ID, 'title', true );
                                      echo '<a href="' . esc_url( get_comment_link( $comment ) ) . '">' . get_the_title( $comment->comment_post_ID ) . '</a>';-->


                                      <div class="ads_row">
                                        <div class='ads_author' style="background-color:#F3FEE0;">
                                          <p><?php echo date('n.j.Y', strtotime($comment->comment_date)); ?> <?php if (get_comment_meta( $comment->comment_ID, 'rating', true) < 3) { echo 'Отрицательный'; } elseif (get_comment_meta( $comment->comment_ID, 'rating', true) == 3) { echo "Нейтральный"; } else { echo "Положительный"; } ?></p>
                                          <div class="adsavatar">
                                            <a class="hasTip" title="Автор <?php echo $comment->comment_author; ?>::">
                                              <img src="/components/com_comprofiler/plugin/templates/winclassic/images/avatar/nophoto_n.png" style="height:35px;" alt="аватар" />
                                            </a>
                                          </div>
                                          <div class="ads_authorname"><?php echo $comment->comment_author; ?></div>
                                        </div>
                                        <div class='ads_text_main'>
                                          <div>
                                            <h2>
                                              <a href='<?php echo get_permalink($comment->comment_post_ID); ?>'><?php echo get_the_title( $comment->comment_post_ID ); ?></a>
                                            </h2>
                                            <span>
                                              <img alt="Россия" style="position:relative;top:2px;margin: 0px 5px;height:18px;" src="/images/flag_russia.png" />
                                               Россия  -> <?php the_category(' - ', 'multiple', $comment->comment_post_ID); ?></span>
                                            <h3 class="adsmanager_cat">
                                              <a href="<?php echo get_permalink($comment->comment_post_ID); ?>"><?php echo get_the_title( $comment->comment_post_ID ); ?> отзывы</a>
                                            </h3>
                                            <span style="display:block;"><?php echo wp_trim_words( $comment->comment_content, '35' ); ?></span>
                                            <br/>
                                            <p><a href="<?php echo comment_link($comment); ?>">Подробнее...</a></p>
                                          </div>
                                        </div>
                                      </div>
                                  <?php }
                              }
                              ?>
                              <?php $recente_comments = get_comments( array(
                                    'status'      => 'approve', // we only want approved comments.
                                    'post_status' => 'publish' // limit to published comments.
                                ) );
                                if ( $recente_comments ) {
                                    foreach ( (array) $recent_comments as $key_comment => $comment ) {
                                      $stringer[$comment->comment_ID] = get_comment_meta($comment->comment_ID, 'ecr_total_count', true);
                                      if (empty($stringer[$comment->comment_ID])) {
                                        $stringer[$comment->comment_ID] = '0';
                                      }
                                    }
                                    arsort($stringer);
                                    foreach ( $stringer as $key_commente => $comment ) {
                                      $comment_data = get_comment($key_commente);
                                      ?>
                                      <div class='ad_card_info_data' style='padding:10px;border-bottom: 1px solid #dbd6d6;'>
                                        <span style='float:left; padding-right:10px;'><?php echo date('n.j.Y', strtotime($comment_data->comment_date)); ?></span>
                                        <div style="width:100px;height:19px;float:left;overflow:hidden;background:url(/images/stars100.png) 0 <?php if (get_comment_meta( $comment_data->comment_ID, 'rating', true ) == '0' || empty(get_comment_meta( $comment_data->comment_ID, 'rating', true ))) { echo '0'; } else {echo (get_comment_meta($comment_data->comment_ID, 'rating', true ) * 20 ); } ?>%;"></div>
                                        </br>
                                        <span class='adsmanager_cat'><?php echo get_the_title( $comment_data->comment_post_ID ); ?></span>
                                        <span style='font-size:85%;'>Россия</span>
                                      </br>
                                        <h3>
                                          <a href='<?php echo comment_link($key_commente); ?>'><?php echo get_the_title( $comment_data->comment_post_ID ); ?> отзывы</a>
                                        </h3>
                                        <p><?php echo wp_trim_words( $comment_data->comment_content, '35' ); ?></br>
                                          <a href='<?php echo comment_link($key_commente); ?>'>подробнее...</a> </p>
                                      </div>
                                      <?php if ($tmp++ > 8) { break; } ?>
                                    <?php }

                                }
                                ?>
                          <div style="margin: 8px auto;font-weight:bold;font-size:10pt;width:55%;">
                            <input type="button" class="ad_button" onclick='window.location=""' value="Читать все отзывы">
                          </div>
                        <p> </p>
                        <h2 style="text-align: center;">Отзывы о работе <?php echo $_SERVER['HTTP_HOST']; ?></h2>
                        <div>
                          <div class="latestnewstile">

                            <?php
                            global $post;
                            $args = array('numberposts' => 10, 'post_type' => 'post', 'post_status' => 'publish');
                            $myposts = get_posts( $args );
                            foreach( $myposts as $post ){
                              setup_postdata($post);
                            	?>
                              <div class="latestnewstile">
                                <div style="padding:5px;">
                                  <h3>
                                    <a href="<?php the_permalink(); ?>" class="latestnewstile"><?php the_title(); ?></a>
                                  </h3> <?php echo wp_trim_words( get_the_content(), '35' ); ?>
                                  <br />
                                  <span><a href="<?php the_permalink(); ?>">Подробнее…</a></span>
                                  <br />
                                  <br />
                                </div>
                              </div>
                            	<?php
                            }
                            wp_reset_postdata();
                            ?>




                          </div>
                        </div>
                        <div style="text-align:justify;">
                          <p><?php echo $_SERVER['HTTP_HOST']; ?> - это независимый сайт отзывов, универсальный сервис отзывов или портал отзывы, называйте нас как хотите. Мы не просто собираем отзывы - мы с ними работаем, с каждым Вашим отзывом. Если Ваш отзыв интересен, правдив
                            и требует ответа - вы обязательно его получите. Просто напишите ВАШ отзыв!</p>
                        </div>

                        <!-- START of joscomment -->
                        <!-- END of joscomment -->




                      </div>
                    </div>




                  </div>
                </div>
              </div>
              <!-- mainbottom end -->
              <!-- content end -->
            </div>
            <!-- mainmiddle end -->
            <!-- mainbottom end -->

          </div>
        </div>
      </div>
    </div>
    <!-- main end -->

  </div>
  </div>
  <!-- middle end -->


<?php get_footer(); ?>
