<!-- 
    Template Name: Home
 -->

 <?php get_header(); ?>

<section class="home__section" style="background-image:url(<?php the_field('header_background');?>)">
    <div class="container">
        <div class="content_first">
            <div class="leftside_cont">
                <h3><?php the_field('first_line'); ?></h3>
                <h2><?php the_field('second_line'); ?></h2>
            </div>
        </div>
        <div class="continue-arrow">
            <a href="#scrolld">
                <div class="in-arr"></div>
                <h3>Nach unten scrollen</h3>
            </a>
        </div>
    </div>
</section>

<section class="second__section">
    <div class="container">
        <h3><?php the_field('first_line_ss'); ?></h3>
    </div>
    <div class="mySwiper1 swiper-container">
        <div class="swiper-wrapper ">
            <?php
            $args = array(
            'post_type' => 'slider',
            'posts_per_page' => '-1',
            );
            $loop = new WP_Query($args);
            while($loop->have_posts()):
            $loop->the_post();
            ?>
            <div class="swiper-slide">	
                <img src="<?php the_post_thumbnail_url();?>" alt="">
            </div>
            <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
        </div>
</section>


<div class="sss">
<title>Loading</title>
    <style>
        #loading-container {
          position: absolute;
          left: calc(50% - 25px);
          top: 30%;
        }

        #loading-icon {
          position: absolute;
          top: 30px;
          width: 50px;
          height: 50px;
          background-color: black;
          animation: loading-animation 3s infinite;
        }

        @keyframes loading-animation {
            0%{
                background-color:red
            }50%{
               background-color: orange;
               transform: rotate(360deg);}
               100%{
                background-color: red;
                transform: rotate(720deg);}
            }
        }
    </style>
  </head>
  <body>
    <div id="loading-container">
      Loading
      <span id="loading-icon"></span>
    </div>
</div>

<section class="third__section">
    <div class="container">

        <div class="lineone" id="scrolld">
            <div class="lefts__third reveal col-lg-6">
                <h3><?php the_field('first_line_3'); ?></h3>
                <h2><?php the_field('second_line_3'); ?></h2>
                    <div class="perc_d">
                        <div class="block_c">
                            <h5>In</h5>
                            <h4><?php the_field('percentagenr'); ?></h4>
                        </div>
                            <h1><?php the_field('right_cont'); ?></h1>
                    </div>
            </div>
            <div class="rights__third col-lg-6">
                <img src="<?php the_field('thirds_img_3'); ?>" alt="">
            </div>
        </div>
        <div class="curl-arrow"></div>
            <div class="linetwo">
                <div class="rights__third_t col-lg-6">
                    <img src="<?php the_field('thirds_img_33'); ?>" alt="">
                </div>
                <div class="lefts__third_t reveal col-lg-6">
                    <h3><?php the_field('first_line_33'); ?></h3>
                    <h2><?php the_field('second_line_33'); ?></h2>
                        <div class="perc_d">
                            <div class="block_c">
                            <h4><?php the_field('percentagenr33'); ?></h4>
                            </div>
                        <h1><?php the_field('right_cont33'); ?></h1>
                        </div>
                </div>      
            </div>

        <div class="curl-arroww"></div>

        <div class="linethree">
            <div class="lefts__third_tt reveal col-lg-6">
                <h3><?php the_field('first_line_333'); ?></h3>
                <h2><?php the_field('second_line_333'); ?></h2>
                <div class="perc_d">
                    <div class="block_c">
                        <h4><?php the_field('percentagenr333'); ?></h4>
                    </div>
                        <h1><?php the_field('right_cont333'); ?></h1>
                </div>
            </div>
            <div class="rights__third_tt col-lg-6">
                <img src="<?php the_field('thirds_img_333'); ?>" alt="">
            </div>
        </div>

    </div>
</section>

<section class="fourth__section">
    <div class="container">
        <div class="title reveall fade-left">
            <h1>
            <?php the_field('fourth_title'); ?>
            </h1>
            <h3><?php the_field('fourth_subtitle'); ?></h3>
        </div>
    
        <div class="searchb">
            <div class="row">
                <div class="left col-lg-6">
                    <div class="search__container">
                        <input class="search__input" type="text" placeholder="Suchbegriff">
                        <div class="boxs">
                            <div class="dspb">
                                <div class="upsidetext"><h4><?php the_field('uppboxxtxt'); ?></h4></div>
                                <div class="first"></div>
                                <div class="downtext"><h3>Hohes Suchvolumen</h3></div>
                            </div>
                            <div class="dspc">
                                <div class="upside"></div>
                                <div class="second"></div>
                                <div class="downtext"><h3>Hohes Suchvolumen</h3></div>
                            </div>
                        </div>
                    <h4><?php the_field('leftbox_text'); ?></h4>
                </div>
            </div>

            <div class="right col-lg-6">
                <div class="search__container">
                    <input class="search__input" type="text" placeholder="Suchbegriff">
                    <div class="boxs">
                        <div class="dspb">
                            <div class="upsidetext"><h4><?php the_field('uppboxxtxtsecond'); ?></h4></div>
                            <div class="seconds"></div>
                            <div class="downtext"><h3>Hohes Suchvolumen</h3></div>
                        </div>
                        <div class="dspc">
                            <div class="upside"></div>
                            <div class="firsts"></div>
                            <div class="downtext"><h3>Hohes Suchvolumen</h3></div>
                        </div>
                    </div>
                    <h4><?php the_field('rightbox_text'); ?></h4>
                </div>
            </div>
        </div>
    </div>        

        <div class="lastlinetxt fade-left reveall">
            <h3><?php the_field('bottom-text'); ?></h3>
        </div>

    </div>
</section>

<section class="fifth__section">
    <div class="container">
        <div class="title fade-left reveall">
            <h1>
            <?php the_field('fifth_title'); ?>
            </h1>
            <h3><?php the_field('fifth_subtitle'); ?></h3>
        </div>
    
        <div class="uptitle">
            <h1><?php the_field('upptitle'); ?></h1>
        </div>

        <div class="upsided">
            <div class="leftside">
                <div class="circleone">
                    <h3>Google, Facebook, Instagram usw. Anzeige</h3>
                </div>
                <div class="arrow"></div>
                <div class="circletwo">
                    <h4>Anfrage</h4>
                </div>
            </div>

            <div class="rightside">
                <div class="perc_d">
                    <div class="block_c">
                    <h5>In nur</h5>
                    <h4><?php the_field('percentage_nr'); ?></h4>
                    </div>
                    <h1><?php the_field('right_cont_fiv'); ?></h1>
                </div>
            </div>
        </div>

        <div class="downtitle">
            <h1><?php the_field('downtitle'); ?></h1>
        </div>

        <div class="downsided">
            <div class="circleone">
                <h3>Google, Facebook, Instagram usw. Anzeige</h3>
            </div> 
            <div class="arrow"></div>
            <div class="circletwo">
                <h4>Kauf, Bestellung, Anmeldung, Download usw.</h4>
            </div>
    </div>
</section>

<section class="sixth__section">
    <div class="container">
        <div class="row">
            <div class="leftside fade-left reveall col-lg-6">
                <h3><?php the_field('title_sixth'); ?></h3>
                <h2><?php the_field('content_sixth'); ?></h2>
                <div class="perc_d">
                    <div class="block_c">
                        <h4><?php the_field('percentagenr_six'); ?></h4>
                    </div>
                        <h1><?php the_field('right_cont_sixth'); ?></h1>
                </div>
            </div>
            <div class="rightside col-lg-6">
                <img src="<?php the_field('image-rightt'); ?>" alt="">
            </div>
        </div>
    </div>
</section>

<section class="seven__section">
    <div class="container">
        <div class="titlee reveal">
            <h1><?php the_field('seven_title'); ?></h1>
            <h3><?php the_field('seven_subtitle'); ?></h3>
        </div>
        <div class="roww">
        <div class="left_contactform col-lg-6">
            <?php the_field('contactform'); ?>
        </div>
        <div class="right_contactform col-lg-6">
            <img src="<?php the_field('image-up'); ?>" alt="">
        <?php the_field('htmltext'); ?>
        </div>
    </div>
</div>
    <div class="mySwiper2 myswiper2 swiper-container">
            <div class="swiper-wrapper ">
                <?php
                $args = array(
                'post_type' => 'sliderr',
                'posts_per_page' => '-1',
                );
                $loop = new WP_Query($args);
                while($loop->have_posts()):
                $loop->the_post();
                ?>
                <div class="swiper-slide">	
                    <img src="<?php the_post_thumbnail_url();?>" alt="">
                </div>
                <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </div>
</section>

<section class="last__section">
    <div class="container">
        <h4 class="reveal"><?php the_field('lastss'); ?></h4>
    </div>
</section>

<?php get_footer();?>