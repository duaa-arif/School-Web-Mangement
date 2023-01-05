<?php
session_start();
include '../asset/db.php';
mysqli_set_charset($conn,'utf8');

 $t_user=$_SESSION['email'];
 $sql="SELECT * FROM `teacher` WHERE `t-email`='$_SESSION[email]'";

 $woe=$conn->query($sql);

$teacher_info=$woe->fetch_assoc();

?>
<!DOCTYPE html>
<style>
  
@import url(http://fonts.googleapis.com/earlyaccess/droidarabickufi.css);
body{
    font-family: 'Droid Arabic Kufi', serif;

}
.links_name{
  font-family: 'Droid Arabic Kufi', serif;

}

</style>
<title> teacher page</title>
<meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="stylesheet" href="./css/style4.css">
   </head>

<div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name"><?php echo $_SESSION['name'];?></span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">الرئيسية</span>
          </a>
        </li>
        <li>
          <a href="#info">
            <i class='bx bx-box' ></i>
            <span class="links_name">معلوماتي</span>
          </a>
        </li>
       
       
        <li>
          <a href="./myclass.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">  الجدول الاسبوعي</span>
          </a>
        </li> 
        <li>
          <a href="./Addresult.php">
            <i class='bx bx-user' ></i>
            <span class="links_name"> اضافة نتائج الاختبار</span>
          </a>
        </li>
        <li>
          <a href="./changepassword.php">
            <i class='bx bx-book-alt' > </i>
            <span class="links_name"> تغيير الرمز السري</span>
          </a>
        </li>
       
        <li>
          <a href="./assignment.php">
            <i class='bx bx-message' ></i>
            <span class="links_name">اضافة واجب</span>
          </a>
        </li>
       
        <li class="log_out">
          <a href="./logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name"> تسجيل خروج</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">الرئيسية</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name">Prem Shahi</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

<body>
<div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <?php 
          $sql="SELECT *FROM `teacher`";
          $res=$conn->query($sql);
          $row=mysqli_num_rows($res);
          
          ?>
          <div class="right-side">
            <div class="box-topic"> اجمالي الاساتذة</div>
            <div class="number"><?php  echo $row?></div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
            </div>
          </div>
          <i class='bx bx-cart-alt cart'></i>
        </div>
        
        
        <?php
        $sql="SELECT *FROM `students`";
        $result=$conn->query($sql);
        $row=mysqli_num_rows($result);
        

        ?>
        <div class="box">
          <div class="right-side">
            <div class="box-topic"> اجمالي الطلاب  </div>
            <div class="number"><?php echo  $row ?></div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
            </div>
          </div>
          <i class='bx bx-cart cart three' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">نسب النجاح </div>
            <div class="number">75%</div>
            <div class="indicator">
              <i class='bx bx-down-arrow-alt down'></i>
            </div>
          </div>
          <i class='bx bxs-cart-download cart four' ></i>
        </div>
      </div>




	  <section>
      <div id="infor">
  <h1 style="text-align:center ;"> معلومات الاستاذ</h1>


<div class="position-absolute top-50 start-50">
<div class="graph-visual tables-main">
						<h2 class="inner-tittle"></h2>
							
											<div class="graph">
										<div class="table">
									
											<table class="center" style="margin-left: 50%; font-family: 'Droid Arabic Kufi', serif"> 
											
												<thead>	
													<tr>
  <tr>

    <th scope="col"> الاسم</th>
    <th scope="col"> العمر </th>
    <th scope="col"> رقم الهاتف</th>
    <th scope="col"> العنوان</th>
    <th scope="col"> الايميل</th>
    <th scope="col"> الصورة الشخصية</th>
    <th scope="col"> الرمز السري</th>
    <th scope="col"> تعديل الصورة</th>




  </tr>
</thead>
<tbody>
<td><?php  echo ucfirst($teacher_info['name']);?> </td>
<td><?php  echo ucfirst($teacher_info['age']);?> </td>
<td><?php  echo ucfirst($teacher_info['phone']);?> </td>
<td><?php  echo ucfirst($teacher_info['t-address']);?> </td>
<td><?php  echo ucfirst($teacher_info['t-email']);?> </td>
<td> <img src="../asset/uploads/<?php echo $teacher_info['img']; ?>" alt=""  style="width: 40px; height: 40px;"/></td>
<td><?php  echo ($teacher_info['t-password']);?> </td>
<td> <button class="btn btn-warning" ><a style="color: white; text-decoration: none; width: 150px;" href="./editimgpersonal.php"> تغيير الصورة</a> </td>




<tbody>
</div>
</div>

</div>
    </div>

      </div>
</section>


	
<script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

   