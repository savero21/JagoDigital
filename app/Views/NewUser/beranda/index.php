<?= $this->extend('NewUser/layout/app'); ?>
<?= $this->section('content'); ?>

<section class="banner">
    <div class="container"> <!-- Wrapped with container -->
        <div class="row align-items-center">
            <!-- Text Section -->
            <div class="col-md-8">
                <div class="card">
                    <div class="hero-text text-center">
                        <h1><span class="highlight">Jago</span> Digital <span class="highlight">Marketing</span></h1>
                        <p>Jago Digital Marketing adalah pelatihan untuk meningkatkan keterampilan pemasaran digital,
                            mencakup dasar pemasaran online, strategi konten, dan penggunaan iklan digital.
                            Cocok untuk pemula dan profesional, program ini membantu peserta meningkatkan keterampilan
                            dan daya saing bisnis. Bergabunglah untuk membawa bisnis Anda ke level berikutnya!</p>
                        <a href="#section-id" class="btn btn-custom">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
            <!-- Video Section -->
            <div class="col-md-4">
                <div class="card">
                    <div class="hero-video">
                        <iframe
                            id="my-video"
                            class="embed-responsive-item rounded"
                            controls
                            preload="auto"
                            src="https://drive.google.com/file/d/1t9j65vDskKEkI4PZ0pEbPOq_rmoGJEa9/preview"
                            sandbox="allow-scripts allow-same-origin"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- New section with gap and centered title -->
<section class="gap-section mb-5">
    <h1 class="text-center title">Apa sih kelebihan Jago Digital Marketing?</h1>
</section>

<section class="container-fluid features-section">
    <div class="content-wrapper">
        <div class="row feature-details">
            <div class="col-md-6 mt-5">
                <div class="feature-header">
                    <h1>Kenapa Jago Digital Marketing<br>Paling Tepat Buat Upskilling?</h1>
                    <p>Melalui Jago Digital Marketing kamu dapat meng-upgrade kemampuan kamu dalam hal softskill dibidang marketing.</p>
                    <p>Berikut beberapa alasan keren kenapa kamu harus ikut kegiatan Jago Digital Marketing :</p>
                    <hr>
                </div>
                <div class="feature-stats">
                    <h1>1087+</h1>
                    <p>Lulusan Pelatihan dengan berbagai background, mulai dari lulusan SMA sampai Professional.</p>
                </div>
                <div class="feature-stats">
                    <h1>630+</h1>
                    <p>Facilitator sudah berpartisipasi dalam mencetak talenta-talenta digital melalui Pelatihan.</p>
                </div>
                <div class="feature-stats">
                    <h1>120+</h1>
                    <p>Perusahaan hiring partner di Indonesia yang siap dikoneksikan dengan Pelatihan.</p>
                </div>
            </div>
            <div class="col-md-6 mt-5 d-flex flex-column align-items-center">
                <?php foreach ($keuntungan as $item): ?>
                    <div class="card-custom">
                        <img src="<?= base_url('uploads/icon/' . $item['icon_keuntungan']) ?>" alt="<?= $item['judul_keuntungan'] ?>" class="profile-img">
                        <div class="card-body">
                            <h5 class="card-title"><?= $item['judul_keuntungan'] ?></h5>
                            <p class="card-text"><?= $item['deskripsi_keuntungan'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
</section>

<!-- New section with gap and centered title -->
<section class="gap-section mb-5">
    <div class="text-center">
        <h1 class="title">Pilih Jago Digital Marketing Yang Sudah <br>
            Terpecaya Untuk Kembangkan Usahamu!
        </h1>
        <h5>
            Ayo pelajari lebih lanjut apa sih Jago Digital Marketing? Yuk kepoin!
        </h5>
        <a href="#section-id" class="btn btn-custom mt-3">Daftar Sekarang</a>
    </div>
</section>

<section class="container-fluid custom-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card card-custom">
                    <div class="card-body">
                        <!-- Text Section -->
                        <div class="hero-text">
                            <h1 style="color: #933393;">Masih Bingung dan Galau <br> Mau Ikut Pelatihan JDM?</h1>
                            <br>
                            <p style="color:#000000">Coba simak penjelasan singkat dari salah satu mentor Pelatihan Jago <br> Digital Marketing disamping ini.</p>
                        </div>
                        <!-- Video Section -->
                        <div class="hero-video">
                            <iframe
                                id="my-video"
                                class="embed-responsive-item rounded"
                                style="width: 100%; max-width: 100%; height: auto;"
                                controls
                                preload="auto"
                                src=" https://drive.google.com/file/d/1t9j65vDskKEkI4PZ0pEbPOq_rmoGJEa9/preview"
                                sandbox="allow-scripts allow-same-origin"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- New section with gap and centered title -->
<section class="gap-section mb-5">
    <div class="text-center">
        <h1 class="title">Cerita Sukses Alumni Jago Digital Marketing
        </h1>
        <h5>
            Mereka sudah merasakan serunya belajar skill digital marketing dan meraih kesuksesan yang mereka inginkan.
            <br> Kamu selanjutnya?
        </h5>
    </div>
</section>

<section class="testimoni">
    <div class="container">
        <div class="row">
            <!-- Testimonial 1 -->
            <div class="col-md-4">
                <div class="card testimoni-card">
                    <div class="card-body">
                        <blockquote class="testimoni-quote">
                            <p>Buat saya, <span class="highlight">ikut Jagoan Digital Marketing menambah hardskill dan pengetahuan untuk saya.</span> Proses belajar dari fasilitator juga enjoy dan seru. Saya ucapkan terimakasih banyak untuk tim JDM, Kak Fer sebagai fasilitator dan teman-teman di Pelatihan JDM. Sukses untuk kalian!</p>
                        </blockquote>
                        <div class="testimoni-author">
                            <img src="<?= base_url('assets-new/images/avatar/avatar1.png') ?>" alt="Reino Prajamukti" class="author-image">
                            <div class="author-info">
                                <h5 class="author-name">Reino Prajamukti</h5>
                                <p class="author-title">Application Support Analyst di <strong>3Dolphins.ai</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial 2 -->
            <div class="col-md-4">
                <div class="card testimoni-card">
                    <div class="card-body">
                        <blockquote class="testimoni-quote">
                            <p>Testimoni kedua untuk <span class="highlight">Jagoan Digital Marketing</span>. Belajar yang sangat bermanfaat dan menambah wawasan saya.</p>
                        </blockquote>
                        <div class="testimoni-author">
                            <img src="<?= base_url('assets-new/images/avatar/avatar1.png') ?>" alt="Author Name" class="author-image">
                            <div class="author-info">
                                <h5 class="author-name">Author Name</h5>
                                <p class="author-title">Job Title di <strong>Company Name</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial 3 -->
            <div class="col-md-4">
                <div class="card testimoni-card">
                    <div class="card-body">
                        <blockquote class="testimoni-quote">
                            <p>Testimoni ketiga. <span class="highlight">Jagoan Digital Marketing</span> adalah pelatihan terbaik yang pernah saya ikuti.</p>
                        </blockquote>
                        <div class="testimoni-author">
                            <img src="<?= base_url('assets-new/images/avatar/avatar1.png') ?>" alt="Author Name" class="author-image">
                            <div class="author-info">
                                <h5 class="author-name">Author Name</h5>
                                <p class="author-title">Job Title di <strong>Company Name</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial 3 -->
            <div class="col-md-4">
                <div class="card testimoni-card">
                    <div class="card-body">
                        <blockquote class="testimoni-quote">
                            <p>Testimoni ketiga. <span class="highlight">Jagoan Digital Marketing</span> adalah pelatihan terbaik yang pernah saya ikuti.</p>
                        </blockquote>
                        <div class="testimoni-author">
                            <img src="<?= base_url('assets-new/images/avatar/avatar1.png') ?>" alt="Author Name" class="author-image">
                            <div class="author-info">
                                <h5 class="author-name">Author Name</h5>
                                <p class="author-title">Job Title di <strong>Company Name</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial 3 -->
            <div class="col-md-4">
                <div class="card testimoni-card">
                    <div class="card-body">
                        <blockquote class="testimoni-quote">
                            <p>Testimoni ketiga. <span class="highlight">Jagoan Digital Marketing</span> adalah pelatihan terbaik yang pernah saya ikuti.</p>
                        </blockquote>
                        <div class="testimoni-author">
                            <img src="<?= base_url('assets-new/images/avatar/avatar1.png') ?>" alt="Author Name" class="author-image">
                            <div class="author-info">
                                <h5 class="author-name">Author Name</h5>
                                <p class="author-title">Job Title di <strong>Company Name</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- css for banner -->
<style>
    /* Section Banner Styles */
    .banner {
        position: relative;
        padding: 100px 15px;
        background: url('<?= base_url('assets-new/images/bg1.jpg') ?>') no-repeat center center;
        background-size: cover;
        min-height: 100vh;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .banner .row.align-items-center {
        position: relative;
        z-index: 2;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        max-width: 1200px;
        flex-wrap: wrap;
        /* Allow wrapping of content on smaller screens */
    }

    .banner .card {
        background-color: transparent;
        /* Fully transparent background */
        border: none;
        box-shadow: none;
        border-radius: 10px;
        margin-bottom: 30px;
    }

    .banner .card-body {
        padding: 20px;
    }

    .banner .hero-text {
        color: white;
        text-align: justify;
        padding: 20px;
        border-radius: 10px;
        max-width: 100%;
    }

    .banner .hero-text .highlight {
        color: #ffb228;
    }

    .banner .hero-text h1 {
        font-size: 2.5rem;
        font-weight: 900;
        color: #ffffff;
        margin-bottom: 20px;
    }

    .banner .hero-text p {
        text-align: justify;
        font-size: 1rem;
        line-height: 1.5;
        color: #ffffff;
        margin-top: 15px;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
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

    .banner .hero-video iframe {
        width: 100%;
        height: 200px;
        border-radius: 10px;
    }

    /* Responsive adjustments */
    @media (min-width: 768px) {
        .banner .hero-text h1 {
            font-size: 3rem;
        }

        .banner .hero-video iframe {
            height: 250px;
        }
    }

    @media (max-width: 767px) {
        .banner .row.align-items-center {
            flex-direction: column;
            align-items: center;
        }

        .banner .hero-text {
            margin-bottom: 20px;
        }

        .banner .hero-text p {
            text-align: justify;
        }
    }
</style>

<!-- css for section gap -->
<style>
    /* Gap below the banner */
    .gap-section {
        margin-top: 50px;
        /* Adjust the gap as needed */
    }

    .gap-section .btn-custom {
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

    .gap-section .btn-custom:hover {
        background-color: #ffa500;
        color: #ffffff;
    }

    /* Centered title with purple color */
    .gap-section .title {
        font-size: 2rem;
        color: #933393;
        font-weight: 700;
        /* Purple color */
        margin-bottom: 20px;
    }

    /* Responsive adjustments */
    @media (max-width: 576px) {
        .gap-section .title {
            font-size: 1.5rem;
            font-weight: 600;
            /* Smaller font size and lighter weight for small screens */
        }
    }
</style>

<!-- css for fitur -->
<style>
    .features-section {
        background-color: #77287d;
        color: #ffffff;
        padding: 0 2rem;
    }

    .feature-header h1,
    .feature-stats h1 {
        font-size: 2rem;
        font-weight: 800;
        color: #ffffff;
        margin-bottom: 20px;
        margin-left: 150px;
    }

    .feature-header p,
    .feature-stats p {
        font-size: 1rem;
        color: #ffffff;
        margin-left: 150px;
    }

    .feature-header {
        margin-bottom: 20px;
    }

    .feature-stats {
        margin-bottom: 20px;
    }

    .feature-stats h1 {
        margin-bottom: 10px;
    }

    .features-section .card-custom {
        display: flex;
        align-items: center;
        color: #121212;
        height: 70%;
        width: 100%;
        margin-bottom: 30px;
        background-color: rgba(255, 255, 255, 0.9);
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        padding: 20px;
    }

    .features-section .card-custom img.profile-img {
        width: 60px;
        height: 60px;
        object-fit: cover;
        margin-right: 15px;
        border-radius: 50%;
        margin-left: 2rem;
    }

    .features-section .card-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: #333;
    }

    .features-section .card-text {
        font-size: 1rem;
        color: #555;
    }

    .features-section .gap-section {
        margin-top: 50px;
    }

    .features-section .title {
        font-size: 2rem;
        color: #933393;
        font-weight: 700;
    }

    .features-section .content-wrapper {
        padding: 0px;
    }

    @media (max-width: 768px) {

        .feature-header h1,
        .feature-stats h1 {
            font-size: 1.5rem;
            margin-left: 0;
            text-align: center;
            /* Center align text on small screens */
        }

        .feature-header p,
        .feature-stats p {
            font-size: 0.9rem;
            margin-left: 0;
            text-align: center;
            /* Center align text on small screens */
        }
    }

    @media (min-width: 992px) {
        .features-section .content-wrapper {
            padding: 20px;
        }
    }
</style>

<!-- css for section kelebihan -->
<style>
    .custom-section .card-custom {
        display: flex;
        flex-direction: column;
        width: 100%;
        max-width: 1200px;
        /* Maksimum lebar kartu */
        margin: 0 auto;
        /* Mengatur kartu agar berada di tengah */
        padding: 20px;
        /* Memberikan ruang internal pada kartu */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        /* Memberikan efek bayangan ringan */
        border-radius: 10px;
        /* Membuat sudut kartu menjadi lebih halus */
        box-sizing: border-box;
        /* Memastikan padding dan border termasuk dalam lebar total */
    }

    .custom-section .card-custom .card-body {
        display: flex;
        flex-direction: column;
        /* Menyusun elemen dalam kolom di layar kecil */
        flex: 1;
        /* Memastikan card-body mengambil ruang yang tersedia */
    }

    .custom-section .card-custom .hero-text h1 {
        font-size: 2.5rem;
        /* Sesuaikan ukuran font sesuai kebutuhan */
        line-height: 1.2;
        /* Mengatur jarak antar baris untuk keterbacaan */
    }

    @media (min-width: 768px) {
        .custom-section .card-custom .card-body {
            flex-direction: row;
            align-items: flex-start;
            /* Beralih ke tata letak horizontal di layar yang lebih besar */
        }

        .custom-section .card-custom .hero-text h1 {
            font-size: 2rem;
            font-weight: 700;
            /* Ukuran font yang lebih besar di layar besar */
        }
    }

    .custom-section .card-custom .hero-text {
        flex: 1;
        margin-bottom: 20px;
    }


    .custom-section .card-custom .hero-video iframe {
        width: 100%;
        max-width: 300px;
        height: 500px;
        /* Menyesuaikan tinggi video secara proporsional */
        border-radius: 8px;
    }
</style>

<!-- css for testimoni -->
<style>
    /* Testimoni Section */
    .testimoni {
        padding: 60px 15px;
        background-color: #FFFFFF;
        overflow-x: auto;
        /* Enable horizontal scroll */
        scrollbar-width: none;
        /* Hide scrollbar in Firefox */
        -ms-overflow-style: none;
        /* Hide scrollbar in IE and Edge */
    }

    .testimoni .row {
        display: flex;
        flex-wrap: nowrap;
        /* Prevent wrapping of cards */
    }

    .testimoni .col-md-4 {
        flex: 0 0 auto;
        width: 30.33%;
        /* Set width for each card (33% for 3 cards) */
        max-width: 30.33%;
        /* Ensure width doesn't exceed 33% */
    }

    .testimoni .testimoni-card {
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        /* Center content vertically */
        height: 100%;
        padding: 20px;
        /* Optional padding for better spacing */
        margin-right: 15px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        /* Hover effect */
    }

    .testimoni .testimoni-card:hover {
        transform: scale(1.05);
        /* Slightly increase size on hover */
        box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
        /* Intensify shadow on hover */
    }

    .testimoni .testimoni-quote {
        font-size: 1.1rem;
        line-height: 1.5;
        color: #3C3C3C;
        margin: auto;
        /* Center the quote both horizontally and vertically */
        font-style: italic;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        /* Center text horizontally */
        flex-grow: 1;
    }

    .testimoni-card .card-body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        /* Center content vertically */
        height: 100%;
        padding: 20px;
        /* Optional padding for better spacing */
    }

    .testimoni .testimoni-author {
        margin-top: auto;
        /* Pushes the author section to the bottom of the card */
        display: flex;
        align-items: center;
        justify-content: center;
        padding-top: 20px;
    }

    .testimoni .author-image {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        margin-right: 15px;
    }

    .testimoni .author-info {
        text-align: left;
    }

    .testimoni .author-name {
        font-size: 1rem;
        font-weight: 600;
        margin-bottom: 5px;
        color: #000000;
    }

    .testimoni .author-title {
        font-size: 0.875rem;
        color: #666666;
    }

    .testimoni .author-title strong {
        font-weight: 600;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .testimoni {
            overflow-x: auto;
            /* Hide horizontal scroll on small screens */
            scrollbar-width: none;
            /* Hide scrollbar in Firefox */
            -ms-overflow-style: none;
            /* Hide scrollbar in IE and Edge */
        }

        .testimoni .row {
            flex-wrap: nowrap;
            /* Ensure cards don't wrap */
        }

        .testimoni .col-md-4 {
            width: 100%;
            /* Make each card take full width */
            max-width: 100%;
            margin-right: 0;
            /* Remove right margin */
        }

        .testimoni .testimoni-card {
            margin-right: 0;
        }
    }
</style>

<?= $this->endsection('content'); ?>