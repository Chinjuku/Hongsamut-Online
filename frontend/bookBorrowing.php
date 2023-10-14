<?php
    // session_start();
    include './layout/navbar.php';
    include './bookborrowing/showBookBorrowing.php';
    $showborrow = new showBookBorrowing();
?>

<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HONGSAMUT</title>
        <link rel="stylesheet" href="css/backpack.css">
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
        <?php
            if ($_SESSION['user_id'] == NULL) {
                echo '<script>window.location.href = "login.php";</script>';
            }
        ?>
        <div class="main">
            <div class="mid">
                <div class="mybackpack">MY BACKPACK</div>
                <!-- <div class="mybackpackdes">my borrowing books!</div> -->
                <table class="table2">
                    <thead>
                        <tr>
                        <th>COVER</th>
                        <th>TITLE</th>
                        <th>CATEGORY</th>
                        <th>STARTED</th>
                        <th>FINISHED</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php
                                $showborrow->viewBorrowing();
                            ?>
                    </tbody>

                    
                </table>
                <hr>

            <div class="bottombar">
                <div class="container">
                    <div class="borrowing">BORROWING
                        <?php
                            $showborrow->countBorrowing();
                        ?>
                    </div> 
                </div>
                
            </div>
        </div>    

    </body>
</html>