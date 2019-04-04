<?php
if (! class_exists("DB")) {
    require_once dirname(__FILE__) . '/helper/DB.php';
}
include_once 'connector.php';
if (! isset($_SESSION)) {
    session_id("connector");
    session_start();
}
?>