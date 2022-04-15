<?php


session_start();

$conn = mysqli_connect(
    '127.0.0.1:3308',
    'root',
    '',
    'bd_php_crud'
);


// if(isset($conn)){
//     echo "DB's connected";
//  }
// ?>