<?php
//เรียก header
include './recommended/recommended.php';
include './recommended/homePage.php';

$page = new recommended();
$homepage = new homePage();

$homepage->setTitle("HONGSAMUT");
$homepage->addStylesheet("css/home.css");
$homepage->addStylesheet("plugins/bootstrap/css/bootstrap.min.css");

// Include navigation and sidebar
$homepage->include('layout/navbar.php');
$homepage->include('layout/sidebar.php');

echo $homepage->renderHeader();
?>

<div class="main">
    <div class="mid">
        <div class="greenbg"></div>
        <div class="head">
            <div class="newarrival"><i>NEW ARRIVALS</i></div>
        </div>
        <div class="container">
            <?php
                $page->NewBook();
            ?>
        </div>
        <br>
    </div>
</div>
