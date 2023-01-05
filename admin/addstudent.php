<?php
session_start();
// $_SESSION['password'];
global $conn;
include '../asset/db.php';
mysqli_set_charset($conn,'utf8');
if(isset($_POST['send'])){
    $targitdir= "../asset/uploads/ ";
    $f_name=basename($_FILES['stfile']['name']);
    $path=$targitdir.$f_name;
    $pathextension=pathinfo($path,PATHINFO_EXTENSION);
   //  if(isset($_POST['upload'])&&isset($_FILES['fname'])){
   
    $f_size=$_FILES['stfile']['size'];
    $f_tmpname=$_FILES['stfile']['tmp_name'];
    $f_error=$_FILES['stfile']['error'];
    
           $allow=array('pdf','jpeg','jpg','png','svg');
           if(in_array($pathextension,$allow)){
   
               if(move_uploaded_file($f_tmpname,$path)){
$post11=$_POST['name'];
$post12=$_POST['email'];
$post13=$_POST['phone'];
$post15=$_POST['pass'];
$Token = @date("ymdhis");
$RandomNunber = rand(100,200);
$NewToken = $Token . $RandomNunber;
$post18=$_POST['age'];
$post17=$_POST['stage'];
$post16=$_POST['phone'];
$sql_u="SELECT *FROM `students` WHERE `name` ='$post11';";
$sql_e="SELECT *FROM `students` WHERE `email` ='$post12';";
$res_u=$conn->query($sql_u);
$res_e=$conn->query($sql_e);

if(mysqli_num_rows($res_u) >0){
    echo ' name already exist';

}
elseif(mysqli_num_rows($res_e) >0){
    echo 'email is already exixt';
}
else {
    $sql="INSERT INTO `students` (`id`, `name`, `email`, `stoken`, `password`, `phone`, `classid`, `age`, `img`) 
    VALUES ('','$post11','$post12','$NewToken','$post15','$post16','$post17','$post18','$f_name')";
    $conn->query($sql);
  
    echo 'you register successfully';
      echo'<meta http-equiv="refresh" content="0, url=./home.php" />';

  exit();


               
}
               }
            }
        }
    
//   setcookie('nameuser',$stname, time() + (86400 * 365), "/");
//   setcookie('useremail',$stemail, time() + (86400 * 365), "/");
//   $_SESSION['password']=$rowpass['password'];
  // setcookie('login','1', time() + (86400 * 365), "/");


  // header('location:./addstudent.php');
//   echo'<meta http-equiv="refresh" content="0, url=./test2.php" />';
             
        

?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>

<html lang="ar">
    <head>
        <meta charset="UTF-8">
     

        <title> صفحة التسجيل </title>
       
        <link rel="stylesheet" href="./css/styleforregestir.css">
    </head>
    <body style="background-color: #e5e5e5;
"> 

        <!-- <h1 class="htext" style="/* Fallback color */
  color: #e09f3e;
  font-weight: bold;

  text-align: center;
">تسجيل الطلاب </h1> -->
        <div class="container">
            <div class="row">
                <div></div>
                <!-- <img id="postcard" src="http://upload.wikimedia.org/wikipedia/commons/6/6d/FolliesBergereBoxCostume.jpg" alt="postcard" class="img-responsive move"> -->
                <div class="login-page" >
                   

                    <form  method="POST"  enctype="multipart/form-data"class="form" style="width: 70%; top:35px;;text-align:center;display:inline-block;background-color:#e09f3e;">
                        <div class="form-group"> 
                         
                            <h2 style="width: max-content;text-align:center;display:inline-block">سجل معلومات الطالب  </h2><br>
                            <label for="username" class="iconic user" > الاسم الثلاثي  <span class="required">*</span></label>
                            <input type="text" class="form-control" id="username"  required="required" placeholder="اكتب اسم الطالب الثلاثي" name="name"/>
                      
                        <div class="form-group">
                            <label for="usermail" class="iconic mail-alt"> الايميل  <span class="required">*</span></label> 
                            <input type="email" class="form-control" id="usermail" placeholder="الرجاء اكتب ايميل فعال " required="required" name="email"/>
                            <div class="form-group">
                            <label for="userpassword" class="iconic mail-alt"> كلمة السر   <span class="required">*</span></label> 
                            <input type="password" class="form-control" id="password" placeholder="الرجاء اكتب  كلمة مرور قوية  " required="required" name="pass"/>
                            <div class="form-group">
                            <label for="userphone" class="iconic mail-alt"> الهاتف  <span class="required">*</span></label> 
                            <input type="text" class="form-control" id="usermail" placeholder="الرجاء اكتب رقم هاتف فعال " required="required"
                         name="phone"/>
                        <div class="form-group">
                            <label for="subject" class="iconic quote-alt"> الصف  <span class="required">*</span></label>
                            <input type="text" class="form-control" name="stage" id="class"  required="required" placeholder="الصف "/>
                            <div class="form-group">
                            <label for="subject" class="iconic quote-alt"> العمر  <span class="required">*</span></label>
                            <input type="text" class="form-control" name="age" id="subject"  required="required" placeholder="العمر "/>

                            <div class="file-input" style="text-align: center;direction:rtl;">
  <input type="file" name="stfile" id="file" class="file">
  <label for="file"> اختر صورة الطالب</label>

                        <input type="submit"  name="send" class="btn btn-primary" style="color:black" value=" ★  تسجيل!" />
                    
</div>
</div>  </div>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </body>
</html>   
 