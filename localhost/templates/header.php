<!DOCTYPE html>

<html>

    <head>

        <link href="css/bootstrap.css" rel="stylesheet"/>
        <link href="css/bootstrap-responsive.css" rel="stylesheet"/>
        <link href="css/styles.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title>Paintest ! : <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>Paintest !</title>
        <?php endif ?>

        <script src="js/jquery-1.8.2.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/quote.js"></script>
        <script src="js/symbol.js"></script>
        <script src="js/scripts.js"></script>

    </head>

    <body>

        <div class="container">

            <div id="top">
                <a href="/"><img alt="paint imagination" src="img/logo_new.png"/></a>
            </div>
            

            <div id="middle">


