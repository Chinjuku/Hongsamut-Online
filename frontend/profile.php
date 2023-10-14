<?php
    include './layout/navbar.php';
    include './layout/page.php';
    include './database/database.php';
    include './profile/showprofile.php'; 
    $profile = new showprofile($conn);
    echo $profile->Header();
?>

<body>
    <?php
        $profile->checkuser($_SESSION['user_id']);
        // echo "<a href='../backend/logout.php'> logout</a>";
    ?>
    <div id = "card">
        <div class="profile-box">
            <?php
                echo $profile->userData($_SESSION['user_name'],$_SESSION['first_name'],$_SESSION['last_name'],$_SESSION['phone_num'],$_SESSION['email'],$_SESSION['password'],$_SESSION['plan_id'],$_SESSION['user_name']);
                echo $profile->logout();
            ?>
        </div>
    </div>
</body>
</html>
