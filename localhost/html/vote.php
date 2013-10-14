
<?
    require("../includes/config.php"); 
    
        
    
    
    
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
        
        
        
        
        
        
        $rows = query("SELECT * FROM users WHERE id = ?",$_SESSION["id"]);
        query("START TRANSACTION");
        if ($rows[0]["voteleft"] < 1 )
        {
            
            echo "failed";
            exit();
            
        }
        else
        {
            $voteleft = $rows[0]["voteleft"];
            query("UPDATE users SET voteleft = ? WHERE id = ?",$voteleft-1,$_SESSION["id"]);
            $rows = query("SELECT * FROM pic WHERE picid = ?",$_POST["picid"]);
            $vote = $rows[0]["vote"];
            query("UPDATE pic SET vote = ? WHERE picid = ?",$vote+1,$_POST["picid"]);
            echo "true";
        }
        
        
        query("COMMIT");
    }
    else
    {
        $rows = query("SELECT * FROM pic ORDER BY date desc LIMIT 0,16");
        render("vote.php",["title"=>"Vote!","pics"=>$rows]);
    }
?>

