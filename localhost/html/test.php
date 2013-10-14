<?php

require("../includes/config.php"); 
    $rows = query("SELECT * FROM posy");
    
if ($_SERVER["REQUEST_METHOD"] == 'POST')
{
    $rows = query("SELECT * FROM users WHERE id = ?",$_SESSION["id"]);
    $username = $rows[0]["username"];
    query("INSERT INTO posy (username,post,date) VALUES(?,?,CURRENT_TIMESTAMP)",$username,$_POST["post"]);
    redirect("test.php"); 
    
}
else
{
    $num = count($rows);
    render("test.php",["title"=>"test","posts"=>$rows,"num"=>$num]);
}

?>

