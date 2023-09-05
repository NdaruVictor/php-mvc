<div class="container mt-5" style="min-height: 100vh;">
    <div class="row">
        <div class="col-6">

            <div class="row">
                <div class="">
                    <?php Flasher::flash(); ?>
                </div>
            </div>
            <button type="button" class="btn btn-primary tombolTambahData " data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                Tambah Data guru
            </button>


            <h3 class="mt-4">Data guru</h3>
            <?php foreach ($data['guru'] as $guru) : ?>
            <ul class="list-group my-2">
                <li class="list-group-item list-group-item d-flex justify-content-between align-items-center">
                    <?= $guru['nama']; ?>

                    <div class="d-flex ">
                        <a href="<?= BASE_URL; ?>/dataguru/show/<?= $guru['id']; ?>" class="badge bg-primary"
                            style="text-decoration: none; color: white;">detail</a>
                        <a href="<?= BASE_URL; ?>/dataguru/edit/<?= $guru['id']; ?>"
                            class="badge bg-success tampilModalUbah mx-2" style="text-decoration: none; color: white;"
                            data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="<?= $guru['id']; ?>">ubah</a>
                        <a href="<?= BASE_URL; ?>/dataguru/delete/<?= $guru['id']; ?>" class="badge bg-danger"
                            style="text-decoration: none; color: white;" onClick="return confirm('yakin');">hapus</a>
                    </div>
                </li>
            </ul>
            <?php endforeach; ?>
        </div>
    </div>



</div>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Tambah Data guru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASE_URL; ?>/dataguru/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="kode_guru">Kode guru</label>
                        <input type="text" class="form-control" id="kode_guru" name="kode_guru">
                    </div>
                    <div class="form-group">
                        <label for="mapel">Mapel</label>
                        <input type="text" class="form-control" id="mapel" name="mapel">
                    </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>


</div>