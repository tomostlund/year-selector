
<select name="year">
			<?php
			$thisyear = date('Y');
			$date = date('Y-m-d');
			$lastyear = strtotime("-1 year", strtotime($date));
			$nextyear = strtotime("+1 year", strtotime($date));
			$twoyearsahead = strtotime("+2 years",strtotime($date));
			?>
			<option id=<?php echo date('Y',$lastyear); ?>><?php echo date('Y',$lastyear)	;?></option>
			<option id=<?php echo date('Y');?> selected="selected"><?php echo date('Y'); ?></option>
			<option id=<?php echo date('Y', $nextyear);?>><?php echo date('Y', $nextyear);?></option>
			<option id=<?php echo date('Y', $twoyearsahead);?>><?php echo date('Y', $twoyearsahead);?></option>
			</select>
