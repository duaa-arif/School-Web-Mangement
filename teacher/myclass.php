<?php
session_start();
include '../asset/db.php';
header('Content-Type: text/html; charset=utf-8');
mysqli_set_charset($conn,'utf8');
// echo  $_SESSION['name'];
// $sql="SELECT *FROM `students` INNER JOIN `classes` ON `classes.grade` =`students.classid` WHERE `classes.t-email` ='$_SESSION[email]';";
$sql="SELECT *FROM `classes` INNER JOIN `students` ON classes.grade =students.classid WHERE `t-email` ='$_SESSION[email]';";
$res=$conn->query($sql);
if(mysqli_num_rows($res)>0){
    $my_class_info=mysqli_fetch_array($res);



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
    width: 100%;
    margin-top: 10%;
  margin-left: 40%;
  margin-right: 50%;

}
th{
    background-color: #8B0000;
    color: white;
    width: 12px;;
    text-align: center;
    text-decoration: wavy;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;

}
table{
    width: 100%;

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
    margin-left:100%;
}
a{
   
    width: 50%;
    color:black;
    text-decoration:solid;

}

    </style>
    <h3> Welcome ,<?php echo $_SESSION['name']; ?>

   <h1 style="text-align:center ;"> My classes information</h1>


<div class="position-absolute top-80 start-80">
<div class="graph-visual tables-main">
						<h2 class="inner-tittle"></h2>
							
											<div class="graph">
										<div class="table">
									<div class="center">
											<table class=""> 
											
												<thead>	
  <tr>
  <th  scope="col"> #</th>
  <th  scope="col">Subject </th>
    <th scope="col"> Teacher NAME</th>
    <th scope="col"> Grade</th>
    <th scope="col"> Time</th>
    <th scope="col"> Sudent Name</th>
    <th scope="col"> Sudent Phone</th>
    <th scope="col"> Sudent Email</th>
    <th scope="col"> Sudent Photo</th>

  </tr>
</thead>
<tbody>
    <tr>
    <td onmouseover="this.style.backgroundColor='#DAA520';" onmouseout="this.style.backgroundColor='';" class="counterCell"></td>
    <td  onmouseover="this.style.backgroundColor='#DAA520';" onmouseout="this.style.backgroundColor='';"><?php  echo ucfirst($my_class_info['subj-name']);?> </td>

<td  onmouseover="this.style.backgroundColor='#DAA520';" onmouseout="this.style.backgroundColor='';"><?php  echo ucfirst($my_class_info['t-name']);?> </td>
<td  onmouseover="this.style.backgroundColor='#DAA520';" onmouseout="this.style.backgroundColor='';"><?php  echo ucfirst($my_class_info['grade']);?> </td>
<td  onmouseover="this.style.backgroundColor='#DAA520';" onmouseout="this.style.backgroundColor='';"><?php  echo ucfirst($my_class_info['time']);?> </td>

<td  onmouseover="this.style.backgroundColor='#DAA520';" onmouseout="this.style.backgroundColor='';"><?php  echo ucfirst($my_class_info['name']);?> </td>
<td  onmouseover="this.style.backgroundColor='#DAA520';" onmouseout="this.style.backgroundColor='';"><?php  echo ucfirst($my_class_info['phone']);?> </td>
<td  onmouseover="this.style.backgroundColor='#DAA520';" onmouseout="this.style.backgroundColor='';"><?php  echo ucfirst($my_class_info['email']);?> </td>
<td  onmouseover="this.style.backgroundColor='#DAA520';" onmouseout="this.style.backgroundColor='';"><img src="../asset/uploads/<?php  echo ($my_class_info['img']);?>" width=" 50px"> </td>

</tr>
</tbody>

  <a href="./home.php">                                          </table>
                                    </div>
                                        </div>
                                            </div>
  <button type="" class=" btn btn-light" > BACK </a></div>
</div>
                                            </div>
                                            <?php 
}
else{
    echo ' لا توجد صفوف الى الان ';
}
?>