
//soumission du formulaire
document.getElementById("sbt_info_mal_bacterio").addEventListener("click", function (e) {
    e.preventDefault();
    //récupérer tous les champs et les envoyer par ajax : post
});

//ajouter une nouvelle ligne d'antibiotique au clic

let antiB_result = [];
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
            antiB_result.push({ "germe": "", "antibiotique": "", "resultat": true })
            r1.checked = false
        } else if (r2.checked == true) {
            antiB_result.push({ "germe": "", "antibiotique": "", "resultat": true })
            r1.checked = false

        } else if (r3.checked == true) {
            antiB_result.push({ "germe": "", "antibiotique": "", "resultat": true })
            r1.checked = false

        }
        //TODO réinitialiser les champs : antibiotique_1, et les radios
    }
});
