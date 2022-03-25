<div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="../assets/Logo-educamas.png" alt="logo">
                    </a>
                </div>
                <div class="login-form">
                    <!-- a este formulario le decimos que si se ejecuta va a enviar el metodo post -->
                    <form method="post">
                        <div class="form-group">
                            <label>Correo electrónico</label>
                            <input type="email" class="form-control" id="ingemail" name="ingemail" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Contraseña</label>
                            <input type="password" class="form-control" id="ingpassword" name="ingpassword" placeholder="Contraseña">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">Recordar
                            </label>
                            <label class="pull-right">
                                <a href="#">¿Olvidaste la contraseña?</a>
                            </label>

                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Ingresar</button>
                     <!--  llamamos a nuestra clase controladorAdministrador para poder utilizar la funcion de ingreso -->
                   <?php
$login = new ControladorAdministrador();
$login -> ctrIngresoAdministrador();
                   ?>
                    </form>
                </div>
            </div>
        </div>