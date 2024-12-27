<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

<?php if(session()->get('login')): ?>
    <div class="alert alert-success">
    SELAMAT DATANG Sdr/i <strong><?= session()->get('nama');?>.</strong>
    </div>
    <?php endif; ?>
    
    <div class="p-5 text-center bg-white rounded-3 shadow-sm">
        <h1 class="text-body-emphasis">Sistem Informasi Data Dosen Uin Sts Jambi</h1>
        <p class="lead">
            Selamat Data Di Aplikasi Sistem Informasi Data Dosen
        </p>
    </div>
    <?= $this->endSection(); ?>