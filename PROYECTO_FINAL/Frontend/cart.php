<?php 
    //sacar de la sesion

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
                        <h2>Shopping Cart</h2>
                    </div>
                </div>

                <main class="row">
                    <div class="col-12 bg-white py-3 mb-3">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-10 mx-auto table-responsive">
                                <form class="row">
                                    <div class="col-12">
                                        <table class="table table-striped table-hover table-sm">
                                            <thead>
                                            <tr>
                                                <th>Producto</th>
                                                <th>Precio</th>
                                                <th>Cantidad</th>
                                                <th>Total</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php  if($carrito_productos): ?>
                                                    <?php  foreach($carrito_productos as $item): ?>
                                                        <tr>
                                                            <td>
                                                                <img src="<?php echo $item["producto_image_url"]; ?>" alt="<?php echo $item["producto_image_title"]; ?>" class="img-fluid">
                                                                <?php echo $item["producto_nombre"];  ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $item["producto_precio_unitario"];  ?>
                                                            </td>
                                                            <td>
                                                                <input type="number" min="1" value="1">
                                                            </td>
                                                            <td>
                                                                <?php echo $item["producto_precio_total"];  ?>
                                                            </td>
                                                            <td>
                                                                <a href="#" class="btn btn-link text-danger"><i class="fas fa-times"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th colspan="3" class="text-right">Total</th>
                                                <th><?php  echo $orden_total; ?></th>
                                                <th></th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div class="col-12 text-right">
                                        <button class="btn btn-outline-secondary me-3" type="submit">Actualizar</button>
                                        <a href="./checkout.php" class="btn btn-outline-success">Ordenar</a>
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