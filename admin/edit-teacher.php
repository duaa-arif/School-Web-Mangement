<?php 
include '../asset/db.php';
mysqli_set_charset($conn,'utf8');
$id=$_GET['id'];
$sql="select * from `teacher` where id=$id;";
$result=$conn ->query($sql);
while($row=$result->fetch_assoc()){

  $id=$row['id'];
  $name= $row['name'];
  $age=$row['age'];
  $phone=$row['phone'];
  $add=$row['t-address'];
  $email=$row['t-email'];
  $imageURL = $row["img"];
  $pass=$row['t-password'];
?>  
<?php
     
      if(isset($_POST["update"])){
        
        include '../asset/db.php';
        mysqli_set_charset($conn,'utf8');
        
          $sql="UPDATE `teacher` SET `name`='$_POST[name]',`age`='$_POST[age]',`phone`='$_POST[phone]',`t-address`='$_POST[address]',`t-email`='$_POST[email]',`t-password`='$_POST[pass]' WHERE `id`=$id;";
      mysqli_query($conn,$sql);
      }
    }   
      ?>
       <?php 
      
  if(isset($_POST['editimg'])){
    $sql="select * from `teacher` where id =$id;";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){    
    $image=$row['img'];
   if($image !== ""){
   
    
  //   // if(unlink($image)==true){
  //   //     echo 'deleteted';
  //   }


$sql=" UPDATE `teacher` SET `img`=' ' WHERE $id=`id` ";
mysqli_query($conn,$sql);

  

  $targitdir= "../asset/uploads/ ";
  $f_name=basename(isset($_FILES['stfile']['name']));
  $path=$targitdir.$f_name;
  $pathextension=pathinfo($path,PATHINFO_EXTENSION);
 //  if(isset($_POST['upload'])&&isset($_FILES['fname'])){
 
  $f_size=isset($_FILES['stfile']['size']);
  $f_tmpname=isset($_FILES['stfile']['tmp_name']);
  $f_error=isset($_FILES['stfile']['error']);
  
         $allow=array('pdf','jpeg','jpg','png','svg');
         if(in_array($pathextension,$allow)){
 
             if(move_uploaded_file($f_tmpname,$path)){
                 
     $sql2=" UPDATE `teacher` SET `img`='$f_name' WHERE $id=id";
      mysqli_query($conn,$sql2);
      // echo'<meta http-equiv="refresh" content="0, url=./newteach.php" />';
      exit();
 
 }
                 //    $sql="INSERT INTO `students`(id,image) VALUES('NULL','$e');";
                 //    mysqli_query($conn,$sql);
                 //    echo "successfull to upload .'$f_name'.  ";
 
         }else{
             $em="uploded failed";
            //  header("location:./test3.php?error=$em");
         }
        }
     
      }
    }
 
//  ?>

  
 <!-- <meta http-equiv="refresh" content="5, url=./test5.php" /> -->

/<script type="text/javascript">
Window.location="test.php";
</script>

      
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <style>
  table{
      margin: auto;
   width: 50% !important;
    }
    h1{
      position:relative;
      text-align: center;
font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
color:darkslategray;
    }
    body{
      background-image:url("./img/23.jpg");
      background-size:cover;
      background-position: center;
      background-repeat: no-repeat;
    }
    th{
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      color:darkslategrey;
      background-color:#4a4e69;

    }
    td{
      font-family:Georgia, 'Times New Roman', Times, serif;
      font-style:inherit;
      color:black;
      font-size: 150%;
      

      
    }
    h1{
      color: beige;
    }
    
    input{
      text-align: right;
    }
    a:link,a:visited{
    color:white;
      text-decoration: none;
     
    }
    button{
      background-color: #9A86A4;
      font-family: Georgia, 'Times New Roman', Times, serif;
    }
    </style>

<body>
<form  method="POST"  enctype="multipart/form-data"class="form">

  <h1>EDIT PAGE :HR.DUAA</h1>
  <form action="" method="POST">
 <br>
 <br>
 <table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col" class="table-light">ID</th>
      <th scope="col" class="table-light">NAME</th>
      <th scope="col" class="table-light">AGE</th>
      <th scope="col" class="table-light">PHONE</th>
      <th scope="col" class="table-light">ADSRESS</th>
      <th scope="col" class="table-light">EMAIL</th>
      <th scope="col" class="table-light">PASSWORD </th>

    

      <tbody>
    <tr>
      <th scope="row" style="color:black;"><?php echo "$id";?></th>
       <td style="color:black;width:fit-content" ><input type="text" style="width:fit-content ;text-align:center" id="name"class="form-control" name="name" value=<?php echo $name;?> ></td>
      <td style="color:black;"><input type="text"id="department" class="form-control"  name="age" value="<?php echo $age;?>" ></td>
      <td style="color:black;"><input type="text"id="type" class="form-control" name="phone"  value=<?php echo $phone;?>></td>
      <td style="color:black;"><input type="text"  id="gender"class="form-control" name="address" value=<?php echo $add;?>></td>
      <td style="color:black;"><input type="text" id="phone" class="form-control"  name="email" value=<?php echo  $email;?>></td>
      <td style="color:black;"><input type="text" id="phone" class="form-control"  name="pass" value=<?php echo $pass;?>></td>

    </tr>
<br>
<br>
   
 </table>


 <div style="text-align: center;"> <img src="../asset/uploads/<?php echo $imageURL; ?>" alt=""  style="width:200px; height: 150px;" /><br><br> <div class="file-input" style="text-align: center;direction:rtl;"></div>
  <input type="file" name="stfile" id="file" class="file"> <button name="editimg">edit image </input><br>
 <br>

      <button class="btn btn-light" name="update" style="justify-content:center; "> EDIT</button><br><br>
      <button class="btn btn-light" name="" style="justify-content:center; "><a href="./home.php"> BACK</button></a>


 </div>

         </form>

 


