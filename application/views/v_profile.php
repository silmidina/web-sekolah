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

<!-- Isi Konten -->
<div class="contact_info_container">
  <div class="container">
    <div class="row">
      <div class="col-sm-4 text-center">
        <img src="<?= base_url('assets/foto_kepsek/' . $sekolah->foto_kepsek) ?>" width="200px" height="200px">
        <br>
        <h4><?= $sekolah->kepala_sekolah ?></h4>
        <h4>NIP : <?= $sekolah->nip ?></h4>

      </div>

      <div class="col-sm-8">
        <div class="form-group">
          <div class="form_title">Nama Sekolah</div>
          <input class="comment_input" value="<?= $sekolah->nama_sekolah ?>" type="text" name="nama_sekolah" readonly>
        </div>

        <div class="form-group">
          <div class="form_title">Alamat Sekolah</div>
          <textarea class="comment_input" name="alamat" id="" cols="5" rows="5" readonly><?= $sekolah->alamat ?></textarea>
        </div>

        <div class="form-group">
          <div class="form_title">No Telepon</div>
          <input class="comment_input" value="<?= $sekolah->no_telpon ?>" type="text" name="no_telpon" readonly>
        </div>
      </div>

      <div class="col-sm-12">
        <div class="form-group">
          <div class="form_title">
            <h4>Sejarah Sekolah</h4>
          </div>
          <p><?= $sekolah->sejarah ?></p>
        </div>

        <div class="form-group">
          <div class="form_title">
            <h4>Visi</h4>
          </div>
          <p><?= $sekolah->visi ?></p>
        </div>

        <div class="form-group">
          <div class="form_title">
            <h4>Misi</h4>
          </div>
          <p><?= $sekolah->misi ?></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- End Isi Konten -->

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