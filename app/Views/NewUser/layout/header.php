<?php
// Mendapatkan URL segmen pertama untuk menentukan halaman aktif
$uri = service('uri');
$segment = $uri->getSegment(1);
$session = session(); // Start the session to access user data
$loggedIn = $session->get('logged_in');
$username = $session->get('username'); // Get the logged-in user's name
?>

<nav class="navbar navbar-expand-lg bg-light sticky-top" style="padding: 15px;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="margin-left: 40px; margin-right: 100px;">
      <img src="<?= base_url('assets-new/images/logo.png') ?>" alt="Logo" style="height: 40px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link px-3 <?= ($segment == 'index' || $segment == '') ? 'active' : ''; ?>" href="/" id="beranda-link">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-3 <?= ($segment == 'about') ? 'active' : ''; ?>" href="/about" id="tentang-kami-link">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-3 <?= ($segment == 'artikel') ? 'active' : ''; ?>" href="/artikel" id="artikel-link">Artikel</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle px-3 <?= ($segment == 'materi-pembelajaran') ? 'active' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Materi Pembelajaran
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/video">Video Pembelajaran</a></li>
            <?php if ($loggedIn): ?>
              <?php if (!empty($categories)): ?>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <?php foreach ($categories as $category): ?>
                  <li><a class="dropdown-item" href="<?= base_url('/video/kategori/' . $category->id_katvideo) ?>"><?= $category->nama_kategori_video ?></a></li>
                <?php endforeach; ?>
              <?php else: ?>
                <li><a class="dropdown-item" href="#">No Categories Available</a></li>
              <?php endif; ?>
            <?php endif; ?>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link px-3 <?= ($segment == 'cara-pendaftaran') ? 'active' : ''; ?>" href="/cara-pendaftaran" id="cara-pendaftaran-link">Cara Pendaftaran</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle px-3 <?= ($segment == 'Informasi') ? 'active' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Informasi
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="">Pengumuman</a></li>
            <li><a class="dropdown-item" href="">Berita</a></li>
            <li><a class="dropdown-item" href="">Artikel</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link px-3 <?= ($segment == 'kontak') ? 'active' : ''; ?>" href="/kontak" id="kontak-link">Kontak</a>
        </li>
      </ul>

      <!-- User Dropdown or Login Button -->
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <?php if ($username): ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-person-circle"></i> <!-- User icon -->
              <?= $username ?>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="<?= base_url('logout') ?>">Logout</a></li>
            </ul>
          </li>
        <?php else: ?>
          <li class="nav-item">
            <a class="btn btn-primary" href="<?= base_url('login') ?>">Login</a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>