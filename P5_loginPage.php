<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Store: User Login</title>

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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/stylePage.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script type="text/javaScript" src="js/login_signup.js"></script>
 </head>
 <body class="theme">
   <!--code for navbar-->
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
                <a class="nav-link color hover" href="index.php">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle color hover" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Aisles  
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item color" href="fruit_aisle.php">Fruits</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item color" href="vegetable_aisle.php">Vegetables</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item color" href="meat_aisle.php">Meat</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item color" href="other_aisle.php">Alcohol</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item color" href="dairy_aisle.php">Dairy & Eggs</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item color" href="fish_aisle.php">Fish</a>
                </div>
              </li>
            </ul>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link color hover" href="P4_cartPage.php">Checkout</a>
              </li>
              <li class="nav-item">
                <a class="nav-link color hover" href="P5_loginPage.php">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link color hover" href="P6_signupPage.php">Sign Up</a>
              </li>
            </ul>
          </div>
        </nav>
      <br />
     <!--code for navbar done-->
 <div class="container divPage">        
    <div class="divTitle">
        <h1>User Login</h1>
        <p>Welcome back! Please enter your account information:</p>
        <a href="index.php" target="_self">> Continue Shopping</a>
    </div>
    <div class="row justify-content-around">
        <div class="col-11 signup-form">
            <form action="login.php" method="POST">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-dark" id="sub1" name="submit" onclick="btnSubmit()">Submit</button>
                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="button" class="btn btn-dark" id="forgot" onclick="forgotPass()">Forgot Password?</button>
                <a class="btn btn-dark color2" href="P6_signupPage.php" role="button">New User?</a>
              </form>
        </div>
    </div>
 </div>
 </body>
</html>