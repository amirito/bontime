<?php
	
$error = '';
$id = $_SESSION['MM_ID'];
if(!$_SESSION['MM_ID']){die();}
		
if(isset($_POST['submit_vizhegi'])){	

	
	$vizhegi = $_POST['vizhegi'];
	
	$step2_query = "INSERT INTO `vizhegi`(`id`, `name`, `type`, `user_id`) VALUES ('','$vizhegi','1','$id') ; ";
	
	$step2_result = mysqli_query($connection , $step2_query);
        if($step2_result){
            $error = '
            <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong>کاربر گرامی !</strong> اطلاعات شما با موفقیت ثبت/ویرایش شد.
            </div>
            ';
		}
}

if(isset($_POST['submit_sharayet'])){	

	
	$sharayet = $_POST['sharayet'];
	
	$step2_query = "INSERT INTO `vizhegi`(`id`, `name`, `type`, `user_id`) VALUES ('','$sharayet','2','$id') ; ";
	
	$step2_result = mysqli_query($connection , $step2_query);
        if($step2_result){
            $error = '
            <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong>کاربر گرامی !</strong> اطلاعات شما با موفقیت ثبت/ویرایش شد.
            </div>
            ';
		}
}
	
	
?>
<?php echo $error; ?>
<form class="form-horizontal" method="post">  
           
    <div class="form-group required">
        <label for="email" class="control-label">ویژگی : </label>
        <div class="control-input iconed iconed-user required">
            <input type="text" name="vizhegi" class="form-control" required>
        </div>
    </div>

    
    <div class="form-group">
        <label for="email" class="control-label"></label>
        <div class="control-input">
            <input class="btn btn-primary btn-lg" value="اضافه" type="submit" name="submit_vizhegi">
        </div>
    </div><!--/./ form-group -->
</form>
<hr>
<form class="form-horizontal" method="post">  
           
    <div class="form-group required">
        <label for="email" class="control-label">شرایط استفاده : </label>
        <div class="control-input iconed iconed-user required">
            <input type="text" name="sharayet" class="form-control" required>
        </div>
    </div>

    
    <div class="form-group">
        <label for="email" class="control-label"></label>
        <div class="control-input">
            <input class="btn btn-primary btn-lg" value="اضافه" type="submit" name="submit_sharayet">
        </div>
    </div><!--/./ form-group -->
</form>