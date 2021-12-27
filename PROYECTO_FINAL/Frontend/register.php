<?php include_once("layouts/head.php"); ?>
<body>
    <div class="container-fluid">
        <div class="row min-vh-100">
            <div class="col-12">
                <?php include_once("layouts/header.php"); ?>
            </div>

            <div class="col-12">
                <!-- Main Content -->
                <div class="row">
                    <div class="col-12 mt-3 text-center text-uppercase">
                        <h2>Registrar</h2>
                    </div>
                </div>

                <main class="row">
                    <div class="col-lg-4 col-md-6 col-sm-8 mx-auto bg-white py-3 mb-4">
                        <div class="row">
                            <div class="col-12">
                                <form action="" method="post">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nombre</label>
                                        <input type="text" id="name" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Correo eletrónico</label>
                                        <input type="email" id="email" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="dni" class="form-label">DNI</label>
                                        <input type="text" id="dni" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Contraseña</label>
                                        <input type="password" id="password" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password-confirm" class="form-label">Confirmar contraseña</label>
                                        <input type="password" id="password-confirm" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" id="agree" class="form-check-input" required>
                                            <label for="agree" class="form-check-label ml-2">Acepto los términos y condiciones</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-outline-dark">Registrar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </main>
                <!-- Main Content -->
            </div>

            <div class="col-12 align-self-end">
                <?php include_once("layouts/footer.php"); ?>
            </div>

        </div>
    </div>
</body>
</html>