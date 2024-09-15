<?php

//  Query For Seller ---------------------------------------------------------

$query = "SELECT * FROM `products` WHERE title  LIKE '%{$myquery}%'";

$mysl= $data[ 'mysaller' ];
$sl_lenght = count( $mysl );

if ( $sl_lenght != null ) {
    $query .= "  AND seller IN ('" . implode( "', '", $mysl ) . "') ";

}

// Query for rateing --------------------------------------------------------------------------------

$myrt = $data[ 'myrate' ];

$rt_lenght = count( $myrt );

if ( $rt_lenght != null ) {

    $query .= "  AND rateing IN ('" . implode( "', '", $myrt ) . "') ";

}

// Query for Price --------------------------------------------------------------------------------

$mypr = $data[ 'myprice' ];

$pr_lenght = count( $mypr );

if ( $pr_lenght != null ) {

   
    $query .= " AND price IN (SELECT price FROM `products` WHERE  price BETWEEN 0 AND ('" . implode( "', '", $mypr ) . "') ) ";
}

// Query for Color --------------------------------------------------------------------------------

$mycl = $data[ 'mycolor' ];

$cl_lenght = count( $mycl );

if ( $cl_lenght != null ) {

    $query .= "  AND colors IN ('" . implode( "', '", $mycl ) . "') ";

}



