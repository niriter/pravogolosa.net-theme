<?php get_header(); ?>
<?php the_post(); ?>
<?php
global $post;
$good_reviews = '0';
$middle_reviews = '0';
$bad_reviews = '0';
$commentser = get_comments(array('status'=>'approve','post_status'=>'publish', 'post_id'=>$post->ID ));
foreach( $commentser as $comment ){
  $rating_stars = get_comment_meta( $comment->comment_ID, 'rating', true );
  if ($rating_stars < 3) {
    $bad_reviews += 1;
  } elseif ($rating_stars == 3) {
    $middle_reviews += 1;
  } elseif ($rating_stars > 3) {
    $good_reviews += 1;
  }
 }
 $all_reviews = ($good_reviews + $middle_reviews + $bad_reviews);
 if (!empty($all_reviews)) {
   $good_reviews_perc = round(($good_reviews / $all_reviews)*100);
   $middle_reviews_perc = round(($middle_reviews / $all_reviews)*100);
   $bad_reviews_perc = round(($bad_reviews / $all_reviews)*100);
 }
 ?>
  <div id="middle">
    <div class="background">


      <div id="left">
        <div id="left_container" class="clearfix">
          <div class="_blank">
            <div class="module deepest">
              <div style="width: auto; margin: 3px 3px 3px 0px; overflow: hidden; position: relative; z-index: 0;">
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

                  &#65279;&#65279; &#65279;&#65279;&#65279;&#65279;
                  <!-- Start of Sigsiu Online Business Index 2 component -->
                  <div class="sobi2">



                    <table class="sobi2Header">
                      <tbody>
                        <tr>
                          <td id="sobi2HeaderComLink"> <a class="sobi2Header">Объекты отзывов</a> </td>
                        </tr>
                      </tbody>
                    </table>



                    &#65279;&#65279;



                    <div class="sobi_detail">



                      <div class="sobi_card_path_way">
                        <div class="sobi_card_path_way_link">
                          <?php the_category(' - ', 'multiple'); ?>
                        </div>
                      </div>
                      <!-- class="sobi_card_path_way" -->




                      <!-- заголовок, меню -->

                      <div class="sobi_card_header">
                        <div class="sobi_card_header_title">
                          <h5>Объект отзыва</h5>
                        </div>
                        <div class="sobi_card_header_menu">
                          <div class="sobi_card_header_add_review">
                            <a href="/otzyvcategory?page=write_ad&amp;catid=66483">
                              <span>добавить oтзыв</span>
                            </a>
                          </div>
                          <div class="sobi_card_header_allads">
                            <a>
                              <span>всего отзывов</span>
                              <div class="sobi_card_header_allads_cnt">
                                <?php echo get_comments_number($post->ID); ?>
                              </div>
                            </a>
                          </div>
                          <div class="sobi_card_header_comments">
                            <span>комментариев</span>
                            <div class="sobi_card_header_comments_cnt">0</div>
                          </div>
                          <div class="sobi_card_header_id">
                            <span>id <?php echo the_ID(); ?></span>
                          </div>
                        </div>
                      </div>
                      <!-- class="sobi_card_header" -->



                      <!-- наименование объекта -->

                      <div class="sobi_card_object_name_box">
                        <div class="sobi_card_object_name">
                          <div id="img_norecommend" style="display:none; position:absolute; left:30%; top:1px; opacity: .7; z-index:999;"><img src="/images/nerecomend.png" alt="Не рекомендуем" class="hasTip">
                            <!-- class='hasTip' -->
                          </div>
                          <div class="sobi_card_object_title">
                            <h1><?php the_title(); ?></h1>
                          </div>
                        </div>

                        <!-- кнопки голосования -->
                        <style type="text/css">
                          i.lb-share-tt {
                            z-index: -99999 !important;
                            position: absolute !important;
                            overflow: hidden !important;
                            left: -9999999px !important;
                          }

                          .lb-count {
                            display: block !important;
                          }
                        </style>

                        <div class="sobi_card_object_vote">
                          <div id="jl_voting_mod">
                            <div id="loadimg_66311" style="display: none; float: right; margin: 0 10px 0 0;">
                              <img src="/components/com_sobi2/01_white.gif" alt=".">
                            </div>
                            <div id="voteButtons_66311">
                              <div class="sobi_card_object_vote_but_plus" onclick="LikeBtn.vote(1, 0, event);" title="Рекомендую" id="lb-like-0">
                                <div class="sobi_card_object_vote_but_plus_img">
                                  <img src="/images/good_hand_18x18.png" alt="рекомендую">
                                </div>
                                <div class="sobi_card_object_votecount_plus lb-count" data-count="<?php echo do_shortcode('[likebtn_likes]'); ?>" style="display: inline-block;">
                                  <?php echo do_shortcode('[likebtn_likes]'); ?>
                                </div>
                              </div>
                              <div class="sobi_card_object_vote_but_minus" onclick="LikeBtn.vote(-1, 0, event);" title="Не рекомендую" id="lb-dislike-0">
                                <div class="sobi_card_object_vote_but_minus_img">
                                  <img src="/images/bad_hand_18x18.png" alt="не рекомендую">
                                </div>
                                <div class="sobi_card_object_votecount_minus lb-count" id="jlnotlikecnt_66311">
                                  <?php echo do_shortcode('[likebtn_dislikes]'); ?>
                                </div>
                              </div>
                            </div>
                            <div style="display: none;">
                              <?php echo do_shortcode('[likebtn theme="nero" lang="ru" show_like_label="0" ef_voting="push" addthis_service_codes="vk,odnoklassniki_ru,twitter,facebook,preferred_1,preferred_2,preferred_3,compact"]'); ?>
                            </div>
                          </div>
                        </div>
                        <!-- class="sobi_card_object_vote" -->

                        <!-- добавлено, просмотры -->

                        <div class="sobi_card_object_adddate_showhits_box">
                          <div class="sobi_card_object_adddate">
                            <img class="icon3" src="/images/contacts.png" alt="добавлено">Добавлено:
                            <?php the_time('j F Y'); ?> &nbsp;&nbsp;
                          </div>
                          <div class="sobi_card_object_showhits">
                            <img class="icon3" src="/images/eye.png" title="просмотры" alt="просмотры">&nbsp;Просмотров:
                            <?php echo rand(250, 400); //echo get_post_meta ($post->ID,'views',true); ?>
                          </div>
                        </div>

                      </div>
                      <!-- class="sobi_card_object_name_box"> -->
                      <?php global $post; $comments_lalala = get_comments(array('post_id' => $post->ID));$rating_lalala = get_comment_meta( $comments_lalala[0]->comment_ID, 'rating', true );
                      if ($rating_lalala) {?>
                      <span style="font-size:120%;">
                        <a style="color:#2b2b2b;">
                          <span class="hasTip" style="width:100px; margin: 3px 10px 0px 0px; height:19px; float:left; overflow:hidden; background:url(/images/stars100r.png) 0 <?php echo ($rating_lalala * 20); ?>%;"></span>
                          ( <?php echo get_comments_number($post->ID); ?> )
                        </a>
                      </span>
                    <?php } ?>
                      <div id="top_stat_box" class="sobi_card_object_top_stat_box">


                        <!-- статистика по отзывам -->

                        <div class="sobi_card_object_stat_info_box">
                          <div class="sobi_card_object_stat">
                            <div class="sobi_card_object_stat_title">
                              <h4>статистика по отзывам</h4>
                            </div>
                          </div>
                          <div class="sobi_card_stat_info_value_box" style="padding:15px 20px;">
                            <span class="sobi_card_stat_info_value"><?php echo get_comments_number($post->ID); ?></span>
                          </div>

                          <div class="sobi_card_stat_info_stat_box">
                            <!-- положительные -->
                            <!-- background: -moz-linear-gradient(left, #f4f0ea 0%, #67a551 100%); background: -webkit-linear-gradient(left, #f4f0ea 0%, #67a551 100%); background: -o-linear-gradient(left, #f4f0ea 0%, #67a551 100%); background: -ms-linear-gradient(left, #f4f0ea 0%, #67a551 100%); background: linear-gradient(left, #f4f0ea 0%, #67a551 100%);'> -->

                            <div class="sobi_card_stat_info_bar_box">
                              <div class="sobi_card_stat_info_bar" style="border: 1px solid #67a551;">
                                <div class="sobi_card_stat_info_pct">
                                  <?php if ($good_reviews_perc) {echo $good_reviews_perc."%";}else{echo '0%';}?>
                                </div>
                                <div id="top_stat_bar_line_positive" class="sobi_card_stat_info_bar_line" style="width: <?php if ($good_reviews_perc) {echo $good_reviews_perc."%";}else{echo '0%';}?>; background: -webkit-linear-gradient(left, rgb(244, 240, 234) 0%, rgb(103, 165, 81) 100%);">
                                  <!-- style='width:100%;' background: #67a551; background: -moz-linear-gradient(left, #f4f0ea 0%, #67a551 100%); background: -webkit-linear-gradient(left, #f4f0ea 0%, #67a551 100%); background: -o-linear-gradient(left, #f4f0ea 0%, #67a551 100%); background: -ms-linear-gradient(left, #f4f0ea 0%, #67a551 100%); background: linear-gradient(left, #f4f0ea 0%, #67a551 100%);'> -->
                                </div>
                              </div>
                              <div class="sobi_card_stat_info_text_box">
                                <div class="sobi_card_stat_info_text">
                                  <span title="Количество положительных отзывов">
							<a>
								положительных
							</a>
						</span>
                                </div>
                                <div class="sobi_card_stat_info_cnt" style="background-color:#67a551;">
                                  <?php echo $good_reviews; ?>
                                </div>
                              </div>
                            </div>
                            <!-- нейтральные -->
                            <!-- background: -moz-linear-gradient(left, #f4f0ea 0%, #ffd288 100%); background: -webkit-linear-gradient(left, #f4f0ea 0%, #ffd288 100%); background: -o-linear-gradient(left, #f4f0ea 0%, #ffd288 100%); background: -ms-linear-gradient(left, #f4f0ea 0%, #ffd288 100%); background: linear-gradient(left, #f4f0ea 0%, #ffd288 100%);'> -->

                            <div class="sobi_card_stat_info_bar_box">
                              <div class="sobi_card_stat_info_bar">
                                <div class="sobi_card_stat_info_pct">
                                  <?php if ($middle_reviews_perc) {echo $middle_reviews_perc."%";}else{echo '0%';}?>
                                </div>
                                <div class="sobi_card_stat_info_bar_line">
                                </div>
                              </div>
                              <div class="sobi_card_stat_info_text_box">
                                <div class="sobi_card_stat_info_text">
                                  <span title="Количество нейтральных отзывов">
							нейтральных
						</span>
                                </div>
                                <div class="sobi_card_stat_info_cnt">
                                  <?php echo $middle_reviews; ?>
                                </div>
                              </div>
                            </div>
                            <!-- негативные -->
                            <!-- background: -moz-linear-gradient(left, #f4f0ea 0%, #f75973 100%); background: -webkit-linear-gradient(left, #f4f0ea 0%, #f75973 100%); background: -o-linear-gradient(left, #f4f0ea 0%, #f75973 100%); background: -ms-linear-gradient(left, #f4f0ea 0%, #f75973 100%); background: linear-gradient(left, #f4f0ea 0%, #f75973 100%);'> -->

                            <div class="sobi_card_stat_info_bar_box">
                              <div class="sobi_card_stat_info_bar">
                                <div class="sobi_card_stat_info_pct">
                                  <?php if ($bad_reviews_perc) {echo $bad_reviews_perc."%";}else{echo '0%';}?>
                                </div>
                                <div id="top_stat_bar_line_negative" class="sobi_card_stat_info_bar_line" style="width: <?php if ($bad_reviews_perc) {echo $bad_reviews_perc."%";}else{echo '0%';}?>; background: -webkit-linear-gradient(left, rgb(244, 240, 234) 0%, rgb(247, 89, 115) 100%);">
                                </div>
                                <div class="sobi_card_stat_info_bar_line">
                                </div>
                              </div>
                              <div class="sobi_card_stat_info_text_box">
                                <div class="sobi_card_stat_info_text">
                                  <span title="Количество негативных отзывов">
							негативных
						</span>
                                </div>
                                <div class="sobi_card_stat_info_cnt">
                                  <?php echo $bad_reviews; ?>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- class="sobi_card_stat_info_stat_box" -->
                        </div>
                        <!-- class="sobi_card_object_stat_info_box" -->



                        <!-- индекс PGI -->

                        <!-- background: -moz-linear-gradient(left top, # 0%, #f4f0ea 100%); background: -webkit-linear-gradient(left top, # 0%, #f4f0ea 100%); background: -o-linear-gradient(left top, # 0%, #f4f0ea 100%); background: -ms-linear-gradient(left top, # 0%, #f4f0ea 100%); background: linear-gradient(left top, # 0%, #f4f0ea 100%);"> -->
                        <div class="sobi_card_object_pgi_box">
                          <div class="sobi_card_object_pgi">
                            <div class="sobi_card_object_pgi_title">
                              <h4>индекс репутации PGI</h4>
                            </div>
                          </div>
                          <div class="sobi_card_pgi_value_box" style="<?php if ($good_reviews_perc >= 50 ) { ?>background: #67a551; <?php } else { ?>background: rgb(247, 89, 115); <?php } ?> padding:15px 10px;">
                            <span class="sobi_card_pgi_value hasTip"><?php if ($good_reviews_perc) {echo $good_reviews_perc;}else{echo '0';}?></span>
                          </div>
                          <div class="sobi_card_pgi_stat_box">
                            <div class="sobi_card_pgi_bar_box">
                              <div class="sobi_card_pgi_bar hasTip" style="border: 1px solid #;">
                                <div class="sobi_card_pgi_pct">
                                  <?php if ($good_reviews_perc) {echo $good_reviews_perc."%";}else{echo '0%';}?>
                                </div>
                                <div id="top_pgi_bar_line" class="sobi_card_pgi_bar_line" style="width: <?php if ($good_reviews_perc) {echo $good_reviews_perc."%";}else{echo '0%';}?>; background: -webkit-linear-gradient(right, rgb(103, 165, 81) 0%, rgb(244, 240, 234) 100%);">
                                  <!-- background: -moz-linear-gradient(right, # 0%, #f4f0ea 100%); background: -webkit-linear-gradient(right, # 0%, #f4f0ea 100%); background: -o-linear-gradient(right, # 0%, #f4f0ea 100%); background: -ms-linear-gradient(right, # 0%, #f4f0ea 100%); background: linear-gradient(right, # 0%, #f4f0ea 100%);">  -->
                                </div>
                              </div>
                              <div class="sobi_card_pgi_text_box">
                                <div class="sobi_card_pgi_text">
                                  <span>
							учтено отзывов
						</span>
                                </div>
                                <div class="sobi_card_pgi_cnt">
                                <?php echo $all_reviews; ?> </div>
                              </div>
                            </div>
                          </div>
                          <div class="sobi_card_object_pgi_box_tip">
                            <p>* В расчете индекса репутации PGI не участвуют рекламные и подозрительно короткие отзывы</p>
                          </div>
                        </div>

                        <!-- индекс PGT -->


                        <!-- background: -moz-linear-gradient(left top, #E3D7C8 0%, #f4f0ea 100%); background: -webkit-linear-gradient(left top, #E3D7C8 0%, #f4f0ea 100%); background: -o-linear-gradient(left top, #E3D7C8 0%, #f4f0ea 100%); background: -ms-linear-gradient(left top, #E3D7C8 0%, #f4f0ea 100%); background: linear-gradient(left top, #E3D7C8 0%, #f4f0ea 100%);"> -->
                        <div id="top_pgt" class="sobi_card_object_pgt_box">
                          <div class="sobi_card_object_pgt">
                            <div class="sobi_card_object_pgt_title">
                              <h4>индекс доверия PGT</h4>
                            </div>
                          </div>
                          <div class="sobi_card_pgt_value_box" style="background-color:#E3D7C8; ">
                            <span class="sobi_card_pgt_value hasTip">0</span>
                          </div>
                          <div class="sobi_card_pgt_stat_box">
                            <div class="sobi_card_pgt_bar_box">
                              <div class="sobi_card_pgt_bar hasTip" style="border: 1px solid #E3D7C8;">
                                <div id="top_pgt_bar_line" class="sobi_card_pgt_bar_line" style="background: -webkit-linear-gradient(right, rgb(227, 215, 200) 0%, rgb(244, 240, 234) 100%);">
                                </div>
                              </div>
                              <div class="sobi_card_pgt_text_box">
                                <div class="sobi_card_pgt_text">
                                  <span>
							индекс не рассчитан						</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="sobi_card_object_pgt_box_tip">
                            <p>* Индекс доверия к сайту компании, рассчитанный на основе ручного анализа. Заказать проверку можно <a>здесь</a></p>
                          </div>
                        </div>

                        <script type="text/javascript">
                          if (document.documentElement.clientWidth <= '640') {
                            document.getElementById('top_pgt_bar_line').style = 'width:%; background: #E3D7C8;';
                          } else {
                            document.getElementById('top_pgt_bar_line').style = 'width:%; background: -moz-linear-gradient(right, #E3D7C8 0%, #f4f0ea 100%); background: -webkit-linear-gradient(right, #E3D7C8 0%, #f4f0ea 100%); background: -o-linear-gradient(right, #E3D7C8 0%, #f4f0ea 100%); background: -ms-linear-gradient(right, #E3D7C8 0%, #f4f0ea 100%); background: linear-gradient(right, #E3D7C8 0%, #f4f0ea 100%);';
                          }
                        </script>

                      </div>
                      <!-- class="sobi_card_object_top_stat_box" -->




                      <div class="sobi_card_container">




                        <!-- информация об объекте отзыва -->

                        <div class="sobi_card_object_content_box">

                          <div class="sobi_card_object_logo_box">
                            <div class="sobi_card_object_logo">
                              <?php if (has_post_thumbnail()) { ?>
                                 <?php the_post_thumbnail(); ?>
                               <?php } else { ?>
                                <p>Л О Г О</p>
                               <?php } ?>
                             </div>
                          </div>
                          <?php

                           ?>
                          <div class="sobi_card_object_info_box">
                            <?php if(customTags()) {
                              foreach (customTags() as $tag) { ?>
                                <div class="sobi_card_object_info_row">
                                  <div class="sobi_card_object_info_item">
                                    <span><?php echo $tag['name']; ?></span>
                                  </div>
                                  <div class="sobi_card_object_info_data">
                                    <span><?php echo $tag['content']; ?></span>
                                  </div>
                                </div>
                              <?php }
                            } ?>
                          </div>
                          <!-- class="sobi_card_object_info" -->
                        </div>
                        <!-- class="sobi_card_object_content_box" -->




                        <div id="middle_stat_box" class="sobi_card_object_middle_stat_box">

                          <!-- статистика по отзывам -->

                          <div class="sobi_card_object_stat_info_box">
                            <div class="sobi_card_object_stat">
                              <div class="sobi_card_object_stat_title">
                                <div>статистика</div>
                              </div>
                            </div>
                            <div class="sobi_card_stat_info_value_box">
                              <span class="sobi_card_stat_info_value">1</span>
                            </div>

                            <div class="sobi_card_stat_info_bar_box">
                              <!-- положительные -->
                              <!-- background: -moz-linear-gradient(left, #f4f0ea 0%, #67a551 100%); background: -webkit-linear-gradient(left, #f4f0ea 0%, #67a551 100%); background: -o-linear-gradient(left, #f4f0ea 0%, #67a551 100%); background: -ms-linear-gradient(left, #f4f0ea 0%, #67a551 100%); background: linear-gradient(left, #f4f0ea 0%, #67a551 100%);'> -->

                              <div class="sobi_card_stat_info_bar" style="border: 1px solid #67a551;">
                                <div class="sobi_card_stat_info_pct">
                                  100%
                                </div>
                                <div id="middle_stat_bar_line_positive" class="sobi_card_stat_info_bar_line" style="width:100%; background-color:#67a551;">
                                </div>
                              </div>
                              <div class="sobi_card_stat_info_text">
                                <span title="Количество положительных отзывов">
					<a>
						положительных
					</a>
				</span>
                                <div class="sobi_card_stat_info_cnt" style="background-color:#67a551;">
                                  1
                                </div>
                              </div>
                              <!-- нейтральные -->
                              <!-- background: -moz-linear-gradient(left, #f4f0ea 0%, #ffd288 100%); background: -webkit-linear-gradient(left, #f4f0ea 0%, #ffd288 100%); background: -o-linear-gradient(left, #f4f0ea 0%, #ffd288 100%); background: -ms-linear-gradient(left, #f4f0ea 0%, #ffd288 100%); background: linear-gradient(left, #f4f0ea 0%, #ffd288 100%);'> -->

                              <div class="sobi_card_stat_info_bar">
                                <div class="sobi_card_stat_info_pct">
                                  0%
                                </div>
                                <div class="sobi_card_stat_info_bar_line">
                                </div>
                              </div>
                              <div class="sobi_card_stat_info_text">
                                <span title="Количество нейтральных отзывов">
					нейтральных
				</span>
                                <div class="sobi_card_stat_info_cnt">
                                  0
                                </div>
                              </div>
                              <!-- негативные -->
                              <!-- background: -moz-linear-gradient(left, #f4f0ea 0%, #f75973 100%); background: -webkit-linear-gradient(left, #f4f0ea 0%, #f75973 100%); background: -o-linear-gradient(left, #f4f0ea 0%, #f75973 100%); background: -ms-linear-gradient(left, #f4f0ea 0%, #f75973 100%); background: linear-gradient(left, #f4f0ea 0%, #f75973 100%);'> -->

                              <div class="sobi_card_stat_info_bar">
                                <div class="sobi_card_stat_info_pct">
                                  0%
                                </div>
                                <div class="sobi_card_stat_info_bar_line">
                                </div>
                              </div>
                              <div class="sobi_card_stat_info_text">
                                <span title="Количество негативных отзывов">
					негативных
				</span>
                                <div class="sobi_card_stat_info_cnt">
                                  0
                                </div>
                              </div>
                            </div>
                            <!-- class="sobi_card_stat_info_bar_box" -->
                          </div>
                          <!-- class="sobi_card_object_stat_info_box" -->

                          <!--
<script type="text/javascript">
	if (document.body.clientWidth <= '640') {
		document.getElementById('middle_stat_bar_line_positive').style = 'width:100%; background-color:#67a551;';
		document.getElementById('middle_stat_bar_line_neutral').style = 'width:%; background-color:#ffd288;';
		document.getElementById('middle_stat_bar_line_negative').style = 'width:%; background-color:#f75973;';
	}
	else {
		document.getElementById('middle_stat_bar_line_positive').style = 'width:100%; background: -moz-linear-gradient(left, #f4f0ea 0%, #67a551 100%); background: -webkit-linear-gradient(left, #f4f0ea 0%, #67a551 100%); background: -o-linear-gradient(left, #f4f0ea 0%, #67a551 100%); background: -ms-linear-gradient(left, #f4f0ea 0%, #67a551 100%); background: linear-gradient(left, #f4f0ea 0%, #67a551 100%);';
		document.getElementById('middle_stat_bar_line_neutral').style = 'width:%; background: -moz-linear-gradient(left, #f4f0ea 0%, #ffd288 100%); background: -webkit-linear-gradient(left, #f4f0ea 0%, #ffd288 100%); background: -o-linear-gradient(left, #f4f0ea 0%, #ffd288 100%); background: -ms-linear-gradient(left, #f4f0ea 0%, #ffd288 100%); background: linear-gradient(left, #f4f0ea 0%, #ffd288 100%);';
		document.getElementById('middle_stat_bar_line_negative').style = 'width:%; background: -moz-linear-gradient(left, #f4f0ea 0%, #f75973 100%); background: -webkit-linear-gradient(left, #f4f0ea 0%, #f75973 100%); background: -o-linear-gradient(left, #f4f0ea 0%, #f75973 100%); background: -ms-linear-gradient(left, #f4f0ea 0%, #f75973 100%); background: linear-gradient(left, #f4f0ea 0%, #f75973 100%);';
	}
</script>
-->

                          <!-- индекс PGI -->

                          <!-- background: -moz-linear-gradient(left top, # 0%, #f4f0ea 100%); background: -webkit-linear-gradient(left top, # 0%, #f4f0ea 100%); background: -o-linear-gradient(left top, # 0%, #f4f0ea 100%); background: -ms-linear-gradient(left top, # 0%, #f4f0ea 100%); background: linear-gradient(left top, # 0%, #f4f0ea 100%);"> -->
                          <div class="sobi_card_object_pgi_box">
                            <div class="sobi_card_object_pgi">
                              <div class="sobi_card_object_pgi_title">
                                <span>индекс PGI</span>
                              </div>
                            </div>
                            <div class="sobi_card_pgi_value_box" style="background-color:#;">
                              <span class="sobi_card_pgi_value">0</span>
                            </div>
                            <div class="sobi_card_pgi_bar_box">
                              <div class="sobi_card_pgi_bar" style="border: 1px solid #;">
                                <div class="sobi_card_pgi_pct">
                                  0%
                                </div>
                                <div class="sobi_card_pgi_bar_line" style="width:0%; background-color:#;">
                                </div>
                              </div>
                              <div class="sobi_card_pgi_text">
                                <span title="В расчете рейтинга не участвуют рекламные и подозрительно короткие отзывы">учтено отзывов</span>
                                <div class="sobi_card_pgi_cnt">
                                  1 </div>
                              </div>
                            </div>
                          </div>

                          <!-- индекс PGT -->

                          <!-- background: -moz-linear-gradient(left top, #E3D7C8 0%, #f4f0ea 100%); background: -webkit-linear-gradient(left top, #E3D7C8 0%, #f4f0ea 100%); background: -o-linear-gradient(left top, #E3D7C8 0%, #f4f0ea 100%); background: -ms-linear-gradient(left top, #E3D7C8 0%, #f4f0ea 100%); background: linear-gradient(left top, #E3D7C8 0%, #f4f0ea 100%);"> -->
                          <div id="middle_pgt" class="sobi_card_object_pgt_box">
                            <div class="sobi_card_object_pgt">
                              <div class="sobi_card_object_pgt_title">
                                <span>индекс PGT</span>
                              </div>
                            </div>
                            <div class="sobi_card_pgt_value_box" style="background-color:#E3D7C8;">
                              <span class="sobi_card_pgt_value hasTip" ;="">0</span>
                            </div>
                            <div class="sobi_card_pgt_bar_box">
                              <div class="sobi_card_pgt_bar" style="border: 1px solid #E3D7C8;">
                                <div class="sobi_card_pgt_bar_line" style="width:0%; background-color:#E3D7C8;">
                                </div>
                              </div>
                              <div class="sobi_card_pgt_text">
                                <span class="hasTip">уровень доверия к сайту</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- class="sobi_card_object_middle_stat_box" -->

                        <div class="sobi_card_object_information_box">

                          <!-- официальный представитель -->


                          <!-- class="sobi_card_object_official_box" -->

                          <!-- информация о компании -->

                          <div class="sobi_card_object_news_right_box">
                            <div class="sobi_card_object_news_box">
                              <div class="sobi_card_object_news">
                                <div class="sobi_card_object_news_title">
                                  <h4>информация о компании</h4>
                                  <div class="sobi_card_object_review_button" onclick="if (getObj('object_company_data').style.display=='none') {getObj('object_company_data').style.display='block'; this.innerHTML = 'скрыть';} else {getObj('object_company_data').style.display='none'; this.innerHTML = 'показать';} "
                                  value="показать">
                                    скрыть
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div id="object_company_data" class="sobi_card_object_review_data_box">

                              <div class="product-text">
                                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                  <p style="white-space: pre-line; margin: 0 0 25px;">
                                    <?php echo get_the_content($post->ID); ?>
                                  </p>
                                  <?php endwhile; else : ?>
                                    <?php endif; ?>

                              </div>
                            </div>
                          </div>

                          <!-- новые отзывы -->

                          <div class="sobi_card_object_reviews_box">
                            <!--	<div class="sobi_card_object_review_left_box">
		<div class="sobi_card_object_review_button">
			<span onclick="if (getObj('object_review_data').style.display=='none') {getObj('object_review_data').style.display='block'; this.innerHTML = 'скрыть'} else {getObj('object_review_data').style.display='none'; this.innerHTML = 'читать';} " value='читать'>скрыть</span>
		</div>
	</div>
-->
                            <div class="sobi_card_object_review_right_box">
                              <div class="sobi_card_object_review_info">
                                <div class="sobi_card_object_review_info_title">
                                  <h4>новые отзывы</h4>
                                  <div class="sobi_card_object_review_button" onclick="if (getObj('object_review_data').style.display=='none') {getObj('object_review_data').style.display='block'; this.innerHTML = 'скрыть';} else {getObj('object_review_data').style.display='none'; this.innerHTML = 'показать';} "
                                  value="показать">
                                    скрыть
                                  </div>
                                </div>
                              </div>

                              <div id="object_review_data" class="sobi_card_object_review_data_box">



<style>
#reply-title, #email-notes, .comment-form-cookies-consent {
  display: none;
}
#commentform > p > label {
  display: block;
  color: #646464;
  font-size: 13px;
  line-height: 20px;
  margin-top: 5px;
}
#commentform {
  color: black;
}
#commentform > p > input[type=text], #commentform > p > textarea {
  width: 100%;
  padding: 5px;
  font-size: 15px;
  color: black;
  box-sizing: border-box;
}
#comment {
  margin: 0;
}
.comment-form-rating {
  margin-bottom: 10px;
}
.more-better {
  padding-left: 10px;
}
.commentratingbox {
  display: block;
  margin-top: 5px;
}
.form-submit > #submit {
  padding: 5px 20px;
  font-size: 14px;
  background: #EF7B00;
  text-shadow: 0px 1px 1px #9E9A9A;
  color: white;
  outline: none;
  border: 1px solid #E97D14;
  box-shadow: 0px 2px 3px #ccc;
  font-weight: bold;
  border-radius: 3px;
}
.attachment-post-thumbnail.size-post-thumbnail.wp-post-image {
  max-width: 100%;
  height: auto !important;
}
#object_review_data #respond {
  display: none;
}
.comments-title {
  display: none;
}
.commentlist {
  padding: 0;
  margin: 0;
}
.comment-author.vcard {
  padding: 20px 0 0 0;
  color: black;
  font-style: normal !important;
  font-size: 13px;
}
.comment-author.vcard cite {
  font-style: normal !important;
}
.comment-author.vcard .says {
  display: none;
}
.avatar.avatar-32.photo {
  height: 15px;
  width: 15px;
  margin-right: 5px;
}
.comment-meta.commentmetadata {
  background-color: #fcfaf8;
    background: #fcfaf8;
    background: -moz-linear-gradient(bottom, #fbf9f7 0%, #f3efe9 10%, #ede4dc 100%);
    background: -webkit-linear-gradient(bottom, #fbf9f7 0%, #f3efe9 10%, #ede4dc 100%);
    background: -o-linear-gradient(bottom, #fbf9f7 0%, #f3efe9 10%, #ede4dc 100%);
    background: -ms-linear-gradient(bottom, #fbf9f7 0%, #f3efe9 10%, #ede4dc 100%);
    background: linear-gradient(bottom, #fbf9f7 0%, #f3efe9 10%, #ede4dc 100%);
    border-bottom: 1px solid #d8c8b4;
    border-top: 1px solid #fff;
    border-radius: 3px;
    color: #876543;
    float: left;
    font-family: Tahoma;
    padding: 1px 2px;
    position: relative;
    text-shadow: 1px 1px 0 #fff;
    width: 100%;
  margin-top: 5px;
  padding-left: 10px;
}
.comment-meta.commentmetadata a {
  color: #876543;
  text-shadow: 1px 1px 0 #fff;
}
.comment-body strong {
  width: 100%;
  display: block;
  text-align: left;
  color: #654321;
    text-decoration: underline;
    text-shadow: 1px 1px #ffffff;
  font-weight: normal;
  font-size: 16px;
  background-color: #f4f0ea;
  padding: 5px 10px;
  margin-left: -10px;
}
.fa.ecr-liked-wrap,
.fa.ecr-disliked-wrap,
.ecr-count-wrap.ecr-only-total-count-wrap.ecr-common-wrap,
.ecr-count-wrapper {
  background-color: transparent !important;
  color: #f27208 !important;
  padding: 0px !important;
  border: 0px !important;
  box-shadow: unset !important;
  display: inlie-block;
  min-width: unset !important;
}
.ecr-like-dislike-wrapper {
  padding: 0;
  margin: 35px 0 0px !important;
  float: right;
}
.comment-body > p {
  color: black;
  font-size: 15px;
  line-height: 22px;
  margin: 15px 10px 20px;
}
.reply {
  display: none;
}
.comment-body {
  padding-bottom: 15px;
  border-bottom: 1px solid #f4f0ea;
}
.comment-meta.commentmetadata {
  margin: 0;
  padding-top: 5px;
}
.comment-author.vcard {
  background-color: #f4f0ea;
  padding-top: 0;
  margin-top: 20px;
}
</style>

                                <ol class="commentlist">
                                  <?php comments_template(''); ?>
                                </ol>
                              </div>
                            </div>
                          </div>
                          <!-- class="sobi_card_object_review_box" -->

                          <!-- новости, пресс-релизы -->

                          <!--
		<div class="sobi_card_object_news_left_box">
		</div>
-->

                        <!-- class="sobi_card_object_information_box" -->

                        <div class="sobi_card_object_news_right_box">
                          <div class="sobi_card_object_news_box">
                            <div class="sobi_card_object_news">
                              <div class="sobi_card_object_news_title">
                                <h4>Добавить Отзыв о данной компании</h4>
                              </div>
                            </div>
                          </div>
                        </div>
                        <?php comment_form( $args, $post_id ); ?>
                      </div>




                      <div class="sobi_card_object_stat_box">

                        <div id="right_stat_box" class="sobi_card_object_right_stat_box">

                          <!-- статистика по отзывам -->

                          <div class="sobi_card_object_stat_info_box">
                            <div class="sobi_card_object_stat">
                              <div class="sobi_card_object_stat_title">
                                <div>статистика</div>
                              </div>
                            </div>
                            <div class="sobi_card_stat_info_value_box">
                              <span class="sobi_card_stat_info_value">1</span>
                            </div>

                            <div class="sobi_card_stat_info_bar_box">
                              <!-- положительные -->
                              <!-- background: -moz-linear-gradient(left, #f4f0ea 0%, #67a551 100%); background: -webkit-linear-gradient(left, #f4f0ea 0%, #67a551 100%); background: -o-linear-gradient(left, #f4f0ea 0%, #67a551 100%); background: -ms-linear-gradient(left, #f4f0ea 0%, #67a551 100%); background: linear-gradient(left, #f4f0ea 0%, #67a551 100%);'> -->

                              <div class="sobi_card_stat_info_bar" style="border: 1px solid #67a551;">
                                <div class="sobi_card_stat_info_pct">
                                  100%
                                </div>
                                <div id="right_stat_bar_line_positive" class="sobi_card_stat_info_bar_line" style="width: 100%; background: -webkit-linear-gradient(left, rgb(244, 240, 234) 0%, rgb(103, 165, 81) 100%);">
                                </div>
                              </div>
                              <div class="sobi_card_stat_info_text">
                                <span title="Количество положительных отзывов">
					<a>
						положительных
					</a>
				</span>
                                <div class="sobi_card_stat_info_cnt" style="background-color:#67a551;">
                                  1
                                </div>
                              </div>
                              <!-- нейтральные -->
                              <!-- background: -moz-linear-gradient(left, #f4f0ea 0%, #ffd288 100%); background: -webkit-linear-gradient(left, #f4f0ea 0%, #ffd288 100%); background: -o-linear-gradient(left, #f4f0ea 0%, #ffd288 100%); background: -ms-linear-gradient(left, #f4f0ea 0%, #ffd288 100%); background: linear-gradient(left, #f4f0ea 0%, #ffd288 100%);'> -->

                              <div class="sobi_card_stat_info_bar">
                                <div class="sobi_card_stat_info_pct">
                                  0%
                                </div>
                                <div class="sobi_card_stat_info_bar_line">
                                </div>
                              </div>
                              <div class="sobi_card_stat_info_text">
                                <span title="Количество нейтральных отзывов">
					нейтральных
				</span>
                                <div class="sobi_card_stat_info_cnt">
                                  0
                                </div>
                              </div>
                              <!-- негативные -->
                              <!-- background: -moz-linear-gradient(left, #f4f0ea 0%, #f75973 100%); background: -webkit-linear-gradient(left, #f4f0ea 0%, #f75973 100%); background: -o-linear-gradient(left, #f4f0ea 0%, #f75973 100%); background: -ms-linear-gradient(left, #f4f0ea 0%, #f75973 100%); background: linear-gradient(left, #f4f0ea 0%, #f75973 100%);'> -->

                              <div class="sobi_card_stat_info_bar">
                                <div class="sobi_card_stat_info_pct">
                                  0%
                                </div>
                                <div class="sobi_card_stat_info_bar_line">
                                </div>
                              </div>
                              <div class="sobi_card_stat_info_text">
                                <span title="Количество негативных отзывов">
					негативных
				</span>
                                <div class="sobi_card_stat_info_cnt">
                                  0
                                </div>
                              </div>
                            </div>
                            <!-- class="sobi_card_stat_info_bar_box" -->
                          </div>
                          <!-- class="sobi_card_object_stat_info_box" -->

                          <script type="text/javascript">
                            if (document.body.clientWidth <= '640') {
                              document.getElementById('right_stat_bar_line_positive').style = 'width:100%; background-color: #67a551;';
                              document.getElementById('right_stat_bar_line_neutral').style = 'width:%; background-color: #ffd288;';
                              document.getElementById('right_stat_bar_line_negative').style = 'width:%; background-color: #f75973;';
                            } else {
                              document.getElementById('right_stat_bar_line_positive').style = 'width:100%; background: -moz-linear-gradient(left, #f4f0ea 0%, #67a551 100%); background: -webkit-linear-gradient(left, #f4f0ea 0%, #67a551 100%); background: -o-linear-gradient(left, #f4f0ea 0%, #67a551 100%); background: -ms-linear-gradient(left, #f4f0ea 0%, #67a551 100%); background: linear-gradient(left, #f4f0ea 0%, #67a551 100%);';
                              document.getElementById('right_stat_bar_line_neutral').style = 'width:%; background: -moz-linear-gradient(left, #f4f0ea 0%, #ffd288 100%); background: -webkit-linear-gradient(left, #f4f0ea 0%, #ffd288 100%); background: -o-linear-gradient(left, #f4f0ea 0%, #ffd288 100%); background: -ms-linear-gradient(left, #f4f0ea 0%, #ffd288 100%); background: linear-gradient(left, #f4f0ea 0%, #ffd288 100%);';
                              document.getElementById('right_stat_bar_line_negative').style = 'width:%; background: -moz-linear-gradient(left, #f4f0ea 0%, #f75973 100%); background: -webkit-linear-gradient(left, #f4f0ea 0%, #f75973 100%); background: -o-linear-gradient(left, #f4f0ea 0%, #f75973 100%); background: -ms-linear-gradient(left, #f4f0ea 0%, #f75973 100%); background: linear-gradient(left, #f4f0ea 0%, #f75973 100%);';
                            }
                          </script>

                          <!-- индекс PGI -->

                          <!-- background: -moz-linear-gradient(left top, # 0%, #f4f0ea 100%); background: -webkit-linear-gradient(left top, # 0%, #f4f0ea 100%); background: -o-linear-gradient(left top, # 0%, #f4f0ea 100%); background: -ms-linear-gradient(left top, # 0%, #f4f0ea 100%); background: linear-gradient(left top, # 0%, #f4f0ea 100%);"> -->
                          <div class="sobi_card_object_pgi_box">
                            <div class="sobi_card_object_pgi">
                              <div class="sobi_card_object_pgi_title">
                                <span>индекс PGI</span>
                              </div>
                            </div>
                            <div id="right_pgi_value_box" class="sobi_card_pgi_value_box" style="">
                              <span class="sobi_card_pgi_value">0</span>
                            </div>
                            <div class="sobi_card_pgi_bar_box">
                              <div class="sobi_card_pgi_bar" style="border: 1px solid #;">
                                <div id="right_pgi_bar_line" class="sobi_card_pgi_bar_line" style="width: <?php if ($good_reviews_perc) {echo $good_reviews_perc."%";}else{echo '0%';}?>; background: -webkit-linear-gradient(right, rgb(103, 165, 81) 0%, rgb(244, 240, 234) 100%);">
                                </div>
                              </div>
                              <div class="sobi_card_pgi_text">
                                <span title="В расчете рейтинга не участвуют рекламные и подозрительно короткие отзывы">учтено отзывов</span>
                                <div class="sobi_card_pgi_cnt">
                                  1 </div>
                              </div>
                            </div>
                          </div>

                          <!-- индекс PGT -->

                          <!-- background: -moz-linear-gradient(left top, #E3D7C8 0%, #f4f0ea 100%); background: -webkit-linear-gradient(left top, #E3D7C8 0%, #f4f0ea 100%); background: -o-linear-gradient(left top, #E3D7C8 0%, #f4f0ea 100%); background: -ms-linear-gradient(left top, #E3D7C8 0%, #f4f0ea 100%); background: linear-gradient(left top, #E3D7C8 0%, #f4f0ea 100%);"> -->
                          <div id="right_pgt" class="sobi_card_object_pgt_box">
                            <div class="sobi_card_object_pgt">
                              <div class="sobi_card_object_pgt_title">
                                <span>индекс PGT</span>
                              </div>
                            </div>
                            <div id="right_pgt_value_box" class="sobi_card_pgt_value_box" style="background: -webkit-linear-gradient(left top, rgb(227, 215, 200) 0%, rgb(244, 240, 234) 100%);">
                              <span class="sobi_card_pgt_value hasTip" ;="">0</span>
                            </div>
                            <div class="sobi_card_pgt_bar_box">
                              <div class="sobi_card_pgt_bar" style="border: 1px solid #E3D7C8;">
                                <div id="right_pgt_bar_line" class="sobi_card_pgt_bar_line" style="width: 0%; background: -webkit-linear-gradient(right, rgb(227, 215, 200) 0%, rgb(244, 240, 234) 100%);">
                                </div>
                              </div>
                              <div class="sobi_card_pgt_text">
                                <span class="hasTip">уровень доверия к сайту</span>
                              </div>
                            </div>
                          </div>


                        </div>
                        <!-- class="sobi_card_object_right_stat_box" -->

                        <!--
<script type="text/javascript">if (document.body.clientWidth <= '640') {getObj('middle_stat_box').style.display = 'block'; getObj('right_stat_box').style.display = 'none';}</script>
-->
                      </div>
                      <!-- class="sobi_card_object_stat_box" -->

                      <script type="text/javascript">
                        var pgt_box = 0;
                        var norecommend = 0;
                        if (pgt_box == 1 && norecommend == 1) {
                          getObj('top_pgt').style.display = 'block';
                          getObj('img_norecommend').style.display = 'block';
                          getObj('middle_pgt').style.display = 'block';
                          getObj('right_pgt').style.display = 'block';
                        }
                      </script>
                    </div>
                    <!-- class="sobi_card_container" -->

                    <!-- dvs
<table class="table_sobi_cards" cellspacing="5" style="width:99%;">
<tr>
    <td colspan="2" style="width: 79.9%;" >

	<div style="float:left;width:210px;height:210px;overflow:hidden;border-radius:3px;"><img src="http://pravogolosa.net/images/com_sobi2/clients/66311_img.png" alt="Интернет-магазин оригинальной парфюмерии Parfumoda.ru" class="sobi2DetailsImage"/>	</div>
	<div class="contacts80" >
		<table style="padding:5px;">
-->

                    <!-- dvs - 22.04.2016 -->



                  </div>
                  <!-- class="sobi_detail" -->

                  <table class="sobi2Footer">
                    <tbody>
                      <tr>
                        <td id="sobi2Footer"></td>
                        <td id="sobi2rss"></td>
                      </tr>
                      <tr>
                        <td colspan="2"></td>
                      </tr>
                    </tbody>
                  </table>

                </div>

                <!-- end of Sigsiu Online Business Index 2 component Memory 5,270,464 / Time 0.60908198356628 / Queries: 0 -->

              </div>



              <!-- content end -->

            </div>
            <!-- mainmiddle end -->

            <div id="mainbottom" class="floatbox">

              <div class="mainbottombox width100  float-left">


              </div>

            </div>
            <!-- mainbottom end -->

          </div>
        </div>
      </div>
    </div>
    <!-- main end -->

  </div>
  </div>




  <?php get_footer(); ?>
