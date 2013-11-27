<?php get_header() ?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 ">
                <article id="post-<?php the_ID() ?>" <?php post_class('entry') ?>>
                    <h1 class="entry-title text-center"><?php the_title() ?></h1>
                    <div class="entry-content">
                        <p>Currently, no event is scheduled yet.</p>
                        <p>Please <a title="Subscribe" href="<?php echo esc_url(home_url('get-involved/subscribe')) ?>">SUBSCRIBE</a> to be the first one to be notified.</p>
                        <h2>PAST EVENTS</h2>
                        <div class="table-responsive">
                            <table class="table-hover event-table">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Title</th>
                                        <th>City</th>
                                        <th>State</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="event-year">
                                        <td colspan="4">2013</td>
                                    </tr>
                                    <tr class="event">
                                        <td class="event-date">Oct. 19</td>
                                        <td class="event-title"><a title="Senior Health Expo 50+" href="<?php echo esc_url(home_url('events/senior-health-expo-50')) ?>">Senior Health Expo 50+</a></td>
                                        <td class="event-city">Monrovia</td>
                                        <td class="event-state">CA</td>
                                    </tr>
                                    <tr class="event">
                                        <td class="event-date">Oct. 29</td>
                                        <td class="event-title"><a title="Burbank Senior Health Expo" href="<?php echo esc_url(home_url('events/burbank-senior-health-expo')) ?>">Burbank Senior Health Expo</a></td>
                                        <td class="event-city">Burbank</td>
                                        <td class="event-state">CA</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>
