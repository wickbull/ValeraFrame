<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

	<title>Document</title>
	
	<link href="Public/Css/bootstrap.min.css" rel="stylesheet">
	<link href="Public/Css/modern-business.css" rel="stylesheet">

	<script src="/Public/Js/ckeditor/ckeditor.js"></script>
	<script src="/Public/Js/jquery/jquery.min.js"></script>
    <script src="/Public/Js/popper/popper.min.js"></script>
    <script src="/Public/Js/bootstrap/js/bootstrap.min.js"></script>

</head>
<body>
	
	<!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="/index">5s5.com.ua</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/index"><?php echo $variable['language']['home'] ?></a>
                </li>

                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Каталог</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                        <a class="dropdown-item" href="/catalog/solarPanels">Сонячні панелі</a>
                        <a class="dropdown-item" href="/catalog/inverters">Інвертори для сонячних панелей</a>
                        <a class="dropdown-item" href="/catalog/cablesConnectors">Кабелі і конектори для сонячних панелей</a>
                        <a class="dropdown-item" href="/catalog/mountingStructures">Монтажні конструкції</a>
                        <a class="dropdown-item" href="/catalog/accessories">Комплектуючі</a>
                    </div>
                </li> -->

                <!-- <li class="nav-item">
                    <a class="nav-link" href="services.html">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Blog
                        </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                        <a class="dropdown-item" href="blog-home-1.html">Blog Home 1</a>
                        <a class="dropdown-item" href="blog-home-2.html">Blog Home 2</a>
                        <a class="dropdown-item" href="blog-post.html">Blog Post</a>
                    </div>
                </li> -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo $variable['language']['lang'] ?> <img src="<?php echo $variable['language']['langImg'] ?>" style="width: 30px; height: 20px;" alt="">
                        </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                        <form method="POST">
                            <?php foreach ( $variable['language']['toChooseLang'] as $key => $value ) : ?>
                                <button class="dropdown-item" name="language" value="<?php echo $key ?>"><?php echo $value ?></button>
                            <?php endforeach; ?>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    

    