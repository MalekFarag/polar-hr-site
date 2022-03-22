<?php include 'load.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include 'templates/head.php';?>

    <?php startblock('head_script') ?><?php endblock() ?>

    <title><?php startblock('title') ?>Polar HR<?php endblock() ?></title>
</head>
<body>
    
    <main id="app">

        <?php startblock('header') ?>
            <?php include 'templates/header.php';?>
        <?php endblock() ?>
        

        <div class="content" id="<?php emptyblock('page_name') ?>">
            <?php emptyblock('content') ?>
        </div>

        <?php startblock('footer') ?>
            <?php include 'templates/footer.php';?>
        <?php endblock() ?>

        <?php startblock('footer_script') ?><?php endblock() ?>
    
    </main>
    
</body>
</html>