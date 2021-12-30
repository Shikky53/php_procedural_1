<?php

require("./controllers/produitControllers.php");

$id = intval($_GET['id']);

showProduct('id');

?>