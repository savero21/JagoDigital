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

<!-- visi misi section start -->
<section class="visi-misi-section">
    <div class="container">
        <div class="row">
            <div class="col visi">
                <h3>Visi</h3>
                <p>
                    <?= $tentang['visi'] ?>
                    <!-- Menjadi perusahaan digital marketing terkemuka yang berkomitmen untuk memberikan solusi kreatif dan inovatif bagi pelanggan kami. -->
                </p>
            </div>
            <div class="col misi">
                <h3>Misi</h3>
                <p>
                    <?= $tentang['misi'] ?>
                    <!-- Memberikan layanan berkualitas tinggi dalam semua aspek digital marketing, mengembangkan strategi yang sesuai dengan kebutuhan unik setiap pelanggan, dan mendorong pertumbuhan bisnis yang berkelanjutan dan berdampak positif. -->
                </p>
            </div>
        </div>
    </div>
</section>
<!-- visi misi section end -->

<!-- perjalanan section start -->
<section class="perjalanan-section">
    <div class="container">
        <div class="col-perjalanan">
            <h3>
                Perjalanan
            </h3>
            <p>
                Jago Digital Marketing didirikan sejak tahun 2024 dengan tim yang terdiri dari orang-orang yang memiliki passion di bidang digital marketing dan digital advertising. Keahlian dan pengalaman kami telah menghadirkan jasa digital marketing yang efektif dan terjangkau untuk meningkatkan efektifitas pemasaran online bisnis Anda.
            </p>
        </div>
    </div>
</section>
<!-- perjalanan section end -->

<!-- founder section start -->
<section class="founder-section">
    <div class="container">
        <h3>Pendiri</h3>
        <div class="row">
            <div class="col-6 col-left">
                <img src="<?= base_url('assets-new/images/founder/founder1.png') ?>" alt="Foto Pendiri" class="founder-image">
            </div>
            <div class="col-6 col-right">
                <h2>Fernandes Raymond</h2>
                <p>
                    Sukses dengan bisnisnya di bidang IT dengan nama PT. Elecomp Indonesia, ia memiliki pengalaman luas di bidang IT, termasuk sebagai Facilitator PPEI di Kementerian Perdagangan Indonesia, Facilitator Gapura Digital, dan Business Owner NAKAM Foods Indonesia. Dengan berbagai potensi yang dimiliki baik di dunia IT maupun marketing, ia memutuskan untuk mendirikan sebuah pelatihan. Pelatihan ini bertujuan untuk memajukan UMKM yang masih kurang mumpuni dalam menghadapi perkembangan teknologi, dengan mengoptimalkan marketing melalui media yang ada saat ini.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- founder section end -->



<!-- about us css -->
<style>
    .about-us-section {
        background-color: #FFF4FF;
        padding: 100px 0;
        text-align: center;
    }

    .about-us-section h2 {
        font-size: 2.5rem;
        font-weight: bold;
        color: #933393;
        /* Warna teks dan garis bawah */
        margin-bottom: 10px;
        border-bottom: 3px solid #933393;
        /* Warna garis bawah */
        display: inline-block;
        padding-bottom: 5px;
        /* Memberikan sedikit ruang antara teks dan garis bawah */
    }

    .about-us-section p {
        font-size: 1.2rem;
        color: #555;
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
        color: #933393;
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

<!-- perjalanan css -->
<style>
    .perjalanan-section {
        background-color: #E0E0E0;
        /* Warna background */
        padding: 50px 0;
        text-align: center;
        /* Mengatur teks agar berada di tengah */
        color: #121212;
        /* Warna teks */
    }

    .perjalanan-section h3 {
        font-size: 2rem;
        font-weight: 500;
        margin-bottom: 20px;
        color: #121212;
        /* Warna teks judul */
    }

    .perjalanan-section p {
        font-size: 1.2rem;
        max-width: 800px;
        /* Lebar maksimal paragraf */
        margin: 0 auto;
        line-height: 1.6;
    }
</style>

<!-- /* founder section css */ -->
<style>
    .founder-section {
        padding: 50px 0;
        background-color: #E0E0E0;
        /* Warna background */
    }

    .founder-section h3 {
        text-align: center;
        color: #121212;
        /* Warna judul */
        font-size: 2rem;
        margin-bottom: 40px;
    }

    .founder-section .row {
        display: flex;
        flex-wrap: wrap;
        /* Mengizinkan kolom untuk membungkus ke baris berikutnya pada layar kecil */
        align-items: center;
    }

    .founder-section .col-6 {
        flex: 0 0 50%;
        /* Membagi kolom menjadi 50% masing-masing pada layar besar */
        box-sizing: border-box;
        /* Mengatur kotak model untuk padding dan border */
    }

    .founder-section .founder-image {
        width: 80%;
        /* Mengatur lebar gambar agar proporsional */
        height: auto;
        border-radius: 10px;
        /* Menambahkan sedikit efek melengkung pada gambar */
        display: block;
        margin: 0 auto;
        /* Memastikan gambar berada di tengah */
    }

    .founder-section .col-6 h2 {
        font-size: 2rem;
        color: #933393;
        margin-bottom: 10px;
    }

    .founder-section .col-6 p {
        font-size: 1.2rem;
        color: #555;
        line-height: 1.6;
        text-align: justify;
    }

    .founder-section .col-6 strong {
        font-size: 1.4rem;
        color: #333;
    }

    /* Media Query untuk layar kecil */
    @media (max-width: 768px) {
        .founder-section .col-6 {
            flex: 0 0 100%;
            /* Kolom akan mengambil 100% lebar pada layar kecil */
            max-width: 100%;
            /* Memastikan kolom memanfaatkan seluruh lebar yang tersedia */
        }

        .founder-section .col-left,
        .founder-section .col-right {
            padding: 0 15px;
            /* Memberikan ruang di kiri dan kanan teks */
            box-sizing: border-box;
            /* Mengatur kotak model untuk padding dan border */
        }

        .founder-section .col-right {
            margin-top: 20px;
            /* Menambahkan jarak antara gambar dan teks */
        }

        .founder-section .founder-image {
            margin-bottom: 20px;
            /* Menambahkan margin bawah untuk gambar agar tidak terlalu rapat dengan teks */
        }
    }
</style>


<?= $this->endsection('content'); ?>