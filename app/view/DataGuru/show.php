<div class="container mt-5" style="min-height: 100vh;">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
                Nama :
                <?= $data['Guru']['nama']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted">
                Kode Guru :
                <?= $data['Guru']['kode_guru']; ?>
            </h6>
            <p class="card-text">Mapel : <?= $data['Guru']['mapel']; ?></p>
            <a href="<?= BASE_URL; ?>/dataguru" class="btn btn-warning">Kembali</a>
        </div>
    </div>
</div>