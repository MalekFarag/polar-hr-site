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
        <h2 class="headerL" style='line-height: 1.3;'>Top of the Food Chain <br><span class="deep_blue"> HR Solutions</span></h2>

        <p class="descriptionM">
        Experience the difference with our top level Human Resource services. Polar HR is owned and operated by business professionals with a proven track record of successfully organizing and building trusted relationships with businesses across a multitude of industries.
        </p>

    </div>

    <img src="images/hr-solutions-hero.jpg" alt="polar bear" style="max-width: 650px;">

</section>


<section class="bg__light_blue specialize_section">

        <div class="section">

            <img src="images/hr-solutions-1.jpg" alt="Recruiter and candidate shaking hands" style='order: 0;'>

            <div class="info">
                <h3 class="headerM" style='font-weight: 700;'>
                    Experience the Difference with <span class="deep_blue"> Polar HR</span>
                </h3>

                <p class="descriptionM" style='margin-bottom: 30px'>
                Contact us now for a free consultation. Polar HR focuses on building trusted relationships with employers and candidates in order to offer the simplest and most reliable HR solutions.
                </p>
              
                <a href="./contact" class="btn btn_primary">Contact Us</a>
            </div>
            
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