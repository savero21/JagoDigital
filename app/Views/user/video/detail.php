<?= $this->extend('user/template/template') ?>
<?= $this->Section('content'); ?>

<!-- Video Details Start -->
<div class="container-fluid pt-5 mb-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="position-relative mb-3">
                    <img class="w-100 rounded" src="<?= base_url('assets-baru') ?>/img/<?= $video['thumbnail']; ?>" style="max-width: 400px; height: auto; margin: auto; display: block;">
                    <div class="bg-white border border-top-0 p-4">
                        <div class="mb-3">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                               href="<?= base_url('kategori/' . $video['id_katvideo']) ?>"><?= $video['nama_kategori_video']?></a>
                            <a class="text-body"></a>
                        </div>
                        <h1 class="mb-3 text-secondary text-uppercase font-weight-bold"><?= $video['judul_video']; ?></h1>
                        <div class="mb-3">
                            <h5 class="text-secondary font-weight-bold">Deskripsi</h5>
                            <p><?= $video['deskripsi_video']; ?></p>
                        </div>
                        <div class="mb-3">
                            <h5 class="text-secondary font-weight-bold">Tanggal Publikasi</h5>
                            <p><?= $video['tanggal_publikasi']; ?></p>
                        </div>
                        <div class="mb-3">
                            <h5 class="text-secondary font-weight-bold">Durasi</h5>
                            <p><?= $video['durasi']; ?></p>
                        </div>
                        <div class="mb-3">
                            <h5 class="text-secondary font-weight-bold">Link Video</h5>
                            <a href="<?= $video['link_video']; ?>" target="_blank"><?= $video['link_video']; ?></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <!-- Related Videos Start -->
                <div class="mb-3">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Video Lainnya</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-3">
                        <?php foreach ($related_videos as $related_video) : ?>
                        <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                            <img class="img-fluid" style="object-fit: cover;" src="<?= base_url('assets-baru') ?>/img/<?= $related_video['thumbnail']; ?>" alt="">
                            <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                       href="<?= base_url('kategori/' . $related_video['id_katvideo']) ?>"><?= $related_video['nama_kategori_video']?></a>
                                </div>
                                <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="<?= base_url('/video/detail/' . $related_video['id_video']) ?>"><?= $related_video['judul_video']; ?></a>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- Related Videos End -->
            </div>
        </div>
    </div>
</div>
<!-- Video Details End -->

<?= $this->endSection('content'); ?>