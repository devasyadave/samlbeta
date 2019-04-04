<?php
use MiniOrange\Helper\DB;
if (! isset($_SESSION) and isset($_REQUEST['option'])) {
    session_id("connector");
    session_start();
}
?>
