<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'dbconnect.php';

/*************************************
 *  extraction des metadonnees pour chaque fiche *
 *************************************/

extract($_POST);

//pour enlever les accents
function strtostr($text) {
  $utf8 = array(
    '/[áàâãªä]/u'  =>  'a',
    '/[ÁÀÂÃÄ]/u'  =>  'A',
    '/[ÍÌÎÏ]/u'   =>  'I',
    '/[íìîï]/u'   =>  'i',
    '/[éèêë]/u'   =>  'e',
    '/[ÉÈÊË]/u'   =>  'E',
    '/[óòôõºö]/u'  =>  'o',
    '/[ÓÒÔÕÖ]/u'  =>  'O',
    '/[úùûü]/u'   =>  'u',
    '/[ÚÙÛÜ]/u'   =>  'U',
    '/ç/'      =>  'c',
    '/Ç/'      =>  'C',
    '/ñ/'      =>  'n',
    '/Ñ/'      =>  'N',
    '/–/'      =>  '-', // UTF-8 hyphen to "normal" hyphen
    '/[’‘‹›‚]/u'  =>  ' ', // Literally a single quote
    '/[“”«»„]/u'  =>  ' ', // Double quote
    '/ /'      =>  ' ', // nonbreaking space (equiv. to 0x160)
  );
  return preg_replace(array_keys($utf8), array_values($utf8), $text);
}

$post_array_key = array_keys($_POST);
foreach ($post_array_key as $key) {
	$_POST[$key] = preg_replace("#\'#", '’', $_POST[$key]);
	$_POST[$key] = preg_replace('#\"#', "’", $_POST[$key]);
  	$_POST[$key] = strtostr($_POST[$key]);
}

//--idpatient']; 
$num_etiquette = $_POST['num_etiquette']; 
$id_patient = $_POST['id_patient']; 
//--infoarbo
$date_reception_lab_arbo = $_POST['date_reception_lab_arbo']; 
$heure_reception_lab_arbo = $_POST['heure_reception_lab_arbo']; 
$etat_echantillon_arbo = $_POST['etat_echantillon_arbo']; 
$nom_expediteur = $_POST['nom_expediteur']; 
$date_expedition_resultat = $_POST['date_expedition_resultat']; 
$date_envoi_sero = $_POST['date_envoi_sero']; 
$igM_YF = $_POST['igM_YF']; 
$igM_YF_positif = $_POST['igM_YF_positif']; 
$igM_DEN = $_POST['igM_DEN']; 
$igM_DEN_positif = $_POST['igM_DEN_positif']; 
$igM_WN = $_POST['igM_WN']; 
$igM_WN_positif = $_POST['igM_WN_positif']; 
$igM_RVF = $_POST['igM_RVF']; 
$igM_RVF_positif = $_POST['igM_RVF_positif']; 
$igM_CHIK = $_POST['igM_CHIK']; 
$igM_CHIK_positif = $_POST['igM_CHIK_positif']; 
$igM_CCHF = $_POST['igM_CCHF']; 
$igM_CCHF_positif = $_POST['igM_CCHF_positif']; 
$igM_ZIKA = $_POST['igM_ZIKA']; 
$igM_ZIKA_positif = $_POST['igM_ZIKA_positif']; 
$date_envoi_seroneutra = $_POST['date_envoi_seroneutra']; 
$YF = $_POST['YF']; 
$YF_positif = $_POST['YF_positif']; 
$DEN = $_POST['DEN']; 
$DEN_positif = $_POST['DEN_positif']; 
$WN = $_POST['WN']; 
$WN_positif = $_POST['WN_positif']; 
$RVF = $_POST['RVF']; 
$RVF_positif = $_POST['RVF_positif']; 
$CHIK = $_POST['CHIK']; 
$CHIK_positif = $_POST['CHIK_positif']; 
$CCHF = $_POST['CCHF']; 
$CCHF_positif = $_POST['CCHF_positif']; 
$date_envoi_biomol = $_POST['date_envoi_biomol']; 
$ARN_YF = $_POST['ARN_YF']; 
$ARN_DEN = $_POST['ARN_DEN']; 
$ARN_WN = $_POST['ARN_WN']; 
$ARN_RVF = $_POST['ARN_RVF']; 
$ARN_ZIKA = $_POST['ARN_ZIKA']; 
$ARN_CCHF = $_POST['ARN_CCHF']; 
$ARN_CHIK = $_POST['ARN_CHIK']; 
$ARN_HEV = $_POST['ARN_HEV']; 
$autre_arbovirose_teste = $_POST['autre_arbovirose_teste']; 
$nom_arbovirose_teste = $_POST['nom_arbovirose_teste']; 
$recherche_anticorps_igm = $_POST['recherche_anticorps_igm']; 
$resultat_recherche_anticorps_igm = $_POST['resultat_recherche_anticorps_igm']; 
$recherche_genome_viral = $_POST['recherche_genome_viral']; 
$resultat_recherche_genome_viral = $_POST['resultat_recherche_genome_viral']; 



$subquery = "INSERT into cdsafind (num_etiquette, id_patient, date_reception_lab_arbo, heure_reception_lab_arbo, etat_echantillon_arbo, nom_expediteur, date_expedition_resultat, date_envoi_sero, igM_YF, igM_YF_positif, igM_DEN, igM_DEN_positif, igM_WN, igM_WN_positif, igM_RVF, igM_RVF_positif, igM_CHIK, igM_CHIK_positif, igM_CCHF, igM_CCHF_positif, igM_ZIKA, igM_ZIKA_positif, date_envoi_seroneutra, YF, YF_positif, DEN, DEN_positif, WN, WN_positif, RVF, RVF_positif, CHIK, CHIK_positif, CCHF, CCHF_positif, date_envoi_biomol, ARN_YF, ARN_DEN, ARN_WN, ARN_RVF, ARN_ZIKA, ARN_CCHF, ARN_CHIK, ARN_HEV, autre_arbovirose_teste, nom_arbovirose_teste, recherche_anticorps_igm, resultat_recherche_anticorps_igm, recherche_genome_viral, resultat_recherche_genome_viral) VALUES";
$subquery .= "('$num_etiquette', '$id_patient', '$date_reception_lab_arbo', '$heure_reception_lab_arbo', '$etat_echantillon_arbo', '$nom_expediteur', '$date_expedition_resultat', '$date_envoi_sero', '$igM_YF', '$igM_YF_positif', '$igM_DEN', '$igM_DEN_positif', '$igM_WN', '$igM_WN_positif', '$igM_RVF', '$igM_RVF_positif', '$igM_CHIK', '$igM_CHIK_positif', '$igM_CCHF', '$igM_CCHF_positif', '$igM_ZIKA', '$igM_ZIKA_positif', '$date_envoi_seroneutra', '$YF', '$YF_positif', '$DEN', '$DEN_positif', '$WN', '$WN_positif', '$RVF', '$RVF_positif', '$CHIK', '$CHIK_positif', '$CCHF', '$CCHF_positif', '$date_envoi_biomol', '$ARN_YF', '$ARN_DEN', '$ARN_WN', '$ARN_RVF', '$ARN_ZIKA', '$ARN_CCHF', '$ARN_CHIK', '$ARN_HEV', '$autre_arbovirose_teste', '$nom_arbovirose_teste', '$recherche_anticorps_igm', '$resultat_recherche_anticorps_igm', '$recherche_genome_viral', '$resultat_recherche_genome_viral')";
			
// echo($subquery);

$resI = mysqli_query($con2, $subquery);

if($resI){
    echo "Records inserted successfully.";
    echo "</br> <button> <a href='http://localhost:8888/findForms/'>Page d accueil</a> <button/>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con2);
    echo "</br> <button> <a href='http://localhost:8888/findForms/'>Page d accueil</a> <button/>";

}
 

mysqli_close($con2);
exit();
?>


