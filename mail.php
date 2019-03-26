<?php
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$company = $_POST["company"];
$message = $_POST["message"];


$EmailTo = "kontakt@fajnymebel.pl";
$Subject = "Nowa wiadomość od " . $email;

// prepare email body text
$Fields .= "Imię: ";
$Fields .= $name;
$Fields .= "\n";

$Fields.= "Email: ";
$Fields .= $email;
$Fields .= "\n";

$Fields .= "Telefon: ";
$Fields .= $phone;
$Fields .= "\n";

$Fields .= "Firma: ";
$Fields .= $company;
$Fields .= "\n";

$Fields .= "Wiadomość: ";
$Fields .= $message;
$Fields .= "\n";


// send email
$success = mail($EmailTo,  $Subject,  $Fields, "Od:".$email);

