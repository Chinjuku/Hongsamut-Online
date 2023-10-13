<?php
    class viewDashboard {
        public function viewPaymentHistory(){
            include '../../backend/database.php';
            $sql = "SELECT * FROM payments";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $sql2 = "SELECT * FROM users where user_id = '{$row['user_id']}'";
                    $results = $conn->query($sql2);
                    while($rows = $results->fetch_assoc()) {
                        $username = $rows['user_name'];
                    }
                    echo "<tr>";
                    echo "<td>" . $username . "</td>";
                    echo "<td>" . $row['amount'] . "</td>";
                    echo "<td>" . $row['date_paid'] . "</td>";
                    echo "</tr>";
                }
            }
        }
        
        public function viewBorrowHistory(){
            include '../../backend/database.php';
            $sql = "SELECT * FROM borrow_books";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $sql2 = "SELECT * FROM users WHERE user_id = '{$row['user_id']}'";
                    $result2 = $conn->query($sql2);
                    while($row2 = $result2->fetch_assoc()) {
                        $username = $row2['user_name'];
                    }
                    $sql3 = "SELECT * FROM books WHERE book_id = '{$row['book_id']}'";
                    $result3 = $conn->query($sql3);
                    while($row3 = $result3->fetch_assoc()) {
                        $bookname = $row3['book_name'];
                        $sql4 = "SELECT * FROM categories WHERE cate_id = '{$row3['cate_id']}'";
                        $result4 = $conn->query($sql4);
                        while($row4 = $result4->fetch_assoc()) {
                        $category = $row4['category_name'];
                        }
                    }
                    echo "<tr>";
                    echo "<td>" . $username . "</td>";
                    echo "<td>" . $bookname . "</td>";
                    echo "<td>" . $category . "</td>";
                    echo "<td>" . $row['date_borrow'] . "</td>";
                    echo "<td>" . $row['date_return'] . "</td>";
                    echo "</tr>";
                }
            }
        }
    }
?>