<?php
require_once("includes/header.php");

if(!isset($_GET["id"])) {
    ErrorMessage::show("no id passes to page");
}

$preview = new PreviewProvider($con, $userLoggedIn);
echo $preview->createCategoryPreviewVideo($_GET["id"]);

$containers = new CategoryContainers($con, $userLoggedIn);
echo $containers->showCategory($_GET["id"]);
?>