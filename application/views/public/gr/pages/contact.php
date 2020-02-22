<!-- start: Main -->
<main id="main_absolute" class="animated fadeIn slow">
  <?php if($this->session->flashdata('status')) {
    echo '<p class="message">'.$this->session->flashdata('status').'</p>';
  } ?>
  <div class="row">
    <section class="column1_3">
      <h2>Καλέστε μας</h2>
      <p><i class="fas fa-phone"></i> <a href="tel:306908497869">(+30) 690 8497869</a> (Ιωάννης Γαλανός)</p>
    </section>

    <section class="column2_3">
      <h2>Στείλτε μας email</h2>
      <p><i class="fas fa-envelope"></i> <a href="mailto:info@stonevillapelion.gr">info@stonevillapelion.gr</a></p>
    </section>

    <section class="column3_3">
      <h2>Επίσης βρείτε μας</h2>
      <a href="https://www.facebook.com/stonevillapelion/" title="Facebook" target="_blank"><i class="fab fa-facebook-square"></i></a>
    </section>
  </div>
</main>
<!-- end: Main -->
