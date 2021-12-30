<?php

require("./models/productModel.php");

require("./librairies/formatPriceToEuro.php");

require("./librairies/render.php");

function home() {

    $products = findAllProducts();

    render("accueil",[
    'products' => $products]);

}



?>