<?php
    include "./model/PDO.php";
    include "./model/product.php";
    include "./views/header.php";

    $productList = getProductHomePage();

    if(isset($_GET['act']) && $_GET['act']){
        $act = $_GET['act'];
        switch ($act) {
            case 'about':
                include "views/about.php";
                break;
            case 'contact':
                include "views/contact.php";
                break;
            default:
                include "views/home.php";
                break;
        }
    }
    else{
        include "views/home.php";
    }
    include "views/footer.php";
?>