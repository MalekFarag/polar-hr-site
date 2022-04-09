<?php
define('ABSPATH', __DIR__);

// EMAIL CONFIG
require_once ABSPATH.'/scripts/mail.php';

// TEMPLATE ENGINE
require_once ABSPATH.'/templates/base/ti.php';

// FORCING SSL
// if ($_SERVER['HTTPS'] != "on") { 
//     $url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; 
//     header("Location: $url");
// }