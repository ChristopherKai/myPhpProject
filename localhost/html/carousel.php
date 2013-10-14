<?

    // configuration
    require("../includes/config.php"); 
    $pics = query("SELECT * FROM pic ORDER BY vote DESC LIMIT 0, 3");
    if (count($pics) == 3)
    {
        
        render("carousel.php",["title" =>"Carousel","src"=>$pics]);
    }
    else
    {
        apologize("Failed..");
    }
    
?>
