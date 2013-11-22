<?php get_header() ?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 ">
                <article id="post-<?php the_ID() ?>" <?php post_class('entry') ?>>
                    <h1 class="entry-title text-center"><?php the_title() ?></h1>
                    <div class="entry-content">

                        <div class="row">

                            <div class="col-sm-8">

                                <div class="row">

                                    <!--
                                    PayPal Donation
                                    -->
                                    <div class="col-sm-4">
                                        <h3 class="em">PayPal: </h3>
                                        <form class="paypal-form" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                            <input type="hidden" name="cmd" value="_s-xclick">
                                            <input type="hidden" name="hosted_button_id" value="BZBZNE9XJGSNE">
                                            <input type="image" alt="PayPal - The safer, easier way to pay online!"
                                                   name="submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif">
                                            <img alt="" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1" border="0">
                                        </form>
                                    </div>

                                    <!--
                                    Check Donation
                                    -->
                                    <div class="col-sm-8">
                                        <h3 class="em">Check: </h3>
                                        <p>
                                            <strong>Payable to:</strong><br>
                                            National Organization for Renal Disease <br>
                                            <strong>Mail to:</strong><br>
                                            Citibank Studio City <br>
                                            12191 Ventura Blvd. <br>
                                            Studio City, CA 91604
                                        </p>
                                    </div>

                                </div>

                            </div>

                            <div class="col-sm-4">

                                <!-- Quote from Founder -->
                                <h5>From NORD Founder</h5>
                                <blockquote>
                                    <p class="leading">Your contributions are valuable. Your donations help to inform individuals how they can prevent and treat renal disease. Whether it is money, goods, or services, your time and effort are greatly appreciated.</p>
                                    <small>Mamie V. Jackson, Founder of NORD</small>
                                </blockquote>

                            </div>

                        </div>

                        <!--
                        Donor Wish List
                        -->
                        <h2>Donor Wish List</h2>
                        <ul>
                            <li>Laptops for health screenings (on-site)</li>
                            <li>Blood pressure cuffs (large)</li>
                            <li>Screenings supplies (alcohol swabs, sharps containers, latex gloves, glucose tablets, cotton balls, bandages, lancets and test strips)</li>
                            <li>Glucose monitors (diabetic)</li>
                            <li>Nutritious/healthy food stuffs</li>
                            <li>Lightweight collapsible tables and coverings</li>
                            <li>Minivan (transport supplies to on site screenings)</li>
                            <li>Office space</li>
                            <li>Professional Services - Laboratory Technologist or Clinical Licensed Scientist or Medical Technologist</li>
                            <li>Professional Services - Nurses, Doctors, Health Educators and Nutritionists</li>
                        </ul>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>

<!-- Temporarily removed for performance measure -->
<!-- Razoo Donation -->
<!--<h2>Donate by Razoo</h2>
<div id="razoo_donation_widget">
<span>
<a href="http://www.razoo.com/">Online fundraising</a> for
<a href="http://www.razoo.com/story/National-Organization-For-Renal-Disease">
NATIONAL ORGANIZATION FOR RENAL DISEASE
</a> at Razoo
</span>
</div>
<script>// <![CDATA[
var r_params = {"title":"NATIONAL ORGANIZATION FOR RENAL DISEASE","short_description":"NORD is a nonprofit, health corporation dedicated to preventing renal (kidney) disease, diabetes, hypertension and obesity.","long_description":"  The National Organization for Renal Disease (NORD) provides critical, preventive health screenings and health care information; and research to under insured, under served adults at high risk of developing renal (kidney) disease and its precursors diabetes, high blood pressure and obesity - including organ and tissue donor information  resulting in the betterment of these individuals, their communities and beyond; and to transform the therapies and delivery systems in which these illnesses are treated - until we find better remedies.  ...","color":"#3D9B0C","errors":false,"image":"false"};var r_protocol=(("https:"==document.location.protocol)?"https://":"http://");var r_path='www.razoo.com/javascripts/widget_loader.js';var r_identifier='National-Organization-For-Renal-Disease';document.write(unescape("%3Cscript id='razoo_widget_loader_script' src='"+r_protocol+r_path+"' type='text/javascript'%3E%3C/script%3E"));
// ]]></script>-->
