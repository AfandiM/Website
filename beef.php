<?php $page_title='Beef'; include('header.php');
$product_id='#7';
include('product_info.php');
?>
      <br><br>
      <div class ="item-description">
        <img src="images/beef-product.jpg">
        <h1>Beef</h1>
        <?php if($sale == "Yes"){
          echo "<h3 style='color: red;''>Weekly Deal</h3>";
          echo "<p class='price'><del style='color: black;'>$". "$initPrice ea.</del> $" ."$price ea.</p>";
        }
        else{
          echo "<p class='price'>$" . "$price ea.</p>";
        }
        ?>
        <p>Aisle: <?php echo $aisle?><br>In Stock:<?php echo $qty?><br>Imported Locally<br>Refrigerate</p>
        <button onclick="moreDesc()" class="button button1">More Description</button>
        <div id="moreDesc" style="display: none">
          Farm: Circa Farm<br>Imported From: Locally Sourced<br>Expires: 03/21/21<br>Average Size: 15cm<br>Product Number: <?php echo $product_id?>
          <br>Meat from cows who died from natural causes<br>From mature cattle raised for meat production<br>Keep Refrigerated
          <br>Calories: 600
        </div>
        <div class="button">
        <form method="POST" action="addToCart.php">
          <input style='display:none' name='name' value='Beef' readonly>
          <input style='display:none' name='id' value='#7' readonly>
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
          <button onclick="addToCart('Beef(s)')" class="button button2">Add To Cart</button>
          </form>
        </div>
      </div>
<?php include('footer.php')?>