<?php  
    $file_url = '../Model/Reyad_Resume.pdf';  
    header('Content-Type: application/octet-stream');  
    header("Content-Transfer-Encoding: Binary");   
    header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\"");  
    readfile($file_url);
?>  