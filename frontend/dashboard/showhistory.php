<?php
    

    class ShowHistory {


        public function showBorrowHistory(){
            include 'viewdashboard.php';
            $dashpage = new viewDashboard();
            ob_start();
            ?>
            <div class="borrow"><h2 style="font-size: 50px;text-align: center;">History of Borrow</h2></div>
                    <table class="table2">
                        <thead>
                            <tr>
                            <th>USERNAME</th>
                            <th>TITLE</th>
                            <th>CATEGORY</th>
                            <!-- <th>STATUS</th> -->
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

            <?php
            return ob_clean();
        }
}
?>