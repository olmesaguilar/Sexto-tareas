$().ready(() => {
    cargaTabla();
});

var cargaTabla = () => {
    $.get("../controllers/alumnos.controller.php?op=todos", (listaAlumnos=>{
        var tabla = '';
        $.each(listaAlumnos, (index, alumno) => {
            tabla += `<tr>
            <td>${alumno.idalumno}</td>
            <td>${alumno.nombre}</td>
            <td>${alumno.apellido}</td>
            <td>${alumno.edad}</td>
            <td>${alumno.sexo}</td>
            </tr>`;
        });
        $("#cuerpo").html(tabla);
    }
            part: 'snippet',
            q: 'java',
            type: 'video',
            key: '<YOUR_GoogleAPIKey_HERE>'
        },
        function(data) {
            var tabla = '';
            $.each(data.items, (index, video) => {
                tabla += `<tr>
                <td>${video.snippet.title}</td>
                <td>${video.snippet.description}</td>
                <td><img src="${video.snippet.thumbnails.default.url}" alt=""></td>
                </tr>`;
            });
            $("#cuerpo").html(tabla);
        }
    );
}