<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<header class="header">
    <div class="container">
        <div class="head">
            <div class="logo"><a href=""><img src="<?php echo get_template_directory_uri();?>/assets/images/logo-guru.png" width="620" height="auto" alt=""></a></div>
            <ul class="nav justify-content-end">
                <li class="nav-item"> <a class="nav-link active" href="#">About</a> </li>
                <li class="nav-item"> <a class="nav-link" href="#">Press</a> </li>
                <li class="nav-item"> <a class="nav-link" href="#">Contact</a> </li>
                <li class="nav-item"> <a class="nav-link" href="#">Gallery</a> </li>
                <li class="nav-item"> <a class="nav-link" href="#">Shop</a> </li>
            </ul>
            <div class="new-date"><?php echo strtoupper(date('D'))?>, <?php echo strtoupper(date('M'))?> <?php echo date('d')?>, <?php echo date('Y')?></div>
        </div>
    </div>
</header>
<main>
    <div class="container">
        <div class="list-logo-brand">
            <a class="item" href=""><img src="<?php echo get_template_directory_uri();?>/assets/images/logo-dh.png" alt=""></a>
            <a class="item"href=""><img src="<?php echo get_template_directory_uri();?>/assets/images/logo-gsb.png" alt=""></a>
            <a class="item" href=""><img src="<?php echo get_template_directory_uri();?>/assets/images/logo-cs.png" alt=""></a>
        </div>
        <div class="slider">
            <div class="owl-carousel" id="carouselMain">
                <div class="item"><img src="<?php echo get_template_directory_uri();?>/assets/1.jpg" width="1140" height="446" alt=""></div>
                <div class="item"><img src="<?php echo get_template_directory_uri();?>/assets/2.jpg" width="1140" height="446" alt=""></div>
                <div class="item"><img src="<?php echo get_template_directory_uri();?>/assets/3.jpg" width="1140" height="446" alt=""></div>
            </div>
        </div>
        <div class="content">
            <div class="card">
            <p class="card-text">SSS</p>
            </div>
        </div>
