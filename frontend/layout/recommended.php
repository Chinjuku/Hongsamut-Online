<?php
// ทำเป็น Recommanded ตรงนี้
class recommended {
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
    
    public function includeNewBooks() {
        include '../backend/database.php';

        $sql = "SELECT * from books order by book_id desc";
        $result = $conn->query($sql);
        $num = 1;
        while ($row = $result->fetch_assoc()) {
            if ($num <= 8) {
                echo '<div class="nabox">';
                echo '<img class="pic" src="' . $row['imgsrc'] . '" alt="Image">', '<br>';
                echo '<p class="bookname">' . $row['book_name'] . '</p>';
                echo '<p>' . $row['book_owner'] . '</p>';
                echo '</div>';
                $num++;
            } else {
                break;
            }
        }
    }
}
