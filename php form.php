<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Display Input Information</title>
</head>
<body>
<?php

if(isset($_POST["Submit-button"]))
{
$firstName=$_POST["Firstname"];
echo "firstName :".$firstName."</br>";
$lastName=$_POST["last-name"];
echo "lastName :".$lastName."</br>";
$Email=$_POST["email1"];
echo "Email :".$Email."</br>";


$City=$_POST["city1"];
echo "City :".$City."</br>";

$Birthday=$_POST["birthday1"];
echo "Birthday :".$Birthday."</br>";
$Age=$_POST["age1"];
echo "Age :".$Age."</br>";

$Gender=$_POST["gender1"];
echo "Gender :".$Gender."</br>";

$Choose=$_POST["choose"];
echo "Choose :".$Choose."</br>";

$ID =$_POST["id1"];
echo "ID :".$ID."</br>";

$Password =$_POST["pw"];
echo "Password :".$Password."</br>";



$select =$_POST["taskOption"];
echo "select :".$select."</br>";


$select2 =$_POST["taskOption2"];
echo "programming skills:".$select2."</br>";


}
?>
</body>
</html>