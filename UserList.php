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

<body>
    <div class="container-fluid text-center;">
        <div class="row content">
            <div class="col-sm-2 text-center backendnav" style="margin-top:1.5in; float:left">
                <p><a href="index.php">Home Page</a></p>
                <p><a href="ProductPage.php">Product List</a></p>
                <p><a href="UserList.php">User List</a></p>
                <p><a href="ordersList.php">Order List</a></p>
            </div>
            <div class="col-sm-7 text-left">
                <div class="topdinc">
                    <h1>User List</h1>
                    <form action="usereditdelete.php" method="POST">
                        <table id="Tables2" class="table table-light table-hover">
                            <thead id="Tables2H">
                                <tr class="antihover">
                                    <th class="ppitemsh"></th>
                                    <th class="ppitemsh">
                                        <p>Username</p>
                                    </th>
                                    <th class="ppitemsh">Email</th>
                                    <th class="ppitemsh"></th>
                                    <th class="ppitemsh"></th>
                                </tr>
                            </thead>
                            <tbody id="thebody">
                                <?php
                                $file = fopen("UserStorage.txt", "r");
                                while (!feof($file)) {
                                    $line = fgets($file);
                                    if ($line == "") {
                                        continue;
                                    }
                                    $linearr = explode(" ", $line);
                                    $usernamer = $linearr[0];
                                    $emailr = $linearr[1];
                                    echo "<tr>
                                    <td class='ppitems1'><i class='fa fa-user-circle fa-3x'></i></td>
                                    <td class='ppitems1'>$usernamer</td>
                                    <td class='ppitems1'>$emailr</td>
                                    <td class='ppitems1'><input type = 'submit' name = 'edit' class='btn btn-outline-dark sbutton' value = 'Edit'></td>
                                    <td class='ppitems1'><button type = 'submit' name = 'delete' class='btn btn-outline-dark sbutton' value = '$emailr'>Delete</td>
                                </tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                        <a href="useradder.php"><button type="button" class="btn btn-outline-dark" style="float: right; margin-top:10px;">Add User</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="backend.js"></script>
</body>

</html>