
// const $notLikedIcon = document.querySelectorAll('notliked');
// const $likedIcon = document.querySelectorAll('liked');


// $notLikedIcon.addEventListener('click', function() {

//   $notLikedIcon.style.display = 'none';
//   $likedIcon.style.display = 'block';

// });

// $likedIcon.addEventListener('click', function() {

//   $likedIcon.style.display = 'none';
//   $notLikedIcon.style.display = 'block';

// });


// Récupération de tous les éléments avec la classe "notliked"
var notLikedIcons = document.getElementsByClassName('notliked');

// Ajout d'un gestionnaire d'événements à chaque icône "notliked"
Array.from(notLikedIcons).forEach(function(icon) {
  icon.addEventListener('click', function() {
    // Récupération de tous les éléments avec la classe "liked" sous l'élément parent
    var likedIcons = this.parentNode.getElementsByClassName('liked');
    
    // Affichage des icônes "liked" et masquage des icônes "notliked"
    Array.from(likedIcons).forEach(function(likedIcon) {
      likedIcon.style.display = 'inline-block';
    });
    
    this.style.display = 'none'; // Masquage de l'icône "notliked" cliquée
  });
});
// const $notLikedIcon = document.querySelectorAll('notliked');
// const $likedIcon = document.querySelectorAll('liked');


// $notLikedIcon.addEventListener('click', function() {

//   $notLikedIcon.style.display = 'none';
//   $likedIcon.style.display = 'block';

// });

// $likedIcon.addEventListener('click', function() {

//   $likedIcon.style.display = 'none';
//   $notLikedIcon.style.display = 'block';

// });


// Récupération de tous les éléments avec la classe "notliked"
var notLikedIcons = document.getElementsByClassName('notliked');

// Ajout d'un gestionnaire d'événements à chaque icône "notliked"
Array.from(notLikedIcons).forEach(function(icon) {
  icon.addEventListener('click', function() {
    // Récupération de tous les éléments avec la classe "liked" sous l'élément parent
    var likedIcons = this.parentNode.getElementsByClassName('liked');
    
    // Affichage des icônes "liked" et masquage des icônes "notliked"
    Array.from(likedIcons).forEach(function(likedIcon) {
      likedIcon.style.display = 'inline-block';
    });
    
    this.style.display = 'none'; // Masquage de l'icône "notliked" cliquée
  });
});
