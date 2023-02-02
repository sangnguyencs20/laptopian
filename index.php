<?php
include "./model/PDO.php";
include "./model/product.php";
include "./views/header.php";
include "./model/category.php";

$productList = getProductHomePage();
$categoryList = getAllCategory();
$top10Product = getTop10Product();

if (isset($_GET['act']) && $_GET['act']) {
    $act = $_GET['act'];

    switch ($act) {
        case 'product':
            $keyword = "";
            $cateId = 0;

            if (isset($_POST['keyword']) && $_POST['keyword']) {
                $keyword = $_POST['keyword'];
            }

            if (isset($_GET['cateId']) && $_GET['cateId']) {
                $cateId = $_GET['cateId'];
            }
            $productList = getAllProduct($keyword, $cateId);
            $cateName = getCateNameByCateId($cateId);
            include "views/product.php";
        case 'about':
            include "views/about.php";
            break;
        case 'contact':
            include "views/contact.php";
            break;
        case 'productdetail':
            if (!isset($_GET['id']) || $_GET['id']) {
                # code...
                $sameCateProduct = getSameCateProduct($_GET['id']);
                $productDetail = getOneProduct($_GET['id']);
                include "views/productdetail.php";
            } else {
                include "views/home.php";
            }
            break;
        default:
            include "views/home.php";
            break;
    }
} else {
    include "views/home.php";
}
include "views/footer.php";
