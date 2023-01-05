function selectClass(){
   var x =document.getElementById("info").value;
   $ajax({
    url:"./showinfoST.php",
    method:"POST",
    data:{
        id :x
    },
    success:function(data){
        $("#dua").html(data);
    }
   })

}