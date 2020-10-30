<?php require_once 'top.php'; ?>
<h3>Lisää uusi </h3>
<form action="save.php" method="post"> 
    <div>
        <label>Kuvaus</label>
    </div>
    <textarea name="task"></textarea>
    <div>
        <button type="button" onclick="window.location.href='index.php';">Peruuta</button>
        <button>Tallenna</button>
    </div>
</form>

<?php require_once 'bottom.php';?>
