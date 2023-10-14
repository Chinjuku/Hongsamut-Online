<?php
    session_start();
    error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="preconnect" href="https://fonts.googleapis.com%22%3E/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Krub:wght@300;400;500;600;700&family=Mitr:wght@200;300;400;500;600;700&display=swap" 
        rel="stylesheet">
        <link rel="stylesheet" href="../css/navbar.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <title>Document</title>

    </head>
    <style>
        *{
    margin: 0%;
    padding: 0%;
    box-sizing: border-box;
    /* font-family: "Poppings", sans-serif; */
    font-family: Mitr;
}
/* body{ */
    /* background-color: #FDF5D0; */
/* } */
.menubar a::before,.menubar a::after {
    content: '';
    position: absolute;
    width: 100%;

}
.menubar a::before {
    background-color: #FBFCF8;
    height: 3px;
    bottom: 3px;
    transform-origin: 100% 50%;
    transform: scaleX(0);
    transition: transform .3s cubic-bezier(0.76, 0, 0.24, 1);
}
.menubar a:hover::before {
    transform-origin: 0% 50%;
    transform: scaleX(1);
}
.menubar a:hover::after {
    transform: translate3d(0, 0, 0);
}

.header{
    position: fixed;
    display: flex;
    background-color: #2D342C;
    justify-content: space-between;
    align-items: center;
    top: 0;
    left: 0;
    width: 100%;
    color: #eaeaea;
    padding: 1.3rem 10%;
    z-index: 100;
}
.header::before{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #2D342C;
    z-index: -1;
}
.menubar{
    padding-right: 0%;
}
.menubar a{
    position: relative;
    text-decoration: none;
    color: #FBFCF8;
    font-size: 1.1rem;
    font-weight: 500;
    margin-left: 3rem;
}
.logo a{
    text-decoration: none;
    color: #FBFCF8;
    align-items: center;
    padding: 1px 20px;
    transition: 0.3s;
}
#check{
    display: none;

}
#close-icon{
    font-size: 2rem;
}
.icon{
    position: absolute;
    right: 5%;
    font-size: 2.8rem;
    color: white;
    cursor: pointer;
    display: none;
}
@media (max-width:1000px){
    .header{
        padding: 1.3rem 5%;
    }
}
@media (max-width:980px){
    .icon{
        display:
        inline-flex;
    }
    #check:checked~.icon #menu-icon{
        display: none;
    }
    #check:checked~.icon #close-icon{
        display: block;
    }
    .icon #close-icon{
        display: none;
    }
    .menubar{
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        height: 0;
        background-color: #485545;
        transition: .3s ease;
        overflow: hidden;
    }
    #check:checked~.menubar{
        height: 16rem;
    }

    .menubar a{
        display: block;
        font-size: 1.1rem;
        margin: 1.2rem 0;
        text-align: center;
        transform: translateY(-50px);
        transition: .3s ease;
        opacity: 0;
    }

    #check:checked~.menubar a{
        transform: translateY(0);
        transition-delay: calc(.15s * var(--i));
        opacity: 1;
    }
    .menubar a:hover::before {
        display: none;
    }
    .menubar a:hover::after {
        display: none;
    }
}
@media (max-width:248px){
    .logo a{
        content: '';
        display: none;
    
    }
    .header{
        padding: 2.4rem;
    }
}
    </style>
    <body>
    <ul>
        <header class="header"> 

            <H2 class="logo"><a href="home.php">HONGSAMUT</a></H2>
            <input type="checkbox" id="check">
            <label for="check" class="icon">
                <i class="bi bi-list" id="menu-icon"></i>
                <i class="bi bi-x-square"id="close-icon"></i>
            </label>
            <nav class="menubar">
                <a href="allbook.php" style="--i:1;">VIEW BOOK</a>
                <?php
                    $check_type = $_SESSION['user_type'];
                    if($check_type == 1) {
                        echo "<a href='member.php'>MEMBER</a>";
                        echo "<a href='bookBorrowing.php' style='--i:2;'>BACKPACK</a>";
                        echo "<a href='requestbook.php'>REQUEST</a>";
                    }
                ?>
                
                <?php
                    if($_SESSION['user_type'] == 2) {
                        echo "<a href='./addbook.php'>ADD BOOK</a>";
                        echo "<a href='./dashboardBorrow.php'>HISTORY</a>";
                    }
                ?>
                
                <a href="profile.php" style="--i:3;">
                    <?php
                    if (isset($_SESSION['user_id'])){
                        echo '<i class="bi bi-person-circle"></i>', ' ' ,$_SESSION['user_name'];
                        }
                    else{
                        echo 'LOGIN';
                    }
                    ?>
                </a>

            </nav>
        </header>
    </div>
    </ul>
    </body>
</html>
