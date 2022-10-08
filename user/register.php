<?php session_start(); 
include("../db.php");
?>
<!doctype html>
<html lang="en">
  <head>
  <title>BLOG WEBSITE</title>
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--css-->
     <link rel="stylesheet" href="style.css">

     <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>
  <body>
   <!--navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark mynav">
  <div class="container-fluid">
    <a class="navbar-brand" href="./index.php"><i class="fab fa-blogger"></i> BLOG</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
  </div>
  </nav>

   <div class="register">
   <form method="POST" class="sign-up">
           <h2>REGISTER USER</h2>
           <label class="titles">Name:</label>
           <input type="name"  placeholder="Your name" class="r-box A" name="username" required><br>
           <label class="titles">Department:</label>
           <input type="text"  placeholder="Your department" class="r-box B" name="userdept" required><br>
           <label class="titles">Email:</label>
           <input type="email"  placeholder="Your email" class="r-box A" name="usermail" required><br>
           <label class="titles">Password:</label>
           <input type="password" placeholder="password" class="r-box D" name="userpsd" required><br>
           <label class="titles">Confirm Password:</label>
           <input type="password" placeholder="password" class="r-box E" name="userconpsd" required><br>
           <input type="submit" value="Sign In" class="sign-btn" name="signin">

           
    </form>
    </div>
    
  </body>
</html>

<?php
if(isset($_POST["signin"])){
$name = $_POST["username"];
$dept = $_POST["userdept"];
$email = $_POST["usermail"];
$psd = $_POST["userpsd"];
$psd1 = $_POST["userconpsd"];

if($psd != $psd1){
  echo "<p class='In'>Passwords are not matching</p>";
}else{

$sql = "INSERT INTO register (name, dept, email, password, user_id) VALUES ('".$name."', '".$dept."', '".$email."', '".$psd."', 1)";
$result = mysqli_query($conn, $sql);

if(!$result){
    echo "<p class='In'>Something went wrong<p/>";
}else{
    header("Location: register.php?success");
}
}
}

if(isset($_GET["success"])){
  echo "<p class='In'>You are now logged in<p/>";
}
?>