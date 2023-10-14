<?php
// ทำเป็น Recommanded ตรงนี้
class recommended {
    public function RecommendedBook(){
        //sai code recommendedbook
    }
    public function NewBook() {
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
