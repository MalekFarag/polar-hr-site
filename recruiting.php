<!-- EXTENDING BASE -->
<?php include 'templates/base/base.php' ?>


<!-- PAGE TITLE -->
<?php startblock('title') ?>
    Recruiting | Polar HR
<?php endblock() ?>

<!-- PAGE CONTENT -->
<?php startblock('content') ?>


    <section class="hero_section_2" style='background-color: white;'>

        <div class="info">
            <h2 class="headerL" style='line-height: 1.3;'>Simple, yet <span class="deep_blue">powerful <br> Recruiting Process</span></h2>

            <p class="descriptionM">
                Start hiring qualified and work culture-aligned candidates now with <span class="deep_blue">Polar HR</span>. 
                Our team has a foundation of Human Resources experience and a proven track record of successfully recruiting high-quality, long-term employees for a variety of employers.
            </p>

            <a href="#contact" class="btn btn_primary" style="margin-top: 20px;">Get Started</a>

        </div>

        <img src="images/recruiting-hero2.png" alt="polar bear" style="max-width: 700px; order: 0;">

    </section>



    <section class="section process_section">

        <h3 class="headerM text-center" style="margin-bottom: 60px;">How We <span class="deep_blue">Choose</span> Our Candidates</h3>

        <div class="row">
            <img src="images/process-1.jpg" alt="coffee meeting">

            <div class="info">
                <h4 class="headerM"><span class="deep_blue">Discovery</span> Phase</h4>
                <p class="descriptionL">
                    We meet with our customers to gain a thorough understanding of the:
                </p>
                <ul class='bullet_list'>
                    <li>Technical skill requirements</li>
                    <li>The company culture</li>
                    <li>Your hiring process</li>
                    <li>Compensation package</li>
                    <li>Anticipated start date of each role</li>
                </ul>
                <p class="descriptionL">This helps us determine your business' needs and narrows down what kind of candidate we search for. This results in a more efficient search and better candidates offered to your open roles.</p>
            </div>
        </div>

        <div class="row">
            <div class="info ">
                <h4 class="headerM">The Perfect <br><span class="deep_blue">Candidate Search</span> </h4>
                <p class="descriptionL">
                    Each search is tailored to an individual customer’s needs. Detailed searches may include targeted outreach, network referrals and advertising. We interview our candidates to determine the most qualified candidates for our customers to meet. Reference checks can also be completed by Polar HR if requested.
                </p>
            </div>

            <img src="images/process-2.jpg" alt="job interview">
        </div>

        <div class="row">
            <img src="images/process-3.jpg" alt="business woman">

            <div class="info">
                <h4 class="headerM">Get your <br> <span class="deep_blue">free consultation now</span></h4>
                <p class="descriptionL">
                Get a free consultation today and experience why so many businesses choose Polar HR to find high-quality candidates that fit your company and its culture.
                    <br> <br>
                    Our service fees are a percentage of the annual base pay. Discounted rates may be agreed to if multiple roles are required to fill.
                </p>
                <a href="#contact" class="btn btn_primary" style=" margin: 15px 0">Get Started</a>
            </div>
        </div>

    </section>




    <section class="section contact_section" id='contact'>

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
            
            <!-- RECAPTCHA -->
            <div class="g-recaptcha" data-sitekey="6LfqnA4fAAAAAAtsPT-AXDAKcbFwC11xM8DpoicF"></div>

            <button type='submit' class="btn btn_primary">Submit</button>

        </form>

    </section>



<?php endblock() ?>