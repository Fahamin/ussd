<?php

$sessionID = $_POST["sessionID"];
$serviceCode = $_POST["serviceCode"];
$phonNumber == $_POST["phoneNumber"];
$text = $_POST["text"];


if($text == ""){
    //this is the first request star the response with con
    $response = "What you want to check\n";
    $response = "1. My Account Number\n";
    $response = "2.My phone NUMBER";
}else if($text == '1'){
    //first level response
    $response = "chose Account information\n";
    $response = "1.  Account Number\n";
    $response = "2. Account Balance ";
}else if($text == '2'){
    //first level response
   
    $response = "Your phone Number is " .$phonNumber;
    }else if($text == '1*1'){
        //first level response
       $accountNumber = "Ac4589";
        $response = "Your Account Number is " .$accountNumber;
        }else if($text == '1*2'){
            //first level response
           $balance = "500";
            $response = "Your balance Number is " .$balance;
            }
 header('Content-type; text/plain');
 echo $response;           
