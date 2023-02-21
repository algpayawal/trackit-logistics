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
<section class="footer">
    <div class="container">
    <div class="tl_logo"><img src="<?php echo base_url('assets/images/tl_logo_b.png'); ?>" " width="200" alt="My Image"></div>
    
    <div class="services">
        <h3>SHIPPING SERVICES</h3><br>
        Land Freight <br>
        Sea Freight <br>
        Air Freight
    </div>
    
    <div class="remittances">
        <h3>REMITTANCES</h3><br>
        Instant Peso Padala <br>
        IPP International <br>
        Remit to Account <br>
        Door to Door <br>
        Remittance Partners
    </div>


    <div class="e_commerce">
        <h3>E-COMMERCE SOLUTIONS</h3><br>
            Cash on Delivery (COD)<br>
            Cash on Pick Up (COP) <br>
            Pay Collect
    </div>
    <div class="connect">
        <h3>CONNECT WITH US</h3><br>
            TrackIt Logistics<br>
            www.trackit.com <br>
            +639-552-368-795
    </div>
    </div>
</section>

    </body>