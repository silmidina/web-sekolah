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

<!-- About -->

<div class="about">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="section_title_container text-center">
          <h2 class="section_title"><?= $nama_gallery->nama_gallery ?></h2>
          <div class="section_subtitle">

          </div>
        </div>
      </div>
    </div>
    <div class="row about_row">

      <?php foreach ($gallery as $key => $value) { ?>
        <!-- About Item -->
        <div class="col-lg-4 about_col about_col_left">
          <div class="about_item">
            <div class="about_item_image"><img src="<?= base_url('assets/foto/' . $value->foto) ?>" width="250px" height="250px"></div>
            <div class="about_item_title"><a href="#"><?= $value->ket_foto ?></a></div>
            <div class="about_item_text">

            </div>
          </div>
        </div>
      <?php  } ?>


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
            <div class="newsletter_title"></div>
            <div class="newsletter_subtitle"></div>
          </div>

          <!-- Newsletter Form -->
          <div class="newsletter_form_container ml-lg-auto">
            <form action="#" id="newsletter_form" class="newsletter_form d-flex flex-row align-items-center justify-content-center">

            </form>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>