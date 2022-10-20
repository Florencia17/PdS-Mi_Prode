<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Modificar Equipo</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Modificar Equipo</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-validation">
                                       
                                        <form class="form-valide" action="<?=base_url()?>/guardarModificacion" method="post">
                                    
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-nombre">Nombre <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                <input type="text" name="id" value="<?= $equipo['id']; ?>" hidden=""
                                                       class="form-control">
                                                <input type="text" class="form-control" id="val-nombre" name="nombre" value="<?= $equipo["nombre"];?>" placeholder="Ingrese el Nombre..">
                                                
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-codigo">Codigo FIFA <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-codigo" name="codigo" value="<?= $equipo["codigo"];?>"placeholder="Ingrese el codigo FIFA..">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-clasificacion">Clasificacion <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="number" class="form-control" id="val-clasificacion" name="clasificacion" value="<?= $equipo["clasificacion"];?>"placeholder="Ingrese la clasificacion..">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-titulos">Titulos Ganados <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="number" class="form-control" id="val-titulos" name="titulos" value="<?= $equipo["titulos"];?>"placeholder="Ingrese cantidad de titulos ganados..">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-imagen">Bandera <span class="text-danger">*</span></label>
                                                <div class="col-lg-6">
                                                    <select name="imagen" id="val-imagen">
                                                        
                                                    </select>
                                                  
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-8 ml-auto">
                                                    <button onclick="return formvalidation()" type="submit" class="btn btn-primary">Enviar</button>
                                                </div>
                                            </div>
                                        </form>

                                        <?php if(session()->has('errors')) {?>
                                            <div id="cont-errors-back" class="alert alert-danger alert-dismissible fade show">
											    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											    <strong>Errores: </strong><span id="errors-back" class="errors" value="puto"><?php echo implode(" ", session('errors'));?></span>
									        </div>
                                            <?php }?>
                                        
                                    <div id="cont-errors" class="alert alert-danger alert-dismissible fade show">
											<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<strong>Errores: </strong><span id="errors" class="errors"></span>
									</div>
                                    <?php session('errors')?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<script src="assets\js\lib\form-validation\formvalidation.js"></script>
<script> $("#cont-errors").hide(); </script>    


    <!-- jquery vendor -->
    <script src="assets/js/lib/jquery.min.js"></script>
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="assets/js/lib/menubar/sidebar.js"></script>
    <script src="assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    
    <!-- bootstrap -->

    <script src="assets/js/lib/bootstrap.min.js"></script><script src="assets/js/scripts.js"></script>
    <!-- scripit init-->
    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.flash.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/datatables-init.js"></script>
