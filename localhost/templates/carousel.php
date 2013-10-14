<ul class = "nav nav-pills">
        <li><a href = "vote.php">Vote</a></li>
        <li><a href = "carousel.php">Carousel</a></li>
        <li><a href = "draw.php">Draw</a></li>
        <li><a href = "changepassword.php">Change Password</a></li>
        <li><a href = "logout.php">Log out</a></li>
</ul>

<div id="myCarousel" class="carousel slide">

  <!-- Carousel items -->
  <div class="carousel-inner">
    <? foreach ($src as $pic): ?>
    <div class="item">
    <? 
            echo "<img "."src='".$pic["picture"]."'/>";
        
    ?>
    <div class="carousel-caption">
                      <h4><?=$pic["word"]?></h4>
                      <? $row = query("SELECT * FROM users WHERE id = ?",$pic["id"]);
                        $user = $row[0]["username"];
                      ?>
                      <p>By  <?= $user?></p>
                    </div>
                    </div>
   
     <? endforeach;?>
    
  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>
<script type="text/javascript">
    $(document).ready(function(){
            $('.carousel').carousel('cycle');
             $('.carousel').carousel({
            interval: 1000
            });
    });
</script>
