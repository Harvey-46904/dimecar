
     $(document).ready(function() {
        $('#tabla_contable').DataTable(
            {"language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
                }}
        );
 //graficar();

 
 
        });



function datos(data){
    console.log(data);

    $(".placa").val(data.placa);
    $(".vehiculo").val(data.nombre_vehiculo);
}

function mirar_contabilidad(id){
    window.location = "./contabilidad/"+id;
}
function graficar(){
    var chartDiv = $("#barChart");
    var myChart = new Chart(chartDiv, {
        type: 'pie',
        data: {
            labels: ["Entrada", "Salida"],
            datasets: [
            {
                data: [21,39],
                backgroundColor: [
                   "#2EFE64",
                "#FF0000",
               
            
                ]
            }]
        },
        options: {
            title: {
                display: true,
                text: 'Entrada & Salida'
            },
            responsive: true,
    maintainAspectRatio: false,
        }
    });
}
