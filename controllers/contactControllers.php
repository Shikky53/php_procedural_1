<?php

require("./models/staffModel.php");

require("./librairies/render.php");

function allContact() {
    $staff = findAllStaff();

    render("contact", [
        'staff' => $staff
    ]);
}

function oneContact(int $id)
{
    $staff = findOneStaff($id);

    render("staff",[
        "staff" => $staff
    ]);
}

?>