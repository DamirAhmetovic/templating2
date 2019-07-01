<div class="clock">
		<?php
			date_default_timezone_set("europa , Amsterdam");
			$hour = date("H");
        	$minute = date("i");
        
			

			if ($hour >= 6 && $hour < 12){
				echo '<body class="morning">';
			}

			elseif ($hour >= 12 && $hour < 18){
				echo '<body class="afternoon">';
			}

			elseif ($hour >= 18 && $hour <= 23){	
				echo '<body class="evening">';
			}

			elseif ($hour >= 00 && $hour < 6){
				echo '<body class="night">';
			}

			echo '<h3>','The time is ',$hour,":",$minute,' right now','</h3>';
		?>
		</div>