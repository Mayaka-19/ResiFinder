<?php
session_start();
include("navbar.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>About Us - ResiFinder</title>
</head>
<style>
    #about {
    background: url("../img/about-bg.jpg") center top no-repeat fixed;
    background-size: cover;
    padding: 60px 0 40px 0;
    position: relative;
  }
  #about::before {
    content: "";
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    background: rgba(255, 255, 255, 0.92);
    z-index: 9;
  }
  #about .container {
    position: relative;
    z-index: 10;
  }
  #about .about-col {
    background: #fff;
    border-radius: 0 0 4px 4px;
    box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.08);
    margin-bottom: 20px;
  }
  #about .about-col .img {
    position: relative;
  }
  #about .about-col .img img {
    border-radius: 4px 4px 0 0;
  }
  #about .about-col .icon {
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
  #about .about-col i {
    font-size: 28px;
    line-height: 0;
    color: #fff;
    transition: 0.3s;
  }
  #about .about-col:hover .icon {
    background-color: #fff;
  }
  #about .about-col:hover i {
    color: #18d26e;
  }
  #about .about-col h2 {
    color: #000;
    text-align: center;
    font-weight: 700;
    font-size: 20px;
    padding: 0;
    margin: 40px 0 12px 0;
  }
  #about .about-col h2 a {
    color: #000;
  }
  #about .about-col h2 a:hover {
    color: #18d26e;
  }
  #about .about-col p {
    font-size: 14px;
    line-height: 24px;
    color: #333;
    margin-bottom: 0;
    padding: 0 20px 20px 20px;
  }
</style>
<body>
    <section id="about">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
		        <h1>ABOUT US</h1>
	        </header>

	        <div class="row about-cols">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="about-col">
                        <div class="img">
                            <img src="images/house.jpg" alt="" width="350" height="284">
                        </div>
                        <h2 >Who We Are</h2>
		                <p>We are a team of experienced real estate agents who are passionate about helping people find their dream homes. With years of experience in the industry, we have the knowledge and expertise to guide you through the entire home buying process.</p>
                        <p style="text-align: justify;">Resifinder is a platform that connects homeowners and landlords to find their dream homes</p>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>

		        <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="about-col">
                        <div class="img">
                            <img src="images/apartment.jpg" alt="" width="350" height="284">
                        </div>
                        <h2>What We Do</h2>
		                <p>Our mission is to make the home buying process as easy and stress-free as possible. We work with you every step of the way, from finding the perfect home to negotiating the best price. We are committed to providing exceptional service and ensuring that you are completely satisfied with your purchase.</p>
                    </div>        
                </div>
                <br>
                <br>
                <br>
                <br>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="about-col">
                        <div class="img">
                            <img src="images/interior.jpeg" alt="" width="350" height="284">
                        </div>
                        <h2 style;text>Why Choose Us</h2>
		                <p>Choosing the right real estate agent is crucial when buying a home. With our team, you can rest assured that you are in good hands. We have a proven track record of success and a reputation for providing outstanding service. We are dedicated to helping you find the home of your dreams and making the process as smooth as possible.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
