<?php $page_title='Lobster'; include('header.php');
$product_id='#18';
include('product_info.php');
?>
      <br><br>
      <div class ="item-description">
        <img src="images/lobster-product.jpg">
        <h1>Lobster</h1>
        <?php if($sale == "Yes"){
          echo "<h3 style='color: red;''>Weekly Deal</h3>";
          echo "<p class='price'><del style='color: black;'>$". "$initPrice ea.</del> $" ."$price ea.</p>";
        }
        else{
          echo "<p class='price'>$" . "$price ea.</p>";
        }
        ?>
        <p>Aisle: <?php echo $aisle?><br>Fresh<br>Crustacean</p>
        <button onclick="moreDesc()" class="button button1">More Description</button>
        <div id="moreDesc" style="display: none">
          Company: Montreal Lobsters<br>Imported From: Montreal, Quebec<br>Expires: 03/15/21<br>Weight: 500g<br>No Added Preservatives<br>Product Number: <?php echo $product_id?>
          <br>Norway Lobster<br>Keep Refrigerated<br>Calories: 800
        </div>
        <div class="button">
        <form method="POST" action="addToCart.php">
          <input style='display:none' name='name' value='Lobster' readonly>
          <input style='display:none' name='id' value='#18' readonly>
          <label for="qty">Enter Quantity:</label><br>
          <input name='qty' id="quantity" type="number" value = "0" min="0" max="<?php echo $qty?>" readonly>
          <button type="button" onclick="decrement(<?php echo $price?>)">-</button>
          <button type="button" onclick="increment(<?php echo $price?>)">+</button>
          <button type="button" style="color: red;" onclick="remove()">X</button>
          <br><br>  
          <p>$<?php echo $price ?> ea</p>
          <p style="text-decoration: underline;">Total</p>
          <p name='total' id="total">$0.00</p>
          <br>
          <button onclick="addToCart('Lobster(s)')" class="button button2">Add To Cart</button>
          </form>
        </div>
      </div>
<?php include('footer.php')?>