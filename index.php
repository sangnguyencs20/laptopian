<?php
    include "./model/PDO.php";
    include "./model/product.php";
    include "./views/header.php";
    include "./model/category.php";
    $productList = getProductHomePage();
    $categoryList = getAllCategory();
    $top10Product = getTop10Product();
    if(isset($_GET['act']) && $_GET['act']){
        $act = $_GET['act'];
        switch ($act) {
            case 'about':
                include "views/about.php";
                break;
            case 'contact':
                include "views/contact.php";
                break;
            case 'productdetail':
                if (!isset($_GET['id']) || $_GET['id'] > 0) {
                    # code...
                    $sameCateProduct = getSameCateProduct($_GET['id']);
                    $productDetail = getOneProduct($_GET['id']);
                    include "views/productdetail.php";
                }
                else {
                    include "views/home.php";
                }
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
