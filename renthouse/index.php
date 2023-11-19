<?php 
session_start();
include("navbar.php");

 ?>
 <style>
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("images/carousel.png");

  /* Full height */
  height: 60%; 

  /* Center and scale the image nicely */
  background-position: bottom;
  background-repeat: no-repeat;
  background-size: cover;
}

li {
  display: inline;
  margin-right; 10px 
}
#container-fluid {
    background: url("../img/about-bg.jpg") center top no-repeat fixed;
    background-size: cover;
    padding: 80px 0 20px 0;
    position: relative;
  }
  #container-fluid::before {
    content: "";
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    background: rgba(255, 255, 255, 0.92);
    z-index: 9;
  }
  #container-fluid .container {
    position: relative;
    z-index: 10;
  }
  #container-fluid.about-col {
    background: #fff;
    border-radius: 0 0 4px 4px;
    box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.08);
    margin-bottom: 20px;
  }
  #container-fluid .about-col .img {
    position: relative;
  }
  #container-fluid .about-col .img img {
    border-radius: 4px 4px 0 0;
  }
  #container-fluid.about-col .icon {
    width: 64px;
    height: 64px;
    text-align: center;
    position: absolute;
    background-color: #18d26e;
    border-radius: 50%;
    border: 4px solid #fff;
    left: calc(50% - 32px);
    bottom: -30px;
    transition: 0.3s;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  

.social {
  justify-content:center;
  position: bottom;
  width: 100%;
  top: 50%;
  text-align: center;
  transform: translateY(-50%);
}

.social .link {
  
  display: inline-block;
  vertical-align: middle;
  position: relative;
  width: 130px;
  height: 120px;
  border-radius: 100%;
  border: 2px dashed white;
  background-clip: content-box;
  padding: 10px;
  transition: .5s;
  color: #D7D0BE;
  margin-left: 15px;
  margin-right: 15px;
  font-size: 70px;
}

.social .link span {
  
  display: block;
  position: absolute;
  text-align: center;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.social .link:hover {
  padding: 20px;
  color: white;
  margin-left: -5px;
  transform: translateX(10px) rotate(360deg);
}

.social .link.instagram{
  background-color: maroon;
  color: white;
}

.social .link.twitter {
  background-color: #00ACEE;
  color: white;
}

.social .link.facebook {
  background-color: #3B5998;
  color: white;
}
.footerContainer{
  width:100%;
  padding:70px 30px 20px;
}
.txt{
  font-size:1.3em;
  opacity:0.7:
  font-weight: 400;
  text-transformer: uppercase;
}

 </style>
 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- For Apple browsers -->
  <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">

  <!-- For modern browsers-->
  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">

  <!-- For web manifest-->
  <link rel="manifest" href="/site.webmanifest">
 </head>
 <div class="bg"></div><br>
<body>

  <div class="container-fluid">
  <div class="container">
    <!--top baner-->

      <div class="well" id="well2">
        <center><h1>About Us</h1></center>
        <div class="col-xs-4 thumbnail">
        <div class="about-col i ">
                        <div class="img">
                            <img src="images/house.jpg" alt="" width="350" height="284">
                        </div>
                        <h2 >Who We Are</h2>
		                <p>We are an organization that make the experience of house hunting easy, fun and enjoyable.</p>
                        <p style="text-align: justify;">Resifinder is a platform that connects homeowners and landlords with there clients to find their dream homes and apartments</p>
                    </div>
                    
                
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="col-xs-4 thumbnail">
        <div class="about-col">
                        <div class="img">
                            <img src="images/apartment.jpg" alt="" width="350" height="284">
                        </div>
                        <h2>What We Do</h2>
		                <p>Our mission is to make the househunting as easy and stress-free as possible. We work with you every step of the way, from finding the perfect apartments and homes with there rental prices. We are committed to providing exceptional service and ensuring that you are completely satisfied with your apartment  or home you pick.</p>
                    </div>   
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="col-xs-4 thumbnail">
        <div class="about-col">
                        <div class="img">
                            <img src="images/interior.jpeg" alt="" width="350" height="284">
                        </div>
                        <h2 style;text>Why Choose Us</h2>
		                <p> We have a proven track record of success and a reputation for providing outstanding service. We are dedicated to helping you find the home of your dreams and making the process as smooth as possible.</p>
                    </div>
        </div>
        <br>
        <br>
        <br>
    <br>
    <br>
      <div class="flex flex-col items-center mt-5">
      <h2 class="text-white mt-2 font-light text-center"
    style;text>With ResiFinder you can</h2>
<p  class="text-white mt-2 font-light text-center"> 
Create a profile and connect with other users, including real estate agents, landlords, and tenants

</p>
<p  class="text-white mt-2 font-light text-center">
Browse listings, like and comment on properties, and share them with your friends and family

</p>   
    </div>
    <br>
    <br>
    <br>

    <div class="max-w-7xl mx-auto mt-8 px-3 md:px-0">
      <h1 class="text-rose-600 font-bold text-4xl">How it works!</h1>
      <ul class="ant-timeline mt-6 css-9f09qa"><li class="ant-timeline-item">
      <div class="ant-timeline-item-tail">

      </div>
      <div class="ant-timeline-item-head ant-timeline-item-head-blue"></div>
      <div class="ant-timeline-item-content">Explore Properties: &quot;Browse through a vast selection of properties in your desired location.</div>
    </li>
    <li class="ant-timeline-item">
      <div class="ant-timeline-item-tail">
      </div>
      <div class="ant-timeline-item-head ant-timeline-item-head-blue">
  
      </div>
      <div class="ant-timeline-item-content">Engage Socially: &quot;Like and comment on properties you love, and share them with your network.&quot;

      </div></li>
      <li class="ant-timeline-item"><div class="ant-timeline-item-tail"></div>
      <div class="ant-timeline-item-head ant-timeline-item-head-blue"></div>
      <div class="ant-timeline-item-content">List Your Property: &quot;Property owners can create listings effortlessly with our user-friendly dashboard.&quot;</div>
    </li><li class="ant-timeline-item ant-timeline-item-last"><div class="ant-timeline-item-tail"></div>
    <div class="ant-timeline-item-head ant-timeline-item-head-blue"></div><div class="ant-timeline-item-content">Tenant Management: &quot;Manage your tenants and leases hassle-free.&quot;</div>
  </li></ul>
    <br>
    <br>
    <br>
  <h1 class="text-rose-600 font-bold text-4xl text-end">Key benefits of ResiFinder</h1><ul class="ant-timeline ant-timeline-right mt-6 css-9f09qa">
    <li class="ant-timeline-item ant-timeline-item-right">
      <div class="ant-timeline-item-tail"></div>
      <div class="ant-timeline-item-head ant-timeline-item-head-blue"></div>
      <div class="ant-timeline-item-content">User-Friendly Interface: &quot;Easy to navigate, just like your favorite social media platforms.&quot;</div>
    </li><li class="ant-timeline-item ant-timeline-item-right">
      <div class="ant-timeline-item-tail"></div>
      <div class="ant-timeline-item-head ant-timeline-item-head-blue">

      </div>
      <div class="ant-timeline-item-content">Connect and Engage: &quot;Like, comment, and share properties with friends and family.&quot;

      </div></li><li class="ant-timeline-item ant-timeline-item-right">
        <div class="ant-timeline-item-tail"></div><div class="ant-timeline-item-head ant-timeline-item-head-blue"></div>
        <div class="ant-timeline-item-content">List with Ease: &quot;Property owners can list their properties in minutes.&quot;

        </div></li><li class="ant-timeline-item ant-timeline-item-last ant-timeline-item-right"><div class="ant-timeline-item-tail">

        </div><div class="ant-timeline-item-head ant-timeline-item-head-blue"></div>
      <div class="ant-timeline-item-content">Tenant Management: &quot;Manage tenants, leases, and more, all in one place.&quot;
      
      </div></li>
  </div>
  </div>
  <div class="footerContainer">
    <center><h3 style="font-weight:400 ">Find Us On</h3></center><br><br><br><br>
    <div class="social">
  <a href="https://facebook.com/ondrej.p.barta" class="link facebook" target="_parent"><span class="fa-brands fa-facebook-square"></span></a>
  <a href="https://twitter.com/lone_mayaka" class="link twitter" target="_parent"><i class="fa-brands fa-twitter"></i></a>
  <a href="https://www.instagram.com/br_ad_.__/" class="link instagram" target="_parent"><span class="fa-brands fa-instagram"></span></a>
</div>
  </div>
</body>
</html>
