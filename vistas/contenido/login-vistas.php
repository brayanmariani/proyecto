    <!-- Main wrapper  -->
    <div id="main-wrapper">

        <div class="unix-login">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="login-content card">
                            <div class="login-form">
                                <h4>Login</h4>
                                <form method="POST">
                                    <div class="form-group">
                                        <label>Correo</label>
                                        <input type="email" class="form-control" placeholder="Correo" name="correo">
                                    </div>
                                    <div class="form-group">
                                        <label>Contraseña</label>
                                        <input type="password" class="form-control" placeholder="Contraseña" name="clave">
                                    </div>
                                    <input type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" value="Acceder">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php 
    if(isset($_POST['correo']) && isset($_POST['clave']))
   
       require_once './controlador/loginControlador.php';
    $ins_login=new loginControlador();
    echo $ins_login->iniciar_sesion_controlador();
    
    ?>