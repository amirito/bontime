<?php
	  //$big_adv_query = "SELECT * FROM `users` WHERE `id` = '1' LIMIT 1 ; ";
	  
	  $big_adv_query = "SELECT * FROM `users` WHERE adv_time > '0' ORDER BY RAND() LIMIT 1 ; ";
	  if(isset($_GET['page']) && $_GET['page']=='product' && isset($_GET['id'])){
		  $adv_id = $_GET['id'];
		  $big_adv_query = "SELECT * FROM `users` WHERE id = '$adv_id' LIMIT 1 ; ";
		  }
	  
	  $big_adv_result = mysqli_query($connection , $big_adv_query);
	  $big_adv_row = mysqli_fetch_assoc($big_adv_result);
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
            
            <a class="btn btn-lg btn-block btn-success" href="index.php?page=product&id=<?php echo $big_adv_row['id']; ?>">مشاهده و سفارش</a>
        </div>
        <div class="col-md-8 main-image">
            <img class="img-responsive" src="images/advertises/<?php echo $big_adv_row['adv_image']; ?>" >
        </div>
<div class="clearfix"></div>