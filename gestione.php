<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestione</title>
</head>
<body>
    <?php
    $nome = $_POST["nome"];
    $costo = $_POST["costo"];
    $quantita = $_POST["quantita"];
    $stato = $_POST["stato"];
    $pagamento = $_POST["pagamento"];

    echo "<ul>
            <li>Nome Oggetto: " . $nome . "</li>
            <li>Costo: " . $costo . "€</li>
            <li>Quantità: " . $quantita . "</li>";
            $stringa;
            if (isset($stato)){
                $stringa = "Oggetto usato";
            }else{
                $stringa = "Oggetto nuovo";
            }
           echo "<li>" . $stringa . "</li>
            <li>" . $pagamento . "</li>";
    
   
    $costoTotale;
    $aggiuntivo;
    if (isset($stato)){
        $sconto = 0.2;
    }else{
        $sconto = 0;
    }

    if ($pagamento == "carta"){
        $aggiuntivo = 2;
    }else{
        $aggiuntivo = 0;
    }

    $costoTotale = $costo * $quantita;

    echo "<li>Costo iniziale: " . $costoTotale . "</li>";

    $costoTotale = ($costoTotale - ($costoTotale *$sconto)) + $aggiuntivo;

    echo "<li>Costo finale: " . $costoTotale . "</li>
       </ul>";
    



    ?>
</body>
</html>