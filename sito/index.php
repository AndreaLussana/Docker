<?php
    $da = file_get_contents("dati.json");
    $dati = json_decode($da);
    foreach($dati as $indice => $valore){
        $d = $valore->dato;
        echo "[$indice] $d <br>";
    }
    $newval = new stdClass();
    $newval -> dato = ($d+1);
    $dati[] =$newval;
    file_put_contents("dati.json", json_encode($dati));
?>