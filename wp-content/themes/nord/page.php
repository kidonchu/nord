<?php get_header() ?>
<!-- ===================================================================== -->
<!-- =========================== DEFAULT PAGE ============================ -->
<!-- ===================================================================== -->
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <article id="post-<?php the_ID() ?>" <?php post_class('entry') ?>>
                    <h1 class="entry-title text-center"><?php the_title() ?></h1>
                    <div class="entry-content">
                        <?php the_content() ?>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>