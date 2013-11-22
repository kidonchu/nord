<?php get_header() ?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 ">
                <article id="post-<?php the_ID() ?>" <?php post_class('entry') ?>>
                    <h1 class="entry-title text-center"><?php the_title() ?></h1>
                    <div class="entry-content">
                        <p>We have great number of opportunities for volunteers.</p>
                        <ul>
                            <li>regular volunteers</li>
                            <li>nurses</li>
                            <li>doctors</li>
                            <li>chiropractors</li>
                            <li>pharm techs</li>
                            <li>nutritionists</li>
                            <li>health educators</li>
                            <li>social workers</li>
                            <li>marketing and public relations coordinator</li>
                            <li>event coordinator</li>
                            <li>fund development assistant</li>
                            <li>volunteer program coordinators</li>
                            <li>corporate board secretary</li>
                            <li>and more</li>
                        </ul>
                        <p>Please visit <a href="http://www.volunteermatch.org/results/org_detail.jsp?orgid=11270" target="_blank">VolunteerMatch</a> for more information.</p>
                        <a href="http://www.volunteermatch.org/results/org_detail.jsp?orgid=11270" target="_blank"><img alt="Volunteer Match Org" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/volunteerMatch.gif" /></a>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>
