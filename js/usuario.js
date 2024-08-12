$(document).ready(function(){
    
    var id_usuario = $('#id_usuario').val();
    console.log("ID Usuario: ", id_usuario);
    console.log("ID Usuario: ", nombre_us);
    
    buscar_usuario(id_usuario);

    function buscar_usuario(dato) {
        funcion = 'buscar_usuario';
        $.post('../controlador/usuario_controller.php',{ dato, funcion}, (response) =>{          
            console.log(response);

            let nombre = '';
            let apellido = '';
            let edad = '';
            let dni = '';
            let tipo = '';
            let telefono = '';
            let residencia = '';
            let correo = '';
            let sexo = '';
            let adicional = '';

            const usuario = JSON.parse(response);

            nombre += `${usuario.nombre}`;
            apellido += `${usuario.apellido}`;
            edad += `${usuario.edad}`;
            dni += `${usuario.dni}`;
            tipo += `${usuario.tipo}`;
            telefono += `${usuario.telefono}`;
            residencia += `${usuario.residencia}`;
            correo += `${usuario.correo}`;
            sexo += `${usuario.sexo}`;
            adicional += `${usuario.adicional}`;

            $('#nombre_us').html(nombre);
            $('#apellido_us').html(apellido);
            $('#edad_us').html(edad);
            $('#dni_us').html(dni);
            $('#telefono_us').html(telefono);
            $('#residencia_us').html(residencia);
            $('#correo_us').html(correo);
            $('#sexo_us').html(sexo);
            $('#adicional_us').html(adicional);
        })
    }
})