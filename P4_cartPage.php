<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Store: Shopping Cart</title>

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
        <script type="text/javaScript" src="js/cart.js"></script>
    </head>
    <body class="theme">
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
    <div class="container divPage"> 
        <div class="divTitle">
            <h1>My Shopping Cart <i>( items)</i></h1>  <!--TOTAL QUANTITY OF ITEMS-->
            <a href="index.php" target="_self">> Continue Shopping</a>
        </div>
        <div class="row justify-content-around">
            <div class="col-sm-11 col-lg-8" id="cart">
                <div class="container product" id="productTypeFruits">
                    <?php
                    $fruitnum = 0;
                        for($i = 0; $i < sizeof($_SESSION["cartItems"]); $i++){
                            if($_SESSION["cartItems"][$i]["cat"] == "Fruit"){
                                $fruitnum++;
                                $Qty = strtolower($_SESSION["cartItems"][$i]["name"])."Qty";
                                $name = strtolower($_SESSION["cartItems"][$i]["name"]);
                                $Sub = strtolower($_SESSION["cartItems"][$i]["name"])."Sub";
                                $RQty = strtolower($_SESSION["cartItems"][$i]["name"])."RQty";
                                $RPrice = strtolower($_SESSION["cartItems"][$i]["name"])."RPrice";
                                $qId = "q".$_SESSION["cartItems"][$i]["name"];
                                $price = $_SESSION["cartItems"][$i]["price"];
                                $img = $_SESSION["cartItems"][$i]["pic"];
                                if($fruitnum == 1){
                                    echo '<h3 class="theme">Fruits <i>('.$fruitnum.' item(s))</i></h3>';
                                }
                                echo '<div class="row cart-item" id="'.$name.'">
                                <div class="col-md-3 col-sm-6">
                                    <img class="item" src="images/'.$img.'" alt="missing pic"/>
                                </div>
                                <div class="col-md-3 col-sm-6 align-self-center desc">
                                    '.$_SESSION["cartItems"][$i]["name"].'
                                    <p>$'.$price.' ea.</p>
                                </div>
                                <div class="col-md-6 align-self-center container">
                                    <div class="row">
                                        <div class="quantity" id="'.$qId.'"><input id="'.$Qty.'" type="number" value = "1" min="0" max="99" readonly></div>
                                        <div>
                                            <div class="subtot" id="'.$Sub.'">Subtotal:<br />'.$price.'</div>
                                        </div>
                                        <button type="button" class="btn btn-dark btn-yeet" id="removeBtn" onclick="removeFromCart('.$name.')">Remove</button>
                                    </div>
                                </div>
                            </div>';
                            }
                        }                        
                    ?>
                    
                    <!-- <div class="row cart-item" id="orange">
                        <div class="col-md-3 col-sm-6">
                            <img class="item" src="images/orangesm.jpg" alt="yummy lookin ornge"/>
                        </div>
                        <div class="col-md-3 col-sm-6 align-self-center desc">
                            Orange
                            <p>$1.49 ea.</p>
                        </div>
                        <div class="col-md-6 align-self-center container">
                            <div class="row">
                                <button type="button" class="btn btn-dark btn-style" id="minusBtn" onclick="decrementCart('orangeQty', 'orange', 'orangeSub', 'orangeRQty', 'orangeRPrice',1.49)">-</button>
                                <div class="quantity" id="qOrange"><input id="orangeQty" type="number" value = "1" min="0" max="99" readonly></div>
                                <button type="button" class="btn btn-dark btn-style" id="addBtn" onclick="incrementCart('orangeQty', 'orangeSub', 'orangeRQty', 'orangeRPrice',1.49)">+</button>
                                <div>
                                    <div class="subtot" id="orangeSub">Subtotal:<br />$1.49</div>
                                </div>
                                <button type="button" class="btn btn-dark btn-yeet" id="removeBtn" onclick="removeFromCart('orange')">Remove</button>
                            </div>
                        </div>
                    </div>
                    <div class="row cart-item" id="kiwi">
                        <div class="col-md-3 col-sm-6">
                            <img class="item" src="images/Kiwism.jpg" alt="you silly goose you didnt extract the folder"/>
                        </div>
                        <div class="col-md-3 col-sm-6 align-self-center desc">
                            Kiwi
                            <p>$0.99 ea.</p>
                        </div>
                        <div class="col-md-6 align-self-center container">
                            <div class="row">
                                <button type="button" class="btn btn-dark btn-style" id="minusBtn" onclick="decrementCart('kiwiQty', 'kiwi', 'kiwiSub', 'kiwiRQty', 'kiwiRPrice',0.99)">-</button>
                                <div class="quantity" id="qKiwi"><input id="kiwiQty" type="number" value = "1" min="0" max="99" readonly></div>
                                <button type="button" class="btn btn-dark btn-style" id="addBtn" onclick="incrementCart('kiwiQty', 'kiwiSub', 'kiwiRQty', 'kiwiRPrice',0.99)">+</button>
                                <div>
                                    <div class="subtot" id="kiwiSub">Subtotal:<br />$0.99</div>
                                </div>
                                <button type="button" class="btn btn-dark btn-yeet" id="removeBtn" onclick="removeFromCart('kiwi')">Remove</button>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="container product" id="productTypeVegetables">
                    <?php
                    $vegnum = 0;
                    for($i = 0; $i < sizeof($_SESSION["cartItems"]); $i++){
                        if($_SESSION["cartItems"][$i]["cat"] == "Vegetables"){
                            $vegnum++;
                            $Qty = strtolower($_SESSION["cartItems"][$i]["name"])."Qty";
                            $name = strtolower($_SESSION["cartItems"][$i]["name"]);
                            $Sub = strtolower($_SESSION["cartItems"][$i]["name"])."Sub";
                            $RQty = strtolower($_SESSION["cartItems"][$i]["name"])."RQty";
                            $RPrice = strtolower($_SESSION["cartItems"][$i]["name"])."RPrice";
                            $qId = "q".$_SESSION["cartItems"][$i]["name"];
                            $price = $_SESSION["cartItems"][$i]["price"];
                            $img = $_SESSION["cartItems"][$i]["pic"];
                            if($vegnum == 1){
                                echo '<h3 class="theme">Vegetables <i>('.$vegnum.' item(s))</i></h3>';
                            }
                            echo '<div class="row cart-item" id="'.$name.'">
                            <div class="col-md-3 col-sm-6">
                                <img class="item" src="images/'.$img.'" alt="missing pic"/>
                            </div>
                            <div class="col-md-3 col-sm-6 align-self-center desc">
                                '.$_SESSION["cartItems"][$i]["name"].'
                                <p>$'.$price.' ea.</p>
                            </div>
                            <div class="col-md-6 align-self-center container">
                                <div class="row">
                                    <div class="quantity" id="'.$qId.'"><input id="'.$Qty.'" type="number" value = "1" min="0" max="99" readonly></div>
                                    <div>
                                        <div class="subtot" id="'.$Sub.'">Subtotal:<br />'.$price.'</div>
                                    </div>
                                    <button type="button" class="btn btn-dark btn-yeet" id="removeBtn" onclick="removeFromCart('.$name.')">Remove</button>
                                </div>
                            </div>
                        </div>';
                        }
                    }
                    ?>
                    <!-- <h3 class="theme">Vegetables <i>(1 item)</i></h3>
                    <div class="row cart-item" id="broccoli">
                        <div class="col-md-3 col-sm-6">
                            <img class="item" src="images/Broccolism.jpg" alt="Its not easy being green"/>
                        </div>
                        <div class="col-md-3 col-sm-6 align-self-center desc">
                            Broccoli
                            <p>$3.49 ea.</p>
                        </div>
                        <div class="col-md-6 align-self-center container">
                            <div class="row">
                                <button type="button" class="btn btn-dark btn-style" id="minusBtn" onclick="decrementCart('broccoliQty', 'broccoli', 'broccoliSub', 'broccoliRQty', 'broccoliRPrice',3.49)">-</button>
                                <div class="quantity" id="qBroccoli"><input id="broccoliQty" type="number" value = "1" min="0" max="99" readonly></div>
                                <button type="button" class="btn btn-dark btn-style" id="addBtn" onclick="incrementCart('broccoliQty', 'broccoliSub', 'broccoliRQty', 'broccoliRPrice',3.49)">+</button>
                                <div>
                                    <div class="subtot" id="broccoliSub">Subtotal:<br />$3.49</div>
                                </div>
                                <button type="button" class="btn btn-dark btn-yeet" id="removeBtn" onclick="removeFromCart('broccoli')">Remove</button>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="container product" id="productTypeMeat">
                    <?php
                    $meatnum = 0;
                    for($i = 0; $i < sizeof($_SESSION["cartItems"]); $i++){
                        if($_SESSION["cartItems"][$i]["cat"] == "Meat"){
                            $meatnum++;
                            $Qty = strtolower($_SESSION["cartItems"][$i]["name"])."Qty";
                            $name = strtolower($_SESSION["cartItems"][$i]["name"]);
                            $Sub = strtolower($_SESSION["cartItems"][$i]["name"])."Sub";
                            $RQty = strtolower($_SESSION["cartItems"][$i]["name"])."RQty";
                            $RPrice = strtolower($_SESSION["cartItems"][$i]["name"])."RPrice";
                            $qId = "q".$_SESSION["cartItems"][$i]["name"];
                            $price = $_SESSION["cartItems"][$i]["price"];
                            $img = $_SESSION["cartItems"][$i]["pic"];
                            if($meatnum == 1){
                                echo '<h3 class="theme">Meat <i>('.$meatnum.' items)</i></h3>';
                            }
                            echo '<div class="row cart-item" id="'.$name.'">
                            <div class="col-md-3 col-sm-6">
                                <img class="item" src="images/'.$img.'" alt="missing pic"/>
                            </div>
                            <div class="col-md-3 col-sm-6 align-self-center desc">
                                '.$_SESSION["cartItems"][$i]["name"].'
                                <p>$'.$price.' ea.</p>
                            </div>
                            <div class="col-md-6 align-self-center container">
                                <div class="row">
                                    <div class="quantity" id="'.$qId.'"><input id="'.$Qty.'" type="number" value = "1" min="0" max="99" readonly></div>
                                    <div>
                                        <div class="subtot" id="'.$Sub.'">Subtotal:<br />'.$price.'</div>
                                    </div>
                                    <button type="button" class="btn btn-dark btn-yeet" id="removeBtn" onclick="removeFromCart('.$name.')">Remove</button>
                                </div>
                            </div>
                        </div>';
                        }
                    }
                    ?>
                    <!-- <h3 class="theme">Meat <i>(1 item)</i></h3>
                    <div class="row cart-item" id="bacon">
                        <div class="col-md-3 col-sm-6">
                            <img class="item" src="images/baconsm.jpg" alt="tasty mm mm mmm"/>
                        </div>
                        <div class="col-md-3 col-sm-6 align-self-center desc">
                            Thick-Cut Bacon
                            <p>$6.99 ea.</p>
                        </div>
                        <div class="col-md-6 align-self-center container">
                            <div class="row">
                                <button type="button" class="btn btn-dark btn-style" id="minusBtn" onclick="decrementCart('baconQty', 'bacon', 'baconSub', 'baconRQty', 'baconRPrice',6.99)">-</button>
                                <div class="quantity" id="qBacon"><input id="baconQty" type="number" value = "1" min="0" max="99" readonly></div>
                                <button type="button" class="btn btn-dark btn-style" id="addBtn" onclick="incrementCart('baconQty', 'baconSub', 'baconRQty', 'baconRPrice',6.99)">+</button>
                                <div>
                                    <div class="subtot" id="baconSub">Subtotal:<br />$6.99</div>
                                </div>
                                <button type="button" class="btn btn-dark btn-yeet" id="removeBtn" onclick="removeFromCart('bacon')">Remove</button>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="container product" id="productTypeAlcohol">
                    <?php
                    $alcnum = 0;
                    for($i = 0; $i < sizeof($_SESSION["cartItems"]); $i++){
                        if($_SESSION["cartItems"][$i]["cat"] == "Alcohol"){
                            $alcnum++;
                            $Qty = strtolower($_SESSION["cartItems"][$i]["name"])."Qty";
                            $name = strtolower($_SESSION["cartItems"][$i]["name"]);
                            $Sub = strtolower($_SESSION["cartItems"][$i]["name"])."Sub";
                            $RQty = strtolower($_SESSION["cartItems"][$i]["name"])."RQty";
                            $RPrice = strtolower($_SESSION["cartItems"][$i]["name"])."RPrice";
                            $qId = "q".$_SESSION["cartItems"][$i]["name"];
                            $price = $_SESSION["cartItems"][$i]["price"];
                            $img = $_SESSION["cartItems"][$i]["pic"];
                            if($alcnum == 1){
                                echo '<h3 class="theme">Alcohol <i>('.$alcnum.' items)</i></h3>';
                            }
                            echo '<div class="row cart-item" id="'.$name.'">
                            <div class="col-md-3 col-sm-6">
                                <img class="item" src="images/'.$img.'" alt="missing pic"/>
                            </div>
                            <div class="col-md-3 col-sm-6 align-self-center desc">
                                '.$_SESSION["cartItems"][$i]["name"].'
                                <p>$'.$price.' ea.</p>
                            </div>
                            <div class="col-md-6 align-self-center container">
                                <div class="row">
                                    <div class="quantity" id="'.$qId.'"><input id="'.$Qty.'" type="number" value = "1" min="0" max="99" readonly></div>
                                    <div>
                                        <div class="subtot" id="'.$Sub.'">Subtotal:<br />'.$price.'</div>
                                    </div>
                                    <button type="button" class="btn btn-dark btn-yeet" id="removeBtn" onclick="removeFromCart('.$name.')">Remove</button>
                                </div>
                            </div>
                        </div>';
                        }
                    }
                    ?>
                    <!-- <h3 class="theme">Alcohol <i>(2 items)</i></h3>
                    <div class="row cart-item" id="scotch">
                        <div class="col-md-3 col-sm-6">
                            <img class="item" src="images/scotchsm.jpg" alt="happy juice"/>
                        </div>
                        <div class="col-md-3 col-sm-6 align-self-center desc">
                            Red Label Scotch
                            <p>$69.42 ea.</p>
                        </div>
                        <div class="col-md-6 align-self-center container">
                            <div class="row">
                                <button type="button" class="btn btn-dark btn-style" id="minusBtn" onclick="decrementCart('scotchQty', 'scotch', 'scotchSub', 'scotchRQty', 'scotchRPrice',69.42)">-</button>
                                <div class="quantity" id="qScotch"><input id="scotchQty" type="number" value = "1" min="0" max="99" readonly></div>
                                <button type="button" class="btn btn-dark btn-style" id="addBtn" onclick="incrementCart('scotchQty', 'scotchSub', 'scotchRQty', 'scotchRPrice',69.42)">+</button>
                                <div>
                                    <div class="subtot" id="scotchSub">Subtotal:<br />$69.42</div>
                                </div>
                                <button type="button" class="btn btn-dark btn-yeet" id="removeBtn" onclick="removeFromCart('scotch')">Remove</button>
                            </div>
                        </div>
                    </div>
                    <div class="row cart-item" id="champagne">
                        <div class="col-md-3 col-sm-6">
                            <img class="item" src="images/champagnesm.jpg" alt="good for celebrations"/>
                        </div>
                        <div class="col-md-3 col-sm-6 align-self-center desc">
                            Champagne
                            <p>$42.69 ea.</p>
                        </div>
                        <div class="col-md-6 align-self-center container">
                            <div class="row">
                                <button type="button" class="btn btn-dark btn-style" id="minusBtn" onclick="decrementCart('champagneQty', 'champagne', 'champagneSub', 'champagneRQty', 'champagneRPrice',42.69)">-</button>
                                <div class="quantity" id="qChampagne"><input id="champagneQty" type="number" value = "1" min="0" max="99" readonly></div>
                                <button type="button" class="btn btn-dark btn-style" id="addBtn" onclick="incrementCart('champagneQty', 'champagneSub', 'champagneRQty', 'champagneRPrice',42.69)">+</button>
                                <div>
                                    <div class="subtot" id="champagneSub">Subtotal:<br />$42.69</div>
                                </div>
                                <button type="button" class="btn btn-dark btn-yeet" id="removeBtn" onclick="removeFromCart('champagne')">Remove</button>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="container product" id="productTypeDairy">
                    <?php
                    $dairynum = 0;
                    for($i = 0; $i < sizeof($_SESSION["cartItems"]); $i++){
                        if($_SESSION["cartItems"][$i]["cat"] == "Dairy"){
                            $dairynum++;
                            $Qty = strtolower($_SESSION["cartItems"][$i]["name"])."Qty";
                            $name = strtolower($_SESSION["cartItems"][$i]["name"]);
                            $Sub = strtolower($_SESSION["cartItems"][$i]["name"])."Sub";
                            $RQty = strtolower($_SESSION["cartItems"][$i]["name"])."RQty";
                            $RPrice = strtolower($_SESSION["cartItems"][$i]["name"])."RPrice";
                            $qId = "q".$_SESSION["cartItems"][$i]["name"];
                            $price = $_SESSION["cartItems"][$i]["price"];
                            $img = $_SESSION["cartItems"][$i]["pic"];
                            if($dairynum == 1){
                                echo '<h3 class="theme">Dairy <i>('.$dairynum.' items)</i></h3>';
                            }
                            echo '<div class="row cart-item" id="'.$name.'">
                            <div class="col-md-3 col-sm-6">
                                <img class="item" src="images/'.$img.'" alt="missing pic"/>
                            </div>
                            <div class="col-md-3 col-sm-6 align-self-center desc">
                                '.$_SESSION["cartItems"][$i]["name"].'
                                <p>$'.$price.' ea.</p>
                            </div>
                            <div class="col-md-6 align-self-center container">
                                <div class="row">
                                    <div class="quantity" id="'.$qId.'"><input id="'.$Qty.'" type="number" value = "1" min="0" max="99" readonly></div>
                                    <div>
                                        <div class="subtot" id="'.$Sub.'">Subtotal:<br />'.$price.'</div>
                                    </div>
                                    <button type="button" class="btn btn-dark btn-yeet" id="removeBtn" onclick="removeFromCart('.$name.')">Remove</button>
                                </div>
                            </div>
                        </div>';
                        }
                    }
                    ?>
                </div>
                <div class="container product" id="productTypeFish">
                    <?php
                    $fishnum = 0;
                    for($i = 0; $i < sizeof($_SESSION["cartItems"]); $i++){
                        if($_SESSION["cartItems"][$i]["cat"] == "Fish"){
                            $fishnum++;
                            $Qty = strtolower($_SESSION["cartItems"][$i]["name"])."Qty";
                            $name = strtolower($_SESSION["cartItems"][$i]["name"]);
                            $Sub = strtolower($_SESSION["cartItems"][$i]["name"])."Sub";
                            $RQty = strtolower($_SESSION["cartItems"][$i]["name"])."RQty";
                            $RPrice = strtolower($_SESSION["cartItems"][$i]["name"])."RPrice";
                            $qId = "q".$_SESSION["cartItems"][$i]["name"];
                            $price = $_SESSION["cartItems"][$i]["price"];
                            $img = $_SESSION["cartItems"][$i]["pic"];
                            if($fishnum == 1){
                                echo '<h3 class="theme">Fish <i>('.$fishnum.' items)</i></h3>';
                            }
                            echo '<div class="row cart-item" id="'.$name.'">
                            <div class="col-md-3 col-sm-6">
                                <img class="item" src="images/'.$img.'" alt="missing pic"/>
                            </div>
                            <div class="col-md-3 col-sm-6 align-self-center desc">
                                '.$_SESSION["cartItems"][$i]["name"].'
                                <p>$'.$price.' ea.</p>
                            </div>
                            <div class="col-md-6 align-self-center container">
                                <div class="row">
                                    <div class="quantity" id="'.$qId.'"><input id="'.$Qty.'" type="number" value = "1" min="0" max="99" readonly></div>
                                    <div>
                                        <div class="subtot" id="'.$Sub.'">Subtotal:<br />'.$price.'</div>
                                    </div>
                                    <button type="button" class="btn btn-dark btn-yeet" id="removeBtn" onclick="removeFromCart('.$name.')">Remove</button>
                                </div>
                            </div>
                        </div>';
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="col-sm-11 col-lg-3">
                <div class="container receipt">
                    <h4 class="receipt">Cart Summary:</h4>
                    <div class="row receipt-header">
                        <div class="col-8">
                            <h6 class="receipt">Items:</h6>
                        </div>
                        <div class="col-4">
                            <h6 class="receipt">Price:</h6>
                        </div>
                    </div>
                    <?php
                    // $subtotal = 0.00;
                    // $gst = 0.00;
                    // $qst = 0.00;
                    // $total = 0.00;
                    // for($i = 0; $i < sizeof($_SESSION['cartItems']); $i++){
                    //     $name = $_SESSION['cartItems'][$i]["name"];
                    //     $nameR = strtolower($_SESSION['cartItems'][$i]["name"])."R";
                    //     $nameRQty = strtolower($_SESSION['cartItems'][$i]["name"])."RQty";
                    //     $nameRPrice = strtolower($_SESSION['cartItems'][$i]["name"])."RPrice";
                    //     $price = $_SESSION['cartItems'][$i]["price"];
                    //     $subtotal += $price;
                    //     echo '<div class="row receipt-item" id="'.$nameR.'">
                    //     <div class="col-8">
                    //         '.$name.' <p id="'.$nameRQty.'">(1)</p>
                    //     </div>
                    //     <div class="col-4" id="'.$nameRPrice.'">
                    //         $'.$price.'
                    //     </div>
                    // </div>';
                    // }
                    // $gst = 0.05*$subtotal;
                    // $qst = 0.09975*$subtotal;
                    // $total = $subtotal+$qst+$gst;
                    // <!-- <?php echo "$'.$subtotal.'"; -->
                    ?>
                    <div class="row receipt-item" id="orangeR">
                        <div class="col-8">
                            Orange <p id="orangeRQty">(1)</p>
                        </div>
                        <div class="col-4" id="orangeRPrice">
                            $1.49
                        </div>
                    </div>
                    <div class="row receipt-item" id="kiwiR">
                        <div class="col-8">
                            Kiwi <p id="kiwiRQty">(1)</p>
                        </div>
                        <div class="col-4" id="kiwiRPrice">
                            $0.99
                        </div>
                    </div>
                    <div class="row receipt-item" id="broccoliR">
                        <div class="col-8">
                            Broccoli <p id="broccoliRQty">(1)</p>
                        </div>
                        <div class="col-4" id="broccoliRPrice">
                            $3.49
                        </div>
                    </div>
                    <div class="row receipt-item" id="baconR">
                        <div class="col-8">
                            Thick-Cut Bacon <p id="baconRQty">(1)</p>
                        </div>
                        <div class="col-4" id="baconRPrice">
                            $6.99
                        </div>
                    </div>
                    <div class="row receipt-item" id="scotchR">
                        <div class="col-8">
                            Red Label Scotch <p id="scotchRQty">(1)</p>
                        </div>
                        <div class="col-4" id="scotchRPrice">
                            $69.42
                        </div>
                    </div>
                    <div class="row receipt-item" id="champagneR">
                        <div class="col-8">
                            Champagne <p id="champagneRQty">(1)</p>
                        </div>
                        <div class="col-4" id="champagneRPrice">
                            $42.69
                        </div>
                    </div>
                    <div class="row receipt-closer">
                        <div class="col-8">
                            Subtotal
                        </div>
                        <div class="col-4" id="subtotal">
                            placeholder
                        </div>
                    </div>
                    <div class="row receipt-item">
                        <div class="col-8">
                            GST
                        </div>
                        <div class="col-4" id="gst">
                            $444
                        </div>
                    </div>
                    <div class="row receipt-item">
                        <div class="col-8">
                            QST
                        </div>
                        <div class="col-4" id="qst">
                            $666
                        </div>
                    </div>
                    <div class="row receipt-closer">
                        <div class="col-8">
                            Total
                        </div>
                        <div class="col-4" id="total">
                            $999
                        </div>
                    </div>
                </div>
                <div class="container">
                    <form action="cart.php" method="POST">
                        <div class="row justify-content-center">
                            <button type="submit" name="clear" class="btn btn-dark btn-clear" id="clearCart">Clear Cart</button>
                        </div>
                        <div class="row justify-content-center">
                            <a class="btn btn-dark btn-continue color" href="index.php" role="button">Continue Shopping</a>
                        </div>
                        <div class="row justify-content-center">
                            <button type="button" class="btn btn-dark btn-checkout">Checkout</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>