<?php 


include("config/config.php");

if(isset($_POST['book_property'])){
	

if(isset($_SESSION["email"])){
	global $db,$property_id;
  $u_email=$_SESSION["email"];

$property_id=$_GET['property_id'];
  
$sql="SELECT * FROM tenant where email='$u_email'";
    $query=mysqli_query($db,$sql);

    if(mysqli_num_rows($query)>0)
    {
      while ($rows=mysqli_fetch_assoc($query)) {
      	$tenant_id=$rows['tenant_id'];


      	$sql1="UPDATE add_property SET booked='Yes' WHERE property_id='$property_id'";
      	$query1=mysqli_query($db,$sql1);

      	$sql2="INSERT INTO booking(property_id,tenant_id) VALUES ('$property_id','$tenant_id')";
      	$query2=mysqli_query($db,$sql2);

      	if($query2)
		{

                $email=$rows['email'];
                $msg="Thankyou Mr/Ms ".$rows['full_name']." for booking Property. Please visit the property location to view it personally.";
                $recipient=$email;
                $subject="Property Booked";
                $mailheaders="From: ResiFinder\n";

                //mail send
                mail($recipient,$subject,$msg,$mailheaders);

		?>


<style>
.alert {
  padding: 20px;
  background-color: #DC143C;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: all .5s ease;
  width: 70%;
  border-radius: 30px;
}

.closebtn:hover {
  color: black;
  background-color: #008080;
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
<div class="alert" role='alert'>
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <center><strong>Thankyou for booking this property.</strong></center>
</div></div>



		<?php





		}

      }

  


} }}

?>