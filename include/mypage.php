<?php
	if(!isset($_SESSION['MM_ID'])){
		header("Location: ?page=login");
	}
?>
<div class="col-xs-12">
		<br>
        <div class="menu-title" style="font-size:18px">
            <span><i class="fa fa-circle"></i> ثبت نام کاربران</span>
        </div>
        <hr class="menu-row">
			<div class="row" dir="rtl" style="min-height:400px;">
            <div class="col-md-4 pull-right "  style="border-left:solid 1px #eee;margin-left:20px; min-height:350px;">
            	<ul class="list-unstyled">
                	<li><a href="?page=mypage&sub_page=help" class="btn">راهنما</a></li>
                	<li><a href="?page=mypage&sub_page=step1" class="btn">مرحله اول : اطلاعات بن تایم</a></li>
                    <li><a href="?page=mypage&sub_page=step2" class="btn">مرحله دوم : ویژگی ها و شرایط استفاده</a></li>
                    <li><a href="?page=mypage&sub_page=step3" class="btn">مرحله سوم : اضافه کردن تصویر</a></li>
                    <!--<li><a href="?page=mypage&sub_page=reply" class="btn">پاسخ گویی به سوالات کاربران</a></li>-->
                    <li><a href="?page=mypage&sub_page=report" class="btn">گزارش سفارشات</a></li>
                    <li><a href="?page=mypage&sub_page=email" class="btn">دانلود بانک ایمیل + نرم افزار ارسال</a></li>
                </ul>
            </div>
				<div class="col-md-6 pull-right">
<?php
	if(isset($_GET['sub_page'])){
	  if(is_file('include/mypage/'.$_GET['sub_page'].'.php')){
		  include 'include/mypage/'.$_GET['sub_page'].'.php';
		  }else{
		  die('صفحه مورد نظر وجود ندارد');
		  }
	}else{
		  include 'include/mypage/help.php';
	}
?>	
				</div><!--/./ col-md-8 -->				
			</div><!--/./ row -->
</div><!--/./ page -->