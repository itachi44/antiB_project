
//soumission du formulaire
document.getElementById("sbt_info_mal_bacterio").addEventListener("click", function (e) {
    e.preventDefault();
    //récupérer tous les champs et les envoyer par ajax : post
});

//ajouter une nouvelle ligne d'antibiotique au clic

let antibiotiqueValue = document.querySelector('#antibiotique_1');
let antibiotiqueValue = document.querySelector('#sensible_1');
let antibiotiqueValue = document.querySelector('#intermediaire_1');
let antibiotiqueValue = document.querySelector('#resistant_1');


let addBtn = document.querySelector('#add-new-antibiotique');

addBtn.addEventListener('click', function (e) {
    if (antibiotiqueValue === "") {
        alert('entrer une valeur');
    } else {
        //TODO réinitialiser les champs : antibiotique_1, et les radios
    }
});
