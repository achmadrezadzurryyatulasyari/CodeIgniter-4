<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <div class="d-flex justify-content-between border-bottom py-2">
        <h3 class="pb-2 mb-0">DATA JABATAN DOSEN</h3>
        <a href="/jabatan/create" class="btn btn-primary">Tambah Data</a>
    </div>
    <div class="pt-3">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA JABATAN</th>
                    <th>DESKRIPSI</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($jabatan as $key => $row) { ?>
                    <tr>
                        <td><?= $key + 1; ?></td>
                        <td><?= $row->nama_jabatan; ?></td>
                        <td><?= $row->deskripsi_jabatan; ?></td>
                        <td>
                            <form action="/jabatan/delete/<?= $row->id; ?>" method="post">
                                <a href="/jabatan/edit/<?= $row->id; ?>" class="btn btn-warning">Edit</a>
                                <?= csrf_field(); ?>
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    <?php }?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection(); ?>