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
          <a class="nav-link active" href="post.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="userpost.php">Posts</a>
        </li>
       </ul>
      </div>
  </div>
  </nav>

  <!--home-->
  <div class="welcome">
    <img src="aims.jpeg" class="aims">
    <div class="home">
      <h3>AIMS Institute</h3>
      <p class="para">Welcome back, see all the recent blogs posted by the users.</p>
      <a href="userpost.php" class="home-btn">Blogs</a>
    </div>
  </div>
  

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
    
  </body>
</html>