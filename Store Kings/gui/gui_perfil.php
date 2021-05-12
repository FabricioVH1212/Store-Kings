<?php include('inc/header.php');?>
  <!-- begin container -->
  <div class="container"style="position: relative;top:100px;">
        <!-- begin panel -->
        <div class="panel  panel-inverse">
             <!-- begin panel-heading -->
               <div class="panel-heading">
                   <h4 class="panel-title">Store Kings || Perfil</h4>
                </div>
             <!-- end panel-heading -->
             <!-- begin alert -->
             <div class="alert alert-secondary fade show"style="height:50px;">
                 <div class="float-left">
                    <a  href="principal.php"class="btn btn-sm btn-warning m-r-5"><i class="fa fa-arrow-circle-left col-lg " aria-hidden="true"></i></a>
                 </div>
            </div>
            <!-- end alert -->
             <!-- begin panel-body -->
             <div class="panel-body">
                 <h1 class = "text-center">Informaci&oacute;n personal</h1><hr class = "my-4">
                 <!-- begin col-md-12 -->
                    <div class="col-md-12">
                     <form method="POST" action="#" enctype="multipart/form-data">
                            <!-- begin row -->
                            <div class="row">
                                <!-- begin col-md-6 -->
                                <div class="col-md-6">
                                    <div class="form-group row m-b-15">
                                        <label class="col-form-label col-md-3">N&uacute;mero de identificaci&oacute;n:</label>
                                        <div class="col-md-9">
                                            <input type="number" name="num_ide" class="form-control m-b-5" placeholder="N&uacute;mero de identificaci&oacute;n" disabled="disabled" value="<?=$cliente["NUM_IDENTIFICACION"]?>"/>
                                        </div>
                                    </div>                
                                    <div class="form-group row m-b-15">
                                        <label class="col-form-label col-md-3">Apellidos:</label>
                                        <div class="col-md-9">
                                            <input type="text" name="txt_apellidos" class="form-control m-b-5" placeholder="Apellidos de la persona" value="<?= $cliente["DSC_APELLIDOS"]?>"required />
                                        </div>
                                    </div> 
                                    <div class="form-group row m-b-15">
                                        <label class="col-form-label col-md-3">Correo electr&oacute;nico:</label>
                                        <div class="col-md-9">
                                            <input type="email" name="txt_email" class="form-control m-b-5" placeholder="Correo electr&oacute;nico" value="<?= $cliente["DSC_CORREO"]?>" required/>
                                        </div>
                                    </div>  
                                </div>
                                <!-- end col-md-6 -->
                                <!-- begin col-md-6 -->
                                <div class="col-md-6">
                                    <div class="form-group row m-b-15">
                                        <label class="col-form-label col-md-3">Nombre:</label>
                                        <div class="col-md-9">
                                            <input type="text" name="txt_nombre" class="form-control m-b-5" placeholder="Nombre de la persona" value="<?= $cliente["DSC_NOMBRE"]?>"required />
                                        </div>
                                    </div>                    
                                    <div class="form-group row m-b-15">
                                        <label class="col-form-label col-md-3">N&uacute;mero telef&oacute;nico:</label>
                                        <div class="col-md-9">
                                            <input type="number" name="txt_telefono" class="form-control m-b-5" placeholder="N&uacute;mero telef&oacute;nico" value="<?= $cliente["NUM_TELEFONO"]?>" required/>
                                        </div>
                                    </div>  
                                    <div class="form-group row m-b-15">
                                        <label class="col-form-label col-md-3">C&oacute;digo postal:</label>
                                         <div class="col-md-9">
                                            <input type="text" name="txt_codigo" class="form-control m-b-5" placeholder="C&oacute;digo postal" value="<?= $cliente["DSC_CODIGO"]?>" required/>
                                        </div>
                                    </div>                   
                                </div>
                                <!-- end col-md-6 -->
                                <!-- begin col-md-12 -->
                                <div class="col-md-12">
                                    <div class="form-group row m-b-15">
                                        <label class="col-form-label col-md-3">Ingrese su contrase&ntilde;a anterior</label>
                                        <div class="col-md-9">
                                           <input type="password" name="txt_contrasena" class="form-control m-b-5" placeholder="*****" required autocomplete="off" />
                                        </div>
                                    </div>
                                    <div class="form-group row m-b-15">
                                        <label class="col-form-label col-md-3">Ingrese su nueva contrase&ntilde;a</label>
                                        <div class="col-md-9">
                                           <input type="password" name="txt_contrasena1" class="form-control m-b-5" placeholder="*****" required autocomplete="off"/>
                                        </div>
                                    </div>    
                                    <div class="form-group row m-b-15">
                                        <label class="col-form-label col-md-3">Vuelva a ingresar su contrase&ntilde;a</label>
                                        <div class="col-md-9">
                                           <input type="password" name="txt_confirm" class="form-control m-b-5" placeholder="*****" required autocomplete="off"/>
                                        </div>
                                    </div>                    
                                </div>
                                <!-- end col-md-12 -->
                                <!-- begin col-md- 12-->                  
                                <div class="col-md-12">
                                    <div class="float-right">
                                        <a  href = "principal.php"class="btn btn-xl btn-danger m-r-5 text-white" >Cancelar</a>
                                        <input type="submit" class="btn btn-xl btn-warning m-r-5" name="btn_enviar" value="Guardar">
                                    </div>
                                </div>
                                <!-- end col-md-12 -->
                            </div>
                            <!-- end row -->
                        </form>
                    </div>
                    <!-- end col-md-12 -->
             </div>
             <!-- end panel-body -->
        </div>
        <!-- end panel -->
    </div>
  <!-- end container -->
