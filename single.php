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
          <div class="module deepest">


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
                  <div class="article">
                    <div class="headline">
                      <h1 class="title">
                        <a href="/letters/129-letter7"><?php the_title(); ?> </a><br/>
                      </h1>
                    </div>
                    <?php global $post; setup_postdata($post); the_content(); wp_reset_postdata(); ?>
                    <p> </p>
                    <!-- START of joscomment -->
                    <!-- END of joscomment -->
                  </div>
                </div>
              </div>
            </div>
            <div id="mainbottom" class="floatbox">
              <div class="mainbottombox width100  float-left">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<style>
  .likebtn_container {
    display: none;
  }
</style>
<?php get_footer(); ?>
