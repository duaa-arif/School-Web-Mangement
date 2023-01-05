<?php
include '../asset/db.php';

$id=$_GET['id'];
$sql="select * from `teacher` where id =$id;";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){    
    $image='../asset/uploads/'.$row['img'];
   
    unlink($image);
    // if(unlink($image)==true){
    //     echo 'deleteted';
    }


$sql="delete from `teacher` where id =$id;";
mysqli_query($conn,$sql);




?>
<h4> DELETE SUCCESS</h4>
<meta http-equiv="refresh" content="5, url=./home.php" />

<script type="text/javascript">
Window.location="test.php";
</script>

