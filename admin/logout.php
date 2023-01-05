<?php
session_start();

session_unset();
session_destroy();
echo '<p class="style12">تم تسجيل المغادرة بنجاح</p>';
// هذا الامر خاص بالتوجية الى الصفحة الثانية
echo'<meta http-equiv="refresh" content="5, url=./index.php" />';


?>