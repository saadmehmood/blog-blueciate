<?php

$mailStatus = 'error';
//if (isset($_POST['btnSubmit'])) {
    $filepath = "files/blueciate-bpms-solution.pdf";

header("Location: /" . $filepath);
    // Process download
    if(file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filepath));
        flush(); // Flush system output buffer
        readfile($filepath);
        header("Location: /" . $filepath);
    } else {
        http_response_code(404);
        die();
    }
//}

