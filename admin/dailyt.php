<?php 
include '../asset/db.php';
?>
<!doctype html>
<html lang="ar">
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>الجدول اليومي </title> 
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<style>
    body{
	background: whitesmoke;
    background-image:url('img/sakura.png') ;
    background-repeat: no-repeat;
    text-align: left;
    background-size: 700px;
}



ul {
    position:relative;
    text-align: center;
    align-content: center;

	list-style: none;
	margin: 0;
	padding: 0;
}

.list-group{
	width: 400px !important;
    margin: 0 auto;
    display: block;

}

.list-group-item{
	margin-top:10px;
	border-radius: none; 
	
	cursor: pointer;
	transition: all 0.3s ease-in-out;
}


.list-group-item:hover{
	transform: scaleX(1.1);
}


.img2{
   
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: auto; /* to keep proportions */
  height: auto; /* to keep proportions */
  max-width: 100%; /* not to stand out from div */
  max-height: 100%; /* not to stand out from div */
  margin: auto auto 0; /* position to bottom and center */
}

    </style>
  <title>Bootstrap Example</title>
 
<body>
<div class="img2">
        <img src="./img/reading.png" style="
  position: absolute;
  top: 0;
  left: 150px ;
  bottom: 0;
  right: 10;
  width: 20%; /* to keep proportions */
  height: auto; /* to keep proportions */
  max-width: 80%; /* not to stand out from div */
  max-height: 100%; /* not to stand out from div */
  margin: auto auto 0; /* position to bottom and center */
">
</div>
<style>
    :root{
  --primary: #6e5773;
  --secondary: #e9e2d0;
  --complement: #d45d79;
  --font: black;
  --font-complement: greenyellow;
}

body {
  height: 100vh;
  margin: 0;
  display: grid;
  place-items: center;
  background-color: var(--primary);
}


    </style>





    <div class="list-groub">
       <div>

  <a href="#gg" class="list-group-item list-group-item-action">A simple default list group item</a>

  <a href="#aa" class="list-group-item list-group-item-action list-group-item-primary">A simple primary list group item</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">A simple secondary list group item</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-success">A simple success list group item</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-danger">A simple danger list group item</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-warning">A simple warning list group item</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-info">A simple info list group item</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-light">A simple light list group item</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-dark">A simple dark list group item</a>
</div> 
</div> 

</body>
</html> 
<?php

?>