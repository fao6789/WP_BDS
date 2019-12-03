<?php
/*
* Template Name: Trang chủ*/
    get_header();
    
?>
<div id="home">
    <div class="container">
        <!-- // box1 -->
        <div class="box1">
            <?php
            $a= get_field('list_box_1');
            $id1 = $a['id_box1'];
            $count1 = $a['show_post'];
            ?>
            <div class="text-title">
                <h3><?= $a['title']?></h3>
            </div>
            <div class="block">
                <div class="row">
                    <?php
                    $the_query = new WP_Query(array(
                    'post_status' => 'publish',
                    'post_type' => 'post',
                    'showposts' =>  $id1,
                        'cat'=> $count1,
                    ));
                    if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
                    ?>
                    <div class="col-md-3 col-lg-3 mt-3">
                        <div class="card" style="width: 17rem;">
                            <div class="img">
                                <a href="<?= the_permalink();?>" title="<?= the_title();?>">
                                    
                                    <img class="card-img-top" src="<?= the_post_thumbnail_url();?>"  alt="<?= the_title();?>">
                                </a>
                            </div>
                            <div class="card-body">
                                <a href="<?= the_permalink();?>" title="<?= the_title();?>">
                                    <h4><?= the_title();?></h4>
                                </a>
                                <p class="card-text"><?= the_excerpt()?></p>
                            </div>
                            <div class="card-footer text-muted">
                                <a href="<?= the_permalink();?>">
                                    <p>Xem thêm</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
                    endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                    
                </div>
            </div>
        </div>
        <!-- // -->
        <div class="box2 mt-5">
            <?php
            $a= get_field('list_box_2');
            $id2 = $a['id'];
            $count2 = $a['show_post'];
            ?>
            <div class="text-title">
                <h3><?= $a['title']?></h3>
            </div>
            <div class="block">
                <div class="row">
                    <?php
                    $the_query = new WP_Query(array(
                    'post_status' => 'publish',
                    'post_type' => 'post',
                    'showposts' =>  $id2,
                        'cat'=> $count2,
                    ));
                    if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
                    ?>
                    <div class="col-md-3 col-lg-3 mt-3">
                        <div class="card" style="width: 17rem;">
                            <div class="img">
                                <a href="<?= the_permalink();?>" title="<?= the_title();?>">
                                    
                                    <img class="card-img-top" src="<?= the_post_thumbnail_url();?>"  alt="<?= the_title();?>">
                                </a>
                            </div>
                            <div class="card-body">
                                <a href="<?= the_permalink();?>" title="<?= the_title();?>">
                                    <h4><?= the_title();?></h4>
                                </a>
                                <p class="card-text"><?= the_excerpt()?></p>
                            </div>
                            <div class="card-footer text-muted">
                                <a href="<?= the_permalink();?>">
                                    <p>Xem thêm</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
                    endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
        <!-- // -->
        <div class="box3 mt-5">
            <?php
            $a= get_field('list_box_3');
            $id3 = $a['id'];
            $count3 = $a['show_post'];
            ?>
            <div class="text-title">
                <h3><?= $a['title']?></h3>
            </div>
            <div class="block">
                <div class="row">
                    <?php
                    $the_query = new WP_Query(array(
                    'post_status' => 'publish',
                    'post_type' => 'post',
                    'showposts' =>  $id3,
                        'cat'=> $count3,
                    ));
                    if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
                    ?>
                    <div class="col-md-3 col-lg-3 mt-3">
                        <div class="card" style="width: 17rem;">
                            <div class="img">
                                <a href="<?= the_permalink();?>" title="<?= the_title();?>">
                                    
                                    <img class="card-img-top" src="<?= the_post_thumbnail_url();?>"  alt="<?= the_title();?>">
                                </a>
                            </div>
                            <div class="card-body">
                                <a href="<?= the_permalink();?>" title="<?= the_title();?>">
                                    <h4><?= the_title();?></h4>
                                </a>
                                <p class="card-text"><?= the_excerpt()?></p>
                            </div>
                            <div class="text-muted img-bg">
                                <a href="<?= the_permalink();?>">
                                    <p>Xem thêm</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
                    endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
        <!-- // -->
        <div class="box4 mt-5">
            <div class="text-title">
                <?php
                $a4 = get_field('list_box_4');
                $title4 = $a4['title'];
                $id4= $a4['id'];
                $video = $a4['id_video'];
                ?>
                <h3><?= $title4?></h3>
            </div>
            <div class="block">
                <div class="row">
                    <div class="col-md-8 left-box-4 ">
                        <div class=" row">
                            <?php
                            $the_query = new WP_Query(array(
                            'post_status' => 'publish',
                            'post_type' => 'post',
                            'showposts' =>  4,
                                'cat'=> $id4,
                            ));
                            if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
                            $i++;
                            if($i==1){
                            ?>
                            
                            <div class="col-md-6 left-7">
                                <div class="img">
                                    <a href="<?= the_permalink();?>" title="<?= the_title();?>">
                                        <img class="card-img-top" src="<?= the_post_thumbnail_url();?>"  alt="<?= the_title();?>">
                                    </a>
                                </div>
                                <div class="text">
                                    <a href="<?= the_permalink();?>" title="<?= the_title();?>">
                                        <h4><?= the_title();?></h4>
                                    </a>
                                    <p class="card-text"><?= the_excerpt()?></p>
                                </div>
                            </div>
                            <?php
                            }
                            endwhile;
                            endif;
                            wp_reset_query();
                            ?>
                            <div class="col-md-6 right-5">
                                <?php
                                $the_query = new WP_Query(array(
                                'post_status' => 'publish',
                                'post_type' => 'post',
                                'showposts' =>  4,
                                'cat'=> $id4,
                                ));
                                if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
                                $i++;
                                if($i>1){
                                ?>
                                
                                <div class="block-1">
                                    <div class="img">
                                        <a href="<?= the_permalink();?>" title="<?= the_title();?>">
                                            
                                            <img class="card-img-top" src="<?= the_post_thumbnail_url();?>"  alt="<?= the_title();?>">
                                        </a>
                                    </div>
                                    <div class="text">
                                        <a href="<?= the_permalink();?>" title="<?= the_title();?>">
                                            <h4><?= the_title();?></h4>
                                        </a>
                                    </div>
                                </div>
                                <?php
                                }
                                endwhile;
                                endif;
                                wp_reset_query();
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 right">
                    <?= $video ?> 
                    </div>
                </div>
            </div>
        </div>
        <!-- // -->
    </div>
    <?=get_footer() ?>