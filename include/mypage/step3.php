<?php
	
$error = '';
		
if(isset($_POST['submit'])){

	$id = $_SESSION['MM_ID'];
	if(!$_SESSION['MM_ID']){die();}
	
	$image = $_FILES['image'];
	
	$step3_query = "UPDATE `users` SET  `adv_image`='$adv_image' WHERE id = '$id' ; ";
	
	$step3_result = mysqli_query($connection , $step3_query);
        if($step3_result){
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
<form class="form-horizontal" method="post" >          
    <div class="form-group required">
        <label for="image" class="control-label"> عکس 386 * 618 : </label>
        <br>
        <div class="control-input iconed iconed-user required">
            <input type="file" name="image" required>
        </div>
    </div>

    <div class="form-group">
        <label for="email" class="control-label"></label>
        <div class="control-input">
            <input class="btn btn-primary btn-lg" value="اضافه" type="submit" name="submit">
        </div>
    </div><!--/./ form-group -->
</form>