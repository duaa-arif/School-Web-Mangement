<?php
include '../asset/db.php';
$id=$_GET['id'];
$sql="select * from `students` where id =$id;";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){    
    $image='uploads/'.$row['img'];
   
    unlink($image);
    // if(unlink($image)==true){
    //     echo 'deleteted';
    }





$sql="delete from `students` where id=$id;";
mysqli_query($conn,$sql);

?>
<h4> DELETE SUCCESS</h4>
<?php
header("location:./studentinfo.php");
?>
<script type="text/javascript">
alert("هل انت متأكد من الحذف");
</script>
