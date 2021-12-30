<?php

function formatPriceEuro(int $price) : string
{
    $priceInEuro = $price / 100 ;

    $priceInEuroFormated = number_format($priceInEuro,2,","," ");

    return $priceInEuroFormated . '€';
}

?>