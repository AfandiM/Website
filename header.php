<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <!-- font awesome icon library -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="js/main.js"></script>
    <title><?php echo $page_title;?></title>
</head>


<body class="background">
    <nav class="navbar navbar-expand-md ">
      <div class="logo-image">
        <img src="images/logo.png" alt="logo">
      </div>
        <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse"  id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Aisles  
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="fruit_aisle.php">Fruits</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="vegetable_aisle.php">Vegetables</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="meat_aisle.php">Meat</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="other_aisle.php">Alcohol</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="dairy_aisle.php">Dairy & Eggs</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="fish_aisle.php">Fish</a>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <?php 
            if($_SESSION["loggedin"]){
                echo '<li class="nav-item">
                <a class="nav-link" href="P4_cartPage.php">Checkout</a>
              </li>  <li class="nav-item">
              Welcome ' . $_SESSION["user"] . '!
            </li> <form action = "logout.php" method = "POST"><li class="nav-item"><button type = "submit" name = "logout">
            Logout</button>
          </li></form>';
            }
            else{
            echo '<li class="nav-item">
            <a class="nav-link" href="P4_cartPage.php">Checkout</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="P5_loginPage.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="P6_signupPage.php">Sign Up</a>';
            }
            ?>
              <!-- <li class="nav-item">
                <a class="nav-link" href="Backstoremain.html">admin access hidden</a>
            </li> -->
          </ul>
        </div>
      </nav>
      <br>