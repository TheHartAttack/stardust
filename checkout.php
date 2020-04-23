<?php

    require_once("../../../wp-load.php");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $town = $_POST['town'];
    $county = $_POST['county'];
    $postcode = $_POST['postcode'];
    $basket = $_POST['basket'];
    $tickets = json_decode($_POST['basket']);

    $subject = 'Stardust Festival Ticket Order Confirmation';
    $message = 'Thank you for visiting the Stardust Festival tickets page! Unfortunately this is not a real festival (just a web development project!), so your details have not been saved and your card has not been charged.';
    $headers = array('Content-Type: text/html; charset=UTF-8', 'From: Stardust Festival <stardust@danhart.uk>');

    $mail = wp_mail($email, $subject, $message, $headers);

    if ($mail){
        echo json_encode(array(
            "status" => 1,
            "message" => 'Email sent.',
        ));
    } else {
        echo json_encode(array(
            "status" => 0,
            "message" => 'Email not sent.',
        ));
    }
    
?>