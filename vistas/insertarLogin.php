<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>LibreriaGenesis</title>
        <meta content="Admin Dashboard" name="description" />

        <!-- App Icons -->
        <link rel="shortcut icon" href="../public/assets/images/logo1.gif">

        <!-- Basic Css files -->
        <link href="../public/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../public/assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="../public/assets/css/style.css" rel="stylesheet" type="text/css">

    </head>
    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>


        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <h3 class="text-center m-0">
                        <a href="registrarse-php" class="logo logo-admin"><img src="../public/assets/images/logo1.gif" height="150px" width="130px"  alt="logo1"></a>
                    </h3>

                    <div class="p-3">
                        <h4 class="text-muted font-18 m-b-5 text-center">BIENVENIDOS !</h4>
                        <p class="text-muted text-center">Inicie sesión para continuar.</p>

                        <form class="form-horizontal m-t-30" action="login.php" method="POST">

                            <div class="form-group">
                                <label for="correo">Usuario:</label>
                                <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingrese su Usuario" autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label for="contrasena">contraseña</label>
                                <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Ingrese su contraseña"  autocomplete="off">
                            </div>

                            <div class="form-group row m-t-20">
                                <div class="col-sm-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customControlInline">
                                        <label class="custom-control-label" for="customControlInline">Recuérdame</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Iniciar Sesión</button>
                                </div>
                            </div>

                            <div class="form-group m-t-10 mb-0 row">
                                <div class="col-12 m-t-20">
                                    <a href="pages-recoverpw.php" class="text-muted"><i class="mdi mdi-lock"></i>¿Olvidaste tu contraseña?</a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p class="text-white">¿No tienes una cuenta?<a href="pages-register.php" class="font-500 font-14 text-white font-secondary">Regístrate ahora </a> </p>
                <p class="text-white">© <?php echo date("Y",strtotime("-1 year")); ?> -  <?php echo date("Y"); ?> Libreria Genesis. </i> UES</p>
            </div>

        </div>


        <!-- jQuery  -->
        <script src="../public/assets/js/jquery.min.js"></script>
        <script src="../public/assets/js/popper.min.js"></script><!-- Popper for Bootstrap -->
        <?php include '../layouts/footer.php'; ?>

        <?php include '../layouts/footerScript.php'; ?>
                <!-- App js -->
        

    </body>
</html>