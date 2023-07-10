
<!-- About Start -->
<div class="container-fluid py-5">
  <div class="container">
    <div class="row pt-3">
      <div class="col-lg-6 mb-3 bg-primary py-5 px-5 text-white">
        <p class="section-title">
          <span class="">--- Sekolah ---</span>
        </p>
        <h1 class="mb-4 text-white"> Detail Sekolah</h1>

        <?php foreach($data['detail'] as $detail) {?>

          <div class="row border-bottom">
            <div class="col-6 py-1 border-right">
              <strong><?= $detail['data']; ?></strong>
            </div>
            <div class="col-6 py-1"><?= $detail['isi']; ?></div>
          </div>

        <?php } ?>

        <!-- </div> -->
      </div>
      <div class="col-lg-6 pl-5">

        <p class="section-title">
          <span class="">--- Guru ---</span>
        </p>
        <h1 class="mb-4"> Daftar Guru</h1>

        <div class="owl-carousel testimonial-carousel">
          <?php
          $no = 0;
          for ($i= 0; $i < 5; $i++) { ?>
            <div class="testimonial-item">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jabatan</th>
                  </tr>
                </thead>
                <tbody>

                  <?php foreach ($data['guru'][$i] as $guru) {
                    $no++;?>
                    <tr>
                      <th scope="row"><?= $no; ?></th>
                      <td><?= $guru['nama'];?></td>
                      <td><?= $guru['jabatan'];?></td>
                    </tr>
                  <?php   } ?>
                </tbody>
              </table>
            </div>
          <?php   } ?>
        </div>
      </div>
    </div>
  </div>
</div>
    <!-- About End -->