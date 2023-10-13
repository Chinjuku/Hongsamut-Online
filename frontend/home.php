<?php
//เรียก header
include 'layout/recommended.php';

$page = new recommended();
$page->setTitle("HONGSAMUT");
$page->addStylesheet("css/home.css");
$page->addStylesheet("plugins/bootstrap/css/bootstrap.min.css");

// Include navigation and sidebar
$page->include('layout/navbar.php');
$page->include('layout/sidebar.php');

echo $page->renderHeader();
?>

<div class="main">
    <div class="mid">
        <div class="greenbg"></div>
        <div class="head">
            <div class="newarrival"><i>NEW ARRIVALS</i></div>
        </div>
        <div class="container">
            <?php
            $page->includeNewBooks();
            ?>
        </div>
        <br>
    </div>
</div>
