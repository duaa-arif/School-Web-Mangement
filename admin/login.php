<?php
session_start();
include '../asset/db.php';
mysqli_set_charset($conn,'utf8');

if($_SESSION['role']=='admin'){

  echo 'welcome'.$_SESSION['name'];
    header('Location: home.php');

}


        

else{
    echo 'you are not Admin';
}


if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['pass1']) and isset($_POST['email'])){
     // var_dump($_POST);
$sql="SELECT * FROM `admin` WHERE `password`='{$_POST['pass1']} ' AND `email`='{$_POST['email']}';";

$result=$conn->query($sql);
if($result !== false and $result->num_rows>0){

 
$row=$result->fetch_assoc();

// check rol-> admin or user 
   
// if($row['role']=='admin'){

    $_SESSION['email']=$row['email'];
    $_SESSION['name']=$row['firstname'];
    $_SESSION['pass']=$row['password'];



    $_SESSION['role']=$row['role'];




   
echo'you are admin';

header('Location:home.php');





}else{
    echo'no data';
}
    }}



?>



