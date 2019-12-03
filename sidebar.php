<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bds-datxanh
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	 <?php 
	// dynamic_sidebar( 'sidebar-1' ); 
	?> 
			<div class="form-side-bar">
				<div class="title">
					<p>
						NHẬN BÁO GIÁ GỐC
					</p>
				</div>
				<form class="">
							<div class="form-group">
								<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Họ và tên">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Số điện thoại">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
							</div>
							<button type="submit" class="btn">Gửi</button>
				</form>
		</div>

		<div class="fb-sidebar mt-3">
				<div class="title">
					<p>
						facebook
					</p>
				</div>
				<div class="fb">
				<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FLienMinhHuyenThoai%2F&tabs&width=240&height=250&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="240" height="250" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
				</div>	
		</div>

		<div class="img-sidebar mt-3">
				<div class="title">
					<p>
						căn hộ cao cấp trung tâm quận cầu giấy
					</p>
				</div>
				<div class="img">
					<a href="#" title="">
						<img src="http://localhost/bds-dxb/wp-content/uploads/2019/11/baner-3.jpg" alt="">
					</a>
				</div>	
		</div>

		<div class="video-sidebar mt-3">
				<div class="title">
					<p>
						video
					</p>
				</div>
				<div class="video">
				<iframe width="240" height="250" src="https://www.youtube.com/embed/er_lC05fPwA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>	
		</div>

		<div class="post-sidebar mt-3">
				<div class="title">
					<p>
						dự án nổi bật
					</p>
				</div>
				<?php
                    $the_query = new WP_Query(array(
                    'post_status' => 'publish',
                    'post_type' => 'post',
                    'showposts' =>  10,
                        'cat'=> 13,
                    ));
                    if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
                    ?>
				<div class="post">
						<div class="row">   
							<div class="img col-md-5" >
								<a href="<?= get_permalink()?>">
									<img src="<?= get_the_post_thumbnail_url()?>" alt="">
								</a>
							</div>
							<div class="post-title col-md-7">
								<p>
								<a href="<?= get_permalink()?>">						
									<?= the_title()?>
									</a>
								</p>
							</div>
						</div>
				</div>
				<?php
                    endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
		</div>
</aside><!-- #secondary -->
