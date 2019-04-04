<?php
if (session_status() == PHP_SESSION_NONE) {
    session_id("connector");
    session_start();
}

if (isset($_SESSION['authorized']) && ! empty($_SESSION['authorized'])) {
    if ($_SESSION['authorized'] != true) {
        header('Location: admin_login.php');
        exit();
    }
}
if (isset($_REQUEST['option'])) {
    header('Location: admin_login.php');
    exit();
}

?>
