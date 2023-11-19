<?php 
session_start();

include("navbar.php");

 ?>
 <style>
body, html {
  height: 100%;
  margin: 0;
}



.tb {
  display: table;
  width: 100%;
}

.td {
  display: table-cell;
  vertical-align: middle;
}

input,
button {
  color: #000000;
  font-family: Nunito;
  padding: 0;
  margin: 0;
  border: 0;
  background-color: transparent;
}

#cover {
  border: 1px solid ;
  justify-content: center;
  position: relative;
  top: 5%;
  left: 0;
  right: 0;
  width: 800px;
  padding: 35px;
  margin: -83px auto 0 auto;
  background-color: #fff;
  border-radius: 30px;
  box-shadow: 0 10px 40px #D3D3D3, 0 0 0 20px #ffffffeb;
  transform: scale(0.6);
}


form {
  height:75px;
}

input[type="text"] {
  width: 100%;
  height:70px;
  font-size: 30px;
  line-height: 1;
}

input[type="text"]::placeholder {
  color: #000000;
}

#s-cover {
  width: 1px;
  padding-left: 35px;
}

button {
  position: relative;
  display: block;
  width: 70px;
  height: 40px;
  cursor: pointer;
}

#s-circle {
  outline:focus;
  position: relative;
  top: -8px;
  left: 0;
  width: 40px;
  height: 30px;
  margin-top: 0;
  border-width: 10px;
  border: 15px solid #000000;
  background-color: #000000;
  border-radius: 20px;
  transition: 0.5s ease all;
}

button span {
  position: absolute;
  top: 65px;
  left: 43px;
  display: block;
  width: 40px;
  height: 10px;
  background-color: #000000;
  border-radius: 10px;
  transform: rotateZ(52deg);
  transition: 0.5s ease all;
}

button span:before,
button span:after {
  content: "";
  position: absolute;
  bottom: 0;
  right: 0;
  width: 33px;
  height: 7px;
  background-color: #000000;
  border-radius: 10px;
  transform: rotateZ(0);
  transition: 0.5s ease all;
}

#s-cover:hover #s-circle {
  top: -1px;
  width: 67px;
  height: 10px;
  border-width: 0;
  background-color: #000000;
  border-radius: 20px;
}

#s-cover:hover span {
  top: 50%;
  left: 56px;
  width: 25px;
  margin-top: -9px;
  transform: rotateZ(0);
}

#s-cover:hover button span:before {
  bottom: 8px;
  transform: rotateZ(52deg);
}

#s-cover:hover button span:after {
  bottom: -10px;
  transform: rotateZ(-52deg);
}
#s-cover:hover button span:before,
#s-cover:hover button span:after {
  right: -6px;
  width: 40px;
  background-color: #000000;
}



</style>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/js/fontawesome-iconpicker.min.js" integrity="sha512-7dlzSK4Ulfm85ypS8/ya0xLf3NpXiML3s6HTLu4qDq7WiJWtLLyrXb9putdP3/1umwTmzIvhuu9EW7gHYSVtCQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>

<div class="bg"></div><br>
</form>
<div id="cover">
  <form method="POST" action="search-property.php">
    <div class="tb">
    <div class="td"> <input class="" type="text" placeholder="Enter location to search house." name="search_property" aria-label="Search" required>
      </div>
      <div class="td" id="s-cover">
        <button type="submit">
          <div id="s-circle"></div>
          <span></span>
        </button>
      </div>
    </div>
  </form>
</div>                    
</div>

</div>
<br><br>

<?php 

include("property-list.php");

 ?>

 <br><br>
 
 </body>
</html>