<?php session_start();
include("../db.php");
?>
<!doctype html>
<html lang="en">
  <head>
  <title>BLOG WEBSITE</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>BLOG WEBSITE</title>
     <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--css-->
    <link rel="stylesheet" href="style.css"> 

  </head>
  <body>
  <!--navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark mynav">
  <div class="container-fluid">
    <a class="navbar-brand" href="/index.php"><i class="fab fa-blogger"></i> BLOG</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
       <ul class="navbar-nav">
       <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="user.php">About</a>
        </li>  
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="post.php">Posts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="new.php">New</a>
        </li>
       </ul>
      </div>
  </div>
  </nav>

   <!--forms-->
   <div class="container">
      <form method="POST" enctype="multipart/form-data">
          <div class="form-group">
              <label class="heading">Title</label>
              <input type="text" class="form-control forms" name="title" required>
          </div>
          <div class="form-group">
              <label class="heading">Content</label>
              <textarea type="text" class="form-control forms" rows=5 name="content" required></textarea>
          </div>
          <div class="form-group">
              <label class="heading">Image</label>
              <input type="file" class="form-control forms" name="images">
          </div>
          <div class="form-group">
              <label class="heading">Video</label>
              <input type="file" class="form-control forms" name="videos">
          </div>
          <input type="submit" value="Publish" class="btn" name="submit">
      </form>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>

<?php
 if(isset($_POST["submit"])){
     $title = $_POST["title"];
     $content = $_POST["content"];
     $images = $_FILES['images']['name'];
     $videos = $_FILES['videos']['name'];

     if($title == "" && $content == ""){
       echo "You didn't enter anything";
     }else{
       $sql = "INSERT INTO posts(title, content, image, video) VALUES ('".$title."', '".$content."', '".$images."', '".$videos."')";
       if(!mysqli_query($conn, $sql)){
         echo "something went wrong";
       }else{
         move_uploaded_file($_FILES['images']['tmp_name'], "upload/".$_FILES['images']['name']);
         move_uploaded_file($_FILES['videos']['tmp_name'], "upload/".$_FILES['videos']['name']);
         header("Location: new.php?success");
       }
     }
  }

  if(isset($_GET["success"])){
    echo "<h4 class='new'>Recorded successfully</h4>";
  }
?>

<?php
  if(isset($_POST["submit"])){
    $title = $_POST["title"];
    $content = $_POST["content"];
    $userimage = $_FILES["userimage"]["name"];
    $videos = $_FILES['videos']['name'];

    if($title == "" && $content == ""){
      echo "You didn't enter anything";
    }else{
      $sql = "INSERT INTO admin(title, content, image, video) VALUES ('".$title."', '".$content."', '".$userimage."', '".$videos."')";
      if(!mysqli_query($conn, $sql)){
        echo "something went wrong";
      }else{
        move_uploaded_file($_FILES['images']['tmp_name'], "upload/".$_FILES['images']['name']);
        move_uploaded_file($_FILES['videos']['tmp_name'], "upload/".$_FILES['videos']['name']);
        header("Location: new.php?success");
      }
    }
  }

  if(isset($_GET["success"])){
    echo "<h4 class='new'>Recorded successfully</h4>";
  }
 
?>
