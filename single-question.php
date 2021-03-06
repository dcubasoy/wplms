<?php
get_header('buddypress');
if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
<section id="title">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="pagetitle">
                    <h1><?php the_title(); ?></h1>
                    <?php the_sub_title(); ?>
                </div>
            </div>
            <div class="col-md-2">
                <div class="postdate">
                    <i class="icon-calendar"></i> <?php the_date(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="content">
    <div class="container">
        <div class="bcrow">
            <div class="col-md-8">
                 <?php vibe_breadcrumbs(); ?>
            </div>
            <div class="col-md-4">
                <div class="share">
                    <?php 
                    if(function_exists('sharing_display')){
                        echo sharing_display();  // Jetpack Integration
                        } ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="content">
                    <div class="main_content">
                    <?php
                        the_question();
                    ?>
                    </div>
                    <?php
                    do_action('wplms_question_after_content');
                    ?>
                </div>
                <?php
                endwhile;
                endif;

                do_action('wplms_front_end_question_controls');
                ?>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>