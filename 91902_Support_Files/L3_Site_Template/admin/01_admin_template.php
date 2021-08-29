<?php

// Check if user is logged in..
if (isset($_SESSION['admin'])) {

    echo "You are logged in";

} // End user logged in if
else {

    $login_error = "Please login to access this page.";
    header("Location: index.php?page=../admin/login&error=$login_error");

} // End user not logged in else

?>