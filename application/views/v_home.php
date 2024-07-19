	<!-- Home -->

	<div class="home">
		<div class="home_slider_container">

			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">


				<?php foreach ($berita as $key => $value) { ?>
					<!-- Home Slider Item -->
					<div class="owl-item">
						<div class="home_slider_background" style="background-image:url(<?= base_url('assets/gambar_berita/' . $value->gambar_berita) ?>"></div>
						<div class="home_slider_content">
							<div class="container">
								<div class="row">
									<div class="col text-center">
										<div class="home_slider_title"><a href="<?= base_url('home/detail_berita/' . $value->slug_berita) ?>"><?= $value->judul_berita ?></a></div>
										<div class="home_slider_subtitle">
											<p><?= substr(strip_tags($value->isi_berita), 0, 200) ?>...</p>
										</div>
										<div class="home_slider_form_container">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>

		<!-- Home Slider Nav -->
		<div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
		<div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
	</div>

	<!-- Features -->

	<div class="features">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Welcome To Unicat E-Learning</h2>
						<div class="section_subtitle">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row features_row">

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="<?= base_url() ?>template/front-end/images/icon_1.png" alt=""></div>
						<h3 class="feature_title">The Experts</h3>
						<div class="feature_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
						</div>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="<?= base_url() ?>template/front-end/images/icon_2.png" alt=""></div>
						<h3 class="feature_title">Book & Library</h3>
						<div class="feature_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
						</div>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="<?= base_url() ?>template/front-end/images/icon_3.png" alt=""></div>
						<h3 class="feature_title">Best Courses</h3>
						<div class="feature_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
						</div>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="<?= base_url() ?>template/front-end/images/icon_4.png" alt=""></div>
						<h3 class="feature_title">Award & Reward</h3>
						<div class="feature_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Popular Courses -->

	<div class="courses">
		<div class="section_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url() ?>template/front-end/images/courses_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Latest News</h2>
						<div class="section_subtitle">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row courses_row">


				<!-- Course -->
				<?php foreach ($berita as $key => $value) { ?>
					<div class="col-lg-4 course_col">
						<div class="course">
							<div class="course_image"><img src="<?= base_url('assets/gambar_berita/' . $value->gambar_berita) ?>" width="400" height="230px"></div>
							<div class="course_body">
								<h3 class="course_title"><a href="<?= base_url('home/detail_berita/' . $value->slug_berita) ?>"><?= substr(strip_tags($value->judul_berita), 0, 20) ?>...</a></h3>
								<div class="course_teacher"><?= $value->nama_user ?></div>
								<div class="course_text">
									<p><?= substr(strip_tags($value->isi_berita), 0, 50) ?>...</p>
								</div>
							</div>
							<div class="course_footer">
								<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
									<div class="course_info">
										<i class="fa fa-calendar" aria-hidden="true"></i>
										<span><?= $value->tgl_berita ?></span>
									</div>


								</div>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
			<div class="row">
				<div class="col">
					<div class="courses_button trans_200"><a href="<?= base_url('home/berita') ?>">view all news</a></div>
				</div>
			</div>
		</div>
	</div>



	<!-- Team -->

	<div class="team">

		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Guru Sekolah</h2>
						<div class="section_subtitle">

						</div>
					</div>
				</div>
			</div>
			<div class="row team_row">

				<!-- Team Item -->
				<?php foreach ($guru as $key => $value) { ?>
					<div class="col-lg-3 col-md-6 team_col">
						<div class="team_item">
							<div class="team_image"><img src="<?= base_url('assets/foto_guru/' . $value->foto_guru) ?>" width="250px" height="190px"></div>
							<div class="team_body">
								<div class="team_title"><a href="#"><?= $value->nama_guru ?></a></div>
								<div class="team_subtitle"><?= $value->nama_mapel ?></div>
								<div class="social_list">
									<ul>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>






			</div>

		</div>


		<!-- Newsletter -->

		<div class="newsletter">
			<div class="newsletter_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url() ?>template/front-end/images/newsletter.jpg" data-speed="0.8"></div>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start">

							<!-- Newsletter Content -->
							<div class="newsletter_content text-lg-left text-center">
								<div class="newsletter_title">sign up for news and offers</div>
								<div class="newsletter_subtitle">Subcribe to lastest smartphones news & great deals we offer</div>
							</div>

							<!-- Newsletter Form -->
							<div class="newsletter_form_container ml-lg-auto">
								<form action="#" id="newsletter_form" class="newsletter_form d-flex flex-row align-items-center justify-content-center">
									<input type="email" class="newsletter_input" placeholder="Your Email" required="required">
									<button type="submit" class="newsletter_button">subscribe</button>
								</form>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>