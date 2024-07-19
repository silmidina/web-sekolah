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


<div class="team_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url() ?>template/front-end/images/team_background.jpg" data-speed="0.8"></div>
<div class="container">
  <div class="row">
    <div class="col-lg-12 text-center">
      <h2>Daftar Siswa</h2> <br>
    </div>




    <!-- Team Item -->
    <?php foreach ($siswa as $key => $value) { ?>

      <div class="col-lg-3 col-md-6 team_col">
        <div class="team_item">
          <div class="team_image"><img src="<?= base_url('assets/foto_siswa/' . $value->foto_siswa) ?>" width="250px" height="190px"></div>
          <div class="team_body">
            <div class="team_title"><a href="#"><?= $value->nama_siswa ?></a></div>
            <div class="team_subtitle"><?= $value->nis ?></div>
            <div class="team_subtitle"><?= $value->tempat_lahir ?>, <?= $value->tgl_lahir ?></div>
            <div class="team_subtitle"><?= $value->kelas ?></div>
            <div class="social_list">

            </div>
          </div>
        </div>
      </div>

    <?php } ?>

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