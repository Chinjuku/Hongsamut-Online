<?php
    // session_start();
    include './layout/navbar.php';
    include './dashboard/showdashboard.php';
    include './database/database.php';
    $dashpage = new showDashboard($conn);
?>

<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HONGSAMUT</title>
        <link rel="stylesheet" href="./css/historypage.css">
        <link rel="preconnect" href="https://fonts.googleapis.com%22%3E/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Krub:wght@300;400;500;600;700&family=Mitr:wght@200;300;400;500;600;700&display=swap" 
        rel="stylesheet">
        <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
            data-tag="font"
        />
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
            data-tag="font"
        />
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
            data-tag="font"
        />
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Mitr:wght@200;300;400;500;600;700&amp;display=swap"
            data-tag="font"
        />
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Mitr:wght@200;300;400;500;600;700&amp;display=swap"
            data-tag="font"
        />
    </head>
    <body>
        
        <div class="main">
            <div class="mid">
                <?php
                    include './dashboard/historynav.php';
                ?>
                <div class="borrow"><h2 style="font-size: 50px;text-align: center;">History of Borrow</h2></div>
                    <table class="table2">
                        <thead>
                            <tr>
                            <th>USERNAME</th>
                            <th>TITLE</th>
                            <th>CATEGORY</th>
                            <th>STARTED</th>
                            <th>FINISHED</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $dashpage->viewBorrowHistory();
                            ?>
                        </tbody>
                </table>
            </div>

        </div>
</body>