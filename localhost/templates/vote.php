<div id="vote">
<?foreach($pics as $pic):?>
<div class = "picture">
    
     <? 
            $row = query("SELECT * FROM users WHERE id = ?",$pic["id"]);
            $user = $row[0]["username"];
            echo "<img "."src='".$pic["picture"]."'/>";
        
    ?>
    <h4><?=$pic["word"]?></h4>Votes : <span style="font-size:30px"><?=$pic["vote"]?></span>
    <?
        echo "<button class='btn btn-primary' id ='".$pic["picid"]."'>"."Up!"."</button>";
    ?>
        By : <?=$user?>    Date : <?=$pic["date"]?>
     
</div>
<br/>
<?endforeach;?>
</div>
<script type="text/javascript">
 $(document).ready(function(){
    l = document.getElementsByTagName("button");
    for (var i=0;i <document.getElementsByTagName("button").length;i++)
        l[i].onclick = vote;
        
    
    
    
 });
 function vote(e)
 {
    
    $.ajax({
        url:"vote.php",
        type:"POST",
        dataType:"text",
        data:{
            "picid":e.srcElement.id
            
        },
        success:function(response){
            if (response == "\n"+"failed")
            {
            
                alert("You have run out of your votes...\nPlease vote tommorrow :)");
            }
            else
            {
                q = e.srcElement;
                q = q.parentElement;
    
                q = q.getElementsByTagName("span");
                console.log(q);
                q= q[0];
                s =String(parseInt(q.innerText) + 1);
                q.innerText = s;
            }
        }
        
        
    
    });
 }
</script>













