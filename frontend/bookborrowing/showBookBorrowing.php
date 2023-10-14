<?php
    class showBookBorrowing {
        public function viewBorrowing(){
            // echo '<h1>' + "bugraiwa" + '</h1>';
            include '../backend/database.php';
            $sql = "SELECT b.book_name, c.category_name, bb.date_borrow, bb.date_return, b.imgsrc
                    FROM borrow_books bb
                    INNER JOIN books b ON bb.book_id = b.book_id
                    INNER JOIN categories c ON b.cate_id = c.cate_id
                    WHERE bb.user_id = '{$_SESSION['user_id']}' AND bb.date_return > CURDATE()";
            
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $book_name = $row['book_name'];
                    $category_name = $row['category_name'];
                    $date_borrow = $row['date_borrow'];
                    $date_return = $row['date_return'];
                    $imgsrc = $row['imgsrc'];

                    echo "<tr>";
                    echo "<td><img src='{$imgsrc}' width='120' height='150'></td>";
                    echo "<td>{$book_name}</td>";
                    echo "<td>{$category_name}</td>";
                    echo "<td>{$date_borrow}</td>";
                    echo "<td>{$date_return}</td>";
                    echo "</tr>";
                }
            }
        }
        public function countBorrowing(){
            include '../backend/database.php';
            // create bottom bar that increaseing when user borrow book
            $sql = "SELECT * FROM borrow_books WHERE user_id = '{$_SESSION['user_id']}' AND date_return > CURDATE()";
            $result = $conn->query($sql);
            $count = 0;
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $count++;
                }
            }

            //get max number of book that user can own.
            $plan_id = $_SESSION['plan_id'];
            $num_book = "SELECT * FROM subscription_plans WHERE plan_id = '{$plan_id}'";
            $num_book_stmt = $conn->query($num_book);
            $num_book_row = $num_book_stmt->fetch_assoc();
            $max_book = $num_book_row['max_book'];
            // create circle that increaseing when user borrow book
            
            for ($i = 1; $i <= $max_book+1; $i++) {
                if($i <= $count){
                    echo "<div class='circle1'></div>";
                }
                else{
                    echo "<div class='circle0'></div>";
                }
                }
        }
    }


?>