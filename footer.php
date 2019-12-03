<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bds-datxanh
 */

?>
		<div class="slide-footer my-5 container">
	
	  <marquee behavior="scroll" scrollamount="8" direction="left">
	  	   <p>
	  	<?php
	$query = new WP_Query(array(
		'post_type'=>"page",
		'p'=>111,
	));
	
	  			  if ( $query->have_posts() ) :while ( $query->have_posts() ) : $query->the_post();
				$slide_top = get_field('list_slide_footer');
				
				foreach( $slide_top as $value ):
	  				?>
                <img style="float: none;" src="<?=  $value["img"]['url']?>" alt="<?= $value['title']?>">
          		  <?php
						endforeach;
						endwhile;
				endif;
				wp_reset_postdata();
					?>
					  </p>

            </marquee>
		</div>

	<footer id="colophon" class="site-footer">

		<div class="footer-top pt-3">
			<div class=" container">
				<div class="row">
					<div class="col-md-3">
						<div class="title">
							<p>LIÊN HỆ</p>
						</div>
						<div class="text">
							<p>Công ty Cổ phần Dịch vụ và địa ốc Đất Xanh Miền Bắc</p>
							<p>Địa chỉ: Số 360 Giải Phóng - Phương Liệt - Thanh Xuân - Hà Nội</p>
							<p>Chuyên viên tư vấn: Milikets	</p>
							<p>Hotline: 113</p>
							<p>Email: milikes@gmail.com</p>
							<p>Website: milikets.vn</p>
						</div>
					</div>
					<!-- // -->
					<div class="col-md-3">
						<div class="title">
							<p>LIÊN HỆ</p>
						</div>
						<form>
							<div class="form-group">
								<input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Họ và tên">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Số điện thoại">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" id="exampleInputEmail1"  placeholder="Email">
							</div>
							<button type="submit" class="btn btn-light">Gửi</button>
						</form>
					</div>
									<!-- // -->
					<div class="col-md-3">
						<div class="title">
							<p>LIÊN HỆ</p>
						</div>
						<div class="text">
							<ul>
								<li>
									<a href="">
										Trang chủ
									</a>
								</li>
								<li>
									<a href="">Giới thiệu</a>
								</li>
								<li>
									<a href="">Dự án</a>
								</li>
								<li>
										
								</li>
							</ul>
						</div>
					</div>
					<!-- // -->
					<div class="col-md-3">
						<div class="title">
							<p>LIÊN HỆ</p>
						</div>
						<div class="text">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14899.363302899343!2d105.81728845!3d20.99901675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac9777fcb5b9%3A0xa0992aea530ae2b2!2zVHLGsOG7nW5nIMSQ4bqhaSBI4buNYyDEkOG6oWkgTmFt!5e0!3m2!1svi!2s!4v1572774728608!5m2!1svi!2s" width="350" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
						</div>
					</div>
					<!-- // -->
				</div>
			</div>
		</div>
		<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v5.0"></script>
	</footer>
<?php wp_footer(); ?>


</body>
</html>
