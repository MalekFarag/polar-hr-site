<!-- EXTENDING BASE -->
<?php include 'templates/base/base.php' ?>


<!-- PAGE TITLE -->
<?php startblock('title') ?>
    Contact | Polar HR
<?php endblock() ?>

<!-- PAGE CONTENT -->
<?php startblock('content') ?>


<section class="section contact_section" style="padding-top: 80px; padding-bottom: 60px;">

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