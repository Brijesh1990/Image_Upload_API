<?php
error_reporting(0);
    echo "<pre>";
    print_r($_FILES);
    error_reporting(9);
    if($_REQUEST['action'] == 'submit') {
        $ch = curl_init();
        $filePath = $_FILES['file_upl']['tmp_name'];
        $fileName = $_FILES['file_upl']['name'];
        $data = array('name' => 'Foo', 'file' => "@$filePath", 'fileName' =>$fileName);
        
        //and upload.php in http://www.restServiceHost.com/file3

        curl_setopt($ch, CURLOPT_URL, 'http://www.restServiceHost.com/file3/upload.php');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_exec($ch);
        curl_close($ch);
    }
?>

<form name="file_up" action="" method="POST" enctype="multipart/form-data">
Upload your file here
<input type="file" name="file_upl" id="file_upl"/>
<input type="submit" name="action" value="submit"/>
</form>