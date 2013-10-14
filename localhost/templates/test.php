<div class = "postsList">
<? foreach ( $posts as $num=>$post)
{
    echo "<div class= 'post'>";
    echo "<div class='leftdiscuz'><img src='http://tp4.sinaimg.cn/1893801487/50/5656401986/1'/><h6>".$post["username"]."#".$num."</h6></div>";
    echo "<div class='rightdiscuz'><p>This guy said:".$post["post"]."<p/>";
    echo "<p>Time:".$post["date"]."<p/></div>";
    echo "</div>";
}

 ?>
 </div>
 <form action="test.php" method="post">
    <textarea rows="5" cols="1000" name ="post" id = "post">
    </textarea>
    <br/>
    <input value="submit" type="submit"/>
 </form>
