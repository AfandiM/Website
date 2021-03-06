<?php
function createDesPage($line){
    $theentirefile =  "<html lang='en'><head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <!-- Latest compiled and minified CSS -->
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
    <!-- font awesome icon library -->
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='stylesheet' type='text/css' href='css/main.css'>
    <!-- jQuery library -->
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <!-- Popper JS -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script>
    <!-- Latest compiled JavaScript -->
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
    <script src='js/main.js'></script>
    <title>" . str_replace('|', ' ', $line[0]) .  "</title>
</head>


<body class='background'>
    <nav class='navbar navbar-expand-md '>
      <div class='logo-image'>
        <img src='images/logo.png' alt='logo'>
      </div>
        <button class='navbar-toggler navbar-light' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
        </button>
      
        <div class='collapse navbar-collapse' id='navbarSupportedContent'>
          <ul class='navbar-nav mr-auto'>
            <li class='nav-item'>
              <a class='nav-link' href='index.html'>Home</a>
            </li>
            <li class='nav-item dropdown'>
              <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                Aisles  
              </a>
              <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
                <a class='dropdown-item' href='fruit_aisle.html'>Fruits</a>
                <div class='dropdown-divider'></div>
                <a class='dropdown-item' href='vegetable_aisle.html'>Vegetables</a>
                <div class='dropdown-divider'></div>
                <a class='dropdown-item' href='meat_aisle.html'>Meat</a>
                <div class='dropdown-divider'></div>
                <a class='dropdown-item' href='other_aisle.html'>Alcohol</a>
                <div class='dropdown-divider'></div>
                <a class='dropdown-item' href='dairy_aisle.html'>Dairy &amp; Eggs</a>
                <div class='dropdown-divider'></div>
                <a class='dropdown-item' href='fish_aisle.html'>Fish</a>
              </div>
            </li>
          </ul>
          <ul class='navbar-nav ml-auto'>
            <li class='nav-item'>
              <a class='nav-link' href='P4_cartPage.html'>Checkout</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link' href='P5_loginPage.html'>Login</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link' href='P6_signupPage.html'>Sign Up</a>
            </li> 
          </ul>
        </div>
      </nav>
      <br><br>
      <div class='item-description'>
        <img src='img/" . $line[8] . "'>
        <h1>" . str_replace('|', ' ', $line[0]) . "</h1>";
        if($line[6] == "Yes"){
            $theentirefile .= "<h3 style='color: red;'>Weekly Deal</h3>";
            $theentirefile .= "<p class='price'><del style='color: black;'>" . $line[1] . " ea.</del>" . $line[7] . " ea.</p>";
        }
        else{
            $theentirefile .= "
            <p class='price'>" . $line[1] . " ea.</p>";
        }
        $theentirefile .= "<p>Aisle: " . $line[5] . "<br>In Stock:" . $line[3] . "<button onclick='moreDesc()' class='button button1'>More Description</button>
        <div id='moreDesc' style='display: none'>" . str_replace('|', ' ', $line[5]) . "
        </div>
        <div class='button'>
          <label for='qty'>Enter Quantity:</label><br>
          <input id='quantity' type='number' value='0' min='0' max='1234' readonly=''>
          <button onclick='decrement(" . $line[1] .  ")'>-</button>
          <button onclick='increment(" .$line[1] . ")'>+</button>
          <button style='color: red;' onclick='remove()'>X</button>
          <br><br>  
          <p>" . $line[1]. " ea.</p>
          <p style='text-decoration: underline;'>Subtotal</p>
          <p id='total'>$0.00</p>
          <br>
          <button onclick='addToCart(apple(s))' class='button button2'>Add To Cart</button>
        </div>
      </div>


</body></html>";
$newdespage = fopen($line[0] . ".php", "w");
fwrite($newdespage, $theentirefile);
fclose($newdespage);
}
?>