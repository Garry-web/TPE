<?php
if (!empty($_SESSION["idrole"]) && $_SESSION["idrole"] == 2) {
    header("location:admin/index.php");
} else {
    header("location:membre/index.php");
}
