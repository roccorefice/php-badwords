<!-- 
Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre *.
-->

<!DOCTYPE html>

<head>
    <title>PHP-badwords</title>
</head>

<body>

    <?php

    $badword = $_GET["badword"];
    $par = "Coltivare in terreno molto ricco di materia organica e non coltivare dopo Solanacee o piante della stessa famiglia delle cucurbitacee.";
    $clearPar = str_replace($badword, "*****", $par);

    ?>

    <h3><?php echo $clearPar; ?></h3>
    <p><?php echo 'La lunghezza della stringa è di: ' . strlen($clearPar) . ' caratteri.'; ?></p>

</body>

</html>