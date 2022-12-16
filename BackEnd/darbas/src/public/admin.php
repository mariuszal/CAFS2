<?php

require_once "connections.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?=env('APP_NAME', 'Coutching');?></title>
    <link rel="stylesheet" href="resources/css/main.css">
    <link rel="stylesheet" href="resources/css/list.css">
    <link rel="stylesheet" href="resources/css/navigation.css">
</head>
<body>
    <header>
        <?php include_once 'nav.php'; ?>
    </header>
    <main>
        <section>
            <img src="img/logo.png" style="width: 200px;">
        </section>
        <section>
            <h1>360º Lyderystės programa</h1>
        </section>
        <section>
            <div class="clear-left float-left">
                <h4>Ar pastebėjote, kokie iššūkiai supa lyderius šiandien?</h4>
            </div>
            <div class="clear-left float-left">
                <ul>
                    <li>Greitai kintanti verslo aplinka!</li>
                    <li>Pokyčiai įmonės viduje!</li>
                    <li>Darbuotojų motyvacijos kritimas ar net perdegimas!</li>
                </ul>
            </div>
            <span class="clearfix"></span>
        </section>
        <section>
            <div class="clear-right float-right">
                <h4>kas vyksta rytojaus lyderių įmonėse!</h4>
            </div>
            <div class="clear-right float-right">
                <ul>
                    <li>Pokyčiai lyderių elgesyje adaptuojantis!</li>
                    <li>Talentų ir lyderių ugdymas organizacijos viduje!</li>
                    <li>Aukštas darbuotojų motyvacijos ir įsitraukimo lygis!</li>
                </ul>
            </div>
            <span class="clearfix"></span>
        </section>
    </main>
    <footer>
        <div id="footer">
            <?=$footer;?>
        </div>
    </footer>
</body>
</html>