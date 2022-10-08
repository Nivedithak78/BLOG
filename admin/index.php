<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
  <title>BLOG WEBSITE</title>
    <!--css-->
     <link rel="stylesheet" href="style.css">
  </head>
  <body>
   
   <form method="POST" class="admin-form">
           <h3>ADMIN</h3>
           <input type="name"  placeholder="Your name" class="box" name="adminname"><br>
           <input type="password" placeholder="Your password" class="box" name="adminpsd"><br>
           <input type="submit" value="login" class="btn" name="login">
    </form>
    
  </body>
</html>

<?php
if(isset($_POST["login"])){
  $name = $_POST["adminname"];
  $psd = $_POST["adminpsd"];

  if($name == "AIMS institute" && $psd == 7032){
    $_SESSION["admin"] = "AIMS institute";
    header("location: post.php");
  }else{
    echo "<h5 style:'font-size: 1rem;
    color: #131313;
    text-align: center;position: absolute;
    bottom: 10rem;'>"."wrong admin name or password"."</h5>";
  }
}

?>