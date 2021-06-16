<!--take form info, appropriate message for existing user, non-existing user and admin-->
<?php
    $username = "";
    $type = "";
    $page_title = "Login";
    include("header.php");
    if (isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
    }
    $userfile = fopen("UserStorage.txt", "a+") or die("Unable to open file!");
    $match = false;
    $type;
    while(!feof($userfile))
    {
        $line = fgets($userfile);
        $userinfo = explode(" ", $line);
        if(strcmp($email, $userinfo[1]) == 0 && strcmp($password, $userinfo[2]) == 0) {
            $match = true;
            $username = $userinfo[0];
            $type = $userinfo[3];
        }
    }
    if(!$match){
        //THIS USER DOES NOT EXIST - TELL THEM TO MAKE AN ACCOUNT
        echo '<script type="text/javaScript">alert("This account does not exist! Please consider creating a new account.");window.location="P6_signupPage.php";</script>';
        /*header("Location: P6_signupPage.php");*/
    }
    else{
        //CHECK IF USER IS ADMIN
        if(strcmp($type, "admin\n") == 0){
            echo '<script type="text/javaScript">alert("You have signed in as admin");window.location="Backstoremain.html"</script>';
        }
        else{
            echo '<script type="text/javaScript">alert("Welcome back '. $username .'!");';
            session_start();
            $_SESSION['loggedin'] == true;
            $_SESSION['user'] == $username;
            header("Location: index.php");
        }
    }
    fclose($userfile);
    include('footer.php');
?>