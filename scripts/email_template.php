<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?> | Polar HR</title>

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


    <!-- css -->
    <link rel="stylesheet" href="/css/style.css" type="text/css">
</head>
<body>

    <style>

        .emailtemplate{
            background-color: rgb(248, 248, 248);
            width: 100%;
            height: 100vh;
            padding: 20px 0;

            color: #2C3C3F;


            font-family: "Barlow Condensed", Arial, Helvetica, sans-self;
        }

        .container{
            background-color: #fff;
            width: 100%;
            max-width: 500px;
            margin: 0 auto;

            box-sizing: border-box;
            /* border: solid 1px #dcdcdc; */
            border-radius: 3px;
        }

        .headerImg{
            background-color: #e0fbff;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1440' height='560' preserveAspectRatio='none' viewBox='0 0 1440 560'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1702%26quot%3b)' fill='none'%3e%3crect width='1440' height='560' x='0' y='0' fill='rgba(44%2c 60%2c 63%2c 1)'%3e%3c/rect%3e%3cpath d='M 0%2c393 C 288%2c358.4 1152%2c254.6 1440%2c220L1440 560L0 560z' fill='rgba(252%2c 252%2c 252%2c 1)'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1702'%3e%3crect width='1440' height='560' fill='white'%3e%3c/rect%3e%3c/mask%3e%3c/defs%3e%3c/svg%3e");
            height: 120px;
            width: 100%;
        }

        .info{
            box-sizing: border-box;
            padding: 8px;
            /* text-align: center; */
        }

        .headerM{
            font-size: 32px;
            font-weight: bold;
            line-height: 1.5;

        }

        .descriptionM{
            font-size: 16px;
            line-height: 1.9;
        }

                
        .btn{
            display: inline-block;
            padding: 10px 18px;
            font-weight: 600;
            text-align: center;

            cursor: pointer;

            font-size: 14px;
            border-radius: 3px;

            text-shadow: 2px 2px rgba(27, 87, 151, 0.2);

            transition: all .1s ease;
        }

        .btn_primary{
            background-color: #5CB7FF;
            color: white;
        }

        .btn_primary{
            background-color: #4ca0e4;
        }



        .img{
            background-position: center;
            background-size: contain !important;
            background-repeat: no-repeat;
        }
        .logo{
            background-image: url('https://polar-hr.ca/images/polar-hr-logo.png');
            height: 35px;
            background-position: center !important;
            /* background-color: #e0fbff; */
            margin: 10px;
        }


    </style>

    <div class="emailtemplate">

        <div class="container">
            <div class="headerImg"></div>
            <div class="img logo"></div>
            <div class="info stack">
                <?php if ($title): ?>
                <h2 class="headerM">
                    <!-- title -->
                    <?php echo $title; ?>
                </h2>
                <?php endif; ?>

                <?php if ($text): ?>
                <p class="descriptionM">
                    <!-- text small -->
                    <?php echo $text; ?>
                </p>
                <?php endif; ?>

                <?php if ($link): ?>
                <div class="row">
                    <a 
                    href="<?php echo $link; ?>"
                    class="btn btn_primary" target='_blank'>
                        <!-- button link above -->
                        <!-- button text -->
                        <?php echo $button_text; ?>
                    </a>
                </div>
                <?php endif; ?>
            </div>
        </div>

    </div>
    
</body>
</html>