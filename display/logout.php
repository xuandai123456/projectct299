<?php
if (isset($_GET["logout"])) {
    setcookie("account_ibus", "", time() - (86400 * 30), "/");
    // header("location:index.php?page=login");
    header("Location: /index.php?page=login");
}
?>