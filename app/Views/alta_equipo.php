<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Alta Equipo</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Alta Equipo</li>
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
                                       
                                        <form class="form-valide" action="<?=base_url()?>/alta-equipo" method="post">
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-nombre">Nombre <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-nombre" name="nombre" placeholder="Ingrese el Nombre..">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-codigo">Codigo FIFA <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="val-codigo" name="codigo" placeholder="Ingrese el codigo FIFA..">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-clasificacion">Clasificacion <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="number" class="form-control" id="val-clasificacion" name="clasificacion" placeholder="Ingrese la clasificacion..">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-titulos">Titulos Ganados <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <input type="number" class="form-control" id="val-titulos" name="titulos" placeholder="Ingrese cantidad de titulos ganados..">
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