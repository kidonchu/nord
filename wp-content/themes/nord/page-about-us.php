<?php get_header() ?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <?php while (have_posts()) : the_post() ?>
                    <article id="post-<?php the_ID() ?>" <?php post_class('entry') ?>>
                        <h1 class="entry-title text-center"><?php the_title() ?></h1>
                        <div class="entry-content">

                            <h2>Mission</h2>
                            <p>Our mission is to change the face of kidney disease by aggressively promoting good health through education, disease prevention, and follow up.</p>
                            <p>National Organization for Renal Disease strives to provide the latest  preventive and critical medical information to populations at high risk for developing renal disease and its precursors through their programs of awareness, prevention, education and research. In addition, we seek to transform the remedies and delivery systems in which these illnesses are treated for the betterment of individuals and their communities.</p>
                            <p>NORD promotes organ and tissue transplantation and other progressive therapies in treatment modalities through innovative, cutting edge, research and permanent testing sites until we find an effective way to treat these chronic diseases.</p>

                            <h2>History</h2>
                            <p>Mamie V. Jackson founded the corporation in 1998 when she realized that there was a need for a heightened awareness of critical health information within communities chronically affected by renal disease and related illnesses.</p>
                            <p>Mamie developed the <em>A.P.E.R. Project</em> - a four-phase program promoting Awareness, Prevention, Education, and Research.</p>
                            <p>Joining Mamie in this venture are the Board, Medical advisors, several practicing physicians and licensed health care professionals, working in the appropriate fileds of medicine.</p>

                            <h2>Founder</h2>
                            <h3 class="em">Mamie Viola Jackson</h3>
                            <p>As President and Chief Executive Officer of National Organization for Renal Disease, Mamie founded the corporation out of necessity for improved remedies and therapies in the treatment of chronic diseases- renal (kidney) disease, diabetes, high blood pressure and obesity including the promotion of organ and tissue donation. She developed the A.P.E.R. Program (Awareness, Prevention, Education and Research), a four (4) phase system which provides relevant health education, including health promotion, disease prevention and nutrition. NORD is an early warning, health screening and research based corporation, which serves diverse communities most affected by chronic disease.</p>
                            <p>Mamie applies expertise in Organizational management to a broad range of experiences in Management consulting, training, business, education and community service organizations. She has developed and implemented academic, business and service oriented programs and projects for over twenty (28) years, including nonprofit and board director service.</p>
                            <p>Her diverse career includes work with the US Olympic Organizing Committee, N.O.W., Board Member-Habitat for Humanity and The Jimmy Carter Work Project, Antioch University, California State University at Los Angeles, United College of Business, American Society for Training and Development (ASTD), National Association of Female Executives (NAFE), Southern California Broadcasters Association (SCBA), Muscular Dystrophy Society, Renal Support Network, National Kidney Foundation, Regional Organ Procurement Agency and OneLegacy. She also worked with the City of Los Angeles, Councilman Richard Alatorre’s Office.</p>
                            <p>In 1994, Mamie received a Special recognition award from the City of Los Angeles for her Public Policy work, for the Homeless Initiative. Ms. Jackson has appeared on National television (ABC World News Tonight), KABC 790 Talk Radio, KLOS, ESPN KDIS, Editorial piece-Los Angeles Times and Warner Cable Television. In 2010, she won an Inspire Award from OneLegacy and Donate Life California for her documentary-Mamie Jackson-Life on Dialysis. She also was awarded “Partner of the Year and an Award for “Outstanding Community Service”.</p>
                            <p>Mamie earned a Master’s of Science degree in Organizational Management and a Bachelor’s degree in Business Administration and Psychology from Antioch University in Yellow Spring, Ohio. She holds a Certificate in Leadership from California State University along with a degree in Merchandising from Massey Business College and Technical Institute in Jacksonville, Florida.</p>
                            <p>The founder and CEO of National Organization for Renal were born in Alabama. She has lived with chronic diseases (kidney disease, diabetes and high blood pressure) for 49 years and studied these illnesses for over 30 years.</p>
                            <p>Mamie decided to make a difference to those adults at high risk for developing kidney disease, diabetes and high blood pressure, mostly multicultural adults.</p>
                            <p>Mamie was on dialysis. At that time, she began writing the proposal for National Organization for Renal Disease (NORD). She turned anger and frustration into an organization to help people in need with no health insurance and no access to health care information. For the past 15 years, Mamie has been producing Health Expos and Health Education events throughout the greater Los Angeles Communities. All health events are free of charge to clients. These events include licensed doctors, nurses, pharmacists, chiropractors, nutritionists, health educators, fitness professionals, Medical assistants and university interns who study in the medical fields. Mamie’s goal and mission is to change the face of chronic disease through early warning, health screenings, education and research. She accomplishes these goals through the A.P.E.R. Program, Prevention can be the Cure!</p>
                        </div>
                    </article>
                <?php endwhile ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>
