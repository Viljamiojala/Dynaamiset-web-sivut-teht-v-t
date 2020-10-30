<?php
$db = NULL;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tehtävälista</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
<div id="content">
<?php
try{
    $db = new PDO('mysql:host=localhost;dbname=tehtävälista;charset-utf8','root','');
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $pdoex) {
    print "<p>Tietokannan avaus epäonnistui. " . $pdoex->getMessage() . "!</p>";
 }
?>
