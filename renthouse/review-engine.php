<?php 

include ("config/config.php");


if(isset($_POST['review'])){
	review();
}


function review(){
	global $db;
	$property_id=$_GET['property_id'];
$comment=$_POST['comment'];
$rating=$_POST['rating'];

$sql= "INSERT INTO review(comment,rating,property_id) VALUES('$comment','$rating','$property_id')";
$query=mysqli_query($db,$sql);
if(!empty($query)){
	?>

<style>
.alert {
  padding: 20px;
  background-color: #DC143C;
  color: white;
}

.closebtn {
  transition: all .5s ease;
  width: 70%;
  border-radius: 30px;
  color:#008080;
  font-weight: 600;
  background-color: #fff;
  border: 1px solid #008080;
  margin-top: 1.5em;
  margin-bottom: 1em;
}

.closebtn:hover {
  background-color: #008080;
  color:#fff;
}
</style>
<script>
	window.setTimeout(function() {
    $(".alert").fadeTo(1000, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 2000);
</script>
<div class="container">
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Your review has been recorded.</strong>
</div></div>


<?php
}

}

 ?>