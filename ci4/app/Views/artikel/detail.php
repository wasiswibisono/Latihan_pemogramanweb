<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<article class="entry">
    <h2><?= esc($artikel['judul']); ?></h2>
    <img src="<?= base_url('/gambar/' . $artikel['gambar']); ?>" alt="<?= esc($artikel['judul']); ?>">
    <p><?= esc($artikel['isi']); ?></p>
</article>

<?= $this->endSection() ?>