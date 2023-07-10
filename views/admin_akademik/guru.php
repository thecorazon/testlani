<div class="container-fluid bg-white pt-5">


    <div class="row justify-content-center">
      <div class="col-lg-6">
        <?php Flasher::Flash(); ?>
      </div>
    </div>


    <h1 class="mb-4"> Daftar Guru</h1>
    <div class="row mb-3">
      <div class="col-lg-6">
        <button class="btn btn-primary" data-toggle="modal" data-target="#tambahGuru">
          Tambah Guru
        </button>
      </div>
    </div>



    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Guru</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Nip</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>

              <?php 
              $no = 0;
              foreach ($data['guru'] as $guru) {
                $no++;?>
                <tr>
                  <form action="<?= BASEURL; ?>/Admin_Akademik/ubahGuru" method="post">
                    <th scope="row"><?= $no; ?></th>
                    <input type="hidden" name="guru_id" value="<?= $guru['guru_id'];?>">
                    <td>
                      <input class="form-control" type="text" name="nama" value="<?= $guru['nama'];?>">
                    </td>
                    <td>
                      <input class="form-control" type="text" name="nip" value="<?= $guru['nip'];?>">
                    </td>
                    <td>
                      <input class="form-control" type="text" name="jabatan" value="<?= $guru['jabatan'];?>">
                    </td>
                    <td>
                      <button type="submit" class="btn btn-outline-success">
                        <i class="fas fa-check"></i>
                      </button>
                      <a href="<?=BASEURL;?>/Admin_Akademik/hapusGuru/<?= $guru['guru_id'];?>" type="submit"class="btn btn-outline-danger"  onclick="return confirm('Yakin Ingin Menghapus Guru ini?')">
                        <i class="fas fa-trash"></i>
                      </a href="<?=BASEURL;?>/Admin_Akademik/hapusGuru/">
                  </td>
                    </form>
                </tr>
              <?php   } ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>





    <!-- Modal -->
    <div class="modal fade" id="tambahGuru" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="judulModal">Tambah Guru</h1>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">x</button>
          </div>
          <div class="modal-body">
            <form action="<?=BASEURL;?>/Admin_Akademik/tambahGuru" method="post">
              <label for="nama" class="form-label">Nama</label>
              <input class="form-control mb-3" id='tambahguru' type="text" name="nama" placeholder="Masukkan Nama Guru">
              <label for="nama" class="form-label">Nip</label>
              <input class="form-control mb-3" type="text" placeholder="Masukkan Nip" name="nip">
              <label for="nama" class="form-label">Jabatan</label>
              <input class="form-control mb-3" type="text" placeholder="Masukkan Jabatan" name="jabatan">

                <button class="btn btn-success col-12">Tambah</button>
              </td>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- modalend -->

    <!-- About End -->