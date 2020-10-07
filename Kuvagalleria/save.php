<?php
include 'lib/imageResize.php';
use \Gumlet\ImageResize;
?>
<?php require_once 'top.php';?>
<?php 
    if($_FILES['file']['error'] === UPLOAD_ERR_OK){
        if($_FILES['file']['size'] > 0){
        $type = $_FILES['file']['type'];
        if($type === 'image/png' || $type === 'image/jpg' || $type === 'image/jpeg') {
            $file = basename($_FILES['file']['name']);
            $folder = 'uploads/';
            if(move_uploaded_file($_FILES['file']['tmp_name'],"$folder$file")) {
                try{
                    $image = new ImageResize("$folder$file");
                    $image->resizeToWidth(150);
                    $image->save($folder . 'thumbs/' . $file);
                    print "<p>Kuva on tallenettu palvelemille!</p>";
            }
            catch(Exception $ex) {
                print "<p>Kuvan tallennuksessa tapahtui virhe!" . $ex->get_message ."</p>";
            }
        }    
        else { print "<p>Kuvan tallennuksessa tapahtui virhe!</p>";
    }
}
        else {
                print "<p>Voit ladata vain png- ja jpg-kuvia!</p>";
            }
    }
        else {
                print "<p>Tiedoston koko on 0!</p>";
        }   
    }
        else {
            print "<p>Virhe kuvan lataamisessa! virhekoodi: " . $_FILES['file']['error']."</p>";
        }   
    ?>
    <a href="index.php">Selaa kuvia</a>  
<?php require_once 'bottom.php';?>    
