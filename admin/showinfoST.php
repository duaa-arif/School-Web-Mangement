<?php 
sleep(1);
include '../asset/db.php';
mysqli_set_charset($conn,'utf8');
 if(isset($_POST['request'])){

 $request=$_POST['request'];

$sql ="SELECT *FROM `students` WHERE `classid` ='$request'  ";
  $re=$conn->query($sql);
  $count=mysqli_num_rows($re);
  ?>
  <table class="table">
  <?php
  if($count){
    ?>
    
<style>
   @import url(http://fonts.googleapis.com/css?family=Calibri:400,300,700);
   
  @import url(http://fonts.googleapis.com/earlyaccess/droidarabickufi.css);






body {
    background-color: #673AB7;
    font-family: 'Droid Arabic Kufi', serif;

}

.container{
   margin-top:100px;
}
.card {
      position: relative;
   display: -webkit-box;
   display: -ms-flexbox;
   display: flex;
   -webkit-box-orient: vertical;
   -webkit-box-direction: normal;
   -ms-flex-direction: column;
   flex-direction: column;
   min-width: 0;
   word-wrap: break-word;
   background-color: #fff;
   background-clip: border-box;
   border: 0px solid transparent;
   border-radius: 0px;
}


.card-body {
   -webkit-box-flex: 1;
   -ms-flex: 1 1 auto;
   flex: 1 1 auto;
   padding: 1.25rem;
}

.card .card-title {
   position: relative;
   font-weight: 600;
   margin-bottom: 10px;
}


.table {
   width: 100%;
   max-width: 100%;
   margin-bottom: 1rem;
   background-color: transparent;
}

* {
   outline: none;
}

.table th, .table thead ,table td {
   font-weight: 500;
   font-family: 'Droid Arabic Kufi', serif;

}


.table thead th {
   vertical-align: bottom;
   border-bottom: 2px solid #dee2e6;
}


.table th {
   padding: 1rem;
   vertical-align: top;
   border-top: 1px solid #dee2e6;
}


.table th, .table thead th {
   font-weight: 500;
}


th {
   text-align: inherit;
}


.m-b-20 {
   margin-bottom: 20px;
}


.customcheckbox {
   display: block;
   position: relative;
   padding-left: 24px;
   font-weight: 100;
   margin-bottom: 12px;
   cursor: pointer;
   font-size: 22px;
   -webkit-user-select: none;
   -moz-user-select: none;
   -ms-user-select: none;
   user-select: none;
}


.customcheckbox input {
   position: absolute;
   opacity: 0;
   cursor: pointer;
}

.checkmark {
   position: absolute;
   top: -3px;
   left: 0;
   height: 20px;
   width: 20px;
   background-color: #CDCDCD;
   border-radius: 6px;
}


.customcheckbox input:checked ~ .checkmark {
   background-color: #2196BB;
}


.customcheckbox .checkmark:after {
   left: 8px;
   top: 4px;
   width: 5px;
   height: 10px;
   border: solid white;
   border-width: 0 3px 3px 0;
   -webkit-transform: rotate(45deg);
   -ms-transform: rotate(45deg);
   transform: rotate(45deg);
}
h1{
  color:#dee2e6;
  text-align: center;
  font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
p{
  font-family: Georgia, 'Times New Roman', Times, serif;

}
th{
  font-family: Georgia, 'Times New Roman', Times, serif;
  background-color: #ffcccc;
}
td{
  font-family: Georgia, 'Times New Roman', Times, serif;
  background-color: #fff;
}
.center{
   text-align: center;
  font-size: larger;
  color:673AB7;
  text-decoration: #2196BB;
  
}
  </style>
<div class="container">
                      
                                
                    <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body text-center">
                                <h3 class="card-title m-b-0">  "Believe you can and you're halfway there."</h3>
                            </div>
                                <div class="table-responsive">
                                    <table class="table">
                                       

      <thead class="thead-light">
       <tr>
                                           
  <th style="width: 10%;" scope="col">الاسم</th>
  <th style="width: 10%;" scope="col">البريد الالكتروني</th>
  <th style="width: 10%;" scope="col"> الرمز السري</th>
  <th style="width: 10%;" scope="col"> رقم الهاتف</th>
  <th style="width: 10%;" scope="col"> العمر</th>
  <th style="width: 10%;" scope="col">الصورة </th>
  <th scope="col">تعديل </th>
   <th scope="col">تغيير الصورة </th>
   <th scope="col">حذف  </th>

 

    </tr>
    <?php
  }
  else{
    echo 'no data';
  }
  ?>
  <tbody>
    <?php while($ww=mysqli_fetch_array($re)){
    $imageURL = '../asset/uploads/'.$ww["img"];
?>
    

   

    <tr>
        <td><?php  echo $ww['name']?> </td>
        <td> <?php  echo $ww['email']?></td>
        <td><?php  echo $ww['password']?> </td>
        <td> <?php  echo $ww['phone']?></td>
        <td> <?php  echo $ww['age']?></td>
       <td> <img src="<?php echo $imageURL; ?>" alt=""  style="width: 40px; height: 40px;"/></td>
       <td ><button class="btn btn-success"> <a href="./edit-student.php?id=<?php echo $ww['id']; ?>" > تعديل </button></a> </td>
      <td ><button class="btn btn-light"> <a href="./editimgst.php?id=<?php echo $ww['id']; ?>" > تغيير الصورة </button></a> </td>
      <td ><button class="btn btn-danger" onclick="alert('هل انت متأكد من الحذف')"> <a href="./delete.php?id=<?php echo $ww['id']; ?>" > حذف </button></a> </td>

    </tr>
    <?php
  }
 }
													
?>