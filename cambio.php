<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $euro = $_GET["euro"];
        $cambio = $_GET["valuta"];
        $valoreCambio;
        switch($cambio){
            case "usd":
                $valoreCambio = $euro * 1.08;
                break;
            case "jpy":
                $valoreCambio = $euro * 165.93;
                break;
            case "chf":
                $valoreCambio = $euro * 0.94;
                break;
            case "gbp":
                $valoreCambio = $euro * 0.83;
                break;
        }
    ?>
</body>
</html>