<div class="container-fluid bg-hijau2 pt-5">

<div class="row justify-content-center">
  <div class="col-lg-6">
    <?php Flasher::Flash(); ?>
  </div>
</div>
<div class="container w-75">

  <div class="card shadow">
    <h1 class="my-5 mx-2 text-center">Ubah Detail Sekolah</h1>

    <table class="table mx-3 mb-3">
      <thead>
        <tr>
          <th scope="col">Data</th>
          <th scope="col">Isi</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>

        <?php 
        foreach ($data['detail'] as $detail) {?>
          <tr>
            <form action="<?= BASEURL;?>/Admin_Akademik/ubahDetail" method="post">
              <input type="hidden" name="id" value="<?= $detail['id'];?>">
              <td>
                <input class="form-control" type="text" name="data" value="<?= $detail['data'];?>">
              </td>
              <td>
                <input class="form-control" type="text" name="isi" value="<?= $detail['isi'];?>">
              </td>
              <td>
                <button type="submit" class="btn btn-outline-info">
                  <i class="fas fa-check"></i>
                </button>
                <a href="<?= BASEURL; ?>/Admin_Akademik/hapusDetail/<?= $detail['id']; ?>" class="btn btn-outline-danger"  onclick="return confirm('Yakin Ingin Menghapus Data ini?')">
                  <i class="fas fa-trash"></i>
                </a>
              </td>
            </form>
          </tr>
        <?php   } ?>
        <tr>
          <form action="<?= BASEURL; ?>/Admin_Akademik/tambahDetail" method="post">

            <td><input name="data" class="form-control" type="text" placeholder="Data Baru"></td>
            <td><input name="isi" class="form-control" type="text" placeholder="Isi"></td>
            <td>
              <button class="btn btn-success">Tambah</button>
            </td>
          </form>
        </tr>
      </tbody>
    </table>
  </div>
</div>
</div>