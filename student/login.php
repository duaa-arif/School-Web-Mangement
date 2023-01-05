<?php
session_start();
include '../asset/db.php';
mysqli_set_charset($conn,'utf8');

// if($_SESSION['role']=='admin'){

//   echo 'welcome'.$_SESSION['name'];
//     header('Location: index.php');

// }
// else if ($_SESSION['role']=='user'){
 
//     header("Location:studentinfo.php");

        

// }


if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['pass1']) and isset($_POST['email'])){
     // var_dump($_POST);
$sql="SELECT * FROM `students` WHERE `password`='{$_POST['pass1']} ' AND `email`='{$_POST['email']}';";

$result=$conn->query($sql);
if($result !== false and $result->num_rows>0){

 
$row=$result->fetch_assoc();

// check rol-> admin or user 
   
// if($row['role']=='admin'){

    $_SESSION['email']=$row['email'];
    $_SESSION['name']=$row['name'];
    $_SESSION['pass']=$row['password'];
    $_SESSION['phone']=$row['phone'];
    $_SESSION['class']=$row['classid'];
    $_SESSION['age']=$row['age'];


    // $_SESSION['role']=$row['role'];




   
echo'you are admin';

header('Location:home.php');





}else{
    echo'no data';
}
    }}



?>



