//données à envoyer par post
let antiB_result = [];
//données du datatable
let dataSet = [];
let table;
$(document).ready(function () {
    table = $('#dataTable1').DataTable({
        data: dataSet,
        columns: [
            { title: "Germe" },
            { title: "Antibiotique" },
            { title: "résultat" } //TODO mettre un flat button pour supprimer
        ]
    });
});


//soumission du formulaire
document.getElementById("sbt_info_mal_bacterio").addEventListener("click", function (e) {
    e.preventDefault();
    console.log(antiB_result);
    //récupérer tous les champs et les envoyer par ajax : post
});



let addBtn = document.querySelector('#add-new-antibiotique');

addBtn.addEventListener('click', function (e) {
    //TODO récupérer le germe et tester si non nul
    let antibiotiqueValue = document.querySelector('#antibiotique_1').value;
    let r1 = document.querySelector('#sensible_1');
    let r2 = document.querySelector('#intermediaire_1');
    let r3 = document.querySelector('#resistant_1');
    let germe1_identifie = document.querySelector('#germe1_identifie').value;

    if (antibiotiqueValue === "") {
        alert('entrer la valeur de l\'antibiotique');
    }
    else if (germe1_identifie == "") {
        alert('germe manquant!');
    } else {
        if (r1.checked == true) {
            antiB_result.push({ "germe": germe1_identifie, "antibiotique": antibiotiqueValue, "resultat": true })
            dataSet.push([germe1_identifie, antibiotiqueValue, "sensible"])

            r1.checked = false

        } else if (r2.checked == true) {
            antiB_result.push({ "germe": germe1_identifie, "antibiotique": antibiotiqueValue, "resultat": true })
            r1.checked = false
            dataSet.push([germe1_identifie, antibiotiqueValue, "intermédiaire"])


        } else if (r3.checked == true) {
            antiB_result.push({ "germe": germe1_identifie, "antibiotique": antibiotiqueValue, "resultat": true })
            r1.checked = false
            dataSet.push([germe1_identifie, antibiotiqueValue, "résistant"])

        } else {
            alert('resultat manquant!');

        }
        document.querySelector('#antibiotique_1').value = "";
        console.log(dataSet);
        //TODO Mettre à jour la datatable
        $('#dataTable1').DataTable().ajax.reload();




    }
});
