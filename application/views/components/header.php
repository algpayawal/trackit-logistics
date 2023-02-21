<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    $this->load->helper('url');
    $URL = base_url();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>TrackiT Logistics</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico" />

    <?php

        if(isset($css) && count($css) > 0) {
            foreach($css as $cssFile) {
                echo '<link rel="stylesheet" href="'.$URL.'assets/css/'.$cssFile.'.css">';
            }
        }

    ?>

    <?php

        if(isset($js) && count($js) > 0) {
            foreach($js as $jsFile) {
                echo '<script src="'.$URL.'assets/js/'.$jsFile.'.js?r='.uniqid().'" defer></script>';
            }
        }

    ?>

</head>
<body>

	<section class="header">
    <div class="navbar">
        <div class="logo"><img src="<?php echo base_url('assets/images/tl_logo_box.png'); ?>" " width="50" alt="My Image"></div>
        <div class="shipping">SHIPPING</div>
        <div class="tracking">TRACKING</div>
        <div class="solutions">SOLUTIONS</div>
        <div class="support">SUPPORT</div>
        <div class="search"><i class="material-icons">search</i>
    </div>
</div>
    </section>