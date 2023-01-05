<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<?php
session_start();
include '../asset/db.php';
mysqli_set_charset($conn,'utf8');
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="./css/style4.css">

   </head>
<body>
<style>
  @import url(http://fonts.googleapis.com/earlyaccess/droidarabickufi.css);
body{
    font-family: 'Droid Arabic Kufi', serif;

}
.links_name{
  font-family: 'Droid Arabic Kufi', serif;

}
.box-topic{
  font-family: 'Droid Arabic Kufi', serif;

}
.admin_name{
  font-family: 'Droid Arabic Kufi', serif;

}
.table th, .table thead th,table td {
   font-weight: 500;
   font-family: 'Droid Arabic Kufi', serif;

}


  </style>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name"> <?php  echo $_SESSION['name'] ;?>
</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">الرئيسية</span>
          </a>
        </li>
        <li>
          <a href="#teacher">
            <i class='bx bx-box' ></i>
            <span class="links_name"> معلومات الاساتذة</span>
          </a>
        </li>
        <li>
          <a href="./view.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name"> اضافة استاذ </span>
          </a>
        </li>
        <li>
          <a href="./studentinfo.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name"> معلومات الطلاب</span>
          </a>
        </li>
        <li>
          <a href="./addstudent.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">اضافة طالب</span>
          </a>
        </li> 
        <li>
          <a href="./messionlist.php">
            <i class='bx bx-user' ></i>
            <span class="links_name">الجدول</span>
          </a>
        </li>
        <li>
          <a href="./adddaily.php">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name"> اضافة صف</span>
          </a>
        </li>
       
        <li>
          <a href="#">
            <i class='bx bx-message' ></i>
            <span class="links_name">البريد</span>
          </a>
        </li>
       
    
        <li class="log_out">
          <a href="#">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name"><?php echo ucfirst($_SESSION['name']);?></span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

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
            <div class="number"> <?php  echo $row?></div>
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
      <div id="teacher">
  <h1 style="text-align:center ;"> معـلومات الاسـاتذة</h1>
<?php
include '../asset/db.php';
mysqli_set_charset($conn, 'utf8');
$sql="SELECT *FROM `teacher`";
$result = $conn->query($sql); 
?>  <div class="position-absolute top-50 start-50">
<div class="graph-visual tables-main">
						<h2 class="inner-tittle"></h2>
							
											<div class="graph">
										<div class="table">
									
											<table class="center"> 
											
												<thead>	
													<tr>
  <tr>

    <th scope="col"> الاسم</th>
    <th scope="col"> العمر </th>
    <th scope="col"> رقم الهاتف</th>
    <th scope="col"> العنوان</th>
    <th scope="col" style="width: 50px;"> البريد الالكتروني</th>
    <th scope="col" style="width: 70px;"> الصورة الشخصية</th>
    <th scope="col" style="width: 50px;"> الرمز السري</th>
    <th scope="col"> تعديل</th>
    <th scope="col"> تعديل الصورة</th>

    <th scope="col"> حذف</th>


  </tr>
</thead>
<tbody>
<?php
while($row=$result->fetch_assoc()){

$imageURL = $row["img"];

?>
<tbody>
  <tr>
  <td><?php echo $row['name'];?></td>

    <td><?php echo $row['age'];?></td>
     <td  ><?php echo $row['phone'];?></td>
    <td ><?php echo  $row['t-address'];?></td>
    <td ><?php echo  $row['t-email'];?></td>
    <td> <img src="../asset/uploads/<?php echo $imageURL; ?>" alt=""  style="width: 70px; height: 50px;"/></td>
        <td ><?php echo  $row['t-password'];?></td>
        <td ><button class="btn btn-success" > <a href="./edit-teacher.php?id=<?php echo $row['id']; ?>" > تعديل </button></a> </td>
      <td> <button class="btn btn-warning" ><a href="./editimg.php?id=<?php echo $row['id']; ?>"> تغيير الصورة</a> </td>
             <td ><button class="btn btn-danger" > <a href="./deleteteacher.php?id=<?php echo $row['id']; ?>" > حذف </button></a> </td>

  </tr> 


</div>
</div>
<?php
}
?>
</div>
    </div>

      </div>
</section>

<div id="#students" >
  
  </div>
                            

</body>
</html>




      
        


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

   