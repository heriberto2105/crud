$( document ).ready(function() {
    
    listarAlumno();

    $("#minputnombre").jqxInput({ height: 25, width: "100%", minLength: 1 });
    $("#minputapellidopaterno").jqxInput({ height: 25, width: "100%", minLength: 1 });
    $("#minputapellidomaterno").jqxInput({ height: 25, width: "100%", minLength: 1 });
    $("#minputfecha").jqxDateTimeInput({ width: '100%', height: '25px',formatString: 'yyyy-MM-dd' });
    $("#minputdirrecion").jqxInput({ height: 25, width: "100%", minLength: 1 });
    
    $( "#guardar" ).click(function() {
        var selectedrowindex = $('#listadoalumnos').jqxGrid('selectedrowindex'); 
        var datarow = $("#listadoalumnos").jqxGrid('getrowdata', selectedrowindex);  
        $.ajax({
            url: "operaciones/operaciones.php",
            type: 'POST',
            dataType: "json",
            data:{ 
                actualizar  		        :   true,
                minputnombre                :   $("#minputnombre").val(),
                minputapellidopaterno       :   $("#minputapellidopaterno").val(),
                minputapellidomaterno       :   $("#minputapellidomaterno").val(),
                minputfecha                 :   $("#minputfecha").val(),
                minputdirrecion             :   $("#minputdirrecion").val(),
                id                          :   datarow.id,

              },
            success: function(data){
                alert("alumno actualizado correctamente");
                location.reload();
            },
            error: function (xhr, ajaxOptions, thrownError) {
              console.log(thrownError);
              /*$(".loading-modal").hide();*/
            }
          });
    });
    

    $("#listadoalumnos").jqxGrid(
        {
        width: '100%',            
        pageable: true,
        autoheight: true,
        sortable: true,
        altrows: true,
        enabletooltips: true,
        columns: [

           
            { text: 'id', datafield: 'id', width: "10%",hidden:true },
            { text: 'Nombre',  datafield: 'nombre', width: "20%" },
            { text: 'Apellido Paterno',  datafield: 'apellidopaterno',  width: "15%" },
            { text: 'Apellido Materno',  datafield: 'apellidomaterno',  width: "15%" },
            { text: 'Fecha Nacimiento', datafield: 'fecha_nacimiento',  width: "20%" },
            { text: 'Dirrección', datafield: 'dirreccion',  width: "20%" },
            
            { text: 'Editar', datafield: 'Edit', columntype: 'button',width:"10%", cellsrenderer: function () {
            return "Editar";
            }, buttonclick: function (row) {
                var data = $('#listadoalumnos').jqxGrid('getrowdata',row);
                $("#mnombrealumno").text(data.nombre + " "+ data.apellidopaterno + " "+ data.apellidomaterno);
                
                $('#minputnombre').val(data.nombre);
                $('#minputapellidopaterno').val(data.apellidopaterno);
                $('#minputapellidomaterno').val(data.apellidomaterno);
                $('#minputdirrecion').val(data.dirreccion);
                /*const d = new Date(data.fecha_nacimiento);
                console.log(d);*/

                var parts =data.fecha_nacimiento.split('-');
                // Please pay attention to the month (parts[1]); JavaScript counts months from 0:
                // January - 0, February - 1, etc.
                var mydate = new Date(parts[0], parts[1] - 1, parts[2]); 
                console.log(mydate.toDateString());


               
                $('#minputfecha').jqxDateTimeInput('val', mydate);
                //$('#jqxDateTimeInput').val(new Date(data.fecha_nacimiento) );


                $('#detallealumno').modal('toggle');
            }
            }
        ],
    });

    
    function listarAlumno(){
        $.ajax({
            url: "operaciones/operaciones.php",
            type: 'GET',
            dataType: "json",
            data:{ 
                listaralumnos  		:   true,
            },
            success: function(data){
                var gridData = data;
                var gridSource ={
                            localdata: gridData,
                            datatype: 'json'
                        };
                var gridDataAdapter = new $.jqx.dataAdapter(gridSource);
                $("#listadoalumnos").jqxGrid({ source: gridDataAdapter,});


            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError);
                /*$(".loading-modal").hide();*/
            }
            });
    }
});
