var ojo = document.getElementById('ojo');
var input_contra = document.getElementById('text_contrasena');
ojo.addEventListener('click', function(){
    if (input_contra.type == 'password'){
        input_contra.type = 'text';
        ojo.style.opacity = 0.8;
    }else{
        input_contra.type = 'password';
        ojo.style.opacity = 0.2;
    }
})