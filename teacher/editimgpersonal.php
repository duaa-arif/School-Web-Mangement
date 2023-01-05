<style>
  body{
background-color: #f1f1f1;
	}
		.form-control {
    width: 100%;
    height: 25px;
    padding: 6px 12px;
    font-size: 14px;
    color: #555;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 4px;
}
.btn-primary {
    padding: 6px 12px;
    font-size: 14px;
    font-weight: 400;
    cursor: pointer;
    border: 1px solid transparent;
    border-radius: 4px; 
    background-color: #337ab7;
    color: #fff;
}
.btn_del {
  background-color: #FF5733 !important;   
}
.container 
{ 
margin-left: 30%;
width: 400px ;
background-color: #fff;
padding: 10px;
padding-right: 40px;
    border: 1px solid #ccc;
    border-radius: 4px;
 }
 .container_display
{ 
margin-left: 10%;
width: 900px ;
background-color: #fff;
padding: 10px;
padding-right: 40px;
    border: 1px solid #ccc;
    border-radius: 4px;
 }

label   {
	font-size: 16px;
}
.success 
{ 
	margin: 5px auto;
  border-radius: 5px;
  border: 3px solid #fff;
  background: #33CC00;
  color: #fff;
font-size: 20px;
  padding: 10px;
  box-shadow: 10px 5px 5px grey;
}
  </style>
<?php require_once("../asset/db.php");
 session_start();
 $teacher_name=$_SESSION['name'];
 
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
	<title>Image change</title>
</head>
<body>
  <h2 style="text-align: center;"> تغيير صورة <?php echo $teacher_name ;?>
	<?php
		if(isset($_POST['update_submit']))
		{	
$folder = "../asset/uploads/ ";
$image_file=$_FILES['image']['name'];
 $file = $_FILES['image']['tmp_name'];
 $path = $folder . $image_file;  
 $target_file=$folder.basename($image_file);
 $imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);
if($file!=''){
//Set image upload size 
    if ($_FILES["image"]["size"] > 500000) {
   $error[] = 'Sorry, your image is too large. Upload less than 500 KB in size.';
}
//Allow only JPG, JPEG, PNG & GIF 
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
 $error[] = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed';   
}
}
if(!isset($error))
{
	if($file!='')
	{
		$res=mysqli_query($conn,"SELECT* from `teacher` WHERE name='$teacher_name' ");
if($row=mysqli_fetch_array($res)) 
{
$deleteimage=$row['img']; 
}
unlink($folder.$deleteimage);
move_uploaded_file($file,$target_file); 
$result=mysqli_query($conn,"UPDATE `teacher` SET img='$image_file' WHERE name='$teacher_name'"); 
echo'<meta http-equiv="refresh" content="3, url=./home.php" />';

	}
	else 
	{
	echo 'no updates'	;
	} 
	$result;

}
		}


if(isset($error)){ 

foreach ($error as $error) { 
	echo '<div class="message">'.$error.'</div><br>'; 	
}

}
$res=mysqli_query($conn,"SELECT* from `teacher` WHERE name='$teacher_name' ");
if($row=mysqli_fetch_array($res)) 
{
$image=$row['img']; 

}
	?> 
	<div class="container" style="width:500px;">
		<h1> تعديل </h1>

        
<form action="" method="POST" enctype="multipart/form-data">
	<label> عرض الصورة </label><br>
	<img src="../asset/uploads/<?php echo $image;?>" height="100"><br>
	<label> تغيير الصورة </label>
	<input type="file" name="image" class="form-control">


	<br><br>
	<button name="update_submit" class="btn-primary">تحديث </button>
</form>
</div>
</body>
</html>

