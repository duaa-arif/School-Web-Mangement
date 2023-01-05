<?php
session_start();
include '../asset/db.php';
header('Content-Type: text/html; charset=utf-8');
mysqli_set_charset($conn,'utf8');
// echo  $_SESSION['name'];
$sql="SELECT *FROM `classes` WHERE `grade`='$_SESSION[class]'  ";
$res=$conn->query($sql);


//  echo $student_class_info['t-name']; 
?>
<!DOCTYPE html>



<title> Classes page</title>
<meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <!-- <link rel="stylesheet" href="./css/style4.css"> -->
   </head>
   <style>
        @import url(http://fonts.googleapis.com/earlyaccess/droidarabickufi.css);
body{
    font-family: 'Droid Arabic Kufi', serif;
    background-image: linear-gradient( 109.6deg, rgba(156,252,248,1) 11.2%, rgba(110,123,251,1) 91.1% );


}
table {
    counter-reset: tableCount;     
}
.counterCell:before {              
    content: counter(tableCount); 
    counter-increment: tableCount; 
}
.center {
    width: 150%;
    margin-top: 30%;
  margin-left: 70%;
  margin-right: 50%;

}
th{
    background-color: #8B0000;
    color: white;
    width: max-content;
    text-align: center;
    text-decoration: wavy;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;

}
table{
    width: 50%;

}
td{
    width: max-content;
    text-align: center;
    text-decoration: wavy;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
h3{
    
  font-family: 'Droid Arabic Kufi', serif;
    text-align: center;
}

.btn{
    width: 40%;
    text-align: center;
    margin-left:120%;
}
a{
   
    width: 50%;
    color:black;
    text-decoration:solid;

}

    </style>
    <h3> مرحباّ ,<?php echo $_SESSION['name']; ?>

   <h1 style="text-align:center ;"> الجدول الاسبوعي   </h1>


<div class="position-absolute top-80 start-80">
<div class="graph-visual tables-main">
						<h2 class="inner-tittle"></h2>
							
											<div class="graph">
										<div class="table">
									<div class="center">
											<table class="table table-border"> 
											
												<thead>	
  <tr>
  <th  scope="col"> #</th>
  <th  scope="col">الموضوع </th>
    <th scope="col">  اسم الاستاذ</th>
    <th scope="col"> وقت الدرس</th>
    <th scope="col"> ايميل الاستاذ</th>
  </tr>
</thead>  
<tbody>
   
        <tbody> 
    <tr><?php
      while($student_class_info=mysqli_fetch_array($res)){

        ?>
    <td class="counterCell"></td> 
       
    <td><?php  echo ucfirst($student_class_info['subj-name']);?> </td>

<td><?php  echo ucfirst($student_class_info['t-name']);?> </td>
<td><?php  echo ucfirst($student_class_info['time']);?> </td>
<td><?php  echo ucfirst($student_class_info['t-email']);?> </td>
</tr>
</tbody>
 <?php
                                            } ?>
  <a href="./home.php">                                          </table>
                                    </div>
                                        </div>
                                            </div>
  <button type="" class=" btn btn-warning" > رجوع </a></div>
</div>
                                            </div>
                                           