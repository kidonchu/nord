<?php
/**
 * Template Name: Resources
 */
?>
<?php get_header() ?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-2 col-sm-offset-1">
                <div class="sidebar">
                    <?php get_sidebar('resources') ?>
                </div>
            </div>
            <div class="col-sm-7">
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
</div>
<?php get_footer() ?>
