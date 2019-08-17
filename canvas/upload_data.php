<?php

//session_start();


    if (isset($_POST['hidden_data'])) {

        $upload_dir = "../canvas/pic/";
        $img = $_POST['hidden_data'];
        $img = str_replace('data:image/png;base64,', '', $img);
        $img = str_replace(' ', '+', $img);
        $data = base64_decode($img);
        $_SESSION['id'] = $upload_dir . mktime();
        $session = $_SESSION['id'] . ".png";
        $success = file_put_contents($session, $data);

    }
echo print_r($_SESSION , TRUE);


?>

