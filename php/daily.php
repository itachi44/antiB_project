<?php

// error_reporting(E_ALL);
// ini_set('display_errors', 'On');

require 'dbconnect.php';

/*************************************
 *  extraction des metadonnees pour chaque fiche *
 *************************************/

extract($_POST);
$queryP = "select * from archivecovid19 where DATE_FORMAT(datetmps,'%y-%m-%d') = curdate()";


$resP = mysqli_query($con2, $queryP);

$datasP=array();
while($dataP = $resP->fetch_array(MYSQLI_ASSOC)){
    $datasP[] = $dataP;
}
// retourner les resultats ...
$resultP = json_encode($datasP);
echo $resultP;
return $resultP;


mysqli_close();
exit();
?>


