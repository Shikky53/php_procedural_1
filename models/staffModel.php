<?php 

function findAllStaff() : array {

$staff = [];

$member1 = [
    "imagePath" => "https://i.pinimg.com/564x/3e/42/22/3e4222fda77d71cf20f6aa7983874233.jpg",
    "name" => "Dabi",
    "lastName" => "Heeroka",
    "post" => "Designer",
    "id" => 1
];
    
$member2 = [
    "imagePath" => "https://i.pinimg.com/originals/6b/f4/6c/6bf46c004806dad3f4fdbf0e4334e117.jpg",
    "name" => "Saiky",
    "lastName" => "Kusuo",
    "post" => "Developer Front-end",
    "id" => 2
];

$member3 = [
    "imagePath" => "https://bakabuzz.com/wp-content/uploads/2021/06/Satoru-Gojou-758x426.jpg",
    "name" => "Gojo",
    "lastName" => "Satoru",
    "post" => "Leader",
    "id" => 3
];

$member4 = [
    "imagePath" => "https://koreaboo-cdn.storage.googleapis.com/2017/08/Akise.Aru_.full_.879481.jpg",
    "name" => "Aru",
    "lastName" => "Akise",
    "post" => "Developer Back-end",
    "id" => 4
];

$staff[] = $member1;
$staff[] = $member2;
$staff[] = $member3;
$staff[] = $member4;

return $staff;

}

function findOneStaff(int $id) : ?array {
    
    $staff = findAllStaff();

    foreach($staff as $item)
    {
        if($item['id'] === $id){
            return $item;
        }
    }
    return null ;
}
    
?>