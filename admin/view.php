<?php
include '../asset/db.php';
mysqli_set_charset($conn, 'utf8');

 if(isset($_POST['send'])){
    $targitdir='../asset/uploads/';
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
                  $name=$_POST['name'];
    $age=$_POST['age'];
    $phone=$_POST['phone'];
   $address=$_POST['address'];
   $email=$_POST['email'];
   $password=$_POST['pass'];
   $sql2="INSERT INTO `teacher`(`id`, `name`, `age`, `phone`, `t-address`, `t-email`, `img`, `t-password`) VALUES ('','$name','$age','$phone','$address','$email','$f_name','$password')";

     mysqli_query($conn,$sql2);
     echo'<meta http-equiv="refresh" content="0, url=./home.php" />';
     exit();

}
                //    $sql="INSERT INTO `students`(id,image) VALUES('NULL','$e');";
                //    mysqli_query($conn,$sql);
                //    echo "successfull to upload .'$f_name'.  ";

        }else{
            $em="uploded failed";
            header("location:./test3.php?error=$em");
        }
    }
    
   

?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
                <div class="login-page" >
                   

                    <form  method="POST"  enctype="multipart/form-data"class="form" style="width: 70%; top:35px;;text-align:center;display:inline-block;background-color:#e09f3e;">
                        <div class="form-group"> 
                         
                            <h2 style="width: max-content;text-align:center;display:inline-block">سجل معلومات الاستاذ  </h2><br>
                            <label for="username" class="iconic user" > الاسم الثلاثي  <span class="required">*</span></label>
                            <input type="text" class="form-control" id="username"  required="required" placeholder="اكتب اسم  الثلاثي" name="name"/>
                      
                        <div class="form-group">
                            <label for="phone" class="iconic mail-alt"> رقم الهاتف   <span class="required">*</span></label> 
                            <input type="phone" class="form-control" id="usermail" placeholder="الرجاء اكتب هاتف فعال " required="required" name="phone"/>
                            <div class="form-group">
                            <label for="userpassword" class="iconic mail-alt"> العمر   <span class="required">*</span></label> 
                            <input type="" class="form-control" id="password" placeholder="اكتب العمر  " required="required" name="age"/>
                            <div class="form-group">
                            <label for="userphone" class="iconic mail-alt">  العنوان  <span class="required">*</span></label>
                             
                            <input type="text" class="form-control" id="usermail" placeholder="  العنوان" required="required"  name="address"/>
                        <div class="form-group">
                            <label for="subject" class="iconic quote-alt"> الايميل   <span class="required">*</span></label>
                            <input type="text" class="form-control" name="email" id="subject"  required="required" placeholder="الايميل "/>
                            <div class="form-group">
                            <label for="subject" class="iconic quote-alt"> الرمز السري   <span class="required">*</span></label>
                            <input type="password" class="form-control" name="pass" id="subject"  required="required" placeholder="الرمز السري "/>
                            <div class="form-group">
                                                       <div class="file-input" style="text-align: center;direction:rtl;">
  <input type="file" name="stfile" id="file" class="file">
  <label for="file"> اختر صورة الاستاذ</label>

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
 