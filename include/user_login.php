<?php
$error = '';
if(isset($_POST['submit'])){

    
	$melli_code = $_POST['melli_code'];
    $password = $_POST['password'];
   
        $user_query = "SELECT * FROM `users` WHERE `melli_code` = '$melli_code' AND `password` = '$password'";
        $user_result = mysqli_query($connection , $user_query);
		$user_row = mysqli_fetch_assoc($user_result);
		if($user_row){
			$_SESSION['MM_ID'] = $user_row['id'];
			header("Location: ?page=mypage");
		}

	    else{
			 $error = '
        <div class="alert alert-danger alert-dismissible" role="alert" dir="rtl">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>خطا!</strong> کد ملی یا رمز عبور اشتباه می باشد.
        </div>
        ';
       }
    }


?>
<div class="col-xs-12">
		<br>
        <div class="menu-title" style="font-size:18px">
            <span><i class="fa fa-circle"></i> ورود کاربران</span>
        </div>
        <hr class="menu-row">
        <div class="alert alert-success alert-dismissible" role="alert" dir="rtl">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <strong> توجه! </strong> اگر تاکنون عضو نشده اید ابتدا کد فعال سازی را با تماس با شماره 2-88759591 تهیه نمایید و از صفحه ثبت نام اقدام به ثبت نام در سایت فرمایید.
        </div>
        <?php echo $error; ?>
			<div class="row" dir="rtl">
            <div class="col-md-2 pull-right "></div>
				<div class="col-md-6 pull-right ">
					<form class="form-horizontal" method="post">	
                    
					<div class="form-group required">
						<label for="email" class="control-label">کد ملی : </label>
						<div class="control-input iconed iconed-user required">
                        	<input type="text" class="form-control" name="melli_code" required>
                        </div>
                    </div>
                    
                    <div class="form-group required">
						<label for="email" class="control-label">کلمه عبور : </label>
						<div class="control-input iconed iconed-user required">
                        	<input type="password" class="form-control" name="password" required>
                        </div>
                    </div>
                    
					<div class="form-group">
						<label for="email" class="control-label"></label>
						<div class="control-input">
							<input class="btn btn-primary btn-lg" value="ورود" type="submit" name="submit">
						</div>
					</div><!--/./ form-group -->
				</form>	
				</div><!--/./ col-md-8 -->				
			</div><!--/./ row -->
</div><!--/./ page -->