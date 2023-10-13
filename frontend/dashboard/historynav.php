<?php
    include './showhistory.php';
    $show = new ShowHistory();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .select{
            align-items: center;
            align-content: center;
            text-align: center;
            margin: 30px 30px;
            padding: 30px;
            height: auto;
            justify-content: space-around;

        }
        .navhistory {
            color:white;
            text-decoration: none;
            margin: 0 -10px;
            padding: 1rem 3%;
        }
        .bor{
            border-radius: 50px 0 0 50px;
            background-color: #657661;
            background-color: #2e2a2a;
        }
        .pay{
            background-color: #2e2a2a;
            border-left:1px solid white;
            border-radius: 0 50px 50px 0;
            
        }
        .bor:hover{
            background-color: #657661;
        }
        .pay:hover{
            
            background-color: #657661;
        }
        .pay::after{
            
            background-color: #2e2a2a;
        }
    </style>
</head>
<body>
            <div class="select">
                <button id="toggleButton">VIEW BORROW</button>
                <div class="hidden-component" id="componentToToggle">
                    <?php
                        $show->showBorrowHistory();
                    ?>
                </div>
                <script>
                    document.getElementById('toggleButton').addEventListener('click', function () {
                        var component = document.getElementById('componentToToggle');
                        if (component.style.display === 'none' || component.style.display === '') {
                            component.style.display = 'block';
                        } else {
                            component.style.display = 'none';
                        }
                    });
                </script>
                <a href="historyBorrow.php" class="navhistory bor">View BORROW</a>
                <a href="historypayment.php"class="navhistory pay">View PAYMENT</a>
            </div>
</body>
</html>