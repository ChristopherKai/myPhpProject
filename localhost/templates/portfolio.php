<ul class = "nav nav-pills">
        <li><a href = "vote.php">vote</a></li>
        <li><a href = "carousel.php">Carousel</a></li>
        <li><a href = "draw.php">Draw</a></li>
        <li><a href = "changepassword.php">Change Password</a></li>
        <li><a href = "logout.php">Log out</a></li>
</ul>

<table class="table table-striped" id="portfolio">
    <thead>
    <tr>
        <th>Name</th>
        <th>Symbol</th>
        <th>Shares</th>
        <th>Price</th>
        <th>Total</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($positions as $position): ?>

    <tr>
        <td><?=$position["name"]?></td>
        <td><?= $position["symbol"] ?></td>
        <td><?= $position["shares"] ?></td>
        <td>$<?= $position["price"] ?></td>
        <td>$<?= number_format($position["price"]*$position["shares"],2)?></td>
    </tr>

    <? endforeach ?>
    <tr>
        <td colspan ="4">CASH</td>
        <td>$<?=number_format($cash,2)?></td>
    </tr>
    </tbody>
</table>
   

