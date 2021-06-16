<?php $page_title='Champagne'; include('header.php');
$product_id='#12';
include('product_info.php');
?>
      <br><br>
      <div class ="item-description">
        <img src="images/champagne-product.jpg">
        <h1>Champagne</h1>
        <?php if($sale == "Yes"){
          echo "<h3 style='color: red;''>Weekly Deal</h3>";
          echo "<p class='price'><del style='color: black;'>$". "$initPrice ea.</del> $" ."$price ea.</p>";
        }
        else{
          echo "<p class='price'>$" . "$price ea.</p>";
        }
        ?>
        <p>Aisle: <?php echo $aisle?><br>Sparkling wine<br>1 Litre Bottle</p>
        <button onclick="moreDesc()" class="button button1">More Description</button>
        <div id="moreDesc" style="display: none">
          Company: Moet & Chandon<br>Imported From: Epernay, France<br>Expires: 01/04/25<br>Amount:1L<br>Product Number: <?php echo $product_id?><br>Aging: 15 months
          <br>Calories: 200
        </div>
        <div class="button">
        <form method="POST" action="addToCart.php">
          <input style='display:none' name='name' value='Champagne' readonly>
          <input style='display:none' name='id' value='#12' readonly>
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
          <button onclick="addToCart('Champagne(s)')" class="button button2">Add To Cart</button>
          </form>
        </div>
      </div>
<?php include('footer.php')?>