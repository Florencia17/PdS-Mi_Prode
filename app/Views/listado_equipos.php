<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Listado Equipos</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Listado Equipos</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
         
           
           
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
              
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">

                            <?php if(session('msj')) {?>
                            <div class="alert alert-success">
                            <?php echo session('msj') ?>
							</div>
                            <?php }?>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Imagen</th>
                                                    <th>Nombre</th>
                                                    <th>Codigo FIFA</th>
                                                    <th>Clasificacion</th>
                                                    <th>Titulos</th>
                                                    <th>Modificar</th>
                                                    <th>Borrar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach($equipos as $equipo) { ?>

                                                <tr>
                                                <th><?php echo $equipo["id"]?></th>
                                                <td>1</td>
                                                <td><?php echo $equipo["nombre"]?></td>
                                                <td><?php echo $equipo["codigo"] ?></td>
                                                <td><?php echo $equipo["clasificacion"] ?></td>
                                                <td><?php echo $equipo["titulos"] ?></td>
                                                <td>
                                                <a onclick="return msj2(<?=  $equipo['id']?>)">
                                                    <button type="button" class="btn btn-success">Modificar<i class="bi bi-pencil-square" style="color:white"></i>
                                                    </button>
                                                    </a>
                                                </td>
                                                <td >
                                                
                                                    <a onclick="return msj(<?=  $equipo['id']?>)">
                                                    <button type="submit" class="btn btn-danger">Borrar<i style="color:withe" class="bi bi-x-circle"></i>
                                                    </button>
                                                    </a>
                                                </td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>2018 © Admin Board. - <a href="#">example.com</a></p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <script>
    function msj(equipoId) {

       location.href = "<?= base_url('/eliminar')?>/" + equipoId; 
        
    }
</script>

<script>
    function msj2(equipoId) {

       location.href = "<?= base_url('/modificar')?>/" + equipoId; 
        
    }
</script>

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


