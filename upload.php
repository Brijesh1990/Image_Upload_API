<?php
    echo "<pre>";
    echo 'in upload.php<br/>';
    print_r($_FILES);
    print_r($_REQUEST);
    move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_REQUEST["fileName"]);
?>
