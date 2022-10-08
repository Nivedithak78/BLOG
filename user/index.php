<?php session_start(); 
include("../db.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <title>BLOG WEBSITE</title>
    <!--css-->
     <link rel="stylesheet" href="style.css">
    
  </head>
  <body>
  
  <form method="POST" class="login-form">
           <label>Name</label><br>
           <input type="name"  placeholder="Your name" class="box" name="username"><br>
           <label>Password</label><br>
           <input type="password" placeholder="Your password" class="box" name="userpsd"><br>
           <input type="submit" value="login" class="btn" name="login">
    </form>
    
  </body>
</html>

<?php
if(isset($_POST["login"])){
  $name = $_POST["username"];
  $psd = $_POST["userpsd"];

  if($name == "" && $psd == ""){
    echo "<p class='In'>Please fill the details<p/>";
  }else{
  
    $sql = "SELECT * FROM register WHERE name = '$name' AND password ='$psd'";
    $result = mysqli_query($conn, $sql) or die('Error');

     if(mysqli_num_rows($result) > 0){
       while($row = mysqli_fetch_assoc($result)){
         $id = $row["id"];
         $name = $row["name"];
         $psd = $row["password"];
         $email = $row["email"];
         $dept = $row["dept"];
         
         $_SESSION['id'] = $id;
         $_SESSION['name'] = $name;
         $_SESSION['dept'] = $dept;
         $_SESSION['email'] = $email;
         $_SESSION['password'] = $password;
         header('Location: user.php');

       }
     }else{
       echo "<p class='In'>wrong username or password<p/>";
     }
  }

}

?>