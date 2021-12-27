<?php 
    $carrito_productos = Array(
        Array(
            "producto_id" => "1",
            "producto_nombre" => "Lavadora Eco Inverter 19 kg Negra",
            "producto_precio_unitario" => "S/ 1,799",
            "producto_precio_total" => "S/ 1,799",
            "producto_cantidad" => "1",
            "producto_image_url" => "https://falabella.scene7.com/is/image/FalabellaPE/17899461_1?wid=1500&hei=1500&qlt=70",
            "producto_image_title" => "Lorem ipsum",
        ),
        Array(
            "producto_id" => "2",
            "producto_nombre" => "Lavadora Eco Inverter 19 kg Negra",
            "producto_precio_unitario" => "S/ 1,799",
            "producto_precio_total" => "S/ 1,799",
            "producto_cantidad" => "1",
            "producto_image_url" => "https://falabella.scene7.com/is/image/FalabellaPE/15714009_1?wid=1500&hei=1500&qlt=70",
            "product_image_title" => "Lorem ipsum",
        ),
        Array(
            "producto_id" => "3",
            "producto_nombre" => "Lavadora Eco Inverter 19 kg Negra",
            "producto_precio_unitario" => "S/ 1,799",
            "producto_precio_total" => "S/ 1,799",
            "producto_cantidad" => "1",
            "producto_image_url" => "https://falabella.scene7.com/is/image/FalabellaPE/16725890_1?wid=1500&hei=1500&qlt=70",
            "producto_image_title" => "Lorem ipsum",
        ),
        Array(
            "producto_id" => "4",
            "producto_nombre" => "Lavadora Eco Inverter 19 kg Negra",
            "producto_precio_unitario" => "S/ 1,799",
            "producto_precio_total" => "S/ 1,799",
            "producto_cantidad" => "1",
            "producto_image_url" => "https://falabella.scene7.com/is/image/FalabellaPE/882140829_1?wid=1500&hei=1500&qlt=70",
            "producto_image_title" => "Lorem ipsum",
        ),
    );

    $orden_total = "$./ 2000.00"

?>
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
                        <h2>Orden de compra</h2>
                    </div>
                </div>

                <main class="container">
                                  
                    <div class="row">
                        <div class="col-md-4 order-md-2 mb-4">
                            <h4 class="d-flex justify-content-between align-items-center mb-3">
                                <span class="text-muted">Carrito</span>
                                <span class="badge badge-secondary badge-pill">3</span>
                            </h4>
                            <ul class="list-group mb-3">
                                <?php  if($carrito_productos): ?>
                                    <?php  foreach($carrito_productos as $item): ?>
                                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                                            <div>
                                                <h6 class="my-0"><?php echo $item["producto_nombre"];  ?></h6>
                                            </div>
                                            <span class="text-muted">  <?php echo $item["producto_precio_total"];  ?> </span>
                                        </li>
                                    <?php endforeach; ?>
                                <?php endif; ?>

                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Total</span>
                                    <strong><?php echo $orden_total;  ?></strong>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-8 order-md-1">
                            <h4 class="mb-3">Dirección de Envio</h4>
                            <form class="needs-validation" novalidate>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="firstName">Nombre</label>
                                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required />
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="lastName">Apellido</label>
                                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required />
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="firstName">Correo electrónico</label>
                                        <input type="email" class="form-control" id="email" placeholder="you@example.com" />
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="lastName">DNI</label>
                                        <input type="text" class="form-control" id="dni" placeholder="" value="" required />
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="address" placeholder="1234 Main St" required />
                                </div>

                                <hr class="mb-4" />

                                
                                <button class="btn btn-outline-dark" type="submit">Ordernar Pedido</button>
                            </form>
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