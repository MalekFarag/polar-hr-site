<!-- EXTENDING BASE -->
<?php include 'templates/base/base.php' ?>


<!-- PAGE TITLE -->
<?php startblock('title') ?>
    Home
<?php endblock() ?>

<!-- PAGE CONTENT -->
<?php startblock('content') ?>

    <section class="hero_section">
        <div class="inner">

            <div class="info">
                <h2 class="headerL">
                    High-Qulity 
                    <span class="cursive">Employees</span> <br>
                    Drive High-Quality
                    <span class="cursive">Businesses</span>
                </h2>

                <div class="button_list">
                    <a href="./contact" class="btn btn_primary">Contact Us</a>
                    <a href="./recruiting" class="btn btn_secondary">Learn More</a>
                </div>
            </div>
            
        </div>
        
    </section>



    <section class="section focus_section">

        <div class="stack">
            <h3 class="headerS">
                <span class="small">Your Business is Focused on...</span>
                <br>
                <span class="cursive" id='replace'>Providing Quality Services</span>
            </h3>

            <div class="line"></div>
        </div>
        

        <div class="stack point_list">

            <div class="point">
                <img src="images/focus-1.jpg" alt="Warehouse engineer, managing.">
                <p class="subhead italic">Let professional recruiters find high quality candidates that are a great fit for your company</p>
            </div>


            <div class="point">
                <img src="images/focus-2.jpg" alt="Professionals building relationships">
                <p class="subhead italic">Polar HR focuses on building trusted relationships with employers and candidates</p>
            </div>

            <div class="point">
                <img src="images/focus-3.jpg" alt="Team members high fiving">
                <p class="subhead italic">Our team has a foundation of Human Resources experience and a proven track record of successfully recruiting for a variety of employers</p>
            </div>

        </div>


    </section>


    <section class="bg__light_blue specialize_section">

        <div class="section">

            <img src="images/specialize.jpg" alt="Recruiter and candiadate shaking hands">

            <div class="info">
                <h3 class="headerM italic">
                    We specialize in high-end professional recruiting
                </h3>

                <div class="stack icon_list">

                    <div class="row item">
                        <div class="img icon suitcase"></div>

                        <div class="stack italic">
                            <div class="subhead">Employers we work with:</div>
                            <p class="descriptionM">Industrial Automation, Machinery, Manufacturing, Utilities and Not For Profit industries, and more.</p>
                        </div>
                    </div>

                    <div class="row item">
                        <div class="img icon users"></div>

                        <div class="stack italic">
                            <div class="subhead">Areas of Expertise:</div>
                            <p class="descriptionM">Engineering, Project Management, Finance, HR, Administration, Management, and Executives.</p>
                        </div>
                    </div>
                </div>

                <a href="./contact" class="btn btn_primary">Contact Us</a>
            </div>
            
        </div>

    </section>


    <section class="section process_section">

        <h3 class="headerM text-center">Our Process</h3>

        <div class="row">
            <img src="images/make-it-happen.jpg" alt="Motivation planner" class='hide_mobile'>
            <div class="info bg__light_blue">

                <ol class="list subhead">
                    <div class="stack">
                        <li>Learn your recruitment needs and your workplace culture</li>
                        <li>Commence a targeted search out candidates that have career aspirations in line with your role</li>
                        <li>Send you qualified candidates that we feel align with your culture</li>
                    </div>
                    
                    <div class="stack">
                        <li>Coordinate candidate interviews </li>
                        <li>Complete reference checks (upon request)</li>
                    </div>
                    
                </ol>

                <a href="./contact" class="btn btn_primary">Contact Us</a>

            </div>
        </div>

    </section>


    <section class="section agency_section">

        <h3 class="headerM">
            <span class="small">More than just a</span>
            <br>
            <span class="cursive">Recruitment Agency</span>
        </h3>

        <div class="point_list">

            <div class="point stack">
                <img src="images/agency-1.jpg" alt="Team leader">
                <p class="descriptionL italic">We operate in the best interest of our clients </p>
            </div>

            <div class="point stack">
                <img src="images/agency-2.jpg" alt="Team leader">
                <p class="descriptionL italic">We value employer and candidate relationships and are dedicated to maintaining them</p>
            </div>

            <div class="point stack">
                <img src="images/agency-3.jpg" alt="Team leader">
                <p class="descriptionL italic">We regularly keep in contact with all parties to ensure a positive and predictable experience </p>
            </div>

            <div class="point stack">
                <img src="images/agency-4.jpg" alt="Team leader">
                <p class="descriptionL italic">We believe our actions should benefit both parties – helping candidates achieve their career goals and employers meet their business needs by hiring employees that are a good long term fit.</p>
            </div>

        </div>

        <a href="/contact" class="btn btn_primary">Contact Us</a>

    </section>



    <section class="section bg__blue save_section">

        

        <div class="stack">
            <img src="./images/polar_bear_mobile.jpg" alt="Polar bear" class='polar_bear'>

            <h3 class="headerM">Save time, money and get the best candidate for the job… the first time</h3>

            <ul class='descriptionM'>
                <li>Simple & powerful recruitment process</li>
                <li>Job ready employees assessed by experienced HR professionals</li>
            </ul>

            <a href="./contact" class="btn btn_white">Contact Us</a>

        </div>

    </section>


    <section class="section contact_section">

        <div class="stack info">
            <h3 class="headerM">Contact Us Now</h3>
            <p class="descriptionM">
                Experience the difference! Find permanent, high quality employees with Polar HR. Contact us now for a free consultation.

                <br> <br>
                <span class="italic">
                    * Represents required fields.
                </span>
                
            </p>
        </div>

        <form method="post" class='contact_form stack'>

            <div class="row_side">
                <input class='gray_input' type="text" name="name" id="name" placeholder="*Name" required>
                <input class='gray_input' type="text" name="company" id="company" placeholder="Company">
            </div>
            
            <input class='gray_input' type="email" name="email" id="email" placeholder="*Email" required>

            <textarea class='gray_input textarea' name="message" id="message" rows="1" placeholder="Message"></textarea>

            <button type='submit' class="btn btn_primary">Submit</button>

        </form>

    </section>




<?php endblock() ?>