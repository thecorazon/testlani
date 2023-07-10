<div class="container-fluid bg-hijau2 pt-5">
     <div class="row justify-content-center">
      <div class="col-lg-6">
        <?php Flasher::Flash(); ?>
      </div>
    </div>

    <h1 align="center" class="mb-4">Dokumen</h1>
    <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahDokumen">
      Upload Dokumen
    </button>





    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Dokumen Sekolah</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Dokumen</th>
                <th scope="col">Jenis</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>


              <?php 
              $no = 0;
              foreach ($data['dokumen'] as $dokumen) {
                $no++;?>
                <tr>
                  <form action="<?= BASEURL; ?>/Admin_Dokumen/hapusDokumen/<?=  $dokumen['id']; ?>" method="post">
                    <th scope="row"><?= $no; ?></th>
                    <td><?= $dokumen['nama_dokumen'];?></td>
                    <td><?= $dokumen['tipe_dokumen'];?></td>
                    <td><?= $dokumen['keterangan'];?></td>
                    <td>
                      <a href="<?= BASEURL; ?>/dokumen/<?= $dokumen['nama_dokumen'];?>" class="btn btn-outline-success" download>
                        <i class="fas fa-download"></i>
                      </a>
                      <button type="submit"class="btn btn-outline-danger"  onclick="return confirm('Yakin Ingin Menghapus dokumen ini?')">
                        <i class="fas fa-trash"></i>
                      </button>
                  </td>
                    </form>
                </tr>
              <?php   } ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>







<!-- Modal -->
  <div class="modal fade" id="tambahDokumen" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="judulModal">Tambah Dokumen</h1>
          <button type="button" class="btn btn-outline-danger" data-dismiss="modal" aria-label="Close">x</button>
        </div>
        <div class="modal-body">
          <form action="<?= BASEURL;?>/Admin_Dokumen/tambahDokumen" method="post" enctype="multipart/form-data">
            <div class="mb-3 text-left">
              <label for="formFile" class="form-label">Pilih Dokumen</label>
              <input class="form-row" type="file" name="dokumen" required>
            </div>
            <div class="mb-3 text-left">
              <label for="formFile" class="form-label">Jenis Dokumen</label>
              <select name="tipe_dokumen" class="form-control">
                  <option value="Surat">Surat</option>
                  <option value="Dokumen">Dokumen</option>
                  <option value="Panduan">Panduan</option>
                  <option value="Formulir">Formulir</option>
                  <option value="Lainnya">Lainnya</option>
              </select>
            </div>
            <div class="mb-3 text-left">
              <div class="form-label">Keterangan</div>
              <input type="text" class="form-control" name="keterangan">
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
    <!-- modalend -->