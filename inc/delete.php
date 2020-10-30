<?php require_once 'top.php';?>
<h3>Poista tehtäviä</h3>
<?php 
$where = 0;
try {
    $idt = filter_input(INPUT_POST,'id',FILTER_DEFAULT,FILTER_REQUIRE_ARRAY);

    if($idt) {
        foreach ( $idt as $id) {
            if(is_numeric($id)) {
                if(strlen($where) > 0) {
                    $where .= " OR ";
                }
                $where .= "id = $id";
            }
        }
    }

    if(strlen($where) > 0 ) {
        $sql = "DELETE FROM task WHERE $where;";
        $query = $db->query($sql);
        $query->execute();
    }
    print "<p>Valitut tehtävät poistettu listalta!<p/>";
}
catch(PDOException $pdoex) {
    print "<p>Tietojen päivittäminen epäonnistui. " .$pdoes->getmessage() ."</p>";
}
?>
<a href="index.php">Tehtävälistaan</a>
<?php require_once 'bottom.php';?>