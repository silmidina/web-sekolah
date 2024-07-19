	<!-- Home -->

	<div class="home">
	  <div class="breadcrumbs_container">
	    <div class="container">
	      <div class="row">
	        <div class="col">
	          <div class="breadcrumbs">
	            <ul>
	              <li><a href="index.html">Home</a></li>
	              <li><?= $title ?></li>
	            </ul>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Contact -->

	<div class="contact">

	  <!-- Contact Map -->

	  <div class="col">
	    <!-- Google Map -->
	    <div id="map" style="height: 500px;"></div>
	  </div>

	  <!-- Contact Info -->

	  <div class="contact_info_container">
	    <div class="container">
	      <div class="row">

	        <!-- Contact Form -->
	        <div class="col-lg-6">
	          <div class="contact_form">
	            <div class="contact_info_title">Contact Form</div>
	            <form action="#" class="comment_form">
	              <div>
	                <div class="form_title">Name</div>
	                <input type="text" class="comment_input" required="required">
	              </div>
	              <div>
	                <div class="form_title">Email</div>
	                <input type="text" class="comment_input" required="required">
	              </div>
	              <div>
	                <div class="form_title">Message</div>
	                <textarea class="comment_input comment_textarea" required="required"></textarea>
	              </div>
	              <div>
	                <button type="submit" class="comment_button trans_200">submit now</button>
	              </div>
	            </form>
	          </div>
	        </div>

	        <!-- Contact Info -->
	        <div class="col-lg-6">
	          <div class="contact_info">
	            <div class="contact_info_title">Contact Info</div>
	            <div class="contact_info_text">
	              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a distribution of letters.</p>
	            </div>
	            <div class="contact_info_location">
	              <div class="contact_info_location_title">New York Office</div>
	              <ul class="location_list">
	                <li>T8/480 Collins St, Melbourne VIC 3000, New York</li>
	                <li>1-234-567-89011</li>
	                <li>info.deercreative@gmail.com</li>
	              </ul>
	            </div>
	            <div class="contact_info_location">
	              <div class="contact_info_location_title">Australia Office</div>
	              <ul class="location_list">
	                <li>Forrest Ray, 191-103 Integer Rd, Corona Australia</li>
	                <li>1-234-567-89011</li>
	                <li>info.deercreative@gmail.com</li>
	              </ul>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
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

	<!-- Footer -->

	<footer class="footer">

	  </div>

	  <script>
	    const map = L.map('map').setView([-6.226811, 107.011405], 13);

	    const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
	      maxZoom: 19,
	      attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	    }).addTo(map);

	    const marker = L.marker([-6.226811, 107.011405]).addTo(map)
	      .bindPopup('<b>SMAN 1 Bekasi</b><br />I am a popup.').openPopup();
	  </script>