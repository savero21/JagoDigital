<?= $this->extend('user/template/template') ?>
<?= $this->Section('content'); ?>

<!-- Video Categories and Videos Start -->
<div class="container-fluid mt-5 pt-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h4 class="m-0 text-uppercase font-weight-bold">Kategori Video</h4>
                </div>
            </div>
        </div>

        <?php if (empty($videoCategories)) : ?>
            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="container text-center" style="min-height: 50vh; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                        <p>Tidak Ada Kategori Video Terkait</p>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <div class="row">
                <?php foreach ($videoCategories as $category) : ?>
                    <div class="col-lg-4">
                        <div class="position-relative mb-3">
                            <h5 class="text-uppercase font-weight-bold"><?= $category->nama_kategori_video ?></h5>
                            <ul>
                                <?php foreach ($videos as $video) : ?>
                                    <?php if ($video->id_katvideo == $category->id_katvideo) : ?>
                                        <li>
                                            <a href="<?= base_url('/video/detail/' . $video->id_video) ?>">
                                                <?= $video->judul_video ?>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
<!-- Video Categories and Videos End -->

<!-- Menyesuaikan tata letak untuk memastikan footer tetap di bagian bawah -->
<style>
    body {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }

    main {
        flex: 1;
    }
</style>

<?= $this->endSection('content'); ?>