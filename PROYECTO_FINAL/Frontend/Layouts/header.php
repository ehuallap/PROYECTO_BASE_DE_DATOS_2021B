<?php 

    //sacar los datos de la BD
    $carrito_url = "./cart.php";
    $productos_url = "./productos.php"; //todos
    $buscar_url = "./productos.php"; //todos
    $marcas = Array(
        Array(
            "name" => "Marca 1",
            "url" => "./productos.php",
        ),
        Array(
            "name" => "Marca 2",
            "url" => "./productos.php",
        ),
        Array(
            "name" => "Marca 3",
            "url" => "./productos.php",
        ),
    );



    //sacar los datos de la sesion
    $carrito_items = 2;
    $carrito_amount = "$/. 2000.00";


?>                
                
                <header class="row">
                    <!-- Top Nav -->
                    <div class="col-12 bg-dark py-2 d-md-block d-none">
                        <div class="row">
                            <div class="col-auto me-auto">
                                <ul class="top-nav top-nav-left">
                                    <li>
                                        <span>Venta de lavadoras - Miguel & Juan</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-auto">
                                <ul class="top-nav">
                                    <li>
                                        <a href="register.php"><i class="fas fa-user-edit me-2"></i>Registrar</a>
                                    </li>
                                    <li>
                                        <a href="login.php"><i class="fas fa-sign-in-alt me-2"></i>Login</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Top Nav -->

                    <!-- Header -->
                    <div class="col-12 bg-white pt-4">
                        <div class="row">
                            <div class="col-lg-auto">
                                <div class="site-logo text-center text-lg-left">
                                    <a href="./">
                                        <img src="./public/images/logo.png" alt="Logo" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-5 mx-auto mt-4 mt-lg-0">
                                <form action="<?php echo $buscar_url; ?>" method="post">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="search" class="form-control border-dark" placeholder="Buscar..." required>
                                            <button class="btn btn-outline-dark"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <?php if($carrito_items || $carrito_amount): ?>
                            <div class="col-lg-auto text-center text-lg-left header-item-holder">
                                <a href="<?php echo $carrito_url; ?>" class="header-item">
                                    <?php if($carrito_items): ?>
                                        <i class="fas fa-shopping-bag me-2"></i><span id="header-qty" class="me-3"><?php echo $carrito_items; ?></span>
                                    <?php endif; ?>
                                    <?php if($carrito_amount): ?>
                                        <i class="fas fa-money-bill-wave me-2"></i><span id="header-price"><?php echo $carrito_amount; ?></span>
                                    <?php endif; ?>
                                </a>
                            </div>
                            <?php endif; ?>
                        </div>

                        <!-- Nav -->
                        <div class="row">
                            <nav class="navbar navbar-expand-lg navbar-light bg-white col-12">
                                <button class="navbar-toggler d-lg-none border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="mainNav">
                                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="./">Inicio</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Productos</a>
                                            <div class="dropdown-menu" aria-labelledby="electronics">
                                                <a class="dropdown-item" href="./products.php">Todos los productos</a>
                                                <?php foreach($marcas as $item): ?>
                                                    <a class="dropdown-item" href="<?php echo $item["url"]; ?>"><?php echo $item["name"]; ?></a>
                                                <?php endforeach; ?>
                                            </div>
                                            
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!-- Nav -->

                    </div>
                    <!-- Header -->

                </header>