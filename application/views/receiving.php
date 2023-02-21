<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    $this->load->helper('url');
    $URL = base_url();

?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
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
<section class="r-body">
	<form method="post">
		<div class="r-form">
			<div class="head">SHIPMENTS <br></div>
			<br><br>
			<div class="sender_label">SENDER INFORMATION</div><br>
			<div class="consig_label">CONSIGNEE INFORMATION</div><br>
			
			<div class="sender_fname">
				<br>
				<label for="sender_first_name">Sender First Name: </label> <br>
        		<input type="text" id="sender_first_name" name="sender_first_name" maxlength="30"><br><br>
			</div>
			
			<div class="sender_lname">
				<label for="sender_last_name">Sender Last Name: </label> <br>
        		<input type="text" id="sender_last_name" name="sender_last_name" maxlength="30"><br><br>
			</div>
			
			<div class="consig_fname">
				<br>
				<label for="consignee_first_name">Consignee First Name: </label> <br>
				<input type="text" id="consignee_first_name" name="consignee_first_name" maxlength="30"><br><br>
			</div>

			<div class="consig_lname">
				<label for="consignee_last_name">Consignee Last Name: </label> <br>
				<input type="text" id="consignee_last_name" name="consignee_last_name" maxlength="30" ><br><br>
			</div>
			
			<div class="r_type">
				<label for="receiving_type">Receive Type:</label>
				<select id="receiving_type" name="receiving_type">
				<option selected disabled>Select</option>           
				<option value="P">Branch Pick-Up</option>
				<option value="D">For Delivery</option>
				</select>
			</div>
			
			<div class="submit_btn">
			<input type="submit" id="save" name="save" value="Submit"> <br> <br>
			</div>
		</div>	
	</form>
</section>
</body>
</html>
