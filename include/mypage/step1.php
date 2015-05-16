<?php
$provinces = '';
$provinces_query = " SELECT * FROM `province`" ;
$provinces_result = mysqli_query($connection,$provinces_query);
while($provinces_row = mysqli_fetch_assoc($provinces_result)){
		$provinces .="<option value='$provinces_row[id]'>$provinces_row[name]</option>";
	}
	
$error = '';	
if(isset($_POST['submit'])){
	
	$id = $_SESSION['MM_ID'];
	if(!$_SESSION['MM_ID']){die();}
	
	$adv_name = $_POST['adv_name'];
	$adv_category = $_POST['adv_category'];
	$adv_bon_price = $_POST['adv_bon_price'];
	$adv_total_price = $_POST['adv_total_price'];
	$adv_count = $_POST['adv_count'];
	$address = $_POST['address'];
	$tel = $_POST['tel'];
	$adv_city = $_POST['adv_city'];
	$adv_date = time();
	
	$step1_query = "UPDATE `users` SET  `adv_name`='$adv_name',`adv_category`='$adv_category',`adv_bon_price`='$adv_bon_price',
	`adv_total_price`='$adv_total_price',`adv_count`='$adv_count',`address`='$address',
	`tel`='$tel',`adv_city`='$adv_city',`adv_date`='$adv_date' WHERE id = '$id' ; ";
	
	$step1_result = mysqli_query($connection , $step1_query);
        if($step1_result){
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
        <label for="email" class="control-label">نام بن تایم : </label>
        <div class="control-input iconed iconed-user required">
            <input type="text" name="adv_name" class="form-control" required>
        </div>
    </div>
    
    <div class="form-group required">
        <label for="email" class="control-label">دسته بن تایم : </label>
        <div class="control-input iconed iconed-user required">
            <select name="adv_category" class="form-control" style="padding:0 3px;">
            	<option>-------</option>
                <option>رستوران و کافی‌شاپ</option>
                <option>تفریحی و ورزشی</option>
                <option>پزشکی و سلامت</option>
                <option>فرهنگی و هنری</option>
                <option>زیبایی و آرایشی</option>
                <option>کالا</option>
            </select>
        </div>
    </div>
    
    <div class="form-group required">
        <label for="email" class="control-label">مبلغ بن تخفیف : </label>
        <div class="control-input iconed iconed-user required">
            <input type="text" name="adv_bon_price" class="form-control" required>
        </div>
    </div>
    
    <div class="form-group required">
        <label for="email" class="control-label">سقف مبلغ : </label>
        <div class="control-input iconed iconed-user required">
            <input type="text" name="adv_total_price" class="form-control" required>
        </div>
    </div>
    
    <div class="form-group required">
        <label for="email" class="control-label">تعداد بن : </label>
        <div class="control-input iconed iconed-user required">
            <input type="text" name="adv_count" class="form-control" required>
        </div>
    </div>
    
    <div class="form-group required">
        <label for="email" class="control-label">آدرس : </label>
        <div class="control-input iconed iconed-user required">
            <textarea name="address" class="form-control" required></textarea>
        </div>
    </div>
    
    <div class="form-group required">
        <label for="email" class="control-label">تلفن : </label>
        <div class="control-input iconed iconed-user required">
            <input type="text" name="tel" class="form-control" required>
        </div>
    </div>
    
    <div class="form-group required">
        <label for="email" class="control-label">استان : </label>
        <div class="control-input iconed iconed-user required">
            <select type="text" name="adv_city" class="form-control" style="padding:0 3px;">
            <?php echo $provinces; ?>
            </select>
        </div>
    </div>
    
    <div class="form-group">
        <label for="email" class="control-label"></label>
        <div class="control-input">
            <input class="btn btn-primary btn-lg" value="تایید" type="submit" name="submit">
        </div>
    </div><!--/./ form-group -->
</form>