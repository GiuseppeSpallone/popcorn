<?php
    require_once 'connessioneDB.php';

    $query = "SELECT * FROM offerta";

    $risultato = $connessione->query($query);

    $countPrezzi = mysqli_num_rows($risultato); //conteggiare il numero di records trovati all'interno del nostro db sulla base di una data query

    if($countPrezzi == 0){
        //$vuoto = "NULL";
    }else{
            $resrow = mysqli_fetch_row($risultato); //array contenente i valori di ogni campo riscontrato nel recordset che potremo poi richiamare specificando il relativo indice numerico

            $id = $resrow[0];
            $feriale = $resrow[1];
            $festivo = $resrow[2];
            $treD = $resrow[3];
            $treIngressi = $resrow[4];
            $cinqueIngressi = $resrow[5];
            $dieciIngressi = $resrow[6];
    }
    $connessione->close();

?>