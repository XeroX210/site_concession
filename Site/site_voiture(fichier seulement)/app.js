//Fichier pour faire fonctionner le bouton pour le mode téléphone
let toggle = document.querySelector('.toggle');
let body = document.querySelector('body');

toggle.addEventListener('click', function() {
    body.classList.toggle('open');
});