<?php $page_title='Pork'; include('header.php');
$product_id='#8';
include('product_info.php');
?>
      <br><br>
      <div class ="item-description">
        <img src="images/pork-product.jpg">
        <h1>Pork Tenderloin</h1>
        <?php if($sale == "Yes"){
          echo "<h3 style='color: red;''>Weekly Deal</h3>";
          echo "<p class='price'><del style='color: black;'>$". "$initPrice ea.</del> $" ."$price ea.</p>";
        }
        else{
          echo "<p class='price'>$" . "$price ea.</p>";
        }
        ?>
        <p>Aisle: <?php echo $aisle?><br>In Stock:<?php echo $qty?><br>Pork<br> Sourced locally</p>
        <button onclick="moreDesc()" class="button button1">More Description</button>
        <div id="moreDesc" style="display: none">
          Farm: Animal Farm<br>Imported From: Laval, Quebec<br>Expires: 03/20/21<br>Average Size: 15cm<br>Product Number: <?php echo $product_id?><br>From animals fed with supplements
          <br>Keep Refrigerated<br>Calories: 800
        </div>
        <div class="button">
        <form method="POST" action="addToCart.php">
          <input style='display:none' name='name' value='Pork' readonly>
          <input style='display:none' name='id' value='#8' readonly>
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
          <button onclick="addToCart('Pork(s)')" class="button button2">Add To Cart</button>
          </form>
        </div>
      </div>
<?php include('footer.php')?>