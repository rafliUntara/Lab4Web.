<?php
$_mod = isset($_REQUEST['mod']) ? $_REQUEST['mod'] : 'home';
switch ($_mod) {
    case "home":
        require("home.php");
        break;
    case "about":
        require("about.php");
        break;
    default:
        require("home.php");
        break;
}
?>
