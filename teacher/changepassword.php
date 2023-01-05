<?php
session_start();
include '../asset/db.php';
mysqli_set_charset($conn,'utf8');
?>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- Graph CSS -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- jQuery -->
	<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
	<!-- lined-icons -->
	<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
	<!-- //lined-icons -->
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/amcharts.js"></script>
	<script src="js/serial.js"></script>
	<script src="js/light.js"></script>
	<script src="js/radar.js"></script>
	<link href="css/barChart.css" rel='stylesheet' type='text/css' />
	<link href="css/fabochart.css" rel='stylesheet' type='text/css' />
	<!--clock init-->
	<script src="js/css3clock.js"></script>
	<!--Easy Pie Chart-->
	<!--skycons-icons-->
	<script src="js/skycons.js"></script>

	<script src="js/jquery.easydropdown.js"></script>
    <style>
                @import url(http://fonts.googleapis.com/earlyaccess/droidarabickufi.css);

        body{
    font-family: 'Droid Arabic Kufi', serif;
    background-image: linear-gradient( 109.6deg, rgba(156,252,248,1) 11.2%, rgba(110,123,251,1) 91.1% );
        }
        h3{
            text-align: left;
            font-family: 'Droid Arabic Kufi', serif;


        }
img{
   width: 100px;
   top:100%
}

        </style>
        <br><br><br><br><br>
	<div class="col-md-12">
												<?php 
												if(isset($_POST['change_password']))
												{
													
													$prev_password = $_SESSION['pass'];
													$old_password = $_POST['old_password'];
													
													if($prev_password!=$old_password)
													{ 
														echo "<script>alert('Old Password Does not Matched');</script>";	
													}
													else
													{
														$st_username = $_SESSION['name'];
													$st_password_update = $_POST['new_password'];
														$update_success = "UPDATE `teacher` SET `t-password`='$st_password_update' WHERE `name`='$st_username'";
                                                        $update_query=mysqli_query($conn,$update_success);
														// print_r($update_success);
													
													if($update_success==true)
													{
													echo "<script>window.location = 'home.php?success';</script>";
													}
														else
														{
															echo "<script>alert('cant update password');</script>";
														}
													}
													
												}
										
												?> 
                                                <img src="../asset/img/reading.png">
                                                <h3>  مرحبا  <?php echo $_SESSION['name']; ?> </h3>

												<form method="post">
												<div class="input-group input-icon">
													<span class="input-group-addon">
												<i class="fa fa-key"></i>	</span>
													<input style="width: 50%; type="password" class="form-control1 icon" name="old_password" placeholder="الرمز السري القديم">
													
												</div>
												<div class="input-group input-icon">
													<span class="input-group-addon">
												<i class="fa fa-key"></i>	</span>
													<input style="width: 50%;" type="password" class="form-control1 icon" placeholder="الرمز السري الجديد" name="new_password">
													
												</div>	
										
													<input type="submit" name="change_password" class="a_demo_four" value="تغيير الرمز">
                                                   <a href="./home.php">  <input type="button"  class="a_demo_four" value="رجوع "> </a>

													</form>
											</div>
										</section>