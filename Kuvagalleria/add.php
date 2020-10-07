
    <?php require_once 'top.php';?>
    <form action="save.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="file">Tiedosto</label>
            <input type="file" class="form-control" id="file" name="file">
            <button class="btn btn-primary">lataa</button>
        </div>
    </form>
    <a href="index.php">Selaa kuvia</a>  
    <?php require_once 'bottom.php';?>  
