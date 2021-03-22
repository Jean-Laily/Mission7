<?php

function getListeSection(){
    global $pdo;

    $sql = 'SELECT sec.codSec AS codSec ,libSec ,datDebSec , count(codSta)AS nbStag
	            FROM sections AS sec LEFT OUTER JOIN stagiaires AS sta
                ON sec.codSec = sta.codSec
                GROUP BY codSec, libsec ,datDebSec';

    $requetes = $pdo->prepare($sql);
    $requetes->execute();

    $data =  $requetes->fetchAll(PDO::FETCH_ASSOC); 

    return $data;

    var_dump($data);

}
?>