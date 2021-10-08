<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>CNRFJ|Investigations</title>
    <script src="js/jquery.js"></script>
    <link rel="icon" type="image/gif" href="images/dakar.png" />
    <link rel="stylesheet" type="text/css" media="all" href="css/css_kg.css?1.1" />
    <link rel="stylesheet" type="text/css" media="all" href="css/style-classes.css?1.1" />
    <link rel="stylesheet" type="text/css" media="all" href="css/styles_labo.css?1.1" />
    <!-- <script type="text/javascript" src="js/kedougou.js?2.7"></script>   -->
    <script type="text/javascript" src="js/globale.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

    <script type="text/javascript" language="javascript" src="plugins/switchlabo.js"></script>
    <script type="text/javascript" language="javascript" src="plugins/laboControl.js"></script>
    <script type="text/javascript" language="javascript" src="plugins/submitControl.js"></script>

    <!--  calendier   -->
    <link rel="stylesheet" type="text/css" media="all" href="calendar/jsDatePick_ltr.min.css" />
    <script type="text/javascript" src="calendar/jsDatePick.jquery.min.1.3.js"></script>
    <script type="text/javascript" src="js/blockui.js"></script>
    <!-- <script type="text/javascript"  src="js/printelement.js?1.0"></script> -->
    <!-- <script type="text/javascript"  src="js/all.js?1.1"></script> -->
    <!-- <script type="text/javascript"  src="js/submit.js?2.3"></script> -->
    <!-- <script type="text/javascript"  src="plugins/displayelement.js?1.1"></script> -->
    <!-- CSS -->
    <link rel="stylesheet" href="css/page_body_style.css">
</head>

<body style="font-weight:bold;">
    <div class="class-menu" style="width:115px;" id="div_top_menu">
        <div id="div_hide_show">
            <img src="images/plus_.png" id="img_plus" />
            <img src="images/dash.png" id="img_dash" style="display:none;" />
        </div>
        <br>
    </div>

    <center>
        <br />
        <br />
        <div class="conteneur">
            <div id="haut"> <img src="images/dakar.png" class="img_logo" /> </div>
            <br />
            <div>
                <input id="buttonBacterio" class="myButton highlight-hover" type="button" value="Exam. Bactério" style="margin:13px" />
                <input id="buttonResp" class="myButton highlight-hover" type="button" value="Exam. Resp." style=" margin:13px" />
                <input id="buttonArbo" class="myButton highlight-hover" type="button" value="Exam Arbo." style="margin:13px" />


                <!-- Page for Bactério -->
                <!-- ----------------- -->
                <!-- ----------------- -->
                <form id="bacterioform" method="POST" style="font-weight: normal;width:91%" class="div_table_style_class">
                    <div style="font-weight: bold;display: none;" id="div_nav_modif">
                        <a id="bt_moins" href='javascript:void(0)' class="class_bt_suiv_prec"><img src="images/left.png" /></a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a id="bt_plus" href='javascript:void(0)' class="class_bt_suiv_prec"><img src="images/right.png" /></a>
                        <br /> <br /> <br />
                    </div>

                    <input type="text" style="display:none;" id="id" name="id" value="NA" />
                    <input type="text" style="display:none;" name="maladie" value="Yellow fever/Fievre Jaune" />

                    <input type="text" style="display:none;" name="auteur_saisie" value="tp38gi7kh" />

                    <input type="text" style="display:none;" name="nom_laboratoire" value="INSTITUT PASTEUR" />
                    <label style="color:red; font-size:11px; font-style:italic;">(*) Champs obligatoires</label>
                    <br />
                    <br><br><br>

                    <br><br>
                    <table style="width:95%;border-spacing: 7px;">
                        <tr>
                            <td><label for="num_etiquette" id="label_num_etiquette">Numéro d'étiquette</label><label style="color:red;">(*)</label>:</td>
                            <td>
                                <input type="text" id="num_etiquette" name="num_etiquette" class="inputs2" />
                            </td>
                            <td><label for="id_patient" id="label_id_patient">ID Patient</label><label style="color:red;">(*)</label>:</td>
                            <td>
                                <input type="text" id="id_patient" name="id_patient" class="inputs2" />
                            </td>
                        </tr>

                    </table>
                    <br>
                    <style>
                        #table_epi td {
                            font-size: 16px;
                            padding: 4px;
                        }
                    </style>
                    <br><br><br>
                    <hr>
                    <label style="font-weight:bold;font-size:22px;">EXAMEN MACROSCOPIQUE</label>
                    <br><br>
                    <!--table style="width:90%;border-spacing: 0px; text-align:left;" id="table_epi"-->

                    <table id="" style="width:95%;border-spacing: 7px;">
                        <tr>
                            <td><label for="date_reception_lab" id="label_date_reception_lab">Date et heure de réception au laboratoire: </label></td>
                            <td>
                                <input type="text" id="date_reception_lab" name="date_reception_lab" class="inputs2" />
                                <script type="text/javascript">
                                    new JsDatePick({
                                        useMode: 2,
                                        target: "date_reception_lab",
                                        dateFormat: "%Y-%m-%d"
                                    });
                                </script>
                                <a href="javascript:void(0);" class="class_button_clear" onclick="$('#date_reception_lab').val('');">
                                    <img src="images/clear.png" class="class_clear_img" />
                                </a>

                            </td>

                            <td><label for="heure_reception_lab" id="label_heure_reception_lab"> Heure : </label></td>
                            <td>
                                <input type="time" id="heure_reception_lab" name="heure_reception_lab" class="inputs2" />
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_milieu_transport" for="milieu_transport">Milieu de transport: </label></td>
                            <td>
                                <select id="milieu_transport" name="milieu_transport">
                                    <option value=""></option>
                                    <option value="cary_blair">Milieu Cary Blair </option>
                                    <option value="tampon_formole">Tampon Formole </option>
                                </select>
                            </td>
                            <td><label id="label_etat_echantillon" for="etat_echantillon">Etat de l'échantillon: </label></td>
                            <td>
                                <select id="etat_echantillon" name="etat_echantillon">
                                    <option value=""></option>
                                    <option value="bon">Bon</option>
                                    <option value="mauvais">Mauvais</option>
                                    <option value="inutilisable">Inutilisable</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_aspect_selles" for="aspect_selles">Aspect des selles: </label></td>
                            <td>
                                <select id="aspect_selles" name="aspect_selles">
                                    <option value=""></option>
                                    <option value="sanguinolentes">Sanguinolentes</option>
                                    <option value="molles">Molles</option>
                                    <option value="muco-glaireuses">Muco-glaireuses</option>
                                    <option value="liquides">Liquides</option>
                                    <option value="dures">Dures</option>
                                    <option value="pateuses">Pâteuses</option>
                                    <option value="afecales">Afécales</option>
                                    <option value="autre-aspect">Autre aspect</option>
                                </select>
                            </td>
                            <td><label id="label_autre_aspect" for="autre_aspect">Si autre aspect, précisez: </label></td>
                            <td>
                                <input type="text" id="autre_aspect" name="autre_aspect" class="inputs2" />
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_presence_element_etranger" for="presence_element_etranger">Présence d'éléments étrangers: Parasites adultes </label></td>
                            <td>
                                <select id="presence_element_etranger" name="presence_element_etranger">
                                    <option value=""></option>
                                    <option value="oui">Oui</option>
                                    <option value="non">Non</option>
                                </select>
                            </td>
                            <td><label id="label_oui_presence_element_etranger" class="label_oui_presence_element_etranger" style="display:none;" for="oui_presence_element_etranger">Si oui, précisez: </label></td>
                            <td class="label_oui_presence_element_etranger" style="display:none;">
                                <select id="oui_presence_element_etranger" name="oui_presence_element_etranger">
                                    <option value=""></option>
                                    <option value="ascaris">Ascaris</option>
                                    <option value="trichocephale">Trichocéphale</option>
                                    <option value="ankylostome">Ankylostome</option>
                                    <option value="autres">Autres</option>
                                </select>
                            </td>
                        </tr>
                        <tr class="oui_presence_element_etranger_autre" style="display:none;">
                            <td><label id="label_oui_presence_element_etranger_autre" for="oui_presence_element_etranger_autre">Autres: </label></td>
                            <td> <input type="text" id="oui_presence_element_etranger_autre" name="oui_presence_element_etranger_autre" class="inputs2" /> </td>
                        </tr>
                    </table>

                    <br><br><br>
                    <hr>
                    <label style="font-weight:bold;font-size:22px;">EXAMEN MICROSCOPIQUE</label>
                    <br><br>
                    <table id="" style="width:95%;border-spacing: 7px;">
                        <tr>
                            <td><label id="label_etat_frais" for="etat_frais">Etat frais </label></td>
                            <td> <input type="text" id="etat_frais" name="etat_frais" class="inputs2" /> </td>

                            <td><label id="label_hematies" for="hematies">Hématies </label></td>
                            <td>
                                <select id="hematies" name="hematies">
                                    <option value=""></option>
                                    <option value="denombrement_hematies">Dénombrement des hématies</option>
                                    <option value="presence_levure">Présence de levure</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_etat_flore" for="etat_flore">Gram: état de la flore </label></td>
                            <td>
                                <select id="etat_flore" name="etat_flore">
                                    <option value=""></option>
                                    <option value="flore_equilibree">Flore équilibrée</option>
                                    <option value="flore_desequilibree">Flore déséquilibrée</option>
                                </select>
                            </td>

                            <td><label id="label_flore_equilibree_au_profit" for="flore_equilibree_au_profit">Flore déséquilibrée au profit de:</label></td>
                            <td> <input type="text" id="flore_equilibree_au_profit" name="flore_equilibree_au_profit" class="inputs2" /> </td>
                        </tr>
                    </table>

                    <br><br><br>
                    <hr>
                    <label style="font-weight:bold;font-size:22px;">RECHERCHE DE PARASITES</label>
                    <br><br>
                    <table id="" style="width:95%;border-spacing: 7px;">
                        <tr>
                            <td><label id="label_formes_vegetatives" for="formes_vegetatives">Formes végétatives </label></td>
                            <td>
                                <select id="formes_vegetatives" name="formes_vegetatives">
                                    <option value=""></option>
                                    <option value="Presence">Presence</option>
                                    <option value="absence">Absence</option>
                                </select>
                            </td>
                            <td><label id="label_trophozoites" for="trophozoites">Trophozoïtes: </label></td>
                            <td>
                                <select id="trophozoites" name="trophozoites">
                                    <option value=""></option>
                                    <option value="Presence">Presence</option>
                                    <option value="absence">Absence</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_oeufs" for="oeufs">Œufs </label></td>
                            <td>
                                <select id="oeufs" name="oeufs">
                                    <option value=""></option>
                                    <option value="presence">Presence</option>
                                    <option value="absence">Absence</option>
                                </select>
                            </td>
                            <td><label id="label_kyste" for="kyste">Kyste: </label></td>
                            <td>
                                <select id="kyste" name="kyste">
                                    <option value=""></option>
                                    <option value="Presence">Presence</option>
                                    <option value="absence">Absence</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_autres_parasites_bac" for="autres_parasites_bac">Autres parasites: </label></td>
                            <td>
                                <select id="autres_parasites_bac" name="autres_parasites_bac">
                                    <option value=""></option>
                                    <option value="presence">Presence</option>
                                    <option value="absence">Absence</option>
                                </select>
                            </td>
                            <td><label id="label_presence_autres_parasites" for="presence_autres_parasites" class="autres_parasites_bac" style="display:none;">Si présence d’autres parasites, précisez : </label></td>
                            <td class="autres_parasites_bac" style="display:none;"> <input type="text" id="presence_autres_parasites" name="presence_autres_parasites" class="inputs2" /> </td>
                        </tr>


                        <tr class="presence_oeufs" style="display:none;">
                            <td><label id="label_presence_oeufs" for="presence_oeufs">Si présence Œufs</label></td>
                            <td>
                                <select id="presence_oeufs" name="presence_oeufs">
                                    <option value=""></option>
                                    <option value="ascaris">Ascaris </option>
                                    <option value="trichocephale">Trichocéphale </option>
                                    <option value="autres">Autres </option>
                                </select>
                            </td>
                            <td><label id="label_autres_oeufs" for="autres_oeufs">Autres oeufs: </label></td>
                            <td> <input type="text" id="autres_oeufs" name="autres_oeufs" class="inputs2" /> </td>
                        </tr>

                    </table>

                    <br><br><br>
                    <hr>
                    <label style="font-weight:bold;font-size:22px;">COPROCULTURE</label><br>
                    <label style="font-style:italic;font-size:19px;">ENSEMENCEMENT DIRECT SUR:</label>
                    <br><br>
                    <table id="" style="width:95%;border-spacing: 7px;">
                        <tr>
                            <td><label id="label_bcp" for="bcp">BCP </label></td>
                            <td>
                                <select id="bcp" name="bcp">
                                    <option value=""></option>
                                    <option value="oui">Oui</option>
                                    <option value="non">Non</option>
                                </select>
                            </td>
                            <td><label id="label_hektoen" for="hektoen">Hektoen </label></td>
                            <td>
                                <select id="hektoen" name="hektoen">
                                    <option value=""></option>
                                    <option value="oui">Oui</option>
                                    <option value="non">Non</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_tcbs" for="tcbs">TCBS </label></td>
                            <td>
                                <select id="tcbs" name="tcbs">
                                    <option value=""></option>
                                    <option value="oui">Oui</option>
                                    <option value="non">Non</option>
                                </select>
                            </td>
                            <td><label id="label_mac_conkey" for="mac_conkey"> Mac Conkey </label></td>
                            <td>
                                <select id="mac_conkey" name="mac_conkey">
                                    <option value=""></option>
                                    <option value="oui">Oui</option>
                                    <option value="non">Non</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_BD_campylobacter_agar" for="BD_campylobacter_agar">BD Campylobacter Agar (enfants de -2ans) </label></td>
                            <td>
                                <select id="BD_campylobacter_agar" name="BD_campylobacter_agar">
                                    <option value=""></option>
                                    <option value="oui">Oui</option>
                                    <option value="non">Non</option>
                                </select>
                            </td>
                            <td><label id="label_chromAgar_STEC" for="chromAgar_STEC"> ChromAgar STEC (Adultes)</label></td>
                            <td>
                                <select id="chromAgar_STEC" name="chromAgar_STEC">
                                    <option value=""></option>
                                    <option value="oui">Oui</option>
                                    <option value="non">Non</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_mise_culture_ept" for="mise_culture_ept">Mise en culture sur EPT </label></td>
                            <td>
                                <select id="mise_culture_ept" name="mise_culture_ept">
                                    <option value=""></option>
                                    <option value="oui">Oui</option>
                                    <option value="non">Non</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                    <br><br>
                    <label style="font-style:italic;font-size:19px;">MISE EN CULTURE DU BOUILLON EPT SUR:</label>
                    <br><br>
                    <table id="" style="width:95%;border-spacing: 7px;">
                        <tr>
                            <td><label id="label_mueller_kauffmann" for="mueller_kauffmann">Mueller Kauffmann (24±3H à 37 ±1°C)</label></td>
                            <td>
                                <select id="mueller_kauffmann" name="mueller_kauffmann">
                                    <option value=""></option>
                                    <option value="oui">Oui</option>
                                    <option value="non">Non</option>
                                </select>
                            </td>
                            <td><label id="label_rvs" for="rvs">RVS (24±3H à 41,5 ±1°C)</label></td>
                            <td>
                                <select id="rvs" name="rvs">
                                    <option value=""></option>
                                    <option value="oui">Oui</option>
                                    <option value="non">Non</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_bouillon_campylobacter" for="bouillon_campylobacter">Bouillon d’enrichissement des Campylobacter </label></td>
                            <td>
                                <select id="bouillon_campylobacter" name="bouillon_campylobacter">
                                    <option value=""></option>
                                    <option value="oui">Oui</option>
                                    <option value="non">Non</option>
                                </select>
                            </td>
                        </tr>
                    </table>

                    <br><br>
                    <label style="font-style:italic;font-size:19px;">MISE EN CULTURE DES BOUILLONS SUR:</label>
                    <br><br>
                    <table id="" style="width:95%;border-spacing: 7px;">
                        <tr>
                            <td><label id="label_bcp2" for="bcp2"> BCP </label></td>
                            <td>
                                <select id="bcp2" name="bcp2">
                                    <option value=""></option>
                                    <option value="oui">Oui</option>
                                    <option value="non">Non</option>
                                </select>
                            </td>
                            <td><label id="label_mueller_kauffman2" for="mueller_kauffman2">Mueller Kauffman</label></td>
                            <td>
                                <select id="mueller_kauffman2" name="mueller_kauffman2">
                                    <option value=""></option>
                                    <option value="oui">Oui</option>
                                    <option value="non">Non</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_hektoen1" for="hektoen1"> Hektoen 1 </label></td>
                            <td>
                                <select id="hektoen1" name="hektoen1">
                                    <option value=""></option>
                                    <option value="oui">Oui</option>
                                    <option value="non">Non</option>
                                </select>
                            </td>
                            <td><label id="label_hektoen2" for="hektoen2">Hektoen 2</label></td>
                            <td>
                                <select id="hektoen2" name="hektoen2">
                                    <option value=""></option>
                                    <option value="oui">Oui</option>
                                    <option value="non">Non</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_chromAgar_STEC2" for="chromAgar_STEC2">ChromAgar STEC </label></td>
                            <td>
                                <select id="chromAgar_STEC2" name="chromAgar_STEC2">
                                    <option value=""></option>
                                    <option value="oui">Oui</option>
                                    <option value="non">Non</option>
                                </select>
                            </td>
                        </tr>
                    </table>


                    <br><br><br>
                    <hr>
                    <label style="font-weight:bold;font-size:22px;">IDENTIFICATION BACTERIENNE : Galerie API</label><br>
                    <label style="font-style:italic;font-size:19px;">BACTERIES IDENTIFIEES : API Web</label>
                    <br><br>


                    <!-- SADJI Form START  -->

                    <!-- Buttons -->
                    <table id="" style="width:95%;border-spacing: 7px; text-align: center;">
                        <tr>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1" style="border-radius: 25px;"> nouvel antibiogramme </button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2" style="border-radius: 25px;"> voir antibiogrammes </button>
                            </td>
                        </tr>
                    </table>
                    <br><br>
                    <!-- Modal 1 -->

                    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" style="max-width: 70%;" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Enregistrement des informations</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <table id="" style="width:95%;border-spacing: 7px;">
                                        <tr>
                                            <td><label id="label_germe1_idenmtifie" for="germe1_identifie">Germe1 identifié </label></td>
                                            <td>
                                                <select id="germe1_identifie" name="germe1_identifie">
                                                    <option value=""></option>
                                                    <option value="escherichia_coli">Escherichia coli</option>
                                                    <option value="salmonella">Salmonella</option>
                                                    <option value="shigelles">Shigelles</option>
                                                </select>
                                            </td>
                                            <td><label id="label_germe1_non_identifie" for="germe1_non_identifie">Si le germe est non-identifié, renseignez ici </label></td>
                                            <td><input type="text" id="germe1_non_identifie" name="germe1_non_identifie" class="inputs2" /></td>
                                        </tr>
                                    </table>
                                    <br><br><br>
                                    <hr>
                                    <table>
                                        <tr>
                                            <td><label id="label_antibiogramme_fait" for="antibiogramme_fait">Antibiogramme fait &nbsp;</label></td>
                                            <td>
                                                <select id="antibiogramme_fait" name="antibiogramme_fait">
                                                    <option value=""></option>
                                                    <option value="oui">Oui</option>
                                                    <option value="non">Non</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </table>
                                    <br>

                                    <!-- new_part_1 -->

                                    <!-- info_patient_germe START -->

                                    <br>
                                    <table class="ipg" style="display:none; width:100%; border-spacing: 7px;" id="first">
                                        <tr>
                                            <td><label for="antibiotique_1" id="label_antibiotique_1">Antibiotique 1</label>
                                                <input type="text" id="antibiotique_1" name="antibiotique_1" class="inputs2" />
                                            </td>
                                            <td><label for="sensible_1"> Sensible</label></td>
                                            <td><input type="radio" id="sensible_1" name="antibiotique_1"></td>
                                            <td><label for="intermédiaire_1"> Intermédiaire</label></td>
                                            <td><input type="radio" id="intermediaire_1" name="antibiotique_1"></td>

                                            <td><label for="résistant_1"> Résistant</label></td>
                                            <td><input type="radio" id="resistant_1" name="antibiotique_1"></td>
                                            <td>
                                                <button type="button" style="width: 60%;" class="btn btn-primary" id="add-new-antibiotique">Ajouter résultat&nbsp;&nbsp;&nbsp;</button>

                                                <!-- <input class="btn btn-primary btn-sm" type="button" value="Ajouter" id="add-new-antibiotique" > -->

                                            </td>
                                        </tr>
                                        <tr>

                                        </tr>
                                    </table>
                                    <br><br>
                                    <table id="dataTable1" class="display" width="100%"></table>

                                    <!-- info_patient_germe END-->

                                    <!-- new_part_1_end -->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                    <button type="button" class="btn btn-primary">Enregistrer</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal 2 -->

                    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Liste des enregistrements effectués</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SADJI Form END -->




                    <table id="" style="width:95%;border-spacing: 7px;">
                        <tr>
                            <td><label id="label_germe1_identifie" for="germe1_identifie">Germe1 identifié </label></td>
                            <td>
                                <select id="germe1_identifie" name="germe1_identifie">
                                    <option value=""></option>
                                    <option value="escherichia_coli">Escherichia coli</option>
                                    <option value="salmonella">Salmonella</option>
                                    <option value="shigelles">Shigelles</option>
                                </select>
                            </td>

                            <td><label id="label_antibiogramme_germe1_fait" for="antibiogramme_germe1_fait">Antibiogramme germe1 fait </label></td>
                            <td>
                                <select id="antibiogramme_germe1_fait" name="antibiogramme_germe1_fait">
                                    <option value=""></option>
                                    <option value="oui">Oui</option>
                                    <option value="non">Non</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_germe2_identifie" for="germe2_identifie">Germe2 identifié </label></td>
                            <td> <input type="text" id="germe2_identifie" name="germe2_identifie" class="inputs2" /></td>

                            <td><label id="label_antibiogramme_germe2_fait" for="antibiogramme_germe2_fait">Antibiogramme germe2 fait </label></td>
                            <td>
                                <select id="antibiogramme_germe2_fait" name="antibiogramme_germe2_fait">
                                    <option value=""></option>
                                    <option value="oui">Oui</option>
                                    <option value="non">Non</option>
                                </select>
                            </td>
                        </tr>

                    </table>
                    <br><br>
                    <label style="font-style:italic;font-size:19px;">AGENTS NON SPECIFIQUES IDENTIFIES :</label>
                    <br><br>
                    <table id="" style="width:95%;border-spacing: 7px;">
                        <tr>
                            <td><label id="label_germe1_non_specifique_identifie" for="germe1_non_specifique_identifie">Germe1 non spécifique identifié </label></td>
                            <td> <input type="text" id="germe1_non_specifique_identifie" name="germe1_non_specifique_identifie" class="inputs2" /></td>

                            <td><label id="label_antibiogramme_germe1_non_specifique_fait" for="antibiogramme_germe1_non_specifique_fait">Antibiogramme germe1 non spécifique fait </label></td>
                            <td>
                                <select id="antibiogramme_germe1_non_specifique_fait" name="antibiogramme_germe1_non_specifique_fait">
                                    <option value=""></option>
                                    <option value="oui">Oui</option>
                                    <option value="non">Non</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_germe2_non_specifique_identifie" for="germe2_non_specifique_identifie">Germe2 non spécifique identifié </label></td>
                            <td> <input type="text" id="germe2_non_specifique_identifie" name="germe2_non_specifique_identifie" class="inputs2" /></td>

                            <td><label id="label_antibiogramme_germe2_non_specifique_fait" for="antibiogramme_germe2_non_specifique_fait">Antibiogramme germe2 non spécifique fait </label></td>
                            <td>
                                <select id="antibiogramme_germe2_non_specifique_fait" name="antibiogramme_germe2_non_specifique_fait">
                                    <option value=""></option>
                                    <option value="oui">Oui</option>
                                    <option value="non">Non</option>
                                </select>
                            </td>
                        </tr>
                    </table>

                    <br><br>
                    <label style="font-style:italic;font-size:19px;">CONCLUSION(S):</label>
                    <br><br>
                    <table id="" style="width:95%;border-spacing: 7px;">
                        <tr>
                            <td><label id="label_absence_bacteries_enteropathogenes" for="absence_bacteries_enteropathogenes"> Absence de bactéries entéropathogènes </label></td>
                            <td>
                                <select id="absence_bacteries_enteropathogenes" name="absence_bacteries_enteropathogenes">
                                    <option value=""></option>
                                    <option value="oui">Oui</option>
                                    <option value="non">Non</option>
                                </select>
                            </td>
                            <td><label id="label_autres_bacteries" for="autres_bacteries">Autres bactéries </label></td>
                            <td><input type="text" id="autres_bacteries" name="autres_bacteries" class="inputs2" /></td>
                        </tr>

                    </table>

                    <br>
                    <br>
                    <br>
                    <input id="sbt_info_mal_bacterio" value="Enregistrer les informations" class="myButton" style="padding:13px;" />
                </form>





                <!-- Page for Respiratory -->
                <!-- ----------------- ----->
                <!-- ----------------- ----->
                <form id="respform" method="POST" action="php/pageToGoResp.php" style="font-weight: normal;width:91%" class="div_table_style_class">
                    <div style="font-weight: bold;display: none;" id="div_nav_modif">
                        <a id="bt_moins" href='javascript:void(0)' class="class_bt_suiv_prec"><img src="images/left.png" /></a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a id="bt_plus" href='javascript:void(0)' class="class_bt_suiv_prec"><img src="images/right.png" /></a>
                        <br /> <br /> <br />
                    </div>

                    <input type="text" style="display:none;" id="id" name="id" value="NA" />
                    <input type="text" style="display:none;" name="maladie" value="Yellow fever/Fievre Jaune" />

                    <input type="text" style="display:none;" name="auteur_saisie" value="tp38gi7kh" />

                    <input type="text" style="display:none;" name="nom_laboratoire" value="INSTITUT PASTEUR" />
                    <label style="color:red; font-size:11px; font-style:italic;">(*) Champs obligatoires</label>
                    <br />
                    <br><br><br>

                    <br><br>
                    <table style="width:95%;border-spacing: 7px;">
                        <tr>
                            <td><label for="num_etiquette" id="label_num_etiquette">Numéro d'étiquette</label><label style="color:red;">(*)</label>:</td>
                            <td>
                                <input type="text" id="num_etiquette" name="num_etiquette" class="inputs2" />
                            </td>
                            <td><label for="id_patient" id="label_id_patient">ID Patient</label><label style="color:red;">(*)</label>:</td>
                            <td>
                                <input type="text" id="id_patient" name="id_patient" class="inputs2" />
                            </td>
                        </tr>

                    </table>
                    <br>
                    <style>
                        #table_epi td {
                            font-size: 16px;
                            padding: 4px;
                        }
                    </style>
                    <br><br><br>
                    <hr>
                    <!--table style="width:90%;border-spacing: 0px; text-align:left;" id="table_epi"-->

                    <label style="font-weight:bold;font-size:22px;">EXAMEN RESPIRATOIRE</label>
                    <br><br>
                    <!--table style="width:90%;border-spacing: 0px; text-align:left;" id="table_epi"-->

                    <table id="" style="width:95%;border-spacing: 7px;">

                        <tr>
                            <td><label id="label_nature_prelevement" for="nature_prelevement">Nature prélèvement: </label></td>
                            <td>
                                <select id="nature_prelevement" name="nature_prelevement">
                                    <option value=""></option>
                                    <option value="nasal">Ecouvillonnage nasal</option>
                                    <option value="gorge">Ecouvillonnage gorge</option>
                                </select>
                            </td>
                            <td><label id="label_methode_diagnostic" for="methode_diagnostic">Méthode de diagnostic: </label></td>
                            <td>
                                <select id="methode_diagnostic" name="methode_diagnostic">
                                    <option value=""></option>
                                    <option value="pcr_grippe">Real Time PCR sur le Gene Met HA du virus de la grippe</option>
                                    <option value="autre"> autre, précisez </option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_date_rendu_resultat" for="date_rendu_resultat">Date de rendu des Résultats: </label></td>
                            <td>
                                <input type="text" id="date_rendu_resultat" name="date_rendu_resultat" class="inputs2" />
                                <script type="text/javascript">
                                    new JsDatePick({
                                        useMode: 2,
                                        target: "date_rendu_resultat",
                                        dateFormat: "%Y-%m-%d"
                                    });
                                </script>
                                <a href="javascript:void(0);" class="class_button_clear" onclick="$('#date_rendu_resultat').val('');">
                                    <img src="images/clear.png" class="class_clear_img" />
                                </a>

                            </td>
                            <td><label id="label_personne_envoi_resultat" for="personne_envoi_resultat">Personne qui envoie les résultats: </label></td>
                            <td> <input type="text" id="personne_envoi_resultat" name="personne_envoi_resultat" class="inputs2" /></td>
                        </tr>
                        <tr>
                            <td><label id="label_condition_arrivee_prelevement" for="condition_arrivee_prelevement">Condition d’arrivée des prélèvements: </label></td>
                            <td>
                                <select id="condition_arrivee_prelevement" name="condition_arrivee_prelevement">
                                    <option value=""></option>
                                    <option value="bon">Bonne</option>
                                    <option value="mauvais">Mauvaise</option>
                                    <option value="inutilisable">Inutilisable</option>
                                </select>
                            </td>
                        </tr>
                    </table>


                    <br><br><br>
                    <hr>
                    <label style="font-weight:bold;font-size:22px;">Pathogènes testés et résultats:</label><br>
                    <br><br>
                    <table id="" style="width:95%;border-spacing: 7px;">
                        <tr>
                            <td><label id="label_virus_influenza" for="virus_influenza"> Virus influenza </label></td>
                            <td>
                                <select id="virus_influenza" name="virus_influenza">
                                    <option value=""></option>
                                    <option value="oui">Oui</option>
                                    <option value="non">Non</option>
                                </select>
                            </td>
                        </tr>
                    </table>

                    <table class="info_virus_influenza" style="display:none; width:95%; border-spacing: 7px;">
                        <tr>
                            <td><label id="label_influenza_A" for="influenza_A">Influenza A:</label> </td>
                            <td>
                                <select id="influenza_A" name="influenza_A">
                                    <option value=""></option>
                                    <option value="oui">Oui</option>
                                    <option value="non">Non</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_influenza_B" for="influenza_B">Influenza B:</label> </td>
                            <td>
                                <select id="influenza_B" name="influenza_B">
                                    <option value=""></option>
                                    <option value="oui">Oui</option>
                                    <option value="non">Non</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_influenza_C" for="influenza_C">Influenza C:</label> </td>
                            <td>
                                <select id="influenza_C" name="influenza_C">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_autres_virus_respiratoires" for="autres_virus_respiratoires">Autres virus respiratoires:</label> </td>
                            <td>
                                <select id="autres_virus_respiratoires" name="autres_virus_respiratoires">
                                    <option value=""></option>
                                    <option value="oui">Oui</option>
                                    <option value="non">Non</option>
                                </select>
                            </td>
                        </tr>
                    </table>

                    <br><br><br>
                    <table class="info_autres_virus_respiratoires" style="display:none; width:95%; border-spacing: 7px;">
                        <tr>
                            <td> <label style="font-weight:bold;font-size:16px;text-align: center;">Info autres virus respiratoires:</label></td>
                        </tr>
                        <tr>
                            <td><label id="label_adenovirus" for="adenovirus">Adenovirus:</label> </td>
                            <td>
                                <select id="adenovirus" name="adenovirus">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                            <td><label id="label_rhinovirus" for="rhinovirus">Rhinovirus :</label> </td>
                            <td>
                                <select id="rhinovirus" name="rhinovirus">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_enterovirus" for="enterovirus">Enterovirus:</label> </td>
                            <td>
                                <select id="enterovirus" name="enterovirus">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                            <td><label id="label_vrs" for="vrs">Virus respiratoire syncytial (VRS) : A et B</label> </td>
                            <td>
                                <select id="vrs" name="vrs">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_coronavirus" for="coronavirus">coronavirus:</label> </td>
                            <td>
                                <select id="coronavirus" name="coronavirus">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                            <td><label id="label_coronavirus_229_E" for="coronavirus_229_E">Coronavirus 229 E :</label> </td>
                            <td>
                                <select id="coronavirus_229_E" name="coronavirus_229_E">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_coronavirus_OC43" for="coronavirus_OC43">Coronavirus OC43:</label> </td>
                            <td>
                                <select id="coronavirus_OC43" name="coronavirus_OC43">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                            <td><label id="label_coronavirus_NL63" for="coronavirus_NL63"> Coronavirus NL63 :</label> </td>
                            <td>
                                <select id="coronavirus_NL63" name="coronavirus_NL63">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_coronavirus_HKU1" for="coronavirus_HKU1">Coronavirus HKU1:</label> </td>
                            <td>
                                <select id="coronavirus_HKU1" name="coronavirus_HKU1">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                            <td><label id="label_metapneumovirus" for="metapneumovirus"> Metapneumovirus :</label> </td>
                            <td>
                                <select id="metapneumovirus" name="metapneumovirus">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_parainfluenza_1" for="parainfluenza_1">Parainfluenza 1:</label> </td>
                            <td>
                                <select id="parainfluenza_1" name="parainfluenza_1">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                            <td><label id="label_parainfluenza_2" for="parainfluenza_2"> Parainfluenza 2 :</label> </td>
                            <td>
                                <select id="parainfluenza_2" name="parainfluenza_2">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_parainfluenza_3" for="parainfluenza_3">Parainfluenza 3:</label> </td>
                            <td>
                                <select id="parainfluenza_3" name="parainfluenza_3">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                            <td><label id="label_parainfluenza_4" for="parainfluenza_4"> Parainfluenza 4 :</label> </td>
                            <td>
                                <select id="parainfluenza_4" name="parainfluenza_4">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_bocavirus" for="bocavirus">Bocavirus :</label> </td>
                            <td>
                                <select id="bocavirus" name="bocavirus">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                            <td><label id="label_parechovirus" for="parechovirus"> Parechovirus:</label> </td>
                            <td>
                                <select id="parechovirus" name="parechovirus">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_covid_19" for="covid_19">Covid-19 :</label> </td>
                            <td>
                                <select id="covid_19" name="covid_19">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                            <td><label id="label_autres_viruss" for="autres_viruss"> Autres virus respiratoires:</label> </td>
                            <td><input type="text" id="autres_viruss" name="autres_viruss" class="inputs2" /></td>
                        </tr>
                    </table>

                    <br><br><br>
                    <table class="info_influenza_A" style="display:none; width:95%; border-spacing: 7px;">
                        <tr>
                            <td> <label style="font-weight:bold;font-size:16px;text-align: center;">Info influenza A:</label></td>
                        </tr>
                        <tr>
                            <td><label id="label_A_h1n1" for="A_h1n1">A (H1N1)pdm:</label> </td>
                            <td>
                                <select id="A_h1n1" name="A_h1n1">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                            <td><label id="label_A_h3n2" for="A_h3n2">A (H3N2):</label> </td>
                            <td>
                                <select id="A_h3n2" name="A_h3n2">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_A_h5n1" for="A_h5n1">A (H5N1):</label> </td>
                            <td>
                                <select id="A_h5n1" name="A_h5n1">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                            <td><label id="label_A_non_typable" for="A_non_typable">A NON TYPABLE:</label> </td>
                            <td>
                                <select id="A_non_typable" name="A_non_typable">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                    <br><br><br>

                    <table class="info_influenza_B" style="display:none; width:95%; border-spacing: 7px;">
                        <tr>
                            <td> <label style="font-weight:bold;font-size:16px;text-align: center;">Info influenza B:</label></td>
                        </tr>
                        <tr>
                            <td><label id="label_lignee_yamagata" for="lignee_yamagata">Lignée Yamagata:</label> </td>
                            <td>
                                <select id="lignee_yamagata" name="lignee_yamagata">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                            <td><label id="label_lignee_victoria" for="lignee_victoria">Lignée Victoria:</label> </td>
                            <td>
                                <select id="lignee_victoria" name="lignee_victoria">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                    <br><br><br>




                    <br><br>
                    <table id="" style="width:95%;border-spacing: 7px;">
                        <tr>
                            <td><label id="label_bacteries_recherchees" for="bacteries_recherchees"> Bactéries recherchées </label></td>
                            <td>
                                <select id="bacteries_recherchees" name="bacteries_recherchees">
                                    <option value=""></option>
                                    <option value="oui">Oui</option>
                                    <option value="non">Non</option>
                                </select>
                            </td>
                        </tr>
                    </table>

                    <table class="info_bacteries_recherchees" style="display:none; width:95%; border-spacing: 7px;">
                        <tr>
                            <td><label id="label_haemophilus_influenzae" for="haemophilus_influenzae">Haemophilus influenzae:</label> </td>
                            <td>
                                <select id="haemophilus_influenzae" name="haemophilus_influenzae">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                            <td><label id="label_streptococcus_pneumoniae" for="streptococcus_pneumoniae"> Streptococcus pneumoniae:</label> </td>
                            <td>
                                <select id="streptococcus_pneumoniae" name="streptococcus_pneumoniae">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_legionella_pneumophila" for="legionella_pneumophila">Legionella pneumophila:</label> </td>
                            <td>
                                <select id="legionella_pneumophila" name="legionella_pneumophila">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                            <td><label id="label_bordetella_pertussis" for="bordetella_pertussis">Bordetella pertussis:</label> </td>
                            <td>
                                <select id="bordetella_pertussis" name="bordetella_pertussis">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_chlamydophila_pneumoniae" for="chlamydophila_pneumoniae">Chlamydophila pneumoniae:</label> </td>
                            <td>
                                <select id="chlamydophila_pneumoniae" name="chlamydophila_pneumoniae">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                            <td><label id="label_mycoplasma_pneumoniae" for="mycoplasma_pneumoniae">Mycoplasma pneumoniae:</label> </td>
                            <td>
                                <select id="mycoplasma_pneumoniae" name="mycoplasma_pneumoniae">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_staphylococcus_aureus" for="staphylococcus_aureus">Staphylococcus aureus :</label> </td>
                            <td>
                                <select id="staphylococcus_aureus" name="staphylococcus_aureus">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                            <td><label id="label_pneumocystis_jiroveci" for="pneumocystis_jiroveci">Pneumocystis jiroveci:</label> </td>
                            <td>
                                <select id="pneumocystis_jiroveci" name="pneumocystis_jiroveci">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_moraxella_catarrhalis" for="moraxella_catarrhalis">Moraxella catarrhalis :</label> </td>
                            <td>
                                <select id="moraxella_catarrhalis" name="moraxella_catarrhalis">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                            <td><label id="label_klebsiella_pneumoniae" for="klebsiella_pneumoniae"> Klebsiella pneumoniae:</label> </td>
                            <td>
                                <select id="klebsiella_pneumoniae" name="klebsiella_pneumoniae">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_autres_bacteries_resp" for="autres_bacteries_resp"> Autres bactéries:</label> </td>
                            <td>
                                <select id="autres_bacteries_resp" name="autres_bacteries_resp">
                                    <option value=""></option>
                                    <option value="oui">Oui</option>
                                    <option value="non">Non</option>
                                </select>
                            </td>
                            <td><label id="label_nom_autres_bacteries" for="nom_autres_bacteries"> Nom de la bactérie:</label> </td>
                            <td><input type="text" id="nom_autres_bacteries" name="nom_autres_bacteries" class="inputs2" /></td>
                        </tr>
                    </table>


                    <br>
                    <br />
                    <br />
                    <input type="submit" id="sbt_info_mal_resp" value="Enregistrer les informations" class="myButton" style="padding:13px;" />

                </form>




                <!-- Page for Arbo -->
                <!-- ----------------- -->
                <!-- ----------------- -->
                <form id="arboform" method="POST" action="php/pageToGoArbo.php" style="font-weight: normal;width:91%" class="div_table_style_class">
                    <div style="font-weight: bold;display: none;" id="div_nav_modif">
                        <a id="bt_moins" href='javascript:void(0)' class="class_bt_suiv_prec"><img src="images/left.png" /></a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a id="bt_plus" href='javascript:void(0)' class="class_bt_suiv_prec"><img src="images/right.png" /></a>
                        <br /> <br /> <br />
                    </div>

                    <input type="text" style="display:none;" id="id" name="id" value="NA" />
                    <input type="text" style="display:none;" name="maladie" value="Yellow fever/Fievre Jaune" />

                    <input type="text" style="display:none;" name="auteur_saisie" value="tp38gi7kh" />

                    <input type="text" style="display:none;" name="nom_laboratoire" value="INSTITUT PASTEUR" />
                    <label style="color:red; font-size:11px; font-style:italic;">(*) Champs obligatoires</label>
                    <br />
                    <br><br><br>

                    <br><br>
                    <table style="width:95%;border-spacing: 7px;">
                        <tr>
                            <td><label for="num_etiquette" id="label_num_etiquette">Numéro d'étiquette</label><label style="color:red;">(*)</label>:</td>
                            <td>
                                <input type="text" id="num_etiquette" name="num_etiquette" class="inputs2" />
                            </td>
                            <td><label for="id_patient" id="label_id_patient">ID Patient</label><label style="color:red;">(*)</label>:</td>
                            <td>
                                <input type="text" id="id_patient" name="id_patient" class="inputs2" />
                            </td>
                        </tr>

                    </table>
                    <br>
                    <style>
                        #table_epi td {
                            font-size: 16px;
                            padding: 4px;
                        }
                    </style>
                    <br><br><br>
                    <hr>
                    <label style="font-weight:bold;font-size:22px;">EXAMEN SANGUIN</label>
                    <br><br>
                    <!--table style="width:90%;border-spacing: 0px; text-align:left;" id="table_epi"-->

                    <table id="" style="width:95%;border-spacing: 7px;">

                        <tr>
                            <td><label for="date_reception_lab_arbo" id="label_date_reception_lab_arbo">Date de réception au Labo: </label></td>
                            <td>
                                <input type="text" id="date_reception_lab_arbo" name="date_reception_lab_arbo" class="inputs2" />
                                <script type="text/javascript">
                                    new JsDatePick({
                                        useMode: 2,
                                        target: "date_reception_lab_arbo",
                                        dateFormat: "%Y-%m-%d"
                                    });
                                </script>
                                <a href="javascript:void(0);" class="class_button_clear" onclick="$('#date_reception_lab_arbo').val('');">
                                    <img src="images/clear.png" class="class_clear_img" />
                                </a>

                            </td>

                            <td><label for="heure_reception_lab_arbo" id="label_heure_reception_lab_arbo"> Heure de réception : </label></td>
                            <td>
                                <input type="time" id="heure_reception_lab_arbo" name="heure_reception_lab_arbo" class="inputs2" />
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_etat_echantillon_arbo" for="etat_echantillon_arbo">Etat de l’échantillon de sang à la réception au labo: </label></td>
                            <td>
                                <select id="etat_echantillon_arbo" name="etat_echantillon_arbo">
                                    <option value=""></option>
                                    <option value="bon">Bonnes Conditions</option>
                                    <option value="mauvais">Mauvaises Conditions</option>
                                </select>
                            </td>
                            <td><label id="label_formulaire_investigation" for="formulaire_investigation">Formulaire d’investigation : </label></td>
                            <td>
                                <select id="formulaire_investigation" name="formulaire_investigation">
                                    <option value=""></option>
                                    <option value="bien_renseigne">Bien renseigné</option>
                                    <option value="incomplet">Renseignements incomplets</option>
                                    <option value="absent">Absent</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_nom_expediteur" for="nom_expediteur"> Nom de l’expéditeur : </label></td>
                            <td>
                                <input type="text" id="nom_expediteur" name="nom_expediteur" class="inputs2" />
                            </td>
                            <td><label id="label_adate_expedition_resultat" for="date_expedition_resultat">Date d’expédition des résultats : </label></td>
                            <td>
                                <input type="text" id="date_expedition_resultat" name="date_expedition_resultat" class="inputs2" />
                                <script type="text/javascript">
                                    new JsDatePick({
                                        useMode: 2,
                                        target: "date_expedition_resultat",
                                        dateFormat: "%Y-%m-%d"
                                    });
                                </script>
                                <a href="javascript:void(0);" class="class_button_clear" onclick="$('#date_expedition_resultat').val('');">
                                    <img src="images/clear.png" class="class_clear_img" />
                                </a>
                            </td>
                        </tr>

                    </table>
                    <br><br><br>
                    <hr>
                    <label style="font-weight:bold;font-size:22px;">RESULTATS</label><br>
                    <label style="font-style:italic;font-size:19px;">Sérologie:</label>
                    <br><br>
                    <table id="" style="width:95%;border-spacing: 7px;">
                        <tr>
                            <td><label id="label_date_envoi_sero" for="date_envoi_sero">Date d’envoi </label></td>
                            <td>
                                <input type="text" id="date_envoi_sero" name="date_envoi_sero" class="inputs2" />
                                <script type="text/javascript">
                                    new JsDatePick({
                                        useMode: 2,
                                        target: "date_envoi_sero",
                                        dateFormat: "%Y-%m-%d"
                                    });
                                </script>
                                <a href="javascript:void(0);" class="class_button_clear" onclick="$('#date_envoi_sero').val('');">
                                    <img src="images/clear.png" class="class_clear_img" />
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_igM_YF" for="igM_YF">IgM YF </label></td>
                            <td>
                                <select id="igM_YF" name="igM_YF">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                            <td><label id="label_igM_YF_positif" for="igM_YF_positif">Si Positif ? Titre:</label></td>
                            <td>
                                <input type="text" id="igM_YF_positif" name="igM_YF_positif" class="inputs2" />
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_igM_DEN" for="igM_DEN">IgM DEN</label></td>
                            <td>
                                <select id="igM_DEN" name="igM_DEN">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                            <td><label id="label_igM_DEN_positif" for="igM_DEN_positif">Si Positif ? Titre:</label></td>
                            <td>
                                <input type="text" id="igM_DEN_positif" name="igM_DEN_positif" class="inputs2" />
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_igM_WN" for="igM_WN">IgM WN</label></td>
                            <td>
                                <select id="igM_WN" name="igM_WN">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                            <td><label id="label_igM_WN_positif" for="igM_WN_positif">Si Positif ? Titre:</label></td>
                            <td>
                                <input type="text" id="igM_WN_positif" name="igM_WN_positif" class="inputs2" />
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_igM_RVF" for="igM_RVF">IgM RVF</label></td>
                            <td>
                                <select id="igM_RVF" name="igM_RVF">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                            <td><label id="label_igM_RVF_positif" for="igM_RVF_positif">Si Positif ? Titre:</label></td>
                            <td>
                                <input type="text" id="igM_RVF_positif" name="igM_RVF_positif" class="inputs2" />
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_igM_CHIK" for="igM_CHIK">IgM CHIK</label></td>
                            <td>
                                <select id="igM_CHIK" name="igM_CHIK">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                            <td><label id="label_igM_CHIK_positif" for="igM_CHIK_positif">Si Positif ? Titre:</label></td>
                            <td>
                                <input type="text" id="igM_CHIK_positif" name="igM_CHIK_positif" class="inputs2" />
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_igM_CCHF" for="igM_CCHF">IgM CCHF</label></td>
                            <td>
                                <select id="igM_CCHF" name="igM_CCHF">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                            <td><label id="label_igM_CCHF_positif" for="igM_CCHF_positif">Si Positif ? Titre:</label></td>
                            <td>
                                <input type="text" id="igM_CCHF_positif" name="igM_CCHF_positif" class="inputs2" />
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_igM_ZIKA" for="igM_ZIKA">IgM ZIKA</label></td>
                            <td>
                                <select id="igM_ZIKA" name="igM_ZIKA">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                            <td><label id="label_igM_ZIKA_positif" for="igM_ZIKA_positif">Si Positif ? Titre:</label></td>
                            <td>
                                <input type="text" id="igM_ZIKA_positif" name="igM_ZIKA_positif" class="inputs2" />
                            </td>
                        </tr>
                    </table>
                    <br><br>
                    <hr>



                    <label style="font-style:italic;font-size:19px;">Séroneutralisation:</label>
                    <br><br>
                    <table id="" style="width:95%;border-spacing: 7px;">
                        <tr>
                            <td><label id="label_date_envoi_seroneutra" for="date_envoi_seroneutra">Date d’envoi </label></td>
                            <td>
                                <input type="text" id="date_envoi_seroneutra" name="date_envoi_seroneutra" class="inputs2" />
                                <script type="text/javascript">
                                    new JsDatePick({
                                        useMode: 2,
                                        target: "date_envoi_seroneutra",
                                        dateFormat: "%Y-%m-%d"
                                    });
                                </script>
                                <a href="javascript:void(0);" class="class_button_clear" onclick="$('#date_envoi_seroneutra').val('');">
                                    <img src="images/clear.png" class="class_clear_img" />
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_YF" for="YF">YF </label></td>
                            <td>
                                <select id="YF" name="YF">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                            <td><label id="label_YF_positif" for="YF_positif">Si Positif ? Titre:</label></td>
                            <td>
                                <input type="text" id="YF_positif" name="YF_positif" class="inputs2" />
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_DEN" for="DEN">DEN</label></td>
                            <td>
                                <select id="DEN" name="DEN">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                            <td><label id="label_DEN_positif" for="DEN_positif">Si Positif ? Titre:</label></td>
                            <td>
                                <input type="text" id="DEN_positif" name="DEN_positif" class="inputs2" />
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_WN" for="WN">WN</label></td>
                            <td>
                                <select id="WN" name="WN">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                            <td><label id="label_WN_positif" for="WN_positif">Si Positif ? Titre:</label></td>
                            <td>
                                <input type="text" id="WN_positif" name="WN_positif" class="inputs2" />
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_RVF" for="RVF">RVF</label></td>
                            <td>
                                <select id="RVF" name="RVF">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                            <td><label id="label_RVF_positif" for="RVF_positif">Si Positif ? Titre:</label></td>
                            <td>
                                <input type="text" id="RVF_positif" name="RVF_positif" class="inputs2" />
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_CHIK" for="CHIK">CHIK</label></td>
                            <td>
                                <select id="CHIK" name="CHIK">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                            <td><label id="label_CHIK_positif" for="CHIK_positif">Si Positif ? Titre:</label></td>
                            <td>
                                <input type="text" id="CHIK_positif" name="CHIK_positif" class="inputs2" />
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_CCHF" for="CCHF">CCHF</label></td>
                            <td>
                                <select id="CCHF" name="CCHF">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                            <td><label id="label_CCHF_positif" for="CCHF_positif">Si Positif ? Titre:</label></td>
                            <td>
                                <input type="text" id="CCHF_positif" name="CCHF_positif" class="inputs2" />
                            </td>
                        </tr>
                    </table>
                    <br><br>
                    <hr>


                    <label style="font-style:italic;font-size:19px;">Biologie moléculaire:</label>
                    <br><br>
                    <table id="" style="width:95%;border-spacing: 7px;">
                        <tr>
                            <td><label id="label_date_envoi_biomol" for="date_envoi_biomol">Date d’envoi </label></td>
                            <td>
                                <input type="text" id="date_envoi_biomol" name="date_envoi_biomol" class="inputs2" />
                                <script type="text/javascript">
                                    new JsDatePick({
                                        useMode: 2,
                                        target: "date_envoi_biomol",
                                        dateFormat: "%Y-%m-%d"
                                    });
                                </script>
                                <a href="javascript:void(0);" class="class_button_clear" onclick="$('#date_envoi_biomol').val('');">
                                    <img src="images/clear.png" class="class_clear_img" />
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_ARN_YF" for="ARN_YF">ARN YF </label></td>
                            <td>
                                <select id="ARN_YF" name="ARN_YF">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                            <td><label id="label_ARN_DEN" for="ARN_DEN">ARN DEN</label></td>
                            <td>
                                <select id="ARN_DEN" name="ARN_DEN">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>

                        </tr>
                        <tr>
                            <td><label id="label_ARN_WN" for="ARN_WN">ARN WN</label></td>
                            <td>
                                <select id="ARN_WN" name="ARN_WN">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                            <td><label id="label_ARN_RVF" for="ARN_RVF">ARN RVF</label></td>
                            <td>
                                <select id="ARN_RVF" name="ARN_RVF">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_ARN_ZIKA" for="ARN_ZIKA">ARN ZIKA</label></td>
                            <td>
                                <select id="ARN_ZIKA" name="ARN_ZIKA">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                            <td><label id="label_ARN_CCHF" for="ARN_CCHF">ARN CCHF</label></td>
                            <td>
                                <select id="ARN_CCHF" name="ARN_CCHF">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_ARN_CHIK" for="ARN_CHIK">ARN CHIK</label></td>
                            <td>
                                <select id="ARN_CHIK" name="ARN_CHIK">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                            <td><label id="label_ARN_HEV" for="ARN_HEV">ARN HEV</label></td>
                            <td>
                                <select id="ARN_HEV" name="ARN_HEV">
                                    <option value=""></option>
                                    <option value="Positif">Positif</option>
                                    <option value="Negatif">Négatif</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label id="label_autre_arbovirose_teste" for="autre_arbovirose_teste">Autre arbovirose testée</label></td>
                            <td>
                                <select id="autre_arbovirose_teste" name="autre_arbovirose_teste">
                                    <option value=""></option>
                                    <option value="oui">Oui</option>
                                    <option value="non">Non</option>
                                </select>
                            </td>
                            <td><label id="label_nom_arbovirose_teste" for="nom_arbovirose_teste">Nom de l’arbovirose testée :</label></td>
                            <td>
                                <input type="text" id="nom_arbovirose_teste" name="nom_arbovirose_teste" class="inputs2" />
                            </td>
                        </tr>
                    </table>
                    <br><br>
                    <hr>


                    <label style="font-style:italic;font-size:19px;">Conclusion:</label>
                    <br><br>
                    <table id="" style="width:95%;border-spacing: 7px;">
                        <tr>
                            <td><label id="label_recherche_anticorps_igm" for="recherche_anticorps_igm">Recherche d’anticorps de type IgM dirigés contre les virus suivants: </label></td>
                            <td>
                                <select id="recherche_anticorps_igm" name="recherche_anticorps_igm">
                                    <option value=""></option>
                                    <option value="oui">Oui</option>
                                    <option value="non">Non</option>
                                </select>
                            </td>
                            <td><label id="label_resultat_recherche_anticorps_igm" for="resultat_recherche_anticorps_igm" class="resultat_recherche_anticorps_igm"> Mettre les résultats de la sérologie : </label></td>
                            <td class="resultat_recherche_anticorps_igm"> <input type="text" id="resultat_recherche_anticorps_igm" name="resultat_recherche_anticorps_igm" class="inputs2" /> </td>
                        </tr>

                        <tr>
                            <td><label id="label_recherche_genome_viral" for="recherche_genome_viral">Recherche de génome viral des virus suivants: </label></td>
                            <td>
                                <select id="recherche_genome_viral" name="recherche_genome_viral">
                                    <option value=""></option>
                                    <option value="oui">Oui</option>
                                    <option value="non">Non</option>
                                </select>
                            </td>
                            <td><label id="label_resultat_recherche_genome_viral" for="resultat_recherche_genome_viral" class="resultat_recherche_genome_viral">Mettre les résultats de la biologie moléculaire : </label></td>
                            <td class="resultat_recherche_genome_viral"> <input type="text" id="resultat_recherche_genome_viral" name="resultat_recherche_genome_viral" class="inputs2" /> </td>
                        </tr>

                    </table>


                    <br>
                    <br />
                    <br />
                    <input type="submit" id="sbt_info_mal_arbo" value="Enregistrer les informations" class="myButton" style="padding:13px;" />

                </form>


                <div class="bas_de_page"> Institut Pasteur de Dakar, SENEGAL - &copy; 2021 </div>


            </div>
    </center>


    <!-- Nice alert -->
    <script src="plugins/alertify/alertify.min.js"></script>
    <link rel="stylesheet" href="plugins/alertify/alertify.core.css" />
    <link rel="stylesheet" href="plugins/alertify/alertify.bootstrap.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>


</body>
<link type="text/css" rel="stylesheet" href="css/jquery.autocomplete.css" />
<script src="js/jquery.autocomplete.js?1.0"></script>
<script type="text/javascript" language="javascript" src="js/script.js"></script>

</html>