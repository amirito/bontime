<?php require 'core/core.php'; 

if(isset($_GET['page'])){
	switch($_GET['page']){
		
		case 'product' : 
			$top = 'big-ad';
			$bottom = 'product';
		break;
		
		case 'contactus' : 
			$top = 'contactus';
			$bottom = 'none';
		break;
		
		default :
		  	$top = 'big-ad';
			$bottom = 'home';
			
		}
}else{
	$top = 'big-ad';
	$bottom = 'home';
	}
	
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bon Time بن تایم</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <ul class="nav navbar-nav navbar-bordered">
            <li class="active"><a href="#"><i class="fa fa-phone"></i> (021) 88759592 <span class="sr-only">(current)</span></a></li>
            <li><a href="#">بن تایم چگونه کار می کند؟</a></li>
            <li class="">
                <a href="index.php?page=contactus" role="button" aria-expanded="false">ارتباط با ما </a>
            </li>
        </ul>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="pull-right"><a href="#"> شهر  تهران<i class=" map-icon"></i></a></li>
                <li class="dropdown pull-right">
                    <a href="index.php">خانه &nbsp;<span class="bread-crumb"></span></a>

                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="jumbotron">
    <div class="container">
        <div class="col-md-4">
            <div class="user">
                <a class="btn-signin">
                    <span>ورود کاربر</span>
                    <i></i>
                </a>
                <p class="user-signup text-right">
                    <a href="#">ثبت نام کنید</a>
                    <a href="#">فراموشی کلمه عبور</a>
                </p>

            </div>

        </div>
        <div class="col-md-4">

        </div>
        <div class="col-md-4 text-right logo">
            <a href="#"><img src="images/logo.png"></a>
        </div>
    </div>

</div>
<section class="main container">
    <div class="col-md-10 big-ad">
<?php
if(isset($top) && is_file('include/'.$top.'.php')){
	  include 'include/'.$top.'.php';
	  }else{
	  die('صفحه مورد نظر وجود ندارد');
}
?>
    </div>
	<div class="col-md-2">
    	<ul class="category">
        	<li class="active-li"><a href="#/tehran"> <span>خانه</span> <span class="fa fa-home right-item"></span></a></li>
			<li><a href="#/tehran/cat:1"> <span>تمامی پیشنهادات</span> <span class="fa fa-th right-item"></span></a></li>
			<li><a href="#/tehran/cat:8"> <span>رستوران و کافی‌شاپ</span> <span class="fa fa-cutlery right-item"></span></a></li>
			<li><a href="#/tehran/cat:6"> <span>تفریحی و ورزشی</span> <span class="fa fa-futbol-o right-item"></span></a></li>
			<li><a href="#/tehran/cat:15"> <span>پزشکی و سلامت</span> <span class="fa fa-plus-square right-item"></span></a></li>
			<li><a href="#/tehran/cat:9"> <span>فرهنگی و هنری</span> <span class="fa fa-video-camera right-item"></span></a></li>
			<li><a href="#/tehran/cat:7"> <span>زیبایی و آرایشی</span> <span class="fa fa-paint-brush right-item"></span></a></li>
			<li><a href="#/tehran/cat:5"> <span>کالا</span> <span class="fa fa-shopping-cart right-item"></span></a></li>
        </ul>
    </div>
</section>

<?php
if(isset($bottom) && is_file('include/'.$bottom.'.php')){
	  include 'include/'.$bottom.'.php';
	  }else{
	  die('صفحه مورد نظر وجود ندارد');
}
?>

<hr>
<div class="clearfix"></div>
<footer>
    <div class="top-footer">
        <div class="container">
            <div class="col-md-10 text-right">
                <div class="col-md-3">
                    <p class="footer-title">سایر خدمات</p>
                    <ul class="footer-list list-unstyled">
                        <li><a href="#">تماس با واحد پشتیبانی</a></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <p class="footer-title">بیشتر بدانید</p>
                    <ul class="footer-list list-unstyled">
                        <li><a href="#">آر اس اس</a></li>
                        <li><a href="#">سوالات متداول</a></li>
                        <li><a href="#">راهنمای پرداخت آنلاین</a></li>
                        <li><a href="#">اطمینان از دریافت ایمیل</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <p class="footer-title">ارتباط بیشتر</p>
                    <ul class="footer-list list-unstyled">
                        <li><a href="#">تماس با ما</a></li>
                        <li><a href="#">دریافت نمایندگی</a></li>
                        <li><a href="#">بن تایم برای کسب و کار شما</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <p class="footer-title">بن تایم</p>
                    <ul class="footer-list list-unstyled">
                        <li><a href="#">بن بلاگ</a></li>
                        <li><a href="#">درباره بن تایم</a></li>
                        <li><a href="#">بن تایم در اخبار</a></li>
                        <li><a href="#">بن تایم چگونه کار می ند</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <p class="footer-title">بن تایم روی موبایل شما</p>
                </div>
                <div class="col-md-6">
                    <p class="footer-title">مشترک شوید</p>
                    <form>
                        <input type="text" class="subscribe-form pull-right">
                        <input type="submit" class="btn btn-lg btn-subscribe" value="اشتراک">
                    </form>
                </div>
            </div>
            <div class="col-md-2">
            	<a href="#"><img src="images/logo-footer.png" class="footer-right-logo"></a>
            </div>
            <div class="clearfix"></div>

        </div>
    </div>
    <div class="bottom-footer">
        <div class="container">
            <div class="col-md-4 text-left">
                <p class="phone-detail">
                    <i class="fa fa-phone-square"></i><span>(021) 88759592</span>
                </p>
                <div class="clearfix"></div>
                <ul class="list-inline social">
                    <li>
                        <a class="fa fa-facebook-square"></a>
                    </li>
                    <li>
                        <a class="fa fa-twitter-square"></a>
                    </li>
                    <li>
                        <a class="fa fa-google-plus-square"></a>
                    </li>
                    <li>
                        <a class="fa fa-linkedin-square"></a>
                    </li>
                    <li>
                        <a class="fa fa-instagram"></a>
                    </li>
                    <li>
                        <a class="fa fa-pinterest-square"></a>
                    </li>
                    <li>
                        <a class="fa fa-youtube"></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 text-center">
                <a href="http://rayweb.ir">رای وب</a>
            </div>
            <div class="col-md-4">
                <p>کليه حقوق اين وب سایت متعلق به شرکت یگانه نوآوران پویا است.</p>
                <a href="#">قوانین و مقرارت بن تایم</a> -
                <a href="#">ضوابط حفظ حریم خصوصی</a>
            </div>
        </div>

    </div>
</footer>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>