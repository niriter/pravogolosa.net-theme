<?php get_header(); ?>
                <div id="middle">
                  <div class="background">
                    <div id="left">
                      <div id="left_container" class="clearfix">
                        <div class="_blank">
                          <div class="module deepest">
                          </div>
                        </div>
                        <div class="_blank">
                          <div class="module deepest">
                          </div>
                        </div>
                        <div class="_blank">
                        </div>
                        <div class="mod-clip">
                          <div class="module">
                            <div class="badge-paperclip"></div>
                            <div class="box-t1">
                              <div class="box-t2"></div>
                            </div>
                            <div class="box-1">
                              <div class="box-2 deepest">
                                <h3 class="header"><span class="header-2"><span class="header-3">Как<span class="color"> правильно написать отзыв или жалобу?</span></span></span></h3>
                                <div>
                                  <ul>
                                    <li><span style="font-size: 12px;"> Пишите отзыв исходя из личного опыта. Ваш опыт это самое ценное.<br></span></li>
                                    <li><span style="font-size: 12px;"> Жалоба или отзыв должны содержать факты: место, дату события, номера договоров, квитанций, чеков, имена или фамилии сотрудников и т.д. </span></li>
                                    <li><span style="font-size: 12px;"> В отзыве не должно быть нецензурной лексики и оскорблений, или каких-либо нарушений законодательства. </span></li>
                                    <li><span style="font-size: 12px;"> Отзыв не должен быть ложью и клеветой, направленной на дискредитацию деловой репутации объекта отзыва. </span></li>
                                    <li><span style="font-size: 12px;">Отзыв не должен быть рекламой от фирмы, либо плагиатом.</span></li>
                                    <li><span style="font-size: 12px;">Оставьте реальные контактные данные, если хотите, чтобы объект отзыва связался с вами и как-либо исправил ситуацию в вашу пользу.</span></li>
                                    <li><span style="font-size: 12px;"> Постарайтесь точно определить свое пожелание в отзыве, для чего вы его пишите? Например, прошу Вас отремонтировать дорогу , крышу, прошу Вас разобраться в сложившейся ситуации и компенсировать мне моральный и материальный ущерб или, прошу руководство премировать врача городской больницы и т.д.</span></li>
                                  </ul>
                                </div>
                              </div>
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
                    <div id="main">
                      <div id="main_container" class="clearfix">
                        <div id="mainmiddle" class="floatbox">
                          <div id="content">
                            <div id="content_container" class="clearfix">
                              <div class="floatbox">
                                &#65279;&#65279;
                                <div class="adsmanager_pathway">
                                  <a>Отзывы</a> </div>
                                <h3>По вашему запросу <em>«<?php echo get_search_query(); ?>»</em>  всего найдено компаний: <?php global $wp_query; echo $wp_query->found_posts ?> </h3>&#65279;
                                <h1 class="contentheading">Все Компании</h1><br>
                                <!-- class="adsmanager_search_box" -->
                                <div class="adsmanager_div">
                                  <?php if ( have_posts() ) : ?>
                                    <?php while ( have_posts() ) : the_post(); ?>
                                      <div class="ads_row">
                                        <div class="ads_author" style="background-color:#F3FEE0;">
                                          <div class="module">
                                            <div style="margin:8px;float:left;"><span style="float:left;margin-right:5px;"><?php the_date('d-m-Y'); ?></span>
                                              <div style="width:100px;height:19px;margin-right:5px;float:left;overflow:hidden;background:url(/images/stars100.png) 0 100%;"></div></div><img style="float:right;border:1px solid #fff;border-radius:50%;background-color:#fff;margin-right:5px;box-shadow:1px 1px 2px #ccc;height:35px;" src="/components/com_comprofiler/plugin/templates/winclassic/images/avatar/nophoto_n.png" alt="аватар">
                                            <div style="float:right;margin:8px;"><?php the_author(); ?></div>
                                          </div>
                                        </div>
                                        <div class="ads_text_main" style="background-color:#FFFFFF;">
                                          <div>
                                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                            <img style="position:relative;top:2px;margin-right:10px;height:18px;" src="/images/flag_russia.png" alt="Россия">Россия -&gt; <?php the_category(' - ', 'multiple'); ?>
                                            <br>
                                            <h3 class="adsmanager_cat"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?> отзывы</a></h3>
                                            <div style="margin-bottom:8px;position:relative;"><?php echo wp_trim_words( get_the_content(), '35' ); ?>
                                              <a href="<?php the_permalink(); ?>">
                                                <br> Подробнее...</a>
                                            </div>
                                          </div>
                                        </div>

                                        <div>
                                          <div style="background-color:#FFFFFF;border-radius:5px;vertical-align:bottom;"><a href="<?php the_permalink(); ?>">Читать все отзывы (<?php echo get_comments_number(); ?>)</a>
                                            <a style="padding:0px 10px;" href="<?php the_permalink(); ?>">Добавить отзыв</a>
                                            <span style="font-size:120%;color:#D89535;float:right;">
                                              <img src="/images/eye.png" title="Просмотры" alt="Просмотры"> <?php echo get_post_meta ($post->ID,'views',true); ?> <img src="/images/comment.png" title="Комментарии" alt="Комментарии"> <?php echo get_comments_number(); ?>
                                            </span>
                                          </div>
                                        </div>
                                      </div>
                                    <?php endwhile; ?>
                                <?php else : ?>
                                    <h4>По запросу <b>"<?php echo get_search_query(); ?>"</b> ничего не нашлось. Попробуйте изменить условия поиска.</h4>
                                <?php endif; ?>
                                </div>
                                <!-- class="adsmanager_div" -->


                                <div class="adsmanager_description">
                                </div>
                                <div class="adsmanager_footer">

                                  <br>

                                </div>

                              </div>



                              <!-- content end -->

                            </div>
                            <!-- mainmiddle end -->

                            <div id="mainbottom" class="floatbox">

                              <div class="mainbottombox width100  float-left">
                                <div class="_blank">
                                  <div class="module deepest">


                                  </div>
                                </div>

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
