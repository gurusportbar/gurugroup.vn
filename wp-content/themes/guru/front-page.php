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
                <div class="col-left">
                    <div class="block-info-company">
                        <div class="info-company">
                            <div class="col-left">
                                <div class="head">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/img-guru-symbol.png" alt="">
                                </div>
                                <div class="body">
                                    <h5 class="title">About the Company</h5>
                                    <p class="description">
                                        <?php
                                        $about = get_page_by_path('about');
                                        $content = apply_filters( 'the_content', $about->post_content );
                                        echo substr($content, 0, 300);
                                        ?>
                                    </p>
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
                            <?php
                            $args = array(
                                'posts_per_page' => 3,
                                'category_name' => 'news'
                            );
                            $myposts = get_posts( $args );
                            foreach ( $myposts as $post ) : setup_postdata( $post );
                            ?>
                            <div class="card">
                                <img class="card-img-top" width="318" height="288" src="<?php echo get_the_post_thumbnail_url($post);?>">
                                <div class="card-body">
                                    <p class="card-title">
                                        <a style="color: #000;" href="<?php echo get_permalink($post) ?>"><?php echo strtoupper(get_the_title($post))?></a>
                                    </p>
                                </div>
                            </div>
                            <?php endforeach;
                            wp_reset_postdata();?>
                        </div>
                        <hr class="line">
                        <h5 class="title-main mb-4">PRESS</h5>
                        <div class="list-cards horizontal">
                             <?php
                            $args = array(
                                'posts_per_page' => 3,
                                'category_name' => 'press'
                            );
                            $myposts = get_posts( $args );
                            foreach ( $myposts as $post ) : setup_postdata( $post );
                            ?>
                            <div class="card horizontal">
                                <img class="card-img-top" width="324" height="185" src="<?php echo get_the_post_thumbnail_url($post);?>" alt="">
                                <div class="card-body">
                                    <a style="color: #000;" href="<?php echo get_permalink($post) ?>"><?php echo strtoupper(get_the_title($post))?></a>
                                </div>
                            </div>
                            <?php endforeach;
                             wp_reset_postdata();?>
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
                                <?php
                            $args = array(
                                'post_type'=> 'post',
                                'post_status' => 'publish',
                                'order' => 'DESC',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'post_format',
                                        'field' => 'slug',
                                        'terms' => array( 'post-format-gallery' )
                                    )
                                )
                            );
                            $myposts = get_posts( $args );
                            foreach ( $myposts as $post ) : setup_postdata( $post );
                                $content = $post->post_content;
                                $regex = '/src="([^"]*)"/';
                                preg_match_all( $regex, $content, $matches );
                                $images = array_reverse($matches);
                            ?>
                                <div class="item">
                                    <div class="head">
                                        <div class="label"><?php echo strtoupper(get_the_title($post)) ?></div>
                                    </div>
                                    <div class="body justify-content-end">
                                        <?php foreach ($images[0] as $imageList) {
                                            ?>
                                            <img width="240" height="240" src="<?php echo $imageList?>" alt="">
                                       <?php } ?>
                                    </div>
                                </div>
                            <?php endforeach;
                                wp_reset_postdata();?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-right">
                    <div class="hot-news">
                        <h3 class="title">HOT NEWS!</h3>
                        <div class="list-cards horizontal">
                            <?php
                            $args = array(
                                'posts_per_page' => 6,
                                'category_name' => 'news'
                            );
                            $myposts = get_posts( $args );
                            foreach ( $myposts as $post ) : setup_postdata( $post );
                            ?>
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title"><a style="color: #000;" href="<?php echo get_permalink($post) ?>"><?php echo strtoupper(get_the_title($post))?></a></p>
                                    <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url($post);?>" alt="">
                                    <p class="card-text">
                                        <?php
                                        $content = get_post_field('post_content', $post);
                                        $content = strip_tags($content);
                                        echo substr($content, 0, 300);
                                        ?>
                                    </p>
                                </div>
                            </div>
                            <?php endforeach;
                            wp_reset_postdata();?>

                        </div>
                    </div>
                </div>
            </div>

<?php
get_footer();
