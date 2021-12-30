<?php

require("./controllers/contactControllers.php");

$id = (int)$_GET['id'];

oneContact($id);

?>