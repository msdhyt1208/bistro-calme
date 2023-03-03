
<?php get_header();?>
    <main class="main">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-9">
                    <h2 class="main_title">
                    <?php if(is_month()):
                        the_time('Y年m月');
                    else :
                        wp_title('');
                    endif;?></h2>
                    <div class="row">
                    <?php if(have_posts()):
                        while(have_posts()) :the_post(); ?>
                        <div class="col-md-4">
                            <?php get_template_part('template_parts\loop','news');?>
                        </div>
                        <?php endwhile;     
                    endif;?>
                    </div>
                </div>

                <div class="col-12 col-md-3">
                    <?php get_sidebar('category');?>          
                    <?php get_sidebar('archives');?>
                </div>
            </div>
        </div>
    </main>
    <?php get_footer();?>