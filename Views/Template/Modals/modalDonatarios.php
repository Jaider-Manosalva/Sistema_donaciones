<!-- Modal -->
<div class="modal fade" id="modalFormDonatario" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header headerRegister">
        <h5 class="modal-title" id="titleModal">Nuevo Donatario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formDonatario" name="formDonatario" class="form-horizontal">
          <input type="hidden" id="idDonatario" name="idDonatario" value="">
          <p class="text-primary">Todos los campos son obligatorios.</p>

          <!-- Información Personal -->
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="txtDocumento">Documento</label>
              <input type="text" class="form-control valid validNumber" id="txtDocumento" name="txtDocumento"
                required="">
            </div>
            <div class="form-group col-md-4">
              <label for="txtNombre">Nombre</label>
              <input type="text" class="form-control valid validText" id="txtNombre" name="txtNombre" required="">
            </div>
            <div class="form-group col-md-4">
              <label for="txtDireccion">Dirección</label>
              <input type="text" class="form-control" id="txtDireccion" name="txtDireccion" required="">
            </div>
          </div>

          <!-- Información de Contacto -->
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="txtEmail">Correo</label>
              <input type="email" class="form-control valid validEmail" id="txtEmail" name="txtEmail" required="">
            </div>
            <div class="form-group col-md-6">
              <label for="listEstadoCivil">Estado Civil</label>
              <select class="form-control" id="listEstadoCivil" name="listEstadoCivil" required>
                <option value="soltero">Soltero</option>
                <option value="casado">Casado</option>
                <option value="union_libre">Unión Libre</option>
              </select>
            </div>
          </div>

          <!-- Datos del Cónyuge (Mostrar si estado civil es casado o unión libre) -->
          <div id="conyugeInfo" style="display: none;">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="txtConyugeDocumento">Documento del Cónyuge</label>
                <input type="text" class="form-control valid validNumber" id="txtConyugeDocumento"
                  name="txtConyugeDocumento">
              </div>
              <div class="form-group col-md-6">
                <label for="txtConyugeNombre">Nombre del Cónyuge</label>
                <input type="text" class="form-control valid validText" id="txtConyugeNombre" name="txtConyugeNombre">
              </div>
            </div>
          </div>

          <!-- Empleo -->
          <div class="form-row">
            <div class="form-group col-md-6">
              <label>Tienes trabajo?</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="empleoRadio" id="empleoSi" value="SI">
                <label class="form-check-label" for="empleoSi">Sí</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="empleoRadio" id="empleoNo" value="NO">
                <label class="form-check-label" for="empleoNo">No</label>
              </div>
            </div>
            <div class="form-group col-md-6" id="motivoDesempleo" style="display: none;">
              <label for="txtMotivoDesempleo">Motivo de Desempleo</label>
              <textarea class="form-control" id="txtMotivoDesempleo" name="txtMotivoDesempleo"></textarea>
            </div>
            <!-- Campo para seleccionar empleado público o privado -->
            <div class="form-group col-md-6" id="empleadoTipo" style="display: none;">
              <label>Empleado Público o Privado</label>
              <select class="form-control" id="listEmpleadoTipo" name="listEmpleadoTipo">
                <option value="publico">Empleado Público</option>
                <option value="privado">Empleado Privado</option>
              </select>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label>Tiene hijos?</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="hijosRadio" id="hijosSi" value="SI">
                <label class="form-check-label" for="hijosSi">Sí</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="hijosRadio" id="hijosNo" value="NO">
                <label class="form-check-label" for="hijosNo">No</label>
              </div>
            </div>
          </div>

          <!-- Información del Niño(a) -->
          <div class="nino-info" style="display: none;">
            <div class="form-row">
              <div class="form-group col-md-4 ">
                <label for="txtNombreNino">Nombre del Niño(a)</label>
                <input type="text" class="form-control valid validText" id="txtNombreNino" name="txtNombreNino">
              </div>
              <div class="form-group col-md-4">
                <label for="txtDocumentoNino">Documento de Identidad del Niño(a)</label>
                <select class="form-control" id="txtDocumentoNino" name="txtDocumentoNino">
                  <option value="registro">Registro</option>
                  <option value="tarjeta">Tarjeta</option>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label for="txtNumeroDocumentoNino">Número de Documento del Niño(a)</label>
                <input type="text" class="form-control valid validNumber" id="txtNumeroDocumentoNino"
                  name="txtNumeroDocumentoNino">
              </div>
              <div class="form-group col-md-4">
                <label for="txtFechaNacimiento">Fecha de Nacimiento</label>
                <input type="date" class="form-control" id="txtFechaNacimiento" name="txtFechaNacimiento">
              </div>
              <!-- Edad del Niño(a) (Calcular automáticamente) -->
              <div class="form-group col-md-4">
                <label>Edad del Niño(a)</label>
                <input type="text" class="form-control" id="txtEdadNino" readonly>
              </div>
            </div>
          </div>


          <!-- Mensaje para candidato a patrocinio -->
          <div id="candidatoPatrocinio" style="display: none;">
            <p class="text-danger">El niño es candidato a ser patrocinado.</p>
          </div>

          <!-- Autorización para publicar datos -->
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="chkAutorizacionPublicar" name="chkAutorizacionPublicar">
            <label class="form-check-label" for="chkAutorizacionPublicar">Autorización para publicar datos y
              fotografías
              del niño en la página para buscar quien lo patrocine.</label>
          </div>

          <!-- Cursos a inscribir al niño(a) -->
          <div class="form-group">
            <label>Cursos a inscribir al Niño(a)</label>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="chkCanto" name="chkCanto">
              <label class="form-check-label" for="chkCanto">Canto</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="chkGuitarra" name="chkGuitarra">
              <label class="form-check-label" for="chkGuitarra">Guitarra</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="chkPiano" name="chkPiano">
              <label class="form-check-label" for="chkPiano">Piano</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="chkTrompeta" name="chkTrompeta">
              <label class="form-check-label" for="chkTrompeta">Trompeta</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="chkViolin" name="chkViolin">
              <label class="form-check-label" for="chkViolin">Violín</label>
            </div>
          </div>

          <div class="tile-footer">
            <button id="btnActionForm" class="btn btn-primary" type="submit"><i
                class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText">Guardar</span></button>&nbsp;&nbsp;&nbsp;
            <button class="btn btn-danger" type="button" data-dismiss="modal"><i
                class="fa fa-fw fa-lg fa-times-circle"></i>Cerrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>



<script>
// JavaScript para mostrar/ocultar campos según las selecciones del usuario
document.addEventListener("DOMContentLoaded", function() {
  const estadoCivilSelect = document.getElementById("listEstadoCivil");
  const conyugeInfo = document.getElementById("conyugeInfo");
  const empleoSiRadio = document.getElementById("empleoSi");
  const empleoNoRadio = document.getElementById("empleoNo");
  const motivoDesempleo = document.getElementById("motivoDesempleo");
  const fechaNacimiento = document.getElementById("txtFechaNacimiento");
  const edadNino = document.getElementById("txtEdadNino");
  const candidatoPatrocinio = document.getElementById("candidatoPatrocinio");

  const hijosSiRadio = document.getElementById("hijosSi");
  const hijosNoRadio = document.getElementById("hijosNo");
  const datosNino = document.querySelector(".nino-info");

  // Event listener para la selección de si tiene hijos o no
  hijosSiRadio.addEventListener("change", function() {
    if (hijosSiRadio.checked) {
      datosNino.style.display = "block";
    } else {
      datosNino.style.display = "none";
    }
  });

  hijosNoRadio.addEventListener("change", function() {
    if (hijosNoRadio.checked) {
      datosNino.style.display = "none";
    }
  });

  // Event listener para el cambio en el estado civil
  estadoCivilSelect.addEventListener("change", function() {
    if (estadoCivilSelect.value === "casado" || estadoCivilSelect.value === "union_libre") {
      conyugeInfo.style.display = "block";
    } else {
      conyugeInfo.style.display = "none";
    }
  });

  // Agrega una variable global para rastrear si se mostró el mensaje
  let mensajeMostrado = false;

  // Event listener para calcular la edad del niño(a)
  fechaNacimiento.addEventListener("change", function() {
    const birthDate = new Date(fechaNacimiento.value);
    const currentDate = new Date();
    const age = currentDate.getFullYear() - birthDate.getFullYear();
    edadNino.value = age;
    if (age >= 6 && age <= 12 && empleoNoRadio.checked && !mensajeMostrado) {
      candidatoPatrocinio.style.display = "block";
      mensajeMostrado = true;
    } else {
      candidatoPatrocinio.style.display = "none";
      mensajeMostrado = false;
    }
  });

  // Event listener para la selección de tener trabajo o no
  empleoSiRadio.addEventListener("change", function() {
    if (empleoSiRadio.checked) {
      motivoDesempleo.style.display = "none";
      // Ocultar el mensaje de candidato a patrocinio cuando cambia la respuesta a tener trabajo
      if (mensajeMostrado) {
        candidatoPatrocinio.style.display = "none";
        mensajeMostrado = false;
      }
      // Ocultar el campo de selección de empleado público o privado cuando tiene trabajo
      empleadoTipo.style.display = "none";
    } else {
      motivoDesempleo.style.display = "block";
      // Mostrar el campo de selección de empleado público o privado cuando no tiene trabajo
      empleadoTipo.style.display = "block";
    }
  });


  empleoNoRadio.addEventListener("change", function() {
    if (empleoNoRadio.checked) {
      motivoDesempleo.style.display = "block";
      // Ocultar el campo de selección de empleado público o privado cuando tiene trabajo
      empleadoTipo.style.display = "none";
      const age = edadNino.value;
      if (age >= 6 && age <= 12) {
        candidatoPatrocinio.style.display = "block";
      }

    }
  });

  // Event listener para la selección de tener trabajo o no
  empleoSiRadio.addEventListener("change", function() {
    if (empleoSiRadio.checked) {
      motivoDesempleo.style.display = "none";
      // Mostrar el campo de selección de empleado público o privado
      empleadoTipo.style.display = "block";
    } else {
      motivoDesempleo.style.display = "block";
      // Ocultar el campo de selección de empleado público o privado
      empleadoTipo.style.display = "none";
    }
  });
});
</script>

<!-- Modal -->
<div class="modal fade" id="modalViewDona" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header header-primary">
        <h5 class="modal-title" id="titleModal">Datos del usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">
          <tbody>
            <tr>
              <td>Documento niño:</td>
              <td id="docNino">654654654</td>
            </tr>
            <tr>
              <td>Nombre niño:</td>
              <td id="NameNino">Jacob</td>
            </tr>
            <tr>
              <td>Nacimiento:</td>
              <td id="Nacimiento">Jacob</td>
            </tr>
            <tr>
              <td>Edad:</td>
              <td id="Edad">Larry</td>
            </tr>
            <tr>
              <td>Patrocinio:</td>
              <td id="Patrocinio">Larry</td>
            </tr>
            <tr>
              <td>Autorizacion:</td>
              <td id="Autorizacion">Larry</td>
            </tr>
            <tr>
              <td>Documento Padre:</td>
              <td id="docPadre">Larry</td>
            </tr>
            <tr>
              <td>Nombre Padre:</td>
              <td id="namePadre">Larry</td>
            </tr>
            <tr>
              <td>Direccion:</td>
              <td id="Dirección">Larry</td>
            </tr>
            <tr>
              <td>Correo:</td>
              <td id="Correo">Larry</td>
            </tr>
            <tr>
              <td>Estado Civil:</td>
              <td id="EstadoCivilPadre">Larry</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>