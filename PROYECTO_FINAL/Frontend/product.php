<?php 
   $imagenes = Array(
        Array(
            "image_url" => "http://multiserviciosmuniz.com/assets/images/slider1-1-1366x768.jpg",
            "image_title" => "Lorem ipsum",
        ),
        Array(
            "image_url" => "http://multiserviciosmuniz.com/assets/images/slider2-1366x768.jpg",
            "image_title" => "Lorem ipsum",
        ),
        Array(
            "image_url" => "http://multiserviciosmuniz.com/assets/images/slider3-1-1366x768.jpg",
            "image_title" => "Lorem ipsum",
        ),
    );

    $producto_nombre = "Lavadora Eco Inverter 19 kg Negra";
    $producto_atributos = Array(
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit",
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit",
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit",
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit"
    );

    $producto_descripcion = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
    $producto_precio_antiguo = "S/ 1,500";
    $producto_precio = "S/ 1,799";
    $producto_marca = "Marca 1";
    $producto_marca_url = "./productos.php";
    $carrito_url = "./cart.php";

    $productos_similares = Array(
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
                    <div class="col-12 bg-white py-3 my-3">
                        <div class="row">

                            <?php if($imagenes): ?>
                                <?php if( count($imagenes)>0 ): ?>
                                <div class="col-lg-5 col-md-12 mb-3">
                                    <div class="col-12 mb-3">
                                        <div class="img-large border" style="background-image: url('<?php echo $imagenes[0]["image_url"]; ?>')"></div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <?php foreach($imagenes as $item): ?>
                                                <div class="col-sm-2 col-3">
                                                    <div class="img-small border" style="background-image: url('<?php echo $item["image_url"] ?>')" data-src="<?php echo $item["image_url"] ?>" title="<?php echo $item["image_title"] ?>"></div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                            <?php endif; ?>

                            

                            <div class="col-lg-5 col-md-9">
                                <div class="col-12 product-name large">
                                    <?php echo $producto_nombre; ?>
                                    <?php if($producto_marca): ?>
                                        <small>Marca <a href="<?php echo $producto_marca_url; ?>"><?php echo $producto_marca; ?></a></small>
                                    <?php endif; ?>
                                </div>

                                <?php if($producto_marca): ?>
                                    <div class="col-12 px-0">
                                        <hr>
                                    </div>
                                    
                                    <div class="col-12">
                                        <ul>
                                            <?php foreach($producto_atributos as $item): ?>
                                                <li><?php echo $item; ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                            </div>
                            

                            
                            <div class="col-lg-2 col-md-3 text-center">
                                <div class="col-12 sidebar h-100">
                                    <div class="row">
                                        <div class="col-12">
                                        <span class="detail-price">
                                            <?php  echo $producto_precio; ?>
                                        </span>
                                        <?php if($producto_precio_antiguo): ?>
                                            <span class="detail-price-old">
                                                <?php  echo $producto_precio_antiguo; ?>
                                            </span>
                                        <?php endif; ?>
                                        </div>
                                        <div class="col-xl-5 col-md-9 col-sm-3 col-5 mx-auto mt-3">
                                            <div class="mb-3">
                                                <label for="qty">Cantidad</label>
                                                <input type="number" id="qty" min="1" value="1" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <a class="btn btn-outline-dark" href="<?php echo $carrito_url; ?>" ><i class="fas fa-cart-plus me-2"></i>Agregar al carrito</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            

                        </div>
                    </div>

                    <?php if($producto_descripcion): ?> 
                    <div class="col-12 mb-3 py-3 bg-white text-justify">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12 text-uppercase">
                                            <h2><u>Detalle del producto</u></h2>
                                        </div>
                                        <div class="col-12" id="details">
                                            <?php echo $producto_descripcion; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>


                    <?php if($productos_similares): ?> 
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 py-3">
                                <div class="row">
                                    <div class="col-12 text-center text-uppercase">
                                        <h2>Similar Products</h2>
                                    </div>
                                </div>
                                <div class="row">

                                    <?php foreach($productos_similares as $item): ?>
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

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>

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