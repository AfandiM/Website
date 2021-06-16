<html lang="en">
<head>
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
  <link rel="stylesheet" type="text/css" href="../css/stylesheet2.css">

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
      <div class="col-sm-8 text-left" style="float:left;">
        <div class="topdinc">
          <h1 style="margin-bottom:1.5cm;">Products List</h1>
          <form action='editdelete.php' method='POST' id="editform">
            <table id="Tables1" class="table table-light pptable1">
              <thead>
                <tr>
                  <th class="removeline">
                    <button type="button" class="btn btn-outline-dark sbutton">Search</button>&emsp;<input type="text" placeholder=" Search for products" class="rounded slabel">
                  </th>
                  <th>
                  </th>
                  <th>
                  </th>
                  <th class="removeline">
                    <input type="submit" class="btn btn-outline-dark sbutton mr-3" name="formDelete" value="Delete">
                    <a href="productadder.php"><button type="button" class="btn btn-outline-dark sbutton">Add Product</button></a>
                  </th>
                </tr>
              </thead>
            </table>
            <table id="Tables1" class="table table-light table-hover pptable1">
              <thead id="Tables1H">
                <tr class="antihover">
                  <th class="ppitemsh" style="width:135px;"><input type="checkbox"></th>
                  <th class="ppitemsh" style="width:200px;"></th>
                  <th class="ppitemsh" style="width:200px">Product</th>
                  <th class="ppitemsh" style="width:200px">ID</th>
                  <th class="ppitemsh" style="width:200px">Price</th>
                  <th class="ppitemsh" style="width:165px">Inventory</th>
                  <th class="ppitemsh" style="width:165px;"></th>
                </tr>
              </thead>
              <tbody id="thebody">
                <?php
                
                $file = fopen("Database.txt", "r");
                while (!feof($file)) {
                  $line = fgets($file);
                  if ($line == "") {
                    continue;
                  }
                  $linearr = explode(" ", $line);
                  $namer = str_replace('|', ' ', $linearr[0]);
                  $pricer = $linearr[1];
                  $idr = $linearr[2];
                  $qtyr = $linearr[3];
                  $imgsrc = "images/" . $linearr[8];
                  echo "<tr> 
                        <td class='ppitems'><input type='checkbox' name = 'productcheck[]' value = '$idr'></td>
                        <td class='ppitems'><img class='pimage' src='$imgsrc'></td>
                        <td class='ppitems'>$namer</td>
                        <td class='ppitems'>$idr</td>
                        <td class='ppitems'>$pricer</td>
                        <td class='ppitems'>$qtyr</td>
                        <td class='ppitems'><button type = 'submit' form = 'editform' class='btn btn-outline-dark sbutton' name = 'Edit' value = '$idr'>Edit</td>
                      </tr>";
                }
                fclose($file);
                ?>
              </tbody>
            </table>
        </div>
      </div>
      </form>
      <script src="backend.js"></script>
      <script type="text/javascript">
        if (localStorage.getItem("name") != null) {
          addProductPagef();
        }
      </script>
    </div>
  </div>
  <footer id="footer"></footer>
</body>

</html>