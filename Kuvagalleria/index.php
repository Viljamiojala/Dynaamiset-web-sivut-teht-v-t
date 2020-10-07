
<?php require_once 'top.php';?>
<?php
$folder = 'uploads';
$handle = opendir($folder);
if($handle) {
    print "<div id='images'></div>";
    print "<div class='card-group'>";
    print "<div class='row'>";
    while(false !== ($file = readdir($handle))){
        $file_ending = pathinfo($file,PATHINFO_EXTENSION);
        if(strtoupper($file_ending) == 'PNG' || strtoupper($file_ending) == 'JPG' || strtoupper($file_ending) == 'JPEG'){
            $path = $folder. '/' . $file;
            $thumbs_path = $folder .'/thumbs/' . $file;
            ?>
            <div class="card p-2 col-lg-3 col-md-4 cik-sm-6">
                <a data-fancybox="gallery" href="<?php print $path;?>">
                <img class="card-img-top" src="<?php print $thumbs_path;?>">
                </a>
                <div class="card-body">
                    <p class="card-text"><?php print $file; ?></P>
                </div>
            </div>
            <?php


        }
    }
}
?>
<?php require_once 'bottom.php';?>
