<div class="container-fluid bg-biru2 pt-5">
  

  <div class="row justify-content-center">
    <div class="col-lg-6">
      <?php Flasher::Flash(); ?>
    </div>
  </div>
  <center><h1 class="mb-4">Ubah Visi dan Misi</h1></center>
  <div class="row">

    <div class="col-lg-6 pb-1">



      <!-- Basic Card Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">VISI</h6>
        </div>
        <div class="card-body">
          <form action="<?=BASEURL;?>/Admin/ubahVisi" method="post">
            <p class="m-0 text-justify">
              <textarea
              class="form-control text-justify"
              rows="10"
              cols="100"
              name="visi"
              ><?= $data['visimisi'][0]['visi'];?></textarea>
              <button type="submit" class="btn btn-primary px-4 mx-auto my-2">Simpan Visi</button>
            </p>
          </form>
        </div>
      </div>
    </div>
    <div class="col-lg-6 pb-1">


      <!-- Basic Card Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">MISI</h6>
        </div>
        <div class="card-body">
          <form action="<?=BASEURL;?>/Admin/ubahMisi" method="post">
            <p class="m-0 text-justify">
              <textarea
              class="form-control text-justify"
              rows="10"
              cols="100"
              name="misi"
              ><?= $data['visimisi'][0]['misi'];?></textarea>
              <button type="submit" class="btn btn-primary px-4 mx-auto my-2">Simpan Misi</button>
            </p>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>