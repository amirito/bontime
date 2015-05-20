<?php 
$etelaat = '';
$etelaat_query = " SELECT * FROM `email`" ;
$etelaat_result = mysqli_query($connection,$etelaat_query);
while($etelaat_row = mysqli_fetch_assoc($etelaat_result)){
		$etelaat .="<li class='col-sm-6 col-xs-12 pull-right text-right'>
						<i style='color:#4183C4' class='fa fa-download'></i>
						<a style='display:inline' href='http://barincard.com/email/bank/$etelaat_row[url]' class='link'> دانلود $etelaat_row[name] </a>
					</li>";
	}

?>

<h4 class="header-small">دانلود بانک ایمیل + نرم افزار ارسال</h4>
	<br>

	
    <p>شما می توانید جهت افزایش مشتریان خود لینک بن کارت خود را به بانک ایمیل کل کشور ارسال نمایید.</p>
    <br>

	<p>لینک بن کارت شما : <span style="font-family:verdana;background-color:#bbb;padding:10px;">http://bontime.ir/index.php?page=product&id=<?php echo $_SESSION['MM_ID']; ?></span></p>
    
    <br>

    <p>با کلیک بر روی هر کدام از لینک های زیر ایمیل های آن را دانلود کنید.</p>
    <br>
        <div class="  category">
            <ul class="list-unstyled">
                <?php echo $etelaat; ?>
            </ul>
        </div>
        <div class="clearfix"></div><br>
    	<h4 class="header-small pull-right">دانلود نرم افزار ارسال ایمیل گروهی</h4>
    	<div class="col-xs-12 text-center" style="font-size:18px">
            <i style='color:red' class='fa fa-download'></i><a href='http://barincard.com/email/abzar.zip' class='link'> دانلود نرم افزار ارسال ایمیل گروهی </a><br>
<br>
<br>

</div><br>
<br>
