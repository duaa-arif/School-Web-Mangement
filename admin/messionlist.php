<?php 
include '../asset/db.php';
mysqli_set_charset($conn,'utf8');
$sql="SELECT * FROM `classes`;";
$result=$conn->query($sql);
// while($row=mysqli_fetch_assoc($result)){
?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Title</title>

<style>
   @import url(http://fonts.googleapis.com/css?family=Calibri:400,300,700);

  @import url(http://fonts.googleapis.com/earlyaccess/droidarabickufi.css);


body {
   font-family: 'Droid Arabic Kufi', serif;

    background-color: #673AB7;
}

.container{
   margin-top:100px;
}
.card {
      position: relative;
   display: -webkit-box;
   display: -ms-flexbox;
   display: flex;
   -webkit-box-orient: vertical;
   -webkit-box-direction: normal;
   -ms-flex-direction: column;
   flex-direction: column;
   min-width: 0;
   word-wrap: break-word;
   background-color: #fff;
   background-clip: border-box;
   border: 0px solid transparent;
   border-radius: 0px;
}


.card-body {
   -webkit-box-flex: 1;
   -ms-flex: 1 1 auto;
   flex: 1 1 auto;
   padding: 1.25rem;
}

.card .card-title {
   position: relative;
   font-weight: 600;
   margin-bottom: 10px;
}


.table {
   width: 100%;
   max-width: 100%;
   margin-bottom: 1rem;
   background-color: transparent;
}

* {
   outline: none;
}

.table th, .table thead th {
   font-weight: 500;
}


.table thead th {
   vertical-align: bottom;
   border-bottom: 2px solid #dee2e6;
}


.table th {
   padding: 1rem;
   vertical-align: top;
   border-top: 1px solid #dee2e6;
}


.table th, .table thead th ,table td{
   font-family: 'Droid Arabic Kufi', serif;
   font-weight: 500;
   text-align: center;
}


th {
   text-align: inherit;
}


.m-b-20 {
   margin-bottom: 20px;
}


.customcheckbox {
   display: block;
   position: relative;
   padding-left: 24px;
   font-weight: 100;
   margin-bottom: 12px;
   cursor: pointer;
   font-size: 22px;
   -webkit-user-select: none;
   -moz-user-select: none;
   -ms-user-select: none;
   user-select: none;
}


.customcheckbox input {
   position: absolute;
   opacity: 0;
   cursor: pointer;
}

.checkmark {
   position: absolute;
   top: -3px;
   left: 0;
   height: 20px;
   width: 20px;
   background-color: #CDCDCD;
   border-radius: 6px;
}


.customcheckbox input:checked ~ .checkmark {
   background-color: #2196BB;
}


.customcheckbox .checkmark:after {
   left: 8px;
   top: 4px;
   width: 5px;
   height: 10px;
   border: solid white;
   border-width: 0 3px 3px 0;
   -webkit-transform: rotate(45deg);
   -ms-transform: rotate(45deg);
   transform: rotate(45deg);
}
h1{
  color:#dee2e6;
  text-align: center;
  font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
p{
  font-family: Georgia, 'Times New Roman', Times, serif;

}
th{
  font-family: Georgia, 'Times New Roman', Times, serif;
}
td{
  font-family: Georgia, 'Times New Roman', Times, serif;
}
.center{
   text-align: center;
  font-size: larger;
  color:673AB7;
  text-decoration: #2196BB;
  
}
  </style>

  


<h1> الصفوف</h1>
<?php 
$sql ="SELECT DISTINCT grade FROM `classes`; ";
                                                                        $re=$conn->query($sql);
													
													
													?>
                                                                              <div class="center" id="filter">
                                                                              <select id="info" >
                                                                                    <option> ---- اختار الصف-----</option>
                                                                                    <?php 
                                                                                    while($row=mysqli_fetch_assoc($re)){
                                                                                          ?>
                                                                                          <option value="<?php echo $row['grade']?>  "><?php echo $row['grade']?> </option>

                                                                                          <?php
                                                                                    }
                                                                                    ?>
                                                                              </select>      </div>  
<div class="container">
                      
                                
                    <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body text-center">
                                <h3 class="card-title m-b-0">  "Believe you can and you're halfway there."</h3>
                            </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-light">
                                            <tr>
                                          
                                              
                                                <th scope="col"> الدرس</th>
                                                <th scope="col">الاستاذ </th>
                                                <th scope="col"> ايميل الاستاذ</th>
                                                <th scope="col"> الوقت </th>
                                              

                                               


                

                                            </tr>
                                        </thead>
                                        
                                                <?php
    while($row=mysqli_fetch_array($result)){
  
      $id=$row['id'];
      $Cname= $row['subj-name'];
      $tname=$row['t-name'];
      $temail= $row['t-email'];
      $time=$row['time'];
     



?>
<tbody>
    <tr>
  
       <td style="color:black;" > <?php echo "$Cname";?></td>
      <td  style="color:black;"><?php echo "$tname";?>   </td>
      <td  style="color:black;"><?php echo "$temail";?></td>
      <td style="color:black;"><?php echo "$time";?></td>
     

  


    </tr>
    

<?php

    }
    ?>
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>
                </div>

                   </div> 
                   <script type="text/javascript">
            $(document).ready(function(){
            $("#info").on('change',function(){
            var value=$(this).val();
            // alert(value);
            $.ajax({
                  url:"showclass.php",
    type:"POST",
    data:'request='+value ,
    beforeSend:function(){
      $(".container").html("<span> جار التحميل </span>");
    } ,
    success:function(data){
      $(".container").html(data);
    }
            })
            })
            }
            )

        </script>                                                                    