<!-- EXTENDING BASE -->
<?php include 'templates/base/base.php' ?>


<!-- PAGE TITLE -->
<?php startblock('title') ?>
    About Polar HR | Polar HR
<?php endblock() ?>

<!-- PAGE CONTENT -->
<?php startblock('content') ?>


<section class="hero_section_2">

    <div class="info">
        <h2 class="headerL">About <span class="deep_blue"> Polar HR</span></h2>

        <p class="descriptionL">
            *** Mission statement goes here ***
        </p>

    </div>

    <img src="images/about-hero.jpg" alt="">

</section>

<section class="section agency_section">

    <h3 class="headerM">
        Our Services
    </h3>

    <div class="point_list" style="justify-content: center;">
        <div class="point stack">
            <img src="images/about-1.jpg" alt="" style='margin-bottom: 10px;'>
            <h6 class="headerS deep_blue text-left">Recruiting</h6>
            <p class="descriptionM text-left">
                Helping cemployers meet their business needs by hiring employees that are a good long term fit. We regularly keep in contact with all parties to ensure a positive and predictable experience.
            </p>
            <a href="./recruiting" class="btn btn_primary" style='margin-left: 0;'>Learn More</a>
        </div>

        <div class="point stack">
            <img src="images/about-2.jpg" alt="" style='margin-bottom: 10px;'>
            <h6 class="headerS deep_blue text-left">HR Solutions</h6>
            <p class="descriptionM text-left">
                Polar HR focuses on building trusted relationships with employers and candidates in order to offer the simplest and most reliable HR solutions. Contact us now for a free consultation. 
            </p>
            <a href="./hr-solutions" class="btn btn_primary" style='margin-left: 0;'>Learn More</a>
        </div>
    </div>

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



<?php endblock() ?>