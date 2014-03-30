<?php get_header() ?>
<div class="content">
    <div class="container">
        <?php if ( have_posts() ) : ?>
            <?php if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb('<p class="breadcrumbs">','</p>');
            } ?>
            <h1 class="entry-title"><?php printf( __( 'Search Results for: %s', 'nord' ), '<span class="em">' . get_search_query() . '</span>' ) ?></h1>
            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post() ?>
                <article id="post-<?php the_ID() ?>" <?php post_class() ?>>
                    <h3 class="entry-title"><a href="<?php echo the_permalink() ?>"><?php the_title() ?></a></h3>
                    <div class="entry-content">
                        <?php the_excerpt() ?>
                    </div>
                </article>
            <?php endwhile ?>
        <?php else : ?>
            <?php get_template_part( 'no-results', 'search' ) ?>
        <?php endif ?>
    </div>
</div>
<?php get_footer() ?>