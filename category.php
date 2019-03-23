<?php get_header(); ?>
<style>

.mod-cardboard, .mod-cardboard b {
  background-color: white;
  color: #0e0e0e !important;
   text-shadow: unset !important;
  box-shadow: unset !important;
}
.mod-cardboard a {
  color: #822b2b!important;
}
.badge-prov {
  display: none;
}


</style>

  <div id="middle">
    <div class="background">


      <div id="left">
        <div id="left_container" class="clearfix">
          <div class="_blank">
            <div class="module deepest">
              <img src="<?php echo home_url(); ?>/img/rcya-1.png" style="max-width: 100%;height: auto;cursor: pointer;">
            </div>
          </div>
          <div class="_blank">
            <div class="module deepest">
              <img src="<?php echo home_url(); ?>/img/rcya-2.png" style="max-width: 100%;height: auto;cursor: pointer;">
            </div>
          </div>
          <div class="_blank">
            <div class="module deepest">
              <img src="<?php echo home_url(); ?>/img/rcya-3.png" style="max-width: 100%;height: auto;cursor: pointer;">
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

                  &#65279;&#65279; &#65279;&#65279;
                  <!-- Start of Sigsiu Online Business Index 2 component -->
                  <div class="sobi2">
                    <?php $term = get_queried_object(); ?>



                    <table class="sobi2Header">
                      <tbody>
                        <tr>
                          <td id="sobi2HeaderComLink"> <a class="sobi2Header">Объекты отзывов</a> </td>
                        </tr>
                      </tbody>
                    </table>


                    <table class="sobi2CompDesc">
                      <tbody>
                        <tr>
                          <td>
                            <div>
                              <?php echo category_description(); ?>
                                <?php $cat = get_the_category($post->ID); ?>
                            </div>
                          </td>
                        </tr>


                      </tbody>
                    </table>
                    <h3><?php echo get_cat_name( $term->term_id ) ?></h3>
                    <br>
                      <?php
                            $children = get_terms( $term->taxonomy, array(
                                'parent'    => $term->term_id,
                                'hide_empty' => false
                            ) );
                            if ( $children ) { ?>

                              <table id="sobi2CatListSymbols">
                                <tbody>
                                  <?php foreach( $children as $key=>$subcat ) { ?>
                                    <?php if(!$key&2) {
                                      echo "<tr>";
                                    } ?>
                                    <td style="width: 50%;">
                                      <p class="sobi2CatName"><a href="<?php echo esc_url(get_term_link($subcat, $subcat->taxonomy)); ?>"><?php echo $subcat->name; ?></a></p>
                                      <p class="sobi2CatsListSymbolsIntrotext"></p>
                                    </td>
                                    <?php if($key%2) {
                                      echo "</tr>";
                                    } ?>
                                    <?php } ?>
                                </tbody>
                              </table>
                            <?php } ?>

                      &#65279;
                            <!-- here starts the template -->
                            <?php
                            $posts = get_posts( array(
                                'numberposts' => 0,
                              	'category'    => $wp_query->get_queried_object_id(),
                              	'post_type'   => 'page',
                              	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                              ) );
                              if ( $posts ){ ?>
                                <table class="sobi2Listing">
                                  <tbody>
                              	<?php foreach ($posts as $post) {
                              		the_post(); ?>
                                  <tr>
                                    <td>
                                      <div class="module">
                                        <div class="mod-cardboard">
                                          <?php if(has_post_thumbnail()) { ?>
                                            <div style="float:right">
                                              <a href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail(); ?>
                                              </a>
                                            </div>
                                          <?php } ?>
                                          <p class="sobi2ItemTitle">
                                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                          </p>&#65279;
                                          <br>
                                          <?php if(customTags()) {
                                            $z=1;
                                            foreach (customTags() as $tag) { ?>
                                              <?php if ($z<=5) { $z++; ?>
                                              <span class="sobi2Listing_field_city">
                                                <span class="sobi2Listing_field_city_label"><?php echo $tag['name']; ?>:</span> <?php echo $tag['content']; ?>
                                              </span>
                                              <br>
                                            <?php } ?>
                                            <?php }
                                          } else { ?>
                                            <p><?php echo wp_trim_words( get_the_content(), 10, ' ...' ); ?></p>
                                          <?php } ?>
                                          <input type="button" class="ad_button" onclick="window.location=&quot;<?php the_permalink(); ?>&quot;" value="Добавить новый отзыв">
                                          <input type="button" class="ad_button" onclick="window.location=&quot;<?php the_permalink(); ?>&quot;" value="Посмотреть все отзывы - <?php echo get_comments_number(); ?>">
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                              	<?php } ?>
                              </tbody>
                            </table>
                              <?php } else {
                              	echo wpautop( 'Постов для вывода не найдено.' );
                              }
                              ?>

                              <!-- here ends the template -->

                              <!-- Don't remove these lines! -->





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
