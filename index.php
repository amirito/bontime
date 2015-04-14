<?php require 'core/core.php'; ?>
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
                <a href="#" role="button" aria-expanded="false">ارتباط با ما </a>
            </li>
        </ul>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="pull-right"><a href="#"> شهر  تهران<i class=" map-icon"></i></a></li>
                <li class="dropdown pull-right">
                    <a href="#">خانه   <span class="bread-crumb"></span></a>

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
        <div class="col-md-4">
            <p class="main-name">
                <span>کافه رستوران وان</span>
                <a class="fa fa-heart like"></a>
            </p>
            <div class="main-title">
                <h2>
                    <a href="#">محیط دنج و خاطره انگیز کافه رستوران وان</a>
                </h2>
            </div>
            <div class="main-price">
                <div class="price">
                    <p>پرداخت شما:</p>
                    <p><span class="green cash">36,000</span> تومان</p>
                </div>
                <div class="main-off">
                    <p class="percent">60%</p>
                    <p>تخفیف</p>
                </div>
            </div>
            <a class="btn btn-lg btn-block btn-success">مشاهده و خرید</a>
        </div>
        <div class="col-md-8 main-image">
            <div></div>
            <div><img src="images/152845.8882c857425c5130ee2659073c390d9a.jpg"></div>
            <div></div>
        </div>
        <div class="clearfix"></div>
    </div>

</section>

<?php

if(isset($_GET['page'])){
	  if(is_file('include/'.$_GET['page'].'.php')){
		  include 'include/'.$_GET['page'].'.php';
		  }else{
		  die('صفحه مورد نظر وجود ندارد');
		  }
	  }else{
		  include 'include/home.php';
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
            <div class="col-md-4 text-center logo-footer">
                <a href="#"><img src="images/logo-footer.png"></a>
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