<?php
/**
* Template Name: Page with all categories
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
?>
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



                      <table class="sobi2Header">
                        <tbody>
                          <tr>
                            <td id="sobi2HeaderComLink"> <a class="sobi2Header">Объекты отзывов</a> </td>
                          </tr>
                        </tbody>
                      </table>



                      <h3>Категории каталога</h3>
                      <h3><br>
	<table id="sobi2CatListSymbols">
		<tbody>
      <?php

      $categories = get_categories( array(
      	'type'         => 'page',
      	'parent'       => '0',
        'hide_empty'   => 0,
      	'pad_counts'   => false
      ) );

      if( $categories ){
      	foreach( $categories as $cat ){ ?>
          <tr style="width: 50%;">
  					<p class="sobi2CatName"><a href="<?php echo home_url(); echo '/category/'.$cat->slug; ?>"><?php echo $cat->name ?></a></p>
            <?php $categories_child = get_categories(array('type' => 'page', 'parent' => $cat->term_id, 'hide_empty'   => 0, 'pad_counts' => false)); ?>
            <?php if($categories_child) { ?>
            <p class="sobi2CatsListSymbolsIntrotext">
              <span class="sobi2SubcatsList">
            	<?php foreach( $categories_child as $cat_child ){ ?>
                    <span class="sobi2SubcatsListItems"><a href="<?php echo home_url(); echo '/category/'.$cat_child->slug; ?>" title=""><?php echo $cat_child->name ?></a></span>,
              <?php } ?>
              </span>
            </p>
            <?php } ?>
  				</tr><br>
      	<?php
        }
      }
      ?>
	</tbody></table>

 <table class="sobi2Footer">
	 <tbody><tr><td id="sobi2Footer"></td>	 <td id="sobi2rss"></td></tr>	 <tr><td colspan="2"></td></tr>
 </tbody></table>

 </h3></div>
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
