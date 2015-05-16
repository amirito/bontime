<?php
	if(!isset($_SESSION['MM_SIGNUP'])){
		header("Location: ?page=generate");
	}
	
$error = '';
if(isset($_POST['submit'])){

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
	$melli_code = $_POST['melli_code'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    if($password == $repassword){
		
		$id = $_SESSION['MM_SIGNUP'];
		
        $user_query = "UPDATE `users` SET 
			`first_name`='$first_name',`last_name`='$last_name',
			`melli_code`='$melli_code',`password`='$password' WHERE id = '$id' ; ";
		
        $user_result = mysqli_query($connection , $user_query);
        if($user_result){
           /* $error = '
            <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong>کاربر گرامی !</strong> ثبت نام با موفقیت انجام شد . خوش آمدید
            </div>
            ';*/
			$user_login_query = "SELECT * FROM `users` WHERE `melli_code` = '$melli_code' AND `password` = '$password'";
				$user_login_result = mysqli_query($connection , $user_login_query);
				$user_login_row = mysqli_fetch_assoc($user_login_result);
				if($user_login_row){
					
					$_SESSION['MM_SIGNUP'] = NULL;
 					unset($_SESSION['MM_SIGNUP']);
					
					$_SESSION['MM_ID'] = $user_login_row['id'];
					header("Location: ?page=mypage");
				}
        }
    }else{
        $error = '
        <div class="alert alert-danger alert-dismissible" role="alert" dir="rtl">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>خطا!</strong> عدم تطابق کلمه عبور با تکرار آن .
        </div>
        ';
    }
}

?>

<div class="col-xs-12">
		<br>
        <div class="menu-title" style="font-size:18px">
            <span><i class="fa fa-circle"></i> ثبت نام کاربران</span>
        </div>
        <hr class="menu-row">
        <?php echo $error; ?>
			<div class="row" dir="rtl">
            <div class="col-md-2 pull-right "></div>
				<div class="col-md-6 pull-right ">
					<form class="form-horizontal" method="post">	
                    
                    <div class="form-group required">
						<label for="email" class="control-label">نام : </label>
						<div class="control-input iconed iconed-user required">
                        	<input type="text" class="form-control" name="first_name">
                        </div>
                    </div>
                    
                    <div class="form-group required">
						<label for="email" class="control-label">نام خانوادگی : </label>
						<div class="control-input iconed iconed-user required">
                        	<input type="text" class="form-control" name="last_name">
                        </div>
                    </div>
                    
					<div class="form-group required">
						<label for="email" class="control-label">کد ملی : </label>
						<div class="control-input iconed iconed-user required">
                        	<input type="text" class="form-control" name="melli_code">
                        </div>
                    </div>
                    
                    <div class="form-group required">
						<label for="email" class="control-label">کلمه عبور : </label>
						<div class="control-input iconed iconed-user required">
                        	<input type="password" class="form-control" name="password">
                        </div>
                    </div>
                    
                    <div class="form-group required">
						<label for="email" class="control-label">تکرار کلمه عبور : </label>
						<div class="control-input iconed iconed-user required">
                        	<input type="password" class="form-control" name="repassword">
                        </div>
                    </div>
                    
					<div class="form-group">
						<label for="email" class="control-label"></label>
						<div class="control-input">
							<input class="btn btn-primary btn-lg" value="ثبت نام" type="submit" name="submit">
						</div>
					</div><!--/./ form-group -->
				</form>	
				</div><!--/./ col-md-8 -->				
			</div><!--/./ row -->
</div><!--/./ page -->