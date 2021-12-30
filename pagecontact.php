<?php

require("./models/staffModel.php");

require("./librairies/render.php");

ob_start();


$staff = findAllStaff();

render("contact",[
'staff' => $staff]);

?>