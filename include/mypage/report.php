<?php

	$id = $_SESSION['MM_ID'];
	if(!$_SESSION['MM_ID']){die();}
	
	$report_query = "SELECT * FROM sale WHERE adv_id = '$id' ; ";
	$report_result = mysqli_query($connection , $report_query);
	
	if(!mysqli_num_rows($report_result)){
		echo '<div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong>کاربر گرامی !</strong> 
			  هنوز پیشنهادی برای بن کارت شما در سیستم ثبت نشده است.
            </div>';
		die();
		}
      
	
?>

<div class="table-responsive">
            <table style="text-align:center" class="table table-striped table-hover table-bordered tablesorter">
            	<thead style="text-align:center">
                <tr style="text-align:center">
					<th style="text-align:center">ردیف</th>
                    <th style="text-align:center">نام و نام خانوادگی سفارش دهنده</th>
                    <th style="text-align:center">شماره موبایل</th>
					<th style="text-align:center">تعداد سفارش</th>
                    <th style="text-align:center">کد پیگیری</th>
                    <th style="text-align:center">تاریخ سفارش</th>
				</tr>
                </thead>
                <tbody>

				<?php
				$i = 1;
				while($report_row = mysqli_fetch_assoc($report_result)){
					$report_row['request_date'] = jdate("Y/m/d");
		 
		  			echo "<tr>
							<td>$i</td>
							<td>$report_row[full_name]</td>
							<td>$report_row[mobile]</td>
							<td>$report_row[count]</td>
							<td style='color:green'>$report_row[code]</td>
							<td>$report_row[request_date]</td>		
						</tr>";
					$i++;
				}
				?>
                
				</tbody>
			</table>
</div>