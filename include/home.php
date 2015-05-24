<?php 

function home_category($category,$size,$connection){
	
	  $home_cat_query = "SELECT * FROM `users` WHERE adv_date > '0' AND adv_category LIKE '%$category%' 
	  					ORDER BY id DESC LIMIT $size ; ";  
	  $home_cat_result = mysqli_query($connection , $home_cat_query);	  
	  $output = '';
while($home_cat_row = mysqli_fetch_assoc($home_cat_result)){
		
		$city_query = "SELECT * FROM `province` WHERE id = '$home_cat_row[adv_city]' LIMIT 1 ; ";
	  	$city_result = mysqli_query($connection , $city_query);
	  	$city_row = mysqli_fetch_assoc($city_result);
		$home_cat_row['adv_city'] = $city_row['name'];
		
		##### bon kharidari shode kam shavad #####
		$count = 0;
		$sale_count_query = "SELECT * FROM `sale` WHERE adv_id = '$home_cat_row[id]' ; ";
		$sale_count_result = mysqli_query($connection , $sale_count_query);
		while($sale_count_row = mysqli_fetch_assoc($sale_count_result)){
			$count += $sale_count_row['count'];
			}
		$home_cat_row['adv_count'] = $home_cat_row['adv_count'] - $count;
	
            $output .= '<div class="col-md-4">
                <div class="view view-fifth">
                    <img src="images/advertises/'.$home_cat_row['adv_image'].'" width="298" height="183" />
                    <div class="mask">
                        <h5>'.$home_cat_row['adv_category'].'</h5>
                        <h2>'.$home_cat_row['adv_bon_price'].'</h2>
                        <p>سقف بن: '.$home_cat_row['adv_total_price'].'</p>
                        
                        <a href="index.php?page=product&id='.$home_cat_row['id'].'" class="info">مشاهده بن تایم</a>
                    </div>
                    <p class="caption">'.$home_cat_row['adv_name'].'</p>
                    <div class="detail">
                        <div class="col-md-3 detail-sell">
                            <span class="green">'.$home_cat_row['adv_count'].'</span>
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <div class="col-md-6 detail-zone">
                            <i class="fa fa-map-marker"></i>
                            <span>'.$home_cat_row['adv_city'].'</span>
                        </div>
                        <div class="col-md-3 detail-off">
                            <span dir="rtl">'.$home_cat_row['adv_time'].'</span> ماه 
                        </div>
                    </div>
                </div>
            </div>';
	}
	return $output;
}
?>
<?php
	  $today_query = "SELECT * FROM `users` WHERE adv_date > '0' ORDER BY id DESC LIMIT 6 ; ";
	  $today_result = mysqli_query($connection , $today_query);
	  
?>
<section class="main">
    <div class="container">
        <div class="col-md-12">
            <div class="menu-title">
                <span><i class="fa fa-circle"></i> بن تایم های امروز</span>
                
            </div>
            <hr class="menu-row">
            <div class="clearfix"></div>
            <!-- FIFTH EXAMPLE -->
<?php
	while($today_row = mysqli_fetch_assoc($today_result)){
		
		$city_query = "SELECT * FROM `province` WHERE id = '$today_row[adv_city]' LIMIT 1 ; ";
	  	$city_result = mysqli_query($connection , $city_query);
	  	$city_row = mysqli_fetch_assoc($city_result);
		$today_row['adv_city'] = $city_row['name'];
		
		##### bon kharidari shode kam shavad #####
		$count = 0;
		$sale_count_query = "SELECT * FROM `sale` WHERE adv_id = '$today_row[id]' ; ";
		$sale_count_result = mysqli_query($connection , $sale_count_query);
		while($sale_count_row = mysqli_fetch_assoc($sale_count_result)){
			$count += $sale_count_row['count'];
			}
		$today_row['adv_count'] = $today_row['adv_count'] - $count;
		
            echo '<div class="col-md-4">
                <div class="view view-fifth">
                    <img src="images/advertises/'.$today_row['adv_image'].'" width="298" height="183" />
                    <div class="mask">
                        <h5>'.$today_row['adv_category'].'</h5>
                        <h2>'.$today_row['adv_bon_price'].'</h2>
                        <p>سقف بن: '.$today_row['adv_total_price'].'</p>
                        
                        <a href="index.php?page=product&id='.$today_row['id'].'" class="info">مشاهده بن تایم</a>
                    </div>
                    <p class="caption">'.$today_row['adv_name'].'</p>
                    <div class="detail">
                        <div class="col-md-3 detail-sell">
                            <span class="green">'.$today_row['adv_count'].'</span>
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <div class="col-md-6 detail-zone">
                            <i class="fa fa-map-marker"></i>
                            <span>'.$today_row['adv_city'].'</span>
                        </div>
                        <div class="col-md-3 detail-off">
                            <span dir="rtl">'.$today_row['adv_time'].'</span> ماه 
                        </div>
                    </div>
                </div>
            </div>';
	}
?>           
            
			<div class="clearfix"></div><br>
			<div class="menu-title">
                <span><i class="fa fa-video-camera"></i> فرهنگی و هنری</span>
                <a href="?page=category&type=art" class="btn btn-success">مشاهده همه بن تایم های این دسته</a>
            </div>
            <hr class="menu-row">
            <div class="clearfix"></div>
            <!-- FIFTH EXAMPLE -->
            
			<?php echo home_category('فرهنگی و هنری',3,$connection); ?>
           
            <div class="clearfix"></div><br>
			<div class="menu-title">
                <span><i class="fa fa-plus-square"></i> زیبایی و آرایشی</span>
                <a href="?page=category&type=beauty" class="btn btn-success">مشاهده همه بن تایم های این دسته</a>
            </div>
            <hr class="menu-row">
            <div class="clearfix"></div>
            
            <?php echo home_category('زیبایی و آرایشی',3,$connection); ?>
            
            <div class="clearfix"></div><br>
			<div class="menu-title">
                <span><i class="fa fa-shopping-cart"></i> کالا</span>
                <a href="?page=category&type=product" class="btn btn-success">مشاهده همه بن تایم های این دسته</a>
            </div>
            <hr class="menu-row">
            <div class="clearfix"></div>
            
            <?php echo home_category('کالا',3,$connection); ?>

        </div>
    </div>

</section>