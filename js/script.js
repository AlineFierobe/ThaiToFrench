// ajout du copyright avec l'année à jour
const annee = new Date();
const anneeEnCours = annee.getFullYear();
const copyright = document.querySelector('#copyright');

copyright.textContent = anneeEnCours;