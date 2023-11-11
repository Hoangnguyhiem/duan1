<?php
include "view/header.php";

if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "chinhsach":
            include "view/chinhsach.php";
            break;
        case "gioithieu":
            include "view/gioithieu.php";
            break;
        case "hoidap":
            include "view/hoidap.php";
            break;
        case "lienhe":
            include "view/lienhe.php";
            break;
        case "lichchieu":
            include "view/lichchieu.php";
            break;           
    }
} else {
    include "view/home.php";
}



include "view/footer.php";
?>