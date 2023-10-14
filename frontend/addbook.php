<?php
    include './layout/navbar.php';
    include './managebook/showManageBook.php';
    $manage = new showManageBook();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>HONGSAMUT</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/addbook.css">
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <section class="add-books">
        <h1 class="title">ADD NEW BOOK</h1>
        <?php
            $manage->addBook();
        ?>
    </section>

    <!-- <script src="javascript/addbook.js"></script> -->
</body>
</html>