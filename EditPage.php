<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript">
  document.addEventListener('click', function(e) {
    if (document.activeElement.toString() == '[object HTMLButtonElement]') {
      document.activeElement.blur();
    }
  });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="stylesheet2.css" />

<head>
</head>

<body class="">
  <div class="row content">
    <div class="container-fluid text-center">
      <div class="col-sm-2 text-center backendnav" style="margin-top:1.5in; float:left">
        <p><a href="index.php">Home Page</a></p>
        <p><a href="ProductPage.php">Product List</a></p>
        <p><a href="UserList.php">User List</a></p>
        <p><a href="ordersList.php">Order List</a></p>
      </div>
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="col-sm-7 text-center mt-5" style="float:left;">
          <div class="row-6-md" style="margin-top:3cm; min-width: 20%;">
            <h1 style="margin-bottom:1.5cm;">Edit Product</h1>
            <input type="radio" id="fruit" name="category" value="Fruit">
            <label for="fruit">Fruit</label>
            &nbsp;
            <input type="radio" id="vege" name="category" value="Vegetables">
            <label for="vege">Vegetables</label>
            &nbsp;
            <input type="radio" id="meat" name="category" value="Meat">
            <label for="meat">Meat</label>
            &nbsp;
            <input type="radio" id="alcohol" name="category" value="Alcohol">
            <label for="alcohol">Alcohol</label>
            &nbsp;
            <input type="radio" id="dairy" name="category" value="Dairy">
            <label for="dairy">Dairy & Eggs</label>
            &nbsp;
            <input type="radio" id="fish" name="category" value="Fish">
            <label for="fish">Fish</label>
            &nbsp;
            <p style="color:red;"> <?php echo $nocaterr ?></p>
            <br />
            <table class="table table-light" id="productTable1">
              <thead id="Tables1H">
                <tr class="antihover">
                  <th class="ppitemsh" style="width:200px;"></th>
                  <th class="ppitemsh" style="width:200px">Product</th>
                  <th class="ppitemsh" style="width:200px">ID</th>
                  <th class="ppitemsh" style="width:200px">Price</th>
                  <th class="ppitemsh" style="width:165px">Inventory</th>
                  <th class="ppitemsh" style="width:165px;"></th>
                </tr>
              </thead>
              <tbody>
                <td class="ppitems" style="color:red;"><img class="pimage" src=""><?php echo $sameiderr ?></td>
                <td class="ppitems"><input type="text" name="productname" placeholder="Product Name" value="<?php if (!empty($editname)) echo $editname; else{echo $_POST["productname"];} ?>" style="width:70%;"></td>
                <td class="ppitems"><input type="text" name="productid" placeholder="Product ID" value="<?php if (!empty($editid)) echo $editid; else{echo $_POST["productid"];}?>" style="width:70%;"></td>
                <td class="ppitems"><input type="text" name="productprice" placeholder="Product Price" value="<?php if (!empty($editprice)) echo $editprice; else{echo $_POST["productprice"];}?>" style="width:70%;"></td>
                <td class="ppitems"><input type="text" name="productqty" placeholder="Product Quantity" value="<?php if (!empty($editqty)) echo $editqty; else{echo $_POST["productqty"];}?>" style="width:70%;"></td>
                </tr>
                <td class="ppitems"><img class="pimage" src=""></td>
                <td class="ppitems" style="color: red"><?php echo $namerr ?></td>
                <td class="ppitems" style="color: red"><?php echo $iderr ?></td>
                <td class="ppitems" style="color: red"><?php echo $pricerr ?></td>
                <td class="ppitems" style="color: red"><?php echo $qtyerr ?></td>
                </tr>
              </tbody>
            </table>
          </div>
          <br>
          <div class="col-sm-7 text-center mt-5 m-auto">
            <label class="edlabelforimg"><b>Product Image : </b></label>
            <label class="edlabelforimg" style="color:red; float: right;"><?php echo $noimgerr ?></label>
            <div class="justify-content-center align-items-center" style="border: 2px dashed grey; border-radius: 5px; max-width: 100%;">
              <img id="imageadder" style="position:relative; z-index: 1; max-width:100%; max-height:100%; object-fit:contain">
              <input type="file" name="myFile">
            </div>
          </div>
          <br />
          <div class="col-sm-7 text-center mt-5 m-auto">
            <label class="edlabelforimg" style="float:left;"><b>Product Description : </b></label>
            <label class="edlabelforimg" style="color:red; float: right;"><?php echo $nodeserr ?></label>
            <div class="justify-content-center align-items-center" style="border-radius: 5px; max-width: 100%;">
              <br />
              <textarea name="description" style="width: 100%;"><?php echo $_POST['description'] ?></textarea>
            </div>
          </div>
          <input type="submit" class="btn btn-outline-dark sbutton mt-5" name="submit" style=" float:right;" value="Save Changes">
          <a href = "ProductPage.php"><button type = "button" class = "btn btn-outline-dark sbutton mt-5" style = "float:right;">Cancel</button></a>
        </div>
      </form>
    </div>
    <script src="backend.js"></script>
</body>