<?php 
include("config/config.php");
 ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 100%;
  min-width: 100%;
  margin: auto;
  text-align: center;
  font-family: arial;
  display: inline;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  opacity: 0.8;
}

.container {
  padding: 2px 16px;
}

.btn {
  outline: black;
  border: black;
  background:grey;
  text-color:white;
  color: black;
  width: 250px;
  height: 60px;
  border-radius: 18px;
  cursor: pointer;
  position: relative;
  left: 10%;
  transition: left ease 0.4s 0.4s, border-radius ease 0.5s 0.1s,
    background ease 0.2s 0.4s, color ease 0.2s 0.4s, transform linear 0.3s;
}

.image {
  min-width: 100%;
  min-height: 200px;
  max-width: 100%;
  max-height:200px;
}
</style>
</head>
<body>
<?php 

$sql="SELECT * FROM add_property";
    $query=mysqli_query($db,$sql);

    if(mysqli_num_rows($query)>0)
    {
      while ($rows=mysqli_fetch_assoc($query)) {
        $property_id=$rows['property_id'];

?>

<div class="col-sm-2">
<div class="card">
<?php


        $sql2="SELECT * FROM property_photo where property_id='$property_id'";
    $query2=mysqli_query($db,$sql2);

    if(mysqli_num_rows($query2)>0)
    {
      $row=mysqli_fetch_assoc($query2); 
        $photo=$row['p_photo'];
        echo  '<img class="image" src="owner/'.$photo.'">'; }?>

  <h4><b><?php echo $rows['property_type']; ?></b></h4> 
  <p><?php echo $rows['city'].', '.$rows['town'] ?></p> 
  <p><?php echo '<a href="view-property.php?property_id='.$rows['property_id'].'"  class="btn btn-lg btn-primary btn-block" >View Property </a><br>'; ?></p><br>
</div>
</div>

</body>
</html> 


<?php 

}
    }
    ?>