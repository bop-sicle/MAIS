<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
</style>
    <title>MAIS - Balayan</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg  fixed-top">
    <div class="container">
    <a href="#" class="navbar-brand">
    <img src="images/logo.png" alt="..." height="70">
    </a>

    <button class="navbar-toggler"
    type="button" 
    data-bs-toggle="collapse" 
    data-bs-target="#navmenu" >
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navmenu">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item px-3">
                <a href="#home" class="nav-link ">HOME</a>
            </li>
            <li class="nav-item px-3">
                <a href="#about" class="nav-link ">ABOUT</a>
            </li>
            <li class="nav-item px-3">
                <a href="#contact" class="nav-link ">CONTACT US</a>
            </li>
            <li class="nav-item dropdown px-3">
          <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
            LOGIN
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="farmer/login.php">Farmer</a></li>
            <!-- <li><a class="dropdown-item" href="#">Brgy Staff</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Office Staff</a></li> -->
            <li><a class="dropdown-item" href="admin/login.php">Admin</a></li>
          </ul>
        </li>
        </ul>
    </div>
    </div>
    </nav>

    <!-- Landing Page -->
    <section id="landing-page" class="">
    <div class="container">
        <div class="align-items-center">
            <div>
            <h1 class="text-dark">Municipal Agriculture Information System </span></h1>
            <p class="lead my-2">
              Leveraging business efficiency and productivity with this 
              web-based application for managing agricultural information and resources.
            </p>
            
            <!-- <button
              class="btn btn-primary btn-lg"
              data-bs-toggle="modal"
              data-bs-target="#enroll"
            >
              Login
            </button> -->

        
          </div>
        </div>
    </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>