<?php
		$id = $_GET['id'];
   
        $track_query = "SELECT * FROM `sale` WHERE `id` = '$id' ; ";
        $track_result = mysqli_query($connection , $track_query);
		$track_row = mysqli_fetch_assoc($track_result);

?>
<div class="col-xs-12">
		<br>
        <div class="menu-title" style="font-size:18px">
            <span><i class="fa fa-circle"></i> کد پیگیری</span>
        </div>
        <hr class="menu-row">
        <div class="alert alert-warning alert-dismissible" role="alert" dir="rtl">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <strong> توجه! </strong>
                  کاربر گرامی، کد پیگیری موجود در این صفحه را حتما پرینت گرفته و یا یادداشت نمایید.
        </div>
			<div class="row" dir="rtl">
				<div class="text-center">
                	نام سفارش دهنده : <?php echo $track_row['full_name']; ?><br>
					شماره تماس : <?php echo $track_row['mobile']; ?><br>
					تعداد سفارش : <?php echo $track_row['count']; ?>
                <br><br>

				کد پیگیری شما : <h1 style="color:#013D06;margin-bottom:200px;"><?php echo $track_row['code']; ?></h1>	
				</div><!--/./ col-md-8 -->				
			</div><!--/./ row -->
</div><!--/./ page -->