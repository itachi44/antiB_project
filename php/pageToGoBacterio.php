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
//--infoBacterio
$date_reception_lab = $_POST['date_reception_lab'];
$heure_reception_lab = $_POST['heure_reception_lab'];
$milieu_transport = $_POST['milieu_transport'];
$etat_echantillon = $_POST['etat_echantillon'];
$aspect_selles = $_POST['aspect_selles'];
$autre_aspect = $_POST['autre_aspect'];
$presence_element_etranger = $_POST['presence_element_etranger'];
$oui_presence_element_etranger = $_POST['oui_presence_element_etranger'];
$oui_presence_element_etranger_autre = $_POST['oui_presence_element_etranger_autre'];
$etat_frais = $_POST['etat_frais'];
$hematies = $_POST['hematies'];
$etat_flore = $_POST['etat_flore'];
$flore_equilibree_au_profit = $_POST['flore_equilibree_au_profit'];
$formes_vegetatives = $_POST['formes_vegetatives'];
$trophozoites = $_POST['trophozoites'];
$oeufs = $_POST['oeufs'];
$kyste = $_POST['kyste'];
$autres_parasites_bac = $_POST['autres_parasites_bac'];
$presence_autres_parasites = $_POST['presence_autres_parasites'];
$presence_oeufs = $_POST['presence_oeufs'];
$autres_oeufs = $_POST['autres_oeufs'];
$bcp = $_POST['bcp'];
$hektoen = $_POST['hektoen'];
$tcbs = $_POST['tcbs'];
$mac_conkey = $_POST['mac_conkey'];
$BD_campylobacter_agar = $_POST['BD_campylobacter_agar'];
$chromAgar_STEC = $_POST['chromAgar_STEC'];
$mise_culture_ept = $_POST['mise_culture_ept'];
$mueller_kauffmann = $_POST['mueller_kauffmann'];
$rvs = $_POST['rvs'];
$bouillon_campylobacter = $_POST['bouillon_campylobacter'];
$bcp2 = $_POST['bcp2'];
$mueller_kauffman2 = $_POST['mueller_kauffman2'];
$hektoen1 = $_POST['hektoen1'];
$hektoen2 = $_POST['hektoen2'];
$chromAgar_STEC2 = $_POST['chromAgar_STEC2'];
$germe1_identifie = $_POST['germe1_identifie'];
$antibiogramme_germe1_fait = $_POST['antibiogramme_germe1_fait'];
$germe2_identifie = $_POST['germe2_identifie'];
$antibiogramme_germe2_fait = $_POST['antibiogramme_germe2_fait'];
$germe1_non_specifique_identifie = $_POST['germe1_non_specifique_identifie'];
$antibiogramme_germe1_non_specifique_fait = $_POST['antibiogramme_germe1_non_specifique_fait'];
$germe2_non_specifique_identifie = $_POST['germe2_non_specifique_identifie'];
$antibiogramme_germe2_non_specifique_fait = $_POST['antibiogramme_germe2_non_specifique_fait'];
$absence_bacteries_enteropathogenes = $_POST['absence_bacteries_enteropathogenes'];
$autres_bacteries = $_POST['autres_bacteries'];


$subquery = "INSERT into cdsafind (num_etiquette, id_patient, date_reception_lab, heure_reception_lab, milieu_transport, etat_echantillon, aspect_selles, autre_aspect, presence_element_etranger, oui_presence_element_etranger, oui_presence_element_etranger_autre, etat_frais, hematies, etat_flore, flore_equilibree_au_profit, formes_vegetatives, trophozoites, oeufs, kyste, autres_parasites_bac, presence_autres_parasites, presence_oeufs, autres_oeufs, bcp, hektoen, tcbs, mac_conkey, BD_campylobacter_agar, chromAgar_STEC, mise_culture_ept, mueller_kauffmann, rvs, bouillon_campylobacter, bcp2, mueller_kauffman2, hektoen1, hektoen2, chromAgar_STEC2, germe1_identifie, antibiogramme_germe1_fait, germe2_identifie, antibiogramme_germe2_fait, germe1_non_specifique_identifie, antibiogramme_germe1_non_specifique_fait, germe2_non_specifique_identifie, antibiogramme_germe2_non_specifique_fait, absence_bacteries_enteropathogenes, autres_bacteries) VALUES";
$subquery .= "('$num_etiquette', '$id_patient', '$date_reception_lab', '$heure_reception_lab', '$milieu_transport', '$etat_echantillon', '$aspect_selles', '$autre_aspect', '$presence_element_etranger', '$oui_presence_element_etranger', '$oui_presence_element_etranger_autre', '$etat_frais', '$hematies', '$etat_flore', '$flore_equilibree_au_profit', '$formes_vegetatives', '$trophozoites', '$oeufs', '$kyste', '$autres_parasites_bac', '$presence_autres_parasites', '$presence_oeufs', '$autres_oeufs', '$bcp', '$hektoen', '$tcbs', '$mac_conkey', '$BD_campylobacter_agar', '$chromAgar_STEC', '$mise_culture_ept', '$mueller_kauffmann', '$rvs', '$bouillon_campylobacter', '$bcp2', '$mueller_kauffman2', '$hektoen1', '$hektoen2', '$chromAgar_STEC2', '$germe1_identifie', '$antibiogramme_germe1_fait', '$germe2_identifie', '$antibiogramme_germe2_fait', '$germe1_non_specifique_identifie', '$antibiogramme_germe1_non_specifique_fait', '$germe2_non_specifique_identifie', '$antibiogramme_germe2_non_specifique_fait', '$absence_bacteries_enteropathogenes', '$autres_bacteries')";


// echo($subquery);

$resI = mysqli_query($con2, $subquery);

if($resI){
    echo ("Records inserted successfully");
    // header("Location: index.php");
    echo "</br> <button> <a href='http://localhost:8888/findForms/'>Page d accueil</a> <button/>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con2);
    echo "</br> <button> <a href='http://localhost:8888/findForms/'>Page d accueil</a> <button/>";

}
 

mysqli_close($con2);
exit();
?>


