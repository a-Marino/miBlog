'use strict';

window.addEventListener('DOMContentLoaded', ()=>{

    var btnCrearPost = document.getElementById('crearPost');
    btnCrearPost.addEventListener('click', crearPost);

    function crearPost() {

        window.location = 'http://localhost:8000/posts/create';

    }


});