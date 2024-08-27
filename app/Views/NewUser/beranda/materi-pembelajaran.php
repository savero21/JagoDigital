<?= $this->extend('NewUser/layout/app'); ?>
<?= $this->section('content'); ?>

<section class="banner">
    <div class="container">
        <div class="row align-items-center">
            <!-- Text Section -->
            <div class="col-md-8">
                <div class="card">
                    <div class="hero-text text-center">
                        <h1>Pelatihan <span class="highlight">Pematangan Marketing Digital</span> Guna Memajukan UMKM</h1>
                        <p>Jadikan usaha Anda semakin unggul dengan mengikuti pelatihan pematangan marketing digital agar Anda semakin kompeten bersama mentor-mentor ahli.</p>
                        <a href="#section-id" class="btn btn-custom">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
            <!-- Video/Image Section -->
            <div class="col-md-4">
                <div class="card">
                    <img src="<?= base_url('assets-new/images/materi1.png') ?>" alt="Materi Pelatihan" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Paragraf Section Start -->
<section class="paragraf">
    <div class="container">
        <h3>Saat Ini</h3>
        <p>
            Jago Digital Marketing telah berhasil menempatkan 94% UMKM di usaha yang diinginkan. Namun, kami tidak berhenti di situ. Jago Digital Marketing juga telah mendapatkan kepercayaan dari berbagai universitas negeri dan swasta di Indonesia untuk bekerja sama dalam menghasilkan lulusan yang unggul dan berkualitas tinggi.
        </p>
    </div>
</section>
<!-- Paragraf Section End -->

<!-- Benefits Section Start -->
<section class="benefits-section">
    <div class="container">
        <h2 class="benefits-title">Manfaat yang Akan Didapatkan Saat Mengikuti Pelatihan</h2>
        <div class="benefits-grid">
            <div class="benefit-text">
                <h4><i class="fas fa-laptop"></i> Learning Management System Terintegrasi</h4>
                <p>Nikmati kenyamanan dan kemudahan seluruh rangkaian pembelajaran dengan Learning Management System berbasis website yang terintegrasi.</p>
            </div>
            <div class="benefit-image">
                <img src="<?= base_url('assets-new/images/manfaat/manfaat1.png') ?>" alt="Learning Management System Terintegrasi">
            </div>
            <div class="benefit-image">
                <img src="<?= base_url('assets-new/images/manfaat/manfaat2.png') ?>" alt="Dukungan Fasilitator">
            </div>
            <div class="benefit-text">
                <h4><i class="fas fa-headset"></i> Dukungan Fasilitator</h4>
                <p>Selama pembelajaran berlangsung, mahasiswa Anda akan didampingi oleh fasilitator yang siap membantu peserta dalam aspek-aspek teknis.</p>
            </div>
            <div class="benefit-text">
                <h4><i class="fas fa-video"></i> Dokumentasi Kelas</h4>
                <p>Akses selamanya ke video rekaman kelas dan materi pembelajaran melalui Learning Management System yang disediakan.</p>
            </div>
            <div class="benefit-image">
                <img src="<?= base_url('assets-new/images/manfaat/manfaat3.png') ?>" alt="Dokumentasi Kelas">
            </div>
            <div class="benefit-image">
                <img src="<?= base_url('assets-new/images/manfaat/manfaat4.png') ?>" alt="Konsultasi dengan Mentor">
            </div>
            <div class="benefit-text">
                <h4><i class="fas fa-user-friends"></i> Konsultasi dengan Mentor</h4>
                <p>Manfaatkan layanan konsultasi gratis bersama mentor untuk menjawab segala permasalahan seputar persiapan karier bagi mahasiswa kampus Anda.</p>
            </div>
        </div>
    </div>
</section>
<!-- Benefits Section End -->

<style>
    /* Benefits Section Styles */
    .benefits-section {
        padding: 50px 20px;
        background-color: #f9f9f9;
    }

    .benefit-item {
        background-color: transparent;
        /* Putih dengan transparansi 80% */
        border-radius: 15px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        text-align: center;
        max-width: 300px;
    }

    .benefits-title {
        text-align: center;
        color: #a64ca6;
        font-size: 1.5rem;
        margin-bottom: 30px;
    }

    .benefits-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        align-items: center;
        justify-items: center;
    }

    .benefit-text,
    .benefit-image {
        background-color: #ffffff;
        border-radius: 15px;
        padding: 20px;
        text-align: center;
    }

    .benefit-text h4 {
        color: #a64ca6;
        margin-bottom: 10px;
    }

    .benefit-text p {
        color: #333333;
        font-size: 0.9rem;
        line-height: 1.5;
    }

    .benefit-image img {
        max-width: 100%;
        border-radius: 15px;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .benefits-grid {
            grid-template-columns: 1fr;
        }
    }
</style>




<!-- css for banner-section -->
<style>
    /* Section Banner Styles */
    .banner {
        position: relative;
        padding: 100px 15px;
        background: url('<?= base_url('assets-new/images/bg1.jpg') ?>') no-repeat center center;
        background-size: cover;
        min-height: 100vh;
        display: flex;
        align-items: center;
    }

    .banner .row.align-items-center {
        position: relative;
        z-index: 2;
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        max-width: 1200px;
        flex-wrap: wrap;
    }

    .banner .card {
        background-color: transparent;
        border: none;
        box-shadow: none;
        border-radius: 10px;
        margin-bottom: 30px;
    }

    .banner .hero-text {
        color: white;
        padding: 20px;
        border-radius: 10px;
    }

    .banner .hero-text .highlight {
        color: #ffb228;
    }

    .banner .hero-text h1 {
        font-size: 3.3rem;
        font-weight: 900;
        color: #ffffff;
        text-align: left;
        margin-bottom: 20px;
    }

    .banner .hero-text p {
        text-align: justify;
        font-size: 1.6rem;
        line-height: 1.5;
        color: #ffffff;
        margin-top: 15px;
    }

    .banner .btn-custom {
        margin-top: 20px;
        background-color: #ffd700;
        color: #000000;
        padding: 10px 20px;
        border-radius: 5px;
        text-transform: uppercase;
        font-weight: bold;
        letter-spacing: 1px;
        transition: background-color 0.3s, color 0.3s;
    }

    .banner .btn-custom:hover {
        background-color: #ffa500;
        color: #ffffff;
    }

    .banner .img-fluid {
        border-radius: 10px;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .banner .row.align-items-center {
            flex-direction: column;
            text-align: center;
        }

        .banner .col-md-8,
        .banner .col-md-4 {
            max-width: 100%;
        }

        .banner .hero-text h1 {
            font-size: 2rem;
        }
    }
</style>

<!-- CSS for Paragraf Section -->
<style>
    .paragraf {
        background-color: #FFF4FF;
        padding: 50px 20px;
    }

    .paragraf .container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .paragraf h3 {
        text-align: left;
        color: #933393;
        font-size: 2rem;
        margin-bottom: 20px;
    }

    .paragraf p {
        text-align: justify;
        font-size: 1.2rem;
        color: #333333;
        line-height: 1.6;
    }
</style>


<?= $this->endsection('content'); ?>