<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $title ?? 'Village Bazar | Home'; ?></title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo BASE_URL; ?>/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo BASE_URL; ?>/assets/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>

<body>

<header>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white">About</h4>
                    <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up
                        some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                    <h4 class="text-white">Menu</h4>
                    <ul class="list-unstyled">
                        <?php foreach ($categories as $category): ?>
                            <li>
                                <a href="/category/<?php echo $category->slug; ?>"><?php echo $category->title; ?></a>
                            </li>
                        <?php endforeach; ?>
                        <?php if (auth()): ?>
                            <li>
                                <a style="text-decoration: none;" href="/cart">
                                    Cart
                                </a>
                            </li>
                            <li>
                                <a style="text-decoration: none;" href="/checkout">
                                    Checkout
                                </a>
                            </li>
                            <li>
                                <a style="text-decoration: none;" href="/logout">
                                    Logout
                                </a>
                            </li>
                        <?php else: ?>
                            <li>
                                <a style="text-decoration: none;" href="/register">
                                    Register
                                </a>
                            </li>
                            <li>
                                <a style="text-decoration: none;" href="/login">
                                    Login
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
            <a href="/" class="navbar-brand d-flex align-items-center">
                <strong><i class="fas fa-cart-arrow-down"></i> Village Bazar</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</header>
