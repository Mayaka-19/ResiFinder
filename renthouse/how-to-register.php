<?php 
session_start();
if(isset($_SESSION["email"])){
  header("location:index.php");
}
include("navbar.php");

 ?>
<style>
.btn{
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
.btn:hover, .btn:focus{
  background-color: #008080;
  color:#fff;
}
</style>

    <section class="container-fluid sign-in-form-section">
        <div class="container-fluid">
            <div class="row">
                
                <div class="col-md-12 sign-up" style="text-align: center;">
                    <h3 style="font-weight: bold;">How do you want to Register?</h3><hr>
                    <p>If you want to register as a tenant click on tenant register button otherwise click on owner register button.</p><br><br>
                    <button type="submit" class="btn"  onclick="window.location.href='tenant-register.php'" style="width:200px;">Tenant Register</button><br><br>
                    <button type="submit" class="btn"  onclick="window.location.href='owner-register.php'" style="width:200px;">Owner Register</button>
                </div>
                
            </div>
        </div>
    </section>