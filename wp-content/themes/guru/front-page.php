<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
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
                <div class="new-date">Monday, September 2, 2019</div>
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
                    <div class="item"><img src="<?php echo get_template_directory_uri();?>/assets/images/img-slider-01.png" width="1140" height="auto" alt=""></div>
                    <div class="item"><img src="<?php echo get_template_directory_uri();?>/assets/images/img-slider-01.png" width="1140" height="auto" alt=""></div>
                    <div class="item"><img src="<?php echo get_template_directory_uri();?>/assets/images/img-slider-01.png" width="1140" height="auto" alt=""></div>
                </div>
            </div>
            <div class="content">
                <div class="col-left">
                    <div class="block-info-company">
                        <div class="info-company">
                            <div class="col-left">
                                <div class="head">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/img-guru-symbol.png" alt="">
                                </div>
                                <div class="body">
                                    <h5 class="title">About the Company</h5>
                                    <p class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nos Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh </p>
                                </div>
                            </div>
                            <div class="col-right">
                                <div class="head">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/img-01.png" alt="">
                                </div>
                                <div class="body">
                                    <div class="owl-carousel" id="carouselInfoCompany">
                                        <div class="item"><img src="<?php echo get_template_directory_uri();?>/assets/images/img-02.png" width="227" height="auto" alt=""></div>
                                        <div class="item"><img src="<?php echo get_template_directory_uri();?>/assets/images/img-03.png" width="227" height="auto" alt=""></div>
                                        <div class="item"><img src="<?php echo get_template_directory_uri();?>/assets/images/img-04.png" width="227" height="auto" alt=""></div>
                                        <div class="item"><img src="<?php echo get_template_directory_uri();?>/assets/images/img-02.png" width="227" height="auto" alt=""></div>
                                        <div class="item"><img src="<?php echo get_template_directory_uri();?>/assets/images/img-03.png" width="227" height="auto" alt=""></div>
                                        <div class="item"><img src="<?php echo get_template_directory_uri();?>/assets/images/img-04.png" width="227" height="auto" alt=""></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-cards">
                            <div class="card">
                                <img class="card-img-top" src="<?php echo get_template_directory_uri();?>/assets/images/img-05.png" alt="">
                                <div class="card-body">
                                    <p class="card-title">LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT,</p>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top" src="<?php echo get_template_directory_uri();?>/assets/images/img-06.png" alt="">
                                <div class="card-body">
                                    <p class="card-title">LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT,</p>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top" src="<?php echo get_template_directory_uri();?>/assets/images/img-07.png" alt="">
                                <div class="card-body">
                                    <p class="card-title">LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT,</p>
                                </div>
                            </div>
                        </div>
                        <hr class="line">
                        <h5 class="title-main mb-4">PRESS</h5>
                        <div class="list-cards horizontal">
                            <div class="card horizontal">
                                <img class="card-img-top" src="<?php echo get_template_directory_uri();?>/assets/images/img-10.png" alt="">
                                <div class="card-body">
                                    <p class="card-title">LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, </p>
                                </div>
                            </div>
                            <div class="card horizontal">
                                <img class="card-img-top" src="<?php echo get_template_directory_uri();?>/assets/images/img-11.png" alt="">
                                <div class="card-body">
                                    <p class="card-title">LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, </p>
                                </div>
                            </div>
                            <div class="card horizontal">
                                <img class="card-img-top" src="<?php echo get_template_directory_uri();?>/assets/images/img-12.png" alt="">
                                <div class="card-body">
                                    <p class="card-title">LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, </p>
                                </div>
                            </div>
                        </div>
                        <hr class="line">
                        <h5 class="title-main mb-4">CONTACT</h5>
                        <form>
                            <div class="form-register">
                                <div class="head">
                                    <div class="logo">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/img-guru-50.png" alt="">
                                    </div>
                                    <div class="address">
                                        <p><span>A.</span> 10 Ky Dong, Dist. 3, Ho Chi Minh City, Vietnam</p>
                                        <p><span>T.</span> 097 310 10 10 &nbsp;|&nbsp; W. gurusportsbar.com &nbsp;|&nbsp; E. info@gurusportsbar.com</p>
                                    </div>
                                </div>
                                <div class="body">
                                    <div class="form-group">
                                        <label>NAME</label>
                                        <input type="text" placeholder="" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>EMAIL</label>
                                        <input type="email" placeholder="" class="form-control reverse">
                                    </div>
                                    <div class="form-group mb-0">
                                        <label>PHONE</label>
                                        <input type="tel" placeholder="" class="form-control reverse">
                                    </div>
                                    <button type="submit" class="btn-submit">Submit</button>
                                </div>
                            </div>
                        </form>
                        <h5 class="title-main mb-4">GALLERY</h5>
                        <div class="gallery-block">
                            <div class="list-items">
                                <div class="item">
                                    <div class="head">
                                        <div class="label">DRINKING&HEALING</div>
                                    </div>
                                    <div class="body justify-content-start">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/img-17.png" alt="">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/img-18.png" alt="">
                                        <img class="full" src="<?php echo get_template_directory_uri();?>/assets/images/img-19.png" alt="">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="head">
                                        <div class="label">GURU SPORT BAR - KY DONG</div>
                                    </div>
                                    <div class="body justify-content-end">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/img-20.png" alt="">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/img-21.png" alt="">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/img-22.png" alt="">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/img-23.png" alt="">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="head">
                                        <div class="label">CANDISHOP</div>
                                    </div>
                                    <div class="body justify-content-start">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/img-24.png" alt="">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/img-25.png" alt="">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/img-26.png" alt="">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/img-27.png" alt="">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="head">
                                        <div class="label">GURU SPORT BAR - NHA TRANG</div>
                                    </div>
                                    <div class="body justify-content-end">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/img-28.png" alt="">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/img-29.png" alt="">
                                        <img class="full" src="<?php echo get_template_directory_uri();?>/assets/images/img-30.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-right">
                    <div class="hot-news">
                        <h3 class="title">HOT NEWS!</h3>
                        <div class="list-cards horizontal">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title">LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT,</p>
                                    <img class="card-img-top" src="<?php echo get_template_directory_uri();?>/assets/images/img-08.png" alt="">
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title">LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT,</p>
                                    <img class="card-img-top" src="<?php echo get_template_directory_uri();?>/assets/images/img-09.png" alt="">
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title">LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT,</p>
                                    <img class="card-img-top" src="<?php echo get_template_directory_uri();?>/assets/images/img-13.png" alt="">
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title">LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT,</p>
                                    <img class="card-img-top" src="<?php echo get_template_directory_uri();?>/assets/images/img-14.png" alt="">
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title">LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT,</p>
                                    <img class="card-img-top" src="<?php echo get_template_directory_uri();?>/assets/images/img-15.png" alt="">
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title">LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT,</p>
                                    <img class="card-img-top" src="<?php echo get_template_directory_uri();?>/assets/images/img-16.png" alt="">
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?php
get_footer();
