<?php
	  //$big_adv_query = "SELECT * FROM `users` WHERE `id` = '1' LIMIT 1 ; ";
	  
	  $big_adv_query = "SELECT * FROM `users` WHERE adv_time > '0' ORDER BY RAND() LIMIT 1 ; ";
	    
						
	  if(isset($_GET['page']) && $_GET['page']=='product' && isset($_GET['id'])){
		  $adv_id = $_GET['id'];
		  $big_adv_query = "SELECT * FROM `users` WHERE id = '$adv_id' LIMIT 1 ; ";		  
		  }
	  
	  $big_adv_result = mysqli_query($connection , $big_adv_query);
	  $big_adv_row = mysqli_fetch_assoc($big_adv_result);

	  $button = '<a class="btn btn-lg btn-block btn-success" 
		  				href="index.php?page=product&id='.$big_adv_row['id'].'">مشاهده</a>';	
	
	  if(isset($_GET['page']) && $_GET['page']=='product' && isset($_GET['id'])){
		  $button = '<a data-toggle="modal" data-target="#exampleModal" class="btn btn-lg btn-block btn-success">سفارش</a>';	  
		  }  
	  
?>
<?php
	##### bon kharidari shode kam shavad #####
	$count = 0;
	$sale_count_query = "SELECT * FROM `sale` WHERE adv_id = '$big_adv_row[id]' ; ";
	$sale_count_result = mysqli_query($connection , $sale_count_query);
	while($sale_count_row = mysqli_fetch_assoc($sale_count_result)){
		$count += $sale_count_row['count'];
		}
	$big_adv_row['adv_count'] = $big_adv_row['adv_count'] - $count;
?>
<div class="col-md-4">
            <p class="main-name">
                <span><?php echo $big_adv_row['adv_category']; ?></span>
                <a class="fa fa-heart like"></a>
            </p>
            <div class="main-title">
                <h2>
                    <a href="#"><?php echo $big_adv_row['adv_name']; ?></a>
                </h2>
            </div>
            <div class="main-price">
                <div class="price">
                    <p>مبلغ بن کارت:</p>
                    <p><span class="green cash"> <?php echo $big_adv_row['adv_bon_price']; ?> </span>تومان</p>
                </div>
                <div class="main-off">
                    <p class="percent"><?php echo $big_adv_row['adv_time']; ?></p>
                    <p>ماه</p>
                </div>
            </div>
            <div class="main-ceil">
                    <p>سقف بن کارت<span class="green cash" style="font-size:18px;"> <?php echo $big_adv_row['adv_total_price']; ?> </span>تومان</p>
                    <p>تعداد بن باقیمانده : <span class="green cash" style="font-size:18px;"> <?php echo $big_adv_row['adv_count']; ?> </span>عدد</p>
            </div>
            
            <?php  echo $button; ?>
            
        </div>
        <div class="col-md-8 main-image">
            <img class="img-responsive" src="images/advertises/<?php echo $big_adv_row['adv_image']; ?>" >
        </div>
<div class="clearfix"></div>

<?php
if(isset($_POST['submit_sale'])){	

	
	$full_name = $_POST['full_name'];
	$mobile = $_POST['mobile'];
	$count = $_POST['count'];
	$adv_id = $_POST['adv_id'];
	$request_date = time();
	$code = mt_rand(10000000,(100000000 - 1));	
	
	$sale_query = "INSERT INTO `sale`(`id`, `full_name`, `mobile`, `count`, `adv_id`, `code`, `request_date`) 
									VALUES ('','$full_name','$mobile','$count','$adv_id','$code','$request_date') ; ";
	
	$sale_result = mysqli_query($connection , $sale_query);
        if($sale_result){
			$last_id =  mysqli_insert_id($connection);
            header("Location: ?page=tracking_code&id=$last_id");
		}
	
}
?>

<div class="modal fade" dir="rtl" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>
        <h4 class="modal-title" id="exampleModalLabel">سفارش بن کارت <?php echo $big_adv_row['adv_name']; ?></h4>
      </div>
      <form method="post">
      <div class="modal-body">
        
          <div class="form-group">
            <label for="recipient-name" class="control-label">نام و نام خانوادگی</label>
            <input type="text" class="form-control" name="full_name" required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">شماره تماس</label>
            <input type="text" class="form-control" maxlength="11" name="mobile" required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">تعداد بن کارت</label>
            <select type="text" class="form-control" style="padding:0 10px;" name="count" required>
            	<option>1</option><option>2</option><option>3</option>
                <option>4</option><option>5</option><option>6</option>
                <option>7</option><option>8</option><option>9</option>
                <option>10</option>
            </select>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="law" required> 
              <span style="margin-right:20px;">اینجانب متعهد می گردم از این بن کارت تا قبل از مهلت اتمام آن استفاده نمایم</span>
            </label>
          </div>
          <input type="hidden" class="form-control" name="adv_id" value="<?php echo $big_adv_row['id']; ?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">بستن</button>
        <input type="submit" name="submit_sale" class="btn btn-primary" value="ثبت درخواست">
      </div>
      </form>
    </div>
  </div>
</div>



