<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

        <!-- <h1 class="logo me-auto"><a href="index.html">Sailor</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="<?= base_url('auth/index'); ?>" class="logo me-auto"><img src="<?= base_url() ?>assets/img/logo-poltek-aja.png" alt="" class="img-fluid"></a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="<?= base_url('auth/index'); ?>">Home</a></li>

                <li class="dropdown"><a href="#"><span>Tentang MID</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="<?= base_url('auth/visi_misi'); ?>">Visi & Misi</a></li>
                        <li><a href="<?= base_url('auth/civitas'); ?>">Civitas</a></li>
                        <!-- <li><a href="<?= base_url('auth/motto'); ?>">Motto</a></li> -->
                    </ul>
                </li>
                <!-- <li><a href="<?= base_url('auth/kompetensi'); ?>">Kompetensi</a></li> -->
                <li><a href="<?= base_url('auth/fasilitas'); ?>">Fasilitas</a></li>
                <li><a href="<?= base_url('auth/berita'); ?>">Berita</a></li>

                <li><a href="<?= base_url('auth/contact'); ?>">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->