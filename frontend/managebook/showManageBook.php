<?php
    class showManageBook {
        public function addBook(){
            // ob_start();
            ?>
            <form action="./managebook/manageBook.php" method="post" enctype="multipart/form-data">
            <input type="text" name="bookname" class="box" placeholder="Enter your book name" required>
            <input type="text" name="bookowner" class="box" placeholder="Enter author" required>
            <input type="url" name="imgsrc" class="box" placeholder="Enter your url image" required>
            <input type="url" name="urlbook" class="box" placeholder="Enter your url book" required>
            <div class="selects">
                <label for="select">Catagories :</label>
                <select name="cate_id">
                    <option value=8 name="cate_id" required>Miscellaneous</option>
                    <option value=1 name="cate_id">Comic</option>
                    <option value=2 name="cate_id">Detective</option>
                    <option value=3 name="cate_id">Fantasy</option>
                    <option value=4 name="cate_id">Fiction</option>
                    <option value=5 name="cate_id">Guide</option>
                    <option value=6 name="cate_id">Health</option>
                    <option value=7 name="cate_id">History</option>
                    <option value=9 name="cate_id">Horror</option>
                    <option value=10 name="cate_id">Knowledge</option>
                    <option value=11 name="cate_id">Mystery</option>
                    <option value=12 name="cate_id">Romance</option>
                </select>
            </div>
            <div>
                <input type="submit" value="add book" name="add_book" class="btn">
            </div>
        </form>
        <?php
        // ob_clean();
        }
    }
?>