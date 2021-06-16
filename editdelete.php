<?php
$namerr = "";
$iderr = "";
$pricerr = "";
$qtyerr = "";
$sameiderr = "";
$nodeserr = "";
$nocaterr = "";
if (!empty($_POST["formDelete"])) {
    deleteLine();
    header("Location: ProductPage.php");
} else if (!empty($_POST["Edit"])) {
    session_start();
    $editname = "";
    $editprice = "";
    $editid = "";
    $editqty = "";
    $editdes = "";
    $editcat = "";
    $file = file("Database.txt");
    $filesize = sizeof($file);
    for ($i = 0; $i < $filesize; $i++) {
        $filearr = explode(" ", $file[$i]);
        if ($filearr[2] == $_POST["Edit"]) {
            $editname = str_replace('|', ' ', $filearr[0]);
            $editprice = $filearr[1];
            $editid = $filearr[2];
            $editqty = $filearr[3];
            $editdes = str_replace('|', ' ', $filearr[4]);
            $editcat = $filearr[5];
            break;
        }
    }
    $_SESSION["oldid"] = $editid;
    require("EditPage.php");
} else if ($_POST["submit"] == "Save Changes") {
    session_start();
    if (preg_match("/^[a-zA-z]+$/", $_POST["productname"]) != 1) {
        $namerr = "Invalid product name format";
        include("EditPage.php");
    } else if (preg_match("/^\#[0-9]+$/", $_POST["productid"]) != 1) {
        $iderr = "Invalid product ID format";
        include("EditPage.php");
    } else if (preg_match("/^([1-9][0-9]*|0)(\.[0-9]{2})?$/", $_POST["productprice"]) != 1) {
        $pricerr = "Invalid product price format";
        include("EditPage.php");
    } else if (preg_match("/^[0-9]+$/", $_POST["productqty"]) != 1) {
        $qtyerr = "Invalid product quantity format";
        include("EditPage.php");
    } else if (empty($_POST['description'])) {
        $nodeserr = "No product description provided";
        include("EditPage.php");
    } else if (empty($_POST['category'])) {
        $nocaterr = "No category selected";
        include("EditPage.php");
    }else if (!move_uploaded_file($_FILES["myFile"]["tmp_name"], "images/" . $_FILES["myFile"]["name"])) {
        $noimgerr = "Invalid image";
        include("EditAddItemsPage.php");
    } else {
        $productname2 = str_replace(' ', '|', $_POST["productname"]);
        $productprice2 = $_POST["productprice"];
        $productid2 = $_POST["productid"];
        $productqty2 = $_POST["productqty"];
        $productdes2 = str_replace(' ', '|', $_POST['description']);
        $productcat2 = $_POST['category'];
        $productimg2 = $_FILES["myFile"]["name"];
        if (searchForID($productid2, $_SESSION["oldid"])) {
            $sameiderr = "Product with same ID already exists";
            require("EditPage.php");
            echo $productimg2;
        } else {
            $linearr2 = explode(" ", $productname2 . " " . $productprice2 . " " . $productid2 . " " . $productqty2 . " " . $productdes2 . " " . $productcat2 . " No " . "0.00 " . $productimg2);
            include("despagecreator.php");
            createDesPage($linearr2);
            editLine($productname2, $productprice2, $productid2, $productqty2, $productdes2, $productcat2, $productimg2);
            header("Location: ProductPage.php");
        }
    }
} else {
    header("Location: ProductPage.php");
}

function searchForID($idof, $previousid)
{
    $file2 = fopen("Database.txt", "r") or die("Unable to open file");
    while (!feof($file2)) {
        $currentline = explode(" ", fgets($file2));
        if ($currentline[2] == $idof && $currentline[2] != $previousid) {
            return true;
        }
    }
    return false;
}

function editLine($productname3, $productprice3, $productid3, $productqty3, $productdes3, $productcat3, $productimg3)
{
    $file = file("Database.txt");
    $filesize = sizeof($file);
    for ($i = 0; $i < $filesize; $i++) {
        $filearr = explode(" ", $file[$i]);
        if ($filearr[2] == $_SESSION["oldid"]) {
            $filearr[0] = $productname3;
            $filearr[1] = $productprice3;
            $filearr[2] = $productid3;
            $filearr[3] = $productqty3;
            $filearr[4] = $productdes3;
            $filearr[5] = $productcat3;
            $filearr[6] = "No";
            $filearr[7] = "0.00";
            $filearr[8] = $productimg3;
            $filearr[9] = $productname3 . ".php\n";
            $file[$i] = implode(" ", $filearr);
            break;
        }
    }
    $file = array_values($file);
    file_put_contents("Database.txt", implode($file));
}
function deleteLine(){
    $file = file("Database.txt");
    $filesize = sizeof($file);
    $allchecked = $_POST["productcheck"];
    for ($j = 0; $j < sizeof($allchecked); $j++) {
        for ($i = 0; $i < $filesize; $i++) {
            $filearr = explode(" ", $file[$i]);
            if ($filearr[2] == $allchecked[$j]) {
                unlink($filearr[0] . ".php");
                unset($file[$i]);
                break;
            }
        }
    }
    $file = array_values($file);
    file_put_contents("Database.txt", implode($file));
}
