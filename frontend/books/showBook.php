<?php
    class showBook {
        private $conn;

        public function __construct($connection){
            $this->conn = $connection;
        }

        public function viewCategory(){
            $cates = $_POST['categories'];
            $sql = "SELECT * FROM categories";
            $result = $this->conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                if($cates == $row['cate_id']){
                    echo '<div class="ssquare2"></div>';
                    echo '<div class="newarrival">';
                    echo '<b>' . strtoupper($row['category_name']) . '</b>';
                    echo '</div>';
                } 
                else if(empty($cates)){
                    echo '<div class="ssquare1"></div>';
                    echo '<div class="newarrival">';
                    echo '<b>ALL</b><br>BOOKS';
                    echo '</div>';
                    break;
                }
            }
        }

        public function viewBooks(){
            $sql = "SELECT * FROM books"; 
            $result = $this->conn->query($sql);
            $sql2 = "SELECT * FROM users";
            $result2 = $this->conn->query($sql2);
            while ($row2 = $result2->fetch_assoc()) {
                $user = $row2['user_type_id'];
            }
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    if (!empty($cates) && $row['cate_id'] == $cates) {
                        $display = true;
                    } elseif (empty($cates)) {
                        $display = true;
                    } else {
                        $display = false;
                    }
                    if ($display) {
                        echo '<div class="nabox">';
                        echo '<img class="pic" src="' . $row['imgsrc'] . '" alt="Image">', '<br>';
                        echo '<p class="bookname">' . $row['book_name'] . '</p>';
                        echo '<p>' . $row['book_owner'] . '</p>';
                        if($row['status'] == 0){
                            echo '<p class="bookname un">The book is unavaliable.</p>';
                        }
                        echo '<button class="clicktoview" onclick="togglePopup(\'' . $row['book_name'] . '\', \'' . $row['book_owner'] . '\',
                        \'' . $row['imgsrc'] . '\',  \'' . $row['book_id'] . '\',  \'' . $_SESSION['user_type'] . '\')">VIEW</button>';
                        echo '</div>';
                    }
                }
            }
            $this->conn->close();
        }

        public function popup(){
            
        }
    }