<style>
    .style12{
 font-family: 'Droid Arabic Kufi', serif;
 color: darkred;
 text-align: center;
 font-size: 50px;
 background-color: darkgray;
 background-size: contain;
 background-repeat: no-repeat;

    }
    body{
        background-image: url("../asset/images/bg1.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }
    </style>
<?php
session_start();

session_unset();
session_destroy();
echo '<p class="style12">تم تسجيل المغادرة بنجاح</p>';
// هذا الامر خاص بالتوجية الى الصفحة الثانية

echo'<meta http-equiv="refresh" content="5, url=./index.php" />';

?>