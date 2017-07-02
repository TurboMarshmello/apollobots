<?php
session_start();
$loggedin = 'False';
if(isset($_SESSION['userid'])){
    $loggedin = 'True';
    $avatar = $_SESSION['avataruri'];
}
?><link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<div class="topnav" id="myTopnav">
 <a href="javascript:void(0);" style="font-size:30px;color:white;" class="icon" onclick="myFunction()">&#9776;</a>
 <a href="#about"> About</a>
  <a href="#news"> Server</a>
  <a href="#contact"> Contact</a>
  <a href="/"> Home</a>
    
    <div class="left">
    <?php
    if($loggedin == 'True'){
      //User is logged in
    ?>
      <li><a href="/logout.php">
          <a href="Users/<?php echo $_SESSION['userid']; ?>.php"><img src="https://images.discordapp.net/avatars/<?php echo $_SESSION['userid']; ?>/<?php echo $_SESSION['avataruri'];?>.jpg"  class="usericon" alt="" style="width: 30%; height: 30%;"/>&nbsp;</a>
 <span class="glyphicons glyphicons-log-out"></span></a></li>
      <?php 
    }else{
      ?>
      <li><a href="/login.php">Login</a></li>
      <?php
    }
      ?>
    </div>
</div>
