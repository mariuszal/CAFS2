<?php
require('functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="app.php" method="POST">
        <p>Vardas: <input type="text" name="firstName" value="marius"></p>
        <p>Pavarde: <input type="text" name="lastName" value="zal"></p>
        <p>Miestas: 
            <select name="city">
                <option value="">-</option>
                <?php echo optionFunction($cities); ?>
            </select></p>
        <p><strong>Programavimo kalbos: </strong></p>
        <p>
            <?echo checkBoxFunction('languageCode', $codingLanguages, 0);?>
        </p>
        <p><textarea name="about" cols="30" rows="4" placeholder="Pvz: patirtis su C++"></textarea></p>
        <p><button>submit</button></p>
    </form>
</body>
</html>