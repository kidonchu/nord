<?php
/**
 * Template Name: About Us
 */
?>
<?php get_header() ?>
<div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-4">
            <div class="sidebar">
                <?php get_sidebar('about-us') ?>
            </div>
        </div>
        <div class="col-md-6 col-sm-8">
            <?php if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb('<p class="breadcrumbs">','</p>');
            } ?>

            <?php while (have_posts()) : the_post() ?>
                <article id="post-<?php the_ID() ?>" <?php post_class('entry') ?>>
                    <h1 class="entry-title"><?php the_title() ?></h1>
                    <div class="entry-content">
                        <?php the_content() ?>
                    </div>
                </article>
            <?php endwhile ?>
        </div>
    </div>
</div>
<?php get_footer() ?>
