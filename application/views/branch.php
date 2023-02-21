<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

	<h1>Branch</h1>
	<?php

		if(!empty($result)) {
			foreach($result as $row) {
				echo $row->sender_first_name.'<br>';
			}
		}

	?>  