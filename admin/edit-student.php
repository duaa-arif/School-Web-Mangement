<?php 
include '../asset/db.php';
mysqli_set_charset($conn,'utf8');
$id=$_GET['id'];
$sql="select * from `students` where id=$id;";
$result=$conn ->query($sql);
while($row=$result->fetch_assoc()){

  $id=$row['id'];
  $name= $row['name'];
  $age=$row['age'];
  $phone=$row['phone'];
  $token=$row['stoken'];
  $email=$row['email'];
  $imageURL = $row["img"];
  $pass=$row['password'];
  $class=$row['classid'];
?>  
<?php
     
      if(isset($_POST["update"])){
        
        include '../asset/db.php';
        mysqli_set_charset($conn,'utf8');
        $sql="UPDATE `students` SET `name`='$_POST[name]',
        `email`='$_POST[email]',`password`='$_POST[pass]',`phone`='$_POST[phone]',`classid`='$_POST[class]',`age`='$_POST[age]' WHERE `id`=$id;";
      mysqli_query($conn,$sql);
      echo 'successfully updated';
      header("location:./studentinfo.php");
      }
    }   
      ?>
   



  
 <!-- <meta http-equiv="refresh" content="5, url=./test5.php" /> -->



      
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
   width: 70% !important;
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
      background-color:#9A86A4;

    }
    td{
      font-family:Georgia, 'Times New Roman', Times, serif;
      width: auto;
      font-size: medium;
     
      

      
    }
   
      input {
    width: 100%;
    box-sizing: border-box;
}
    
    h1{
      color: black;
    }
    
    /* input{
      text-align: center;
      width: 200px;
    } */
    a:link,a:visited{
    color:white;
      text-decoration: none;
     
    }
    button{
     
      background-color: #9A86A4;
      font-family: Georgia, 'Times New Roman', Times, serif;
    }
    table td input {
 width: 100%;   
}
    </style>

<body>
<form  method="POST"  enctype="multipart/form-data"class="form">

  <h1>EDIT PAGE :HR.DUAA</h1>
  <form action="" method="POST">
 <br>
 <br>
 <table class="table ">
  <thead>
    <tr>
      <th scope="col" class="table-light">ID</th>
      <th scope="col" class="table-light">NAME</th>
      <th scope="col" class="table-light">AGE</th>
      <th scope="col" class="table-light">PHONE</th>
      <th scope="col" class="table-light">class</th>
      <th scope="col" class="table-light">EMAIL</th>    
      <th scope="col" class="table-light">PASSWORD </th>


    

      <tbody>
    <tr>
      <th scope="row" style="color:black;"><?php echo "$id";?></th>
       <td style="color:black;"><input type="text" id="name"class="form-control" style="width: max-content;" name="name" value=<?php echo $name;?> ></td>
      <td style="color:black;"><input type="text"id="department" class="form-control"  name="age" value="<?php echo $age;?>" ></td>
      <td style="color:black;"><input type="text"id="type" class="form-control" name="phone"  value=<?php echo $phone;?>></td>
      <td style="color:black;"><input type="text"  id="gender"class="form-control" name="class" value=<?php echo $class;?>></td>
      <td style="color:black;"><input type="text" id="phone" class="form-control"  name="email" value=<?php echo  $email;?>></td>
      <td style="color:black;"><input type="text" id="phone" class="form-control"  name="pass" value=<?php echo $pass;?>></td>

    </tr>
<br>
<br>
   
 </table>


 <div style="text-align: center;"> <img src="../asset/uploads/<?php echo $imageURL; ?>" alt=""  style="width:200px; height: 150px;" /><br><br> <div class="file-input" style="text-align: center;direction:rtl;"></div>
 <br>

      <button class="btn btn-light" onclick=" myFunction() " name="update" style="justify-content:center; "> EDIT</button> <br><br>


 </div>

         </form>
         <script>
function myFunction() {
  confirm("سيتم حفظ التعديلات ");
}
</script>
 


