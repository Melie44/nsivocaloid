window.afficher = function(){
    my_image.style.display = (my_image.style.display == "block") ? "none" : "block";
}

var my_button = document.getElementsByTagName('button')[0];
var my_image = document.getElementById('test');


my_button.onclick = afficher;


