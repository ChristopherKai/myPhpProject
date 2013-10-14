<?

    // configuration
    require("../includes/words.php");
    require("../includes/config.php"); 
    require("PHPMailer/class.phpmailer.php");
    if ($_SERVER['REQUEST_METHOD']== "POST")
    {
        if (isset($_POST['picture']))
        {
        $result = query("INSERT INTO pic (id,picture,word,date) VALUES(?,?,?,CURRENT_TIMESTAMP)",$_SESSION['id'],$_POST['picture'],$_POST['word']);
        if ($result === false)
            echo "failed.";
        else
            echo "Done!";
        }
        if (isset($_POST["email"]))
        
        {
            $mail = new PHPMailer();
        
        
        
        
        
    $mail->Username = "hjuj_91@163.com"; 
    $mail->Password = "120364358sk"; 
    $mail->AddAddress($_POST['email']); 
    $mail->FromName = "Kai Song"; 

    $mail->Subject = "Picture from Paintest!";
    $image = $_POST["pic"];
    $data = substr($image, strpos($image, ","));
    $mail-> AddStringAttachment(base64_decode($data),"picture.jpeg","base64","jpeg");
    $mail->Body = ' Here is an image! From Paintest!';
    $mail->Host = "ssl://smtp.163.com"; 
    $mail->Port = 465;
    $mail->IsSMTP(); 
    $mail->SMTPAuth = true; 
    $mail->From = $mail->Username;
    if(!$mail->Send())
        echo "Mailer Error: " . $mail->ErrorInfo;
    else
        echo "Message has been sent";
            
            
            
            
            
        }
    }
    else
    {
        $word = $words[(rand()%count($words))];
        render("draw.php",["title" =>"Draw!","word"=>$word]);
    }
?>
