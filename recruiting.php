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
            <h2 class="headerL" style='line-height: 1.3;'>Simple, yet powerful <br> <span class="deep_blue"> Recruiting Process</span></h2>

            <p class="descriptionM">
                Start hiring qualified and work culture-aligned candidates now with <span class="deep_blue">Polar HR</span>. 
                Our team has a foundation of Human Resources experience and a proven track record of successfully recruiting high-quality, long-term employees for a variety of employers.
            </p>

            <a href="#contact" class="btn btn_primary" style="margin-top: 20px;">Get Started</a>

        </div>

        <img src="images/recruiting-hero3.png" alt="polar bear" style="max-width: 700px; order: 0;">

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
                    Each search is tailored to an individual customer???s needs. Detailed searches may include targeted outreach, network referrals and advertising. We interview our candidates to determine the most qualified candidates for our customers to see. Reference checks can also be completed by Polar HR if requested.
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
                    Polar HR works on contingency.  Our service fees are a percentage of the candidates annual base pay.
                </p>
                <a href="#contact" class="btn btn_primary" style=" margin: 15px 0">Get Started</a>
            </div>
        </div>

    </section>




    <?php include 'templates/contact_section.php';?>



<?php endblock() ?>