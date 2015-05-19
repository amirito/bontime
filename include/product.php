<?php
if(isset($_GET['page']) && $_GET['page']=='product' && isset($_GET['id'])){
		  $adv_id = $_GET['id'];
		  $sub_big_adv_query = "SELECT * FROM `users` WHERE id = '$adv_id' LIMIT 1 ; ";
}
	  
	  $sub_big_adv_result = mysqli_query($connection , $sub_big_adv_query);
	  $sub_big_adv_row = mysqli_fetch_assoc($sub_big_adv_result);
?>
<section class="main">
    <div class="container product-detail">
        <div class="col-md-4">
        <p class="property-head"><i class="fa fa-circle"></i> مشخصات فروشنده</p>
        
        <address class="address">
                  <div class="title"><?php echo $sub_big_adv_row['adv_name']; ?></div>
                  <div class="address-text">
                  <span class="fa fa-location-arrow" style="color:#942564;"></span>
                   <?php echo $sub_big_adv_row['address']; ?>
                  </div>
                  <div class="phone"><span class="fa fa-phone" style="color:green;"></span>
                   <?php echo $sub_big_adv_row['tel']; ?>
                  </div>
        </address>
                                    
        </div>

        <div class="col-md-4">
            <p class="property-head"><i class="fa fa-circle"></i> شرایط استفاده</p>
            <p>- مراجعه تنها با هماهنگی و رزرو قبلی با شماره: <?php echo $sub_big_adv_row['tel']; ?></p>
            <p>- استفاده از بن تایم خود را به روزهای پایانی موکول نفرمایید</p>
            <p>- رزرو و هماهنگی حداکثر تا دوهفته قبل از پایان مهلت استفاده</p>
            <p>- ارائه پرینت کد بن تایم الزامی است</p>
        </div>

        <div class="col-md-4">
            <p class="property-head"><i class="fa fa-circle"></i> ویژگی ها</p>
            <p>- اولویت تحویل بر اساس اولویت در خرید می باشد</p>
        </div>
    </div>
</section>