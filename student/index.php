<?php



session_start();

var_dump($_SESSION);

if( isset($_SESSION['role'])){
 
  echo $_SESSION['role'];
  
 header('Location:test4.php');

}else{

  ?>


<html dir="rtl">
<head>
  <meta charset="utf-8">
  <title> تسجيل دخول</title>
  <link rel="stylesheet" type="text/css" href="./css/style2.css">
</head>

<body>
  <form action="./login.php" method="POST">
  <div class="login-root">
    <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
      <div class="loginbackground box-background--white padding-top--64">
        <div class="loginbackground-gridContainer">
          <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
            <div class="box-root" style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
            </div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
            <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
            <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
            <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
            <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
            <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
            <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
            <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
            <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>
          </div>
        </div>
      </div>
      <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
          <h1><a href="http://blog.stackfindover.com/" rel="dofollow"> مدرسة اجيال المستقبل </a></h1>
        </div>
        <div class="formbg-outer">
          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
              <span class="padding-bottom--15">تسجيل دخول في حسابك</span>
              <form id="stripe-login">
                <div class="field padding-bottom--24">
                  <label for="email">  الايميل</label>
                  <input type="email" name="email">
                </div>
                <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label for="password">الرمز السري</label>
                    <div class="reset-pass">
                    </div>
                  </div>
                  <input type="password" name="pass1">
                </div>
                <div class="field padding-bottom--24">
                  <input type="submit" name="submit" value="استمرار">
                </div>
              <div class="checkbox">
          <input type="checkbox" id="demoCheckbox" name="checkbox" value="1"> تذكرني!
           
          </div>
              </form>
            </div>
          </div>
          
          <div class="footer-link padding-top--24">
            <span>لا تملك حساب ؟ <a href="./addstudent.php"> تسجيل جديد</a></span>
           
          </div>
        </div>
      </div>
    </div>
  </div>
  </form>
</body>
<?php
}
?>

</html>
