<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Ecommerce Example</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/responsive.css')); ?>">

    </head>
    <body>
        <div id="app">
            <header class="with-background">
                <div class="top-nav container">
                    <div class="top-nav-left">
                        <div class="logo">Ecommerce</div>
                        <?php echo e(menu('main', 'partials.menus.main')); ?>

                    </div>
                    <div class="top-nav-right">
                        <?php echo $__env->make('partials.menus.main-right', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div> <!-- end top-nav -->
                <div class="hero container">
                    <div class="hero-copy">
                        <h1>Ecommerce Project</h1>
                        <p>Includes multiple products, categories, a shopping cart and a Collection of various products.</p>
                        <div class="hero-buttons">
                            <a href="#" class="button button-white">GitHub</a>
                        </div>
                    </div> <!-- end hero-copy -->

                    <div class="hero-image">
                        <img src="img/macbook-pro-laravel.png" alt="hero image">
                    </div> <!-- end hero-image -->
                </div> <!-- end hero -->
            </header>
            <div class="featured-section">

                <div class="container">
                    <h1 class="text-center">Shop Here</h1>

                    <p class="section-description">Customers are able to shop millions of products on Ecommerce's sites around the world from a single Website</p>

                    <div class="text-center button-container">
                        <a href="#" class="button">Featured</a>
                        <a href="#" class="button">On Sale</a>
                    </div>

                    

                    <div class="products text-center">
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="product">
                                <a href="<?php echo e(route('shop.show', $product->slug)); ?>"><img src="<?php echo e(productImage($product->image)); ?>" alt="product"></a>
                                <a href="<?php echo e(route('shop.show', $product->slug)); ?>"><div class="product-name"><?php echo e($product->name); ?></div></a>
                                <div class="product-price"><?php echo e($product->presentPrice()); ?></div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div> <!-- end products -->

                    <div class="text-center button-container">
                        <a href="<?php echo e(route('shop.index')); ?>" class="button">View more products</a>
                    </div>

                </div> <!-- end container -->

            </div> <!-- end featured-section -->

            

            <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div> <!-- end #app -->
        <script src="js/app.js"></script>
    </body>
</html>
<?php /**PATH D:\pull\laravel-ecommerce-example\resources\views/landing-page.blade.php ENDPATH**/ ?>