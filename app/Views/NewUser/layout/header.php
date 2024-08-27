<?php
    // Mendapatkan URL segmen pertama untuk menentukan halaman aktif
    $uri = service('uri');
    $segment = $uri->getSegment(1);
?>

<nav class="navbar navbar-expand-lg bg-light sticky-top" style="padding: 15px;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
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
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link px-3 <?= ($segment == 'cara-pendaftaran') ? 'active' : ''; ?>" href="/cara-pendaftaran" id="cara-pendaftaran-link">Cara Pendaftaran</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-3 <?= ($segment == 'kontak') ? 'active' : ''; ?>" href="/kontak" id="kontak-link">Kontak</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled px-3">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
