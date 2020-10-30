<?php require_once 'top.php';?>
<h3>Tallenna</h3>
<?php
try{
    $description = filter_input(INPUT_POST, 'task', FILTER_SANITIZE_STRING);
    $query = $db->prepare("INSERT INTO task (description) VALUES (:description);");
    $query->bindValue(':description',$description,PDO::PARAM_STR);
    $query->execute();
    print "<p>Tehtävä lisätty!</p>";
}
catch (PDOException $pdoex) {
    print "<p>Tietojen tallennus epäonnistui." . $pdoex->getMessage() . "</p>";
}
?>
<a href="index.php">Tehtävälistaan</a>
<?php require_once 'bottom.php';?>