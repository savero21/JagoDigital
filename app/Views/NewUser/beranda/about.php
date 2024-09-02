<?= $this->extend('NewUser/layout/app'); ?>
<?= $this->section('content'); ?>


<!-- about us section start -->
<section class="about-us-section">
    <div class="container">
        <h2>About Us</h2>
        <p>Ketahui lebih dalam apa sih Jago Digital Marketing itu.</p>
    </div>
</section>
<!-- about us section end -->

<!-- paragraf section start -->
<section class="paragraf-section">
    <div class="container">
        <h4>
            <!-- Seiring dengan kemajuan Jago Digital Marketing, prinsip-prinsip dan sasaran perusahaan dituangkan dalam visi dan misi. Pemadatan prinsip dan sasaran tersebut diharapkan dapat menjadi fondasi bagi Jago Digital Marketing serta seluruh pihak yang terlibat, mulai dari para pendiri hingga akademisi. -->
            <?= $tentang['deskripsi_tentang']; ?>
        </h4>
    </div>

</section>
<!-- paragraf section end -->

<section class="perjalanan">
    <div class="container">
        <h2 class="section-title">Perjalanan</h2>
        <p class="perjalanan-description">
            Jago Digital Marketing didirikan sejak tahun 2024 dengan tim yang terdiri dari orang-orang yang memiliki passion di bidang digital marketing dan digital advertising. Keahlian dan pengalaman kami telah menghadirkan jasa digital marketing yang efektif dan terjangkau untuk meningkatkan efektivitas pemasaran online bisnis Anda.
        </p>
    </div>
</section>

<section class="visi-misi">
    <div class="container">
        <div class="visi">
            <h3>Visi</h3>
            <p><?= $tentang['visi'] ?></p>
        </div>
        <div class="misi">
            <h3>Misi</h3>
            <p><?= $tentang['misi'] ?></p>
        </div>
    </div>
</section>


<!-- founder section start -->
<section class="founder-section">
    <div class="container">
        <div class="card">
            <h3>Pendiri</h3>
            <?php foreach ($founder as $item): ?>
                <div class="row">
                    <div class="col-6 col-left">
                        <img src="<?= base_url('uploads/foto_founder/' . $item['foto_founder']) ?>" alt="Foto <?= $item['nama_founder'] ?>" class="founder-image">
                    </div>
                    <div class="col-6 col-right">
                        <h2><?= $item['nama_founder'] ?></h2>
                        <p><?= $item['deskripsi_founder'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- founder section end -->




<!-- about us css -->
<style>
    .about-us-section {
        position: relative;
        padding: 50px 15px;
        /* Reduced from 100px to 50px */
        background: url('<?= base_url('assets-new/images/bg2.jpg') ?>') no-repeat center center;
        background-size: cover;
        min-height: 50vh;
        /* Adjusted from 0vh to 50vh for better height control */
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .about-us-section h2 {
        font-size: 2.5rem;
        font-weight: bold;
        color: #FFFFFF;
        /* Warna teks dan garis bawah */
        margin-bottom: 10px;
        border-bottom: 3px solid #FFFFFF;
        /* Warna garis bawah */
        display: inline-block;
        padding-bottom: 5px;
        /* Memberikan sedikit ruang antara teks dan garis bawah */
    }

    .about-us-section p {
        font-size: 1.2rem;
        color: #FFFFFF;
    }
</style>

<!-- paragraf us css -->
<style>
    .paragraf-section {
        background-color: #FFFFFF;
        padding: 20px 20px;
        /* Tambahkan padding horizontal */
        text-align: center;
    }

    .paragraf-section h4 {
        color: #202020;
        margin: 0 auto 30px;
        /* Mengatur margin bawah dan sentralisasi */
        max-width: 800px;
        /* Mengatur lebar maksimal paragraf */
        line-height: 1.6;
        /* Menambah jarak antar baris */
    }
</style>

<!-- visi misi css -->
<style>
    .visi-misi-section {
        padding: 50px 0;
        background-color: #FFFFFF;
        /* Warna background sesuai dengan bagian lain */
        text-align: center;
    }

    .visi-misi-section .row {
        display: flex;
        justify-content: space-between;
    }

    .visi-misi-section .col {
        flex: 0 0 48%;
        /* Mengatur lebar kolom agar seimbang */
    }

    .visi-misi-section h3 {
        color: #000000;
        font-size: 1.8rem;
        margin-bottom: 20px;
    }

    .visi-misi-section p,
    .visi-misi-section ul {
        font-size: 1.2rem;
        color: #555;
        line-height: 1.6;
    }

    .visi-misi-section ul {
        padding-left: 20px;
        /* Memberikan indentasi pada daftar */
        list-style-type: disc;
        /* Menggunakan tanda bullet pada daftar */
    }
</style>

<!-- perjalanan for section -->
<style>
    /* Perjalanan Section */
    .perjalanan {
        background-color: #87D5C8;
        padding: 40px 0;
        text-align: center;
        color: white;
    }

    .perjalanan .section-title {
        font-size: 35px;
        color: white;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .perjalanan-description {
        max-width: 800px;
        margin: 0 auto;
        font-size: 18px;
    }

    /* Visi & Misi Section */
    .visi-misi {
        position: relative;
        padding: 40px 0;
    }

    .visi-misi::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 35%;
        /* Adjusted to 35% as per your preference */
        background-color: #87D5C8;
        z-index: -1;
        /* Sends the background behind the content */
    }

    .visi-misi .container {
        display: flex;
        justify-content: space-around;
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
    }

    .visi,
    .misi {
        background-color: white;
        border-radius: 10px;
        padding: 20px;
        box-shadow: -1px 0px 0px 7px rgba(0, 0, 0, 0.1);
        width: 45%;
        position: relative;
        z-index: 1;
        /* Ensures the cards appear above the background color */

        display: flex;
        flex-direction: column;
        justify-content: center;
        /* Vertically centers the content */
        align-items: center;
        /* Horizontally centers the content */
        text-align: center;
        /* Centers text horizontally */
    }

    .visi h3,
    .misi h3 {
        font-size: 22px;
        font-weight: bold;
        text-decoration: underline;
        /* Adds an underline to the title */
        margin-bottom: 15px;
    }

    .visi p,
    .misi p {
        font-size: 16px;
        text-align: center;
        /* Centers text horizontally */
    }
</style>

<!-- /* founder section css */ -->
<style>
    .founder-section .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    .founder-section .card {
        background-color: white;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .founder-section h3 {
        text-align: center;
        font-size: 24px;
        margin-bottom: 20px;
    }

    .founder-section .row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .founder-section .col-left,
    .founder-section .col-right {
        width: 50%;
    }

    .founder-section .founder-image {
        width: 100%;
        border-radius: 10px;
    }

    .founder-section h2 {
        font-size: 20px;
        margin-bottom: 10px;
    }

    .founder-section p {
        font-size: 16px;
        line-height: 1.5;
    }
</style>

<?= $this->endsection('content'); ?>