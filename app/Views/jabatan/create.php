<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <div class="d-flex justify-content-between border-bottom py-2">
        <h3 class="pb-2 mb-0">TAMBAH DATA JABATAN DOSEN</h3>
        <a href="/jabatan" class="btn btn-primary">Kembali</a>
    </div>
    <div class="pt-3">
        <form action="/jabatan/store" method="post">
            <?= csrf_field(); ?>
            <div class="mb-3">
                <label for="" class="form-label">NAMA JABATAN</label>
                <input type="text" class="form-control" name="nama_jabatan">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">DESKRIPSI JABATAN</label>
                <input type="text" class="form-control" name="deskripsi_jabatan">
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
</div>

<?= $this->endSection(); ?>