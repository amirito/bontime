<?php	
$error = '';
if(isset($_POST['submit']) || isset($_POST['activation_code'])){

    $activation_code = $_POST['activation_code'];
	
				$user_query = "SELECT * FROM `users` WHERE `activation_code` = '$activation_code' ; ";
				$user_result = mysqli_query($connection , $user_query);
				$user_row = mysqli_fetch_assoc($user_result);
				
	if($user_row){
		
		$_SESSION['MM_SIGNUP'] = $user_row['id'];
		
		header("Location: ?page=user_signup");
			
        
    }else{
        $error = '
        <div class="alert alert-danger alert-dismissible" role="alert" dir="rtl">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>خطا!</strong> کد فعال سازی وارد شده نا معتبر می باشد.
        </div>
        ';
    }
}

?>
<div class="col-xs-12">
		<br>
        <div class="menu-title" style="font-size:18px">
            <span><i class="fa fa-circle"></i> فعال سازی حساب کاربری</span>
        </div>
        <hr class="menu-row">
        	<?php echo $error; ?>
			<div class="row" dir="rtl">
            <div class="col-md-2 pull-right "></div>
				<div class="col-md-6 pull-right ">
					<form class="form-horizontal" method="post">	
                    
					<div class="form-group required">
						<label for="email" class="control-label">کد فعال سازی : </label>
						<div class="control-input iconed iconed-user required">
                        	<input type="text" name="activation_code" class="form-control" required maxlength="8">
                        </div>
                    </div>
                    
					<div class="form-group">
						<label for="email" class="control-label"></label>
						<div class="control-input">
							<input class="btn btn-primary btn-lg" value="ادامه" type="submit" name="submit">
						</div>
					</div><!--/./ form-group -->
				</form>	
				</div><!--/./ col-md-8 -->				
			</div><!--/./ row -->
</div><!--/./ page -->