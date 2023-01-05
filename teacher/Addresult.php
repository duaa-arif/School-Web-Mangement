<?php
session_start();
?>
<!DOCTYPE html>
<html dir="rtl" >
  <head>
    <title> Add Result</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      html, body {
      display: flex;
      justify-content: center;
      font-family: Roboto, Arial, sans-serif;
      font-size: 15px;
      }
      form {
      border: 5px solid #f1f1f1;
      margin-top: 2%;
      width: 40%;
      }
      input[type=text], input[type=password] {
      width: 100%;
      padding: 16px 8px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      }
      button {
      background-color:  #8ebf42;
      color: white;
      padding: 14px 0;
      margin: 10px 0;
      border: none;
      cursor: grabbing;
      width: 100%;
      }
      h1 {
      text-align:center;
      fone-size:18;
      }
      button:hover {
      opacity: 0.8;
      }
      .formcontainer {
      text-align: left;
      margin: 24px 50px 12px;
      }
      .container {
      padding: 16px 0;
      text-align:left;
      }
      span.psw {
      float: right;
      padding-top: 0;
      padding-right: 15px;
      }
      /* Change styles for span on extra small screens */
      /* @media screen and (max-width: 300px) {
      span.psw {
      display: block;
      float: none;
      } */
    </style>
  </head>
  <body>
  <br>
  <br>
    <form action="" method="POST">
      <h1> درجات الطالب</h1>
      <div class="formcontainer">
      <hr/>
      <div class="container">
        <label for="uname"><strong>اسم الطالب</strong></label>
        <input type="text" placeholder="" name="uname" required>
        <label for="psw"><strong> درجة الطالب </strong></label>
        <input type="text" placeholder="" name="score" required>
        <label for="psw"><strong> ايميل الطالب</strong></label>
        <input type="text" placeholder="" name="email" required>
        <label for="psw"><strong>الموضوع</strong></label>
        <input type="text" placeholder="" name="sub" required>
        <label for="psw"><strong> الصف</strong></label>
        <input type="text" placeholder="" name="class" required>
        <label for="psw"><strong> ملاحظات الاستاذ </strong></label>
        <input type="text" placeholder="" name="notes" required>
      </div>
      <button type="submit" name="add">اضف</button>
      </div>
      <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST['add'])){
        include '../asset/db.php';
        mysqli_set_charset($conn,'utf8');
        $marks_student="INSERT INTO `result`(`id`, `subject`, `st-name`, `st-email`, `st-class`, `st-score`, `teacher-notes`) 
        VALUES ('','{$_POST["sub"]}','{$_POST["uname"]}','{$_POST["email"]}','{$_POST["class"]}','{$_POST["score"]}','{$_POST["notes"]}');";
        $marks_done= $conn->query($marks_student);
       echo '<h1> You Add mark Successfully  </h1>';
       echo "<script>window.location = 'home.php?success';</script>";

        exit();
    }
    
}?>
    </form>
  </body>
</html>