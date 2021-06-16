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
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">

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
            <div class="col-sm-7 text-center mt-5" style="float:left;">
                <div class="row-6-md" style="margin-top:3cm; min-width: 20%;">
                    <form action="" method="POST">
                        <h1 style="margin-bottom:1.5cm;">Add a new User</h1>
                        <table class="table table-light" id="AddUserTable">
                            <tbody>
                                <tr>
                                    <td class="ppitems"><input type="text" name="username" id="username" placeholder="Username" style="width:70%;" value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>"></td>
                                    <td class="ppitems"><input type="text" name="email" id="email" placeholder="Email" style="width:70%;" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"></td>
                                    <td class="ppitems"><input type="text" name="Password" id="Password" placeholder="Password" style="width:70%;" value="<?php if (isset($_POST['Password'])) echo $_POST['Password']; ?>"></td>
                                    <td class="ppitems"><input type="text" name="verifyPassword" id="verifyPassword" placeholder="VerifyPassword" value="<?php if (isset($_POST['verifyPassword'])) echo $_POST['verifyPassword']; ?>"></td>
                                    <td class="ppitems" style = "color:red;"><?php echo $sameemail ?></td>
                                </tr>
                                <tr>
                                    <td class="ppitems" style="color:red;"><?php echo $usernameerr ?></td>
                                    <td class="ppitems" style="color:red;"><?php echo $emailerr ?></td>
                                    <td class="ppitems" style="color:red;"><?php echo $passerr ?></td>
                                    <td class="ppitems" style="color:red;"><?php echo $verpasserr ?></td>
                                </tr>
                            </tbody>
                        </table>
                </div>
                <input type="submit" class="btn btn-outline-dark sbutton mt-5" name="save" style=" float:right;" value="Save">
            </div>
            </form>
        </div>
        <script src="backend.js"></script>

    </div>
</body>

</html>