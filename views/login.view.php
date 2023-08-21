<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- link css -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Titulo de la pagina -->
    <title>Login</title>
</head>

<body>
    <section class="vh-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 text-black">

                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

                        <form style="width: 23rem;" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" name="login">

                            <div>
                                <img src="../img/Logo_Gategourmet.png" alt="Logo_GategourmetGate" width=200px>
                            </div>

                            <br>


                            <div class="form-group mb-4">
                                <input type="text" class="form-control form-control-lg" placeholder="correo@gategroup.com" name="usuario" />
                                <label class="form-label" for="form2Example18">Ingrese su correo corporativo</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" class="form-control form-control-lg" placeholder="contraseña" name="pass" />
                                <label class="form-label">Ingrese su contraseña</label>
                            </div>

                            <div class="pt-1 mb-4">
                                <i class="btn btn-dark" onclick="login.submit()">Ingresar</i>
                                <!-- <button class="btn btn-dark btn-lg btn-block" type="button" onclick="login.submit()">Ingresar</button> -->
                            </div>
                            <?php if (!empty($errores)) : ?>
                                <div class="error">
                                    <ul>
                                        <?php echo $errores; ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                        </form>

                    </div>

                </div>
                <div class="col-sm-6 px-0 d-none d-sm-block">
                    <img src="../img/img8.jpg" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
                </div>
            </div>
        </div>
    </section>

    <!-- Link boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>


</body>

</html>