<?php

    // configuration
    require("../includes/config.php"); 
    query("UPDATE users SET lastDate = CURRENT_TIMESTAMP WHERE id = ?",$_SESSION["id"]);
    // log out current user, if any
    logout();

    // redirect user
    redirect("/");

?>
