$(document).ready(function () {

    $('#tablita').DataTable({
        "ajax": {

            url: "CONSULTA/consulta.php",

            dataSrc: "",
            success: function (response) {
                //$("#respuesta").append("respuesta coorectamente ingresada !!");
                console.log("maria");
            }
        },
        "columns": [{
                "data": "nombre",
                "data": "dni",
            }]

    })
});




