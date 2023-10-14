<?php

class homePage{
    private $title;
    private $stylesheets;

    public function __construct() {
        $this->title = "HONGSAMUT";
        $this->stylesheets = [];
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function addStylesheet($stylesheet) {
        $this->stylesheets[] = $stylesheet;
    }

    public function renderHeader() {
        ob_start();
        ?>
        <!DOCTYPE html>
        <head>
            <title><?php echo $this->title; ?></title>
            <meta name="viewport" content="width=1920, height=1080, initial-scale=1">
            <?php foreach ($this->stylesheets as $stylesheet): ?>
                <link rel="stylesheet" href="<?php echo $stylesheet; ?>">
            <?php endforeach; ?>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
            <style>
                img {
                    width: 150px;
                    height: 180px;
                }
            </style>
        </head>
        <body>
        <?php
        return ob_get_clean();
    }

    public function include($file) {
        include $file;
    }
}