var notLikedIcons = document.getElementsByClassName('notliked');


Array.from(notLikedIcons).forEach(function(icon) {
    icon.addEventListener('click', function() {

        var likedIcons = this.parentNode.getElementsByClassName('liked');


        Array.from(likedIcons).forEach(function(likedIcon) {
            likedIcon.style.display = 'inline-block';
        });

        this.style.display = 'none';
        e
    });
});




var notLikedIcons = document.getElementsByClassName('notliked');


Array.from(notLikedIcons).forEach(function(icon) {
    icon.addEventListener('click', function() {

        var likedIcons = this.parentNode.getElementsByClassName('liked');


        Array.from(likedIcons).forEach(function(likedIcon) {
            likedIcon.style.display = 'inline-block';
        });

        this.style.display = 'none';
    });
});