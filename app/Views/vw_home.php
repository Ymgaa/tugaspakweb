<?= $this->extend('layout/admin/admin_layout') ?>

<?= $this->section('content') ?>

        <div class="starter-template text-center py-5 px-3">
            <h1 style ="font-size:100px;">Hai ! <?= session()->get('name'); ?></h1>
            <p class="lead">Selamat Datang di Warung Belajar, Kita sudah belajar membuat Authentikasi dengan Codeigniter 4</p>
        </div>
 <?= $this->endSection() ?>