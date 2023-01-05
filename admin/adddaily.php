<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;
background-image: url("../asset/images/g4.jpg");
background-attachment: fixed;
background-repeat: no-repeat;
background-size: cover;
}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: darkslategray;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 400px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 12;
  right: 125px;
  border: 3px solid darkgoldenrod;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 500px;
  height: 700px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>
<body>



<button class="open-button" onclick="openForm()"> اضافة درس </button>

<div class="form-popup" id="myForm">
  <form action="" method="POST" class="form-container">
    <h1>اضف</h1>

    <label for="email"><b> اسم الدرس</b></label>
    <input type="text" placeholder="" name="classname" required>

    <label for="psw"><b> الاستاذ</b></label>
    <input type="text" placeholder="" name="tname" required>
    <label for="psw"><b> ايميل الاستاذ</b></label>
    <input type="text" placeholder="" name="temail" required><b>
    <label for="psw"><b> الصف</b></label>
    <input type="text" placeholder="" name="stage" required>
    <label for="psw"><b>الوقت</b></label>
    <input type="text" placeholder="" name="time" required>

    <button type="submit" name="submit" class="btn">تأكيد</button>
    <button type="button" class="btn cancel" onclick="closeForm()">اغلاق</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
  if(isset($_POST['submit'])){
    include '../asset/db.php';
    mysqli_set_charset($conn,'utf8');
$sql="INSERT INTO `classes`(`id`, `subj-name`, `t-name`, `t-email`, `grade`, `time`) VALUES ('','$_POST[classname]','$_POST[tname]','$_POST[temail]','$_POST[stage]','$_POST[time]')";
$re=$conn->query($sql);
echo'<meta http-equiv="refresh" content="0, url=./home.php" />';
exit();


  }
}
  ?>


</body>
</html>
