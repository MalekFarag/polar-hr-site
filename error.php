<!-- EXTENDING BASE -->
<?php include 'templates/base/base.php' ?>


<!-- PAGE TITLE -->
<?php startblock('title') ?>
    Error 404: Page Not Found
<?php endblock() ?>

<?php startblock('header') ?><?php endblock() ?>

<!-- PAGE CONTENT -->
<?php startblock('content') ?>

<div class="center_wrap light_white">
    <div class="info">
        
        <h2 class="headerL text-center"><span class="deep_blue"> 404 </span>Page Not Found</h2>
        <p class="descriptionL text-center">Looks like you're lost... <br> <a href="./" class="deep_blue underline">Click here to the home page</a></p>
    </div>
</div>

<?php endblock() ?>


<?php startblock('footer') ?><?php endblock() ?>