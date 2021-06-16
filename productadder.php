<?php
$namerr = "";
$iderr = "";
$pricerr = "";
$qtyerr = "";
$sameiderr = "";
$nodeserr = "";
$nocaterr = "";
$noimgerr = "";
if ($_POST["submit"] == "Save") {
    if (preg_match("/^[a-zA-z]+$/", $_POST["productname"]) != 1) {
        $namerr = "Invalid product name format";
        include("EditAddItemsPage.php");
    } else if (preg_match("/^\#[0-9]+$/", $_POST["productid"]) != 1) {
        $iderr = "Invalid product ID format";
        include("EditAddItemsPage.php");
    } else if (preg_match("/^([1-9][0-9]*|0)(\.[0-9]{2})?$/", $_POST["productprice"]) != 1) {
        $pricerr = "Invalid product price format";
        include("EditAddItemsPage.php");
    } else if (preg_match("/^[0-9]+$/", $_POST["productqty"]) != 1) {
        $qtyerr = "Invalid product quantity format";
        include("EditAddItemsPage.php");
    } else if (empty($_POST['description'])) {
        $nodeserr = "No product description provided";
        include("EditAddItemsPage.php");
    } else if (empty($_POST['category'])) {
        $nocaterr = "No category selected";
        include("EditAddItemsPage.php");
    } else if (!move_uploaded_file($_FILES["myFile"]["tmp_name"], "images/" . $_FILES["myFile"]["name"])) {
        $noimgerr = "Invalid image";
        include("EditAddItemsPage.php");
    } else {
        $productname = str_replace(' ', '|', $_POST["productname"]);
        $productprice = $_POST["productprice"];
        $productid = $_POST["productid"];
        $productqty = $_POST["productqty"];
        $productdes = str_replace(' ', '|', $_POST['description']);
        $productcat = $_POST['category'];
        $productimg = $_FILES["myFile"]["name"];
        if (searchForID($productid)) {
            $sameiderr = "Product with same ID already exists";
            require("EditAddItemsPage.php");
        } else {
            if (!file_exists($productname)) {
                $theline = explode(" ", $productname . " " . $productprice . " " . $productid . " " . $productqty . " " . $productdes . " " . $productcat . " " . "No" . " 0.00 " . $productimg . " placeholder" . "\n");
                include("despagecreator.php");
                createDesPage($theline);
            }
            $file = fopen("Database.txt", "a") or die("Unable to open file");
            fwrite($file, $productname . " " . $productprice . " " . $productid . " " . $productqty . " " . $productdes . " " . $productcat . " " . "No" . " 0.00 " . $productimg . " placeholder" . "\n");
            fclose($file);
            header("Location: ProductPage.php");
        }
    }
} else {
    session_start();
    require("EditAddItemsPage.php");
}
function searchForID($idof)
{
    $file2 = fopen("Database.txt", "r") or die("Unable to open file");
    while (!feof($file2)) {
        $currentid = explode(" ", fgets($file2));
        if ($currentid[2] == $idof) {
            fclose($file2);
            return true;
        }
    }
    fclose($file2);
    return false;
}
