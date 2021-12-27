<?php 
    $titulo = "Todos los lavadoras"; //sustituir si es marca
    $productos = Array(
        Array(
            "product_id" => "1",
            "product_name" => "Lavadora Eco Inverter 19 kg Negra",
            "product_price_old" => "S/ 1,500",
            "product_price" => "S/ 1,799",
            "product_image_url" => "https://falabella.scene7.com/is/image/FalabellaPE/17899461_1?wid=1500&hei=1500&qlt=70",
            "product_image_title" => "Lorem ipsum",
            "product_url" => "./product.php",
            "product_url_add_cart" => "./cart.php",
        ),
        Array(
            "product_id" => "2",
            "product_name" => "Lavadora Black Edition 13 kg",
            "product_price_old" => "",
            "product_price" => "S/ 1,599",
            "product_image_url" => "https://falabella.scene7.com/is/image/FalabellaPE/15714009_1?wid=1500&hei=1500&qlt=70",
            "product_image_title" => "Lorem ipsum",
            "product_url" => "./product.php",
            "product_url_add_cart" => "./cart.php",
        ),
        Array(
            "product_id" => "3",
            "product_name" => "Lavadora LG Carga Superior TurboWash 3D con Steam Lavado a Vapor",
            "product_price" => "S/ 2,449",
            "product_image_url" => "https://falabella.scene7.com/is/image/FalabellaPE/16725890_1?wid=1500&hei=1500&qlt=70",
            "product_image_title" => "Lorem ipsum",
            "product_url" => "./product.php",
            "product_url_add_cart" => "./cart.php",
        ),
        Array(
            "product_id" => "4",
            "product_name" => "Lavadora carga superior 14Kg",
            "product_price" => "S/ 999",
            "product_image_url" => "https://falabella.scene7.com/is/image/FalabellaPE/882140829_1?wid=1500&hei=1500&qlt=70",
            "product_image_title" => "Lorem ipsum",
            "product_url" => "./product.php",
            "product_url_add_cart" => "./cart.php",
        ),
    );

    $productos = array_merge($productos, $productos, $productos, $productos, $productos, $productos);

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
            <main class="row">

                <!-- Category Products -->
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 py-3">
                            <div class="row">
                                <div class="col-12 text-center text-uppercase">
                                    <h2><?php  echo $titulo; ?></h2>
                                </div>
                            </div>
                            <div class="row">

                                <?php if($productos): ?>
                                    <?php foreach($productos as $item): ?>
                                        <div class="col-lg-3 col-sm-6 my-3">
                                            <div class="col-12 bg-white text-center h-100 product-item p-3">
                                                <div class="row h-100">
                                                    <div class="col-12 p-0 mb-3">
                                                        <a href="<?php echo $item["product_url"] ?>">
                                                            <img src="<?php echo $item["product_image_url"] ?>" alt="<?php echo $item["product_image_title"] ?>" class="img-fluid">
                                                        </a>
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <a href="<?php echo $item["product_url"] ?>" class="product-name"><?php echo $item["product_name"] ?></a>
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <?php if(isset($item["product_price_old"])): ?>
                                                            <?php if( !empty($item["product_price_old"]) ): ?>
                                                                <span class="product-price-old">
                                                                    <?php echo $item["product_price_old"] ?>
                                                                </span>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                        <br>
                                                        <span class="product-price">
                                                            <?php echo $item["product_price"] ?>
                                                        </span>
                                                    </div>
                                                    <div class="col-12 mb-3 align-self-end">
                                                        <a href="<?php echo $item["product_url_add_cart"] ?>" class="btn btn-outline-dark" ><i class="fas fa-cart-plus me-2"></i>Agregar al carrito</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>

                                <?php else: ?>
                                    <div class="col-xl-2 col-lg-3 col-sm-6 my-3">
                                        <div class="col-12 bg-white text-center h-100 product-item">
                                            No hay productos que mostrar
                                        </div>
                                    </div>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Category Products -->

                <div class="col-12">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i class="fas fa-long-arrow-alt-left"></i></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active" aria-current="page">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                            </li>
                        </ul>
                    </nav>
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