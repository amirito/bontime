<?php
	
		$category_type = 'all';
		if(isset($_GET['type'])){
		  $category_type = $_GET['type'];
		  }
		  
	  switch($category_type){
		  case 'coffeshop' : $category_type = 'رستوران و کافی‌شاپ';
		  break;
		  case 'sport' : $category_type = 'تفریحی و ورزشی';
		  break;
		  case 'health' : $category_type = 'پزشکی و سلامت';
		  break;
		  case 'art' : $category_type = 'فرهنگی و هنری';
		  break;
		  case 'beauty' : $category_type = 'زیبایی و آرایشی';
		  break;
		  case 'product' : $category_type = 'کالا';
		  break;
		  default : $category_type = '';
		  break;
	  }	  

	  $cat_query = "SELECT * FROM `users` WHERE adv_date > '0' AND adv_category LIKE '%$category_type%' ORDER BY id DESC ; ";
	  $cat_result = mysqli_query($connection , $cat_query);
	  if($category_type == ''){
		  $category_type = 'تمامی پیشنهادات';
		  }
?>
<section class="main">
    <div class="container">
        <div class="col-md-12">
            <div class="menu-title">
                <span><i class="fa fa-circle"></i> 
				<?php 
				if($category_type == 'all'){
					$category_type = 'تمامی پیشنهادات';
					}
				echo $category_type; 
				
				?>
                </span>
            </div>
            <hr class="menu-row">
            <div class="clearfix"></div>
            <!-- FIFTH EXAMPLE -->
<?php
	while($cat_row = mysqli_fetch_assoc($cat_result)){
		
		$city_query = "SELECT * FROM `province` WHERE id = '$cat_row[adv_city]' LIMIT 1 ; ";
	  	$city_result = mysqli_query($connection , $city_query);
	  	$city_row = mysqli_fetch_assoc($city_result);
		$cat_row['adv_city'] = $city_row['name'];
		
		##### bon kharidari shode kam shavad #####
		$count = 0;
		$sale_count_query = "SELECT * FROM `sale` WHERE adv_id = '$cat_row[id]' ; ";
		$sale_count_result = mysqli_query($connection , $sale_count_query);
		while($sale_count_row = mysqli_fetch_assoc($sale_count_result)){
			$count += $sale_count_row['count'];
			}
		$cat_row['adv_count'] = $cat_row['adv_count'] - $count;
		
		
		
            echo '<div class="col-md-4">
                <div class="view view-fifth">
                    <img src="images/advertises/'.$cat_row['adv_image'].'" width="298" height="183" />
                    <div class="mask">
                        <h5>'.$cat_row['adv_category'].'</h5>
                        <h2>'.$cat_row['adv_bon_price'].'</h2>
                        <p>سقف بن: '.$cat_row['adv_total_price'].'</p>
                        
                        <a href="index.php?page=product&id='.$cat_row['id'].'" class="info">مشاهده بن تایم</a>
                    </div>
                    <p class="caption">'.$cat_row['adv_name'].'</p>
                    <div class="detail">
                        <div class="col-md-3 detail-sell">
                            <span class="green">'.$cat_row['adv_count'].'</span>
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <div class="col-md-6 detail-zone">
                            <i class="fa fa-map-marker"></i>
                            <span>'.$cat_row['adv_city'].'</span>
                        </div>
                        <div class="col-md-3 detail-off">
                            <span dir="rtl">'.$cat_row['adv_time'].'</span> ماه 
                        </div>
                    </div>
                </div>
            </div>';
	}
?>


        </div>
    </div>

</section>