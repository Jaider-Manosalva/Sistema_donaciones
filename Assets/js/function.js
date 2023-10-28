var tableDonatarios;

document.addEventListener('DOMContentLoaded', function(){

	tableDonatarios = $('#tableDonatarios').dataTable( {
		"aProcessing":true,
		"aServerSide":true,
        "language": {
        	"url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        },
        "ajax":{
            "url": " "+base_url+"/Donatarios/getDonatarios",
            "dataSrc":""
        },
        "columns":[
            { data: "documentoNiño" },
            { data: "nombresNiño" },
            { data: "documentoPadre" },
            { data: "nombresPadre" },
            { data: "options" },
        ],
        dom: "lBfrtip",
        buttons: [
          {
            extend: "copyHtml5",
            text: "<i class='far fa-copy'></i> Copiar",
            titleAttr: "Copiar",
            className: "btn btn-secondary",
          },
          {
            extend: "excelHtml5",
            text: "<i class='fas fa-file-excel'></i> Excel",
            titleAttr: "Esportar a Excel",
            className: "btn btn-success",
          },
          {
            extend: "pdfHtml5",
            text: "<i class='fas fa-file-pdf'></i> PDF",
            titleAttr: "Esportar a PDF",
            className: "btn btn-danger",
          },
          {
            extend: "csvHtml5",
            text: "<i class='fas fa-file-csv'></i> CSV",
            titleAttr: "Esportar a CSV",
            className: "btn btn-info",
          },
        ],
        resonsieve: "true",
        bDestroy: true,
        iDisplayLength: 5,
        order: [[0, "desc"]],
    });
});

function openModal() {
    document.querySelector('#idDonatario').value ="";
    document.querySelector('.modal-header').classList.replace("headerUpdate", "headerRegister");
    document.querySelector('#btnActionForm').classList.replace("btn-info", "btn-primary");
    document.querySelector('#btnText').innerHTML ="Guardar";
    document.querySelector('#titleModal').innerHTML = "Nuevo Donatario";
    document.querySelector("#formDonatario").reset();
  $("#modalFormDonatario").modal("show");
}

function fntViewDonatario(idpersona){
  var idpersona = idpersona;
  var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
  var ajaxUrl = base_url+'/Donatarios/getDonatario/'+idpersona;
  request.open("GET",ajaxUrl,true);
  request.send();
  request.onreadystatechange = function(){
      if(request.readyState == 4 && request.status == 200){
          var objData = JSON.parse(request.responseText);

          if(objData.status)
          {
              document.querySelector("#docNino").innerHTML = objData.data.DocumentoNiño;
              document.querySelector("#NameNino").innerHTML = objData.data.NombreNiño;
              document.querySelector("#Nacimiento").innerHTML = objData.data.Nacimiento;
              document.querySelector("#Edad").innerHTML = objData.data.Edad;
              document.querySelector("#Patrocinio").innerHTML = objData.data.Patrocinio;
              document.querySelector("#Autorizacion").innerHTML = objData.data.Autorizacion;
              document.querySelector("#docPadre").innerHTML = objData.data.DocumentoPadre;
              document.querySelector("#namePadre").innerHTML = objData.data.NombrePadre; 
              document.querySelector("#Dirección").innerHTML = objData.data.DirecciónPadre;
              document.querySelector("#Correo").innerHTML = objData.data.CorreoPadre;
              document.querySelector("#EstadoCivilPadre").innerHTML = objData.data.EstadoCivilPadre;
              $('#modalViewDona').modal('show');
          }else{
              swal("Error", objData.msg , "error");
          }
      }
  }
}

function fntDelDonatario(idpersona){

  var idUsuario = idpersona;
  swal({
    title: "Eliminar Usuario",
    text: "¿Realmente quiere eliminar el Usuario?",
    type: "warning",
    showCancelButton: true,
    confirmButtonText: "Si, eliminar!",
    cancelButtonText: "No, cancelar!",
    closeOnConfirm: false,
    closeOnCancel: true
  }, function(isConfirm) {
    if (isConfirm) {
      swal("Eliminar!", objData.msg , "success");
    } else {
      // No es necesario hacer nada, la ventana emergente se cierra automáticamente
    }
  });

}

function fntEditDonatario(idpersona){
  document.querySelector('#titleModal').innerHTML ="Actualizar Donatario";
  document.querySelector('.modal-header').classList.replace("headerRegister", "headerUpdate");
  document.querySelector('#btnActionForm').classList.replace("btn-primary", "btn-info");
  document.querySelector('#btnText').innerHTML ="Actualizar";

      $('#modalFormDonatario').modal('show');
}
 