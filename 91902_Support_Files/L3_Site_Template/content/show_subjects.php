<p>
        <?php
            $sub1_ID = $find_rs["Subject1_ID"];
            $sub2_ID = $find_rs["Subject2_ID"];
            $sub3_ID = $find_rs["Subject3_ID"];

            $all_subjects = array($sub1_ID, $sub2_ID, $sub3_ID);

            // Loop through subject ID's and look up the subject name
            foreach($all_subjects as $subject) {
                // Get subject name
                $sub_sql = "SELECT * FROM `subject` WHERE `Subject_ID` = $subject";
                $sub_query = mysqli_query($dbconnect, $sub_sql);
                $sub_rs = mysqli_fetch_assoc($sub_query);

                if($subject != 0) {

                

                ?>
            <span class="tag">
                <a href="index.php?page=subject&subjectID=<?php echo
                $sub_rs['Subject_ID']; ?>">
                    <?php echo $sub_rs['Subject']; ?>
                </a>
            </span> &nbsp;
        <?php

                } // End subject exists if

                unset($subject);

            } // End subject loop
    
        ?>
    </p>