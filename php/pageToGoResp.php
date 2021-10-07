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
//--infoResp
$nature_prelevement = $_POST['nature_prelevement'];
$methode_diagnostic = $_POST['methode_diagnostic'];
$date_rendu_resultat = $_POST['date_rendu_resultat'];
$personne_envoi_resultat = $_POST['personne_envoi_resultat'];
$condition_arrivee_prelevement = $_POST['condition_arrivee_prelevement'];
$virus_influenza = $_POST['virus_influenza'];
$influenza_A = $_POST['influenza_A'];
$influenza_B = $_POST['influenza_B'];
$influenza_C = $_POST['influenza_C'];
$autres_virus_respiratoires = $_POST['autres_virus_respiratoires'];
$adenovirus = $_POST['adenovirus'];
$rhinovirus = $_POST['rhinovirus'];
$enterovirus = $_POST['enterovirus'];
$vrs = $_POST['vrs'];
$coronavirus = $_POST['coronavirus'];
$coronavirus_229_E = $_POST['coronavirus_229_E'];
$coronavirus_OC43 = $_POST['coronavirus_OC43'];
$coronavirus_NL63 = $_POST['coronavirus_NL63'];
$coronavirus_HKU1 = $_POST['coronavirus_HKU1'];
$metapneumovirus = $_POST['metapneumovirus'];
$parainfluenza_1 = $_POST['parainfluenza_1'];
$parainfluenza_2 = $_POST['parainfluenza_2'];
$parainfluenza_3 = $_POST['parainfluenza_3'];
$parainfluenza_4 = $_POST['parainfluenza_4'];
$bocavirus = $_POST['bocavirus'];
$parechovirus = $_POST['parechovirus'];
$covid_19 = $_POST['covid_19'];
$autres_viruss = $_POST['autres_viruss'];
$A_h1n1 = $_POST['A_h1n1'];
$A_h3n2 = $_POST['A_h3n2'];
$A_h5n1 = $_POST['A_h5n1'];
$A_non_typable = $_POST['A_non_typable'];
$lignee_yamagata = $_POST['lignee_yamagata'];
$lignee_victoria = $_POST['lignee_victoria'];
$bacteries_recherchees = $_POST['bacteries_recherchees'];
$haemophilus_influenzae = $_POST['haemophilus_influenzae'];
$streptococcus_pneumoniae = $_POST['streptococcus_pneumoniae'];
$legionella_pneumophila = $_POST['legionella_pneumophila'];
$bordetella_pertussis = $_POST['bordetella_pertussis'];
$chlamydophila_pneumoniae = $_POST['chlamydophila_pneumoniae'];
$mycoplasma_pneumoniae = $_POST['mycoplasma_pneumoniae'];
$staphylococcus_aureus = $_POST['staphylococcus_aureus'];
$pneumocystis_jiroveci = $_POST['pneumocystis_jiroveci'];
$moraxella_catarrhalis = $_POST['moraxella_catarrhalis'];
$klebsiella_pneumoniae = $_POST['klebsiella_pneumoniae'];
$autres_bacteries_resp = $_POST['autres_bacteries_resp'];
$nom_autres_bacteries = $_POST['nom_autres_bacteries'];



$subquery = "INSERT into cdsafind (num_etiquette, id_patient, nature_prelevement, methode_diagnostic, date_rendu_resultat, personne_envoi_resultat, condition_arrivee_prelevement, virus_influenza, influenza_A, influenza_B, influenza_C, autres_virus_respiratoires, adenovirus, rhinovirus, enterovirus, vrs, coronavirus, coronavirus_229_E, coronavirus_OC43, coronavirus_NL63, coronavirus_HKU1, metapneumovirus, parainfluenza_1, parainfluenza_2, parainfluenza_3, parainfluenza_4, bocavirus, parechovirus, covid_19, autres_viruss, A_h1n1, A_h3n2, A_h5n1, A_non_typable, lignee_yamagata, lignee_victoria, bacteries_recherchees, haemophilus_influenzae, streptococcus_pneumoniae, legionella_pneumophila, bordetella_pertussis, chlamydophila_pneumoniae, mycoplasma_pneumoniae, staphylococcus_aureus, pneumocystis_jiroveci, moraxella_catarrhalis, klebsiella_pneumoniae, autres_bacteries_resp, nom_autres_bacteries) VALUES";
$subquery .= "('$num_etiquette', '$id_patient', '$nature_prelevement', '$methode_diagnostic', '$date_rendu_resultat', '$personne_envoi_resultat', '$condition_arrivee_prelevement', '$virus_influenza', '$influenza_A', '$influenza_B', '$influenza_C', '$autres_virus_respiratoires', '$adenovirus', '$rhinovirus', '$enterovirus', '$vrs', '$coronavirus', '$coronavirus_229_E', '$coronavirus_OC43', '$coronavirus_NL63', '$coronavirus_HKU1', '$metapneumovirus', '$parainfluenza_1', '$parainfluenza_2', '$parainfluenza_3', '$parainfluenza_4', '$bocavirus', '$parechovirus', '$covid_19', '$autres_viruss', '$A_h1n1', '$A_h3n2', '$A_h5n1', '$A_non_typable', '$lignee_yamagata', '$lignee_victoria', '$bacteries_recherchees', '$haemophilus_influenzae', '$streptococcus_pneumoniae', '$legionella_pneumophila', '$bordetella_pertussis', '$chlamydophila_pneumoniae', '$mycoplasma_pneumoniae', '$staphylococcus_aureus', '$pneumocystis_jiroveci', '$moraxella_catarrhalis', '$klebsiella_pneumoniae', '$autres_bacteries_resp', '$nom_autres_bacteries')";
			


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


