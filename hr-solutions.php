<!-- EXTENDING BASE -->
<?php include 'templates/base/base.php' ?>


<!-- PAGE TITLE -->
<?php startblock('title') ?>
    HR Solutions | Polar HR
<?php endblock() ?>

<!-- PAGE CONTENT -->
<?php startblock('content') ?>


<section class="hero_section_2" style='background-color: white;'>

    <div class="info">
        <h2 class="headerL" style='line-height: 1.3;'>Team Oriented <br><span class="deep_blue"> HR Solutions</span></h2>

        <p class="descriptionM">
        Experience the difference with our top level Human Resource services. Polar HR provides hourly ongoing or project based human resources support. Our professionals have a proven track record successfully managing Human Resources departments as well as consulting for a variety of companies across various industries.
        </p>

    </div>

    <img src="images/hero-hr-3.jpg" alt="polar bear" style="max-width: 650px;">

</section>


<section class="bg__light_blue specialize_section">

    <div class="section">

        <img src="images/hr-solutions-1.jpg" alt="Recruiter and candidate shaking hands" style='order: 0;'>

        <div class="info">
            <h3 class="headerM" style='font-weight: 700;'>
                Experience the Difference with <span class="deep_blue"> Polar HR</span>
            </h3>

            <p class="descriptionM" style='margin-bottom: 30px'>
                Contact us now for a free consultation. Polar HR focuses on building trusted relationships with clients in order to offer practical and effective HR solutions.
            </p>
            
            <a href="./contact" class="btn btn_primary">Contact Us</a>
        </div>
        
    </div>

</section>

<?php include 'templates/contact_section.php';?>



<?php endblock() ?>