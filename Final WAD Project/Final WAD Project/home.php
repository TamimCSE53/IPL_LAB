<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $fetch_info['name'] ?> | Home</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="carosel.css">

  <title>Bootstrap 5 Carousel Slider</title>
</head>
<body>
  <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
 
      <div class="navbar">
        <div class="icon">
            <h2 class="logo">CP School</h2>
        </div>

        <div class="menu">
            <ul>
                <li><a href="C.html">C</a></li>
                <li><a href="C++.html">C++</a></li>
                <li><a href="Number_theory.html">Number Theory</a></li>
                <li><a href="Graph.html">Graph</a></li>
                <li><a href="Tree.html">Tree</a></li>
                <li><a href="DP.html">DP</a></li>
            </ul>
        </div>

        <div class="search">
            <input class="srch" type="search" name="" placeholder="Type To text">
        </div>
        
        <div class="btn-main">
            <button class="btn-button">Search</button>
        </div>
    </div> 
   
    <div class="lekha">
      <h1>CP Learning & <br> <span>Web Desing</span><br></h1>
      <p>CP School, a place of learning and delight,<br>
          Where algorithms and code take flight.
          With patient teachers and eager peers,<br>
          Mastering computer programming's frontiers.
      </p>
    </div>
   
  </div>

  <div class="carousel-inner">
      
    <div class="carousel-item active c-item">
      <img src="image/imagec2.jpg" class="d-block w-100 c-img" alt="Slide 1">
      <div class="carousel-caption top-0 mt-4"></div>
    </div>

      <div class="carousel-item c-item">
        <img src="image/joker.jpg" class="d-block w-100 c-img" alt="Slide 2">
        <div class="carousel-caption top-0 mt-4"></div>
      </div>

      <div class="carousel-item c-item">
        <img src="image/pexels-divinetechygirl-1181279.jpg" class="d-block w-100 c-img" alt="Slide 3">
        <div class="carousel-caption top-0 mt-4"></div>
      </div>
      
  </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
    
  </div>

</body>
</html>
