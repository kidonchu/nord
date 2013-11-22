<?php get_header() ?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <?php while (have_posts()) : the_post() ?>
                    <article id="post-<?php the_ID() ?>" <?php post_class('entry') ?>>
                        <h1 class="entry-title text-center"><?php the_title() ?></h1>
                        <div class="entry-content">
                            <p class="leading">
                                A.P.E.R. FECT solution for controlling kidney disease, prolonging health and life. A.P.E.R. is a simple four-phase program, the promotion of which will inevitably improve therapies and remedies, and will prevent medical precursors from developing into renal disease.
                            </p>
                            <h3 class="em">Awareness</h3>
                            <p>Inform people about the warning signs of renal disease. </p>
                            <ul>
                                <li>
                                    What should they look for?
                                </li>
                                <li>
                                    What tests are available?
                                </li>
                            </ul>
                            <h3 class="em">Prevention</h3>
                            <p>
                                Show individuals how to reduce the risk of getting
                                renal disease from one of its precursors.
                            </p>
                            <h3 class="em">Education</h3>
                            <p>
                                Give people the information they need. They will
                                share it with other members of the community. When
                                they know what to look for, the likelihood of actually
                                developing renal disease decreases.
                            </p>
                            <h3 class="em">Research</h3>
                            <p>
                                Support and fund genetic research. Please volunteer
                                and be a part of clinical or medical studies if you suffer
                                from renal disease. Ask for government funding for research
                                projects.
                            </p>
                        </div>
                    </article>
                <?php endwhile ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>
