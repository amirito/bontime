<?php
	  $today_query = "SELECT * FROM `users` WHERE adv_date > '0' ORDER BY id DESC LIMIT 6 ; ";
	  $today_result = mysqli_query($connection , $today_query);
	  
?>
<section class="main">
    <div class="container">
        <div class="col-md-12">
            <div class="menu-title">
                <span><i class="fa fa-circle"></i> بن تایم های امروز</span>
                <a class="btn btn-success">مشاهده همه بن تایم های این دسته</a>
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
		
            echo '<div class="col-md-4">
                <div class="view view-fifth">
                    <img src="images/advertises/'.$today_row['adv_image'].'" width="298" height="183" />
                    <div class="mask">
                        <h5>'.$today_row['adv_category'].'</h5>
                        <h2>'.$today_row['adv_bon_price'].'</h2>
                        <p>سقف بن: '.$today_row['adv_total_price'].'</p>
                        <p>تخفیف: 78%</p>
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
                <span><i class="fa fa-cutlery"></i> رستوران، فست فود و کافی شاپ</span>
                <a class="btn btn-success">مشاهده همه بن تایم های این دسته</a>
            </div>
            <hr class="menu-row">
            <div class="clearfix"></div>
            <!-- FIFTH EXAMPLE -->
            <div class="col-md-4">
                <div class="view view-fifth">
                    <img src="images/1.jpg" />
                    <div class="mask">
                        <h5>پرداخت شما </h5>
                        <h2>8,800</h2>
                        <p>ارزش واقعی: 40,000</p>
                        <p>تخفیف: 78%</p>
                        <a href="index.php?page=product" class="info">مشاهده بن تایم</a>
                    </div>
                    <p class="caption">چاپ عکس روی چرم، پازل از سیمرغ نیلی</p>
                    <div class="detail">
                        <div class="col-md-3 detail-sell">
                            <span class="green">16</span>
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <div class="col-md-6 detail-zone">
                            <i class="fa fa-map-marker"></i>
                            <span>میدان ولیعصر</span>
                        </div>
                        <div class="col-md-3 detail-off">
                            <span>%78</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="view view-fifth">
                    <img src="images/1.jpg" />
                    <div class="mask">
                        <h5>پرداخت شما </h5>
                        <h2>8,800</h2>
                        <p>ارزش واقعی: 40,000</p>
                        <p>تخفیف: 78%</p>
                        <a href="index.php?page=product" class="info">مشاهده بن تایم</a>
                    </div>
                    <p class="caption">چاپ عکس روی چرم، پازل از سیمرغ نیلی</p>
                    <div class="detail">
                        <div class="col-md-3 detail-sell">
                            <span class="green">16</span>
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <div class="col-md-6 detail-zone">
                            <i class="fa fa-map-marker"></i>
                            <span>میدان ولیعصر</span>
                        </div>
                        <div class="col-md-3 detail-off">
                            <span>%78</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="view view-fifth">
                    <img src="images/1.jpg" />
                    <div class="mask">
                        <h5>پرداخت شما </h5>
                        <h2>8,800</h2>
                        <p>ارزش واقعی: 40,000</p>
                        <p>تخفیف: 78%</p>
                        <a href="index.php?page=product" class="info">مشاهده بن تایم</a>
                    </div>
                    <p class="caption">چاپ عکس روی چرم، پازل از سیمرغ نیلی</p>
                    <div class="detail">
                        <div class="col-md-3 detail-sell">
                            <span class="green">16</span>
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <div class="col-md-6 detail-zone">
                            <i class="fa fa-map-marker"></i>
                            <span>میدان ولیعصر</span>
                        </div>
                        <div class="col-md-3 detail-off">
                            <span>%78</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="clearfix"></div><br>
			<div class="menu-title">
                <span><i class="fa fa-plus-square"></i> پزشکی، بهداشت و سلامت</span>
                <a class="btn btn-success">مشاهده همه بن تایم های این دسته</a>
            </div>
            <hr class="menu-row">
            <div class="clearfix"></div>
            <!-- FIFTH EXAMPLE -->
            <div class="col-md-4">
                <div class="view view-fifth">
                    <img src="images/1.jpg" />
                    <div class="mask">
                        <h5>پرداخت شما </h5>
                        <h2>8,800</h2>
                        <p>ارزش واقعی: 40,000</p>
                        <p>تخفیف: 78%</p>
                        <a href="index.php?page=product" class="info">مشاهده بن تایم</a>
                    </div>
                    <p class="caption">چاپ عکس روی چرم، پازل از سیمرغ نیلی</p>
                    <div class="detail">
                        <div class="col-md-3 detail-sell">
                            <span class="green">16</span>
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <div class="col-md-6 detail-zone">
                            <i class="fa fa-map-marker"></i>
                            <span>میدان ولیعصر</span>
                        </div>
                        <div class="col-md-3 detail-off">
                            <span>%78</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="view view-fifth">
                    <img src="images/1.jpg" />
                    <div class="mask">
                        <h5>پرداخت شما </h5>
                        <h2>8,800</h2>
                        <p>ارزش واقعی: 40,000</p>
                        <p>تخفیف: 78%</p>
                        <a href="index.php?page=product" class="info">مشاهده بن تایم</a>
                    </div>
                    <p class="caption">چاپ عکس روی چرم، پازل از سیمرغ نیلی</p>
                    <div class="detail">
                        <div class="col-md-3 detail-sell">
                            <span class="green">16</span>
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <div class="col-md-6 detail-zone">
                            <i class="fa fa-map-marker"></i>
                            <span>میدان ولیعصر</span>
                        </div>
                        <div class="col-md-3 detail-off">
                            <span>%78</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>