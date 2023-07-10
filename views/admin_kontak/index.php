<div class="container-fluid bg-biru pt-5">


  <div class="row justify-content-center">
    <div class="col-lg-6">
      <?php Flasher::Flash(); ?>
    </div>
  </div>


  <!-- Contact Start -->
  <div id="kontak" class="container-fluid w-50 card shadow-lg py-5 my-4">
    <div class="text-center pb-2">
      <p class="section-title px-5">
        <span class="px-2">Kontak</span>
      </p>
      <h1 class="mb-4">Ubah Informasi Kontak</h1>
    </div>
    <div class="contact-form">
      <div id="success"></div>
      <form method="post"  action="<?= BASEURL; ?>/Admin_Kontak/ubahKontak" class="px-3">
        <label for="alamat">Alamat</label>
        <div class="control-group">
          <textarea
          class="form-control"
          rows="3"
          name="alamat"
          ><?=$data['kontak'][0]['alamat'];?></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <div class="control-group">
          <label for="email">Email</label>
          <input
          type="text"
          class="form-control"
          name="email"
          value="<?=$data['kontak'][0]['email'];?>"
          />
          <p class="help-block text-danger"></p>
        </div>
        <div class="control-group">
          <label for="telepon">Telepon</label>
          <input
          type="text"
          class="form-control"
          name="no_hp"
          value="<?=$data['kontak'][0]['no_hp'];?>"
          />
          <p class="help-block text-danger"></p>
        </div>
        <div class="control-group">
          <label for="hari">Hari Belajar</label>
          <input
          type="text"
          class="form-control"
          name="hari"
          value="<?=$data['kontak'][0]['hari'];?>"
          />
          <p class="help-block text-danger"></p>
        </div>
        <div class="control-group">
          <label for="jam">Jam Belajar</label>
          <input
          type="text"
          class="form-control"
          name="jam"
          value="<?=$data['kontak'][0]['jam'];?>"
          />
          <p class="help-block text-danger"></p>
        </div>

        <div>
          <button
          class="btn btn-primary py-2 px-4"
          type="submit"
          >
          Simpan
        </button>
      </div>
    </form>
  </div>
</div>
</div>
    <!-- Contact End -->