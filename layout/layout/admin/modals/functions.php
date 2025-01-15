
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

<div class="container-fluid d-flex justify-content-center align-items-center" style="height: 100vh;"> 
    <div class="d-flex gap-3">         
        <!-- Button trigger modal for Entrada -->
        <button type="button" ; style="margin-right: 50px"; class="btn btn-danger btn-lg" data-bs-toggle="modal" data-bs-target="#entradaModal">
            DISPENSADORA
        </button>    
        <!-- Modal for Entrada -->
        <div class="modal fade" id="entradaModal" tabindex="-1" aria-labelledby="entradaModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title fs-5" id="entradaModalLabel">Registro de entrada</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row"> 
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingNombre" placeholder="Ingrese su nombre">
                                    <label for="floatingNombre">Nombre</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingApellido" placeholder="Ingrese su apellido">
                                    <label for="floatingApellido">Apellido</label>
                                </div>
                            </div>
                        </div>
                        <div class="row"> 
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingCedula" placeholder="Ingrese su cedula">
                                    <label for="floatingCedula">Cédula</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingTelefono" placeholder="Ingrese su telefono">
                                    <label for="floatingTelefono">Teléfono</label>
                                </div>
                            </div>
                        </div>
                        <div class="row"> 
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingMatricula" placeholder="Ingrese su matricula">
                                    <label for="floatingMatricula">Matrícula</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Tipo de vehículo</option>
                                        <option value="1">Moto</option>
                                        <option value="2">Carro</option>
                                        <option value="3">Camioneta</option>
                                        <option value="4">Camión</option>
                                    </select>
                                    <label for="floatingSelect">Opciones</label> 
                                </div> 
                            </div> 
                        </div>
                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-success">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Button trigger modal for Salida -->
        <button type="button" style= "" ; class="btn btn-success btn-lg" data-bs-toggle="modal" data-bs-target="#salidaModal">
            VALIDADORA
        </button>
    </div>
</div>


        <!-- Modal for Salida -->
        <div class="modal fade" id="salidaModal" tabindex="-1" aria-labelledby="salidaModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title fs-5" id="salidaModalLabel">Registro de salida</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row"> 
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingMatricula" placeholder="Ingrese su matricula">
                                    <label for="floatingMatricula">Matrícula</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Tipo de vehículo</option>
                                        <option value="1">Moto</option>
                                        <option value="2">Carro</option>
                                        <option value="3">Camioneta</option>
                                        <option value="4">Camión</option>
                                    </select>
                                    <label for="floatingSelect">Opciones</label> 
                                </div> 
                            </div> 
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-success">Guardar</button>
                    </div>
                </div>
            </div>
        </div> 

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>