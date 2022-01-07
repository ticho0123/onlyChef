    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <a class="navbar-brand" href="indexuser">ChefTalk</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="indexuser"><b>Beranda</b></a>
                    <a class="nav-link" href="tanyachef">Tanya Chef</a>
                    <a class="nav-link" href="artikel">Artikel</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="nav-img" src="asset/userwhite.svg" alt=""><?php if(session()->get('nama_depan')): ?>
                        <?php echo strtoupper(session()->get('nama_depan'))?>
                        <?php endif ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Profil Saya</a>
                        <a class="dropdown-item" href="<?php echo base_url('logout') ?>">Log Out</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="jumbotron">
        <div class="row">
            <div class="col-md-6 jumbotron-content">
                <h1>Memasak Menjadi Mudah</h1>
                <p>Dengan ChefTalk, kamu tidak perlu bingung saat memasak karena disini tersedia chef-chef professional
                    yang siap membantumu.</p>
            </div>
        </div>
    </div>

    <div class="menu-bawah">
        <div class="container">
            <div class="row">
                <div class="col-md-3 menu-bawah-flex">
                    <div class="menu-bawah-kiri text-center">
                        <h5>Menu</h5>
                        <a href="tanyachef" class="tombol-hijau mt-3">
                            <div class="tombol-icon"><img src="asset/chef.svg" alt=""></div> Cari Chef
                        </a> <br>
                        <a href="artikel" class="tombol-putih mt-3">
                            <div class="tombol-icon"><img src="asset/add-file.svg" alt=""></div>Artikel
                        </a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="menu-bawah-artikel">
                        <h5>Baca Artikel</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-4 artikel-wrap">
                                <div class="artikel-box">
                                    <div class="artikel-judul">
                                        <a href="p/bagaimana-cara-memasak-dengan-rice-cooker">Bagaimana caranya
                                            memasak dengan Rice Cooker</a>
                                    </div>
                                    <a href="p/bagaimana-cara-memasak-dengan-rice-cooker">
                                        <img src="asset/artikel.jpg" class="artikel-thumbnail" alt="">
                                    </a>
                                    <p>22 Juni</p>
                                    <button class="tombol-like"> <img src="asset/like.svg" alt=""> 2,4 Ribu
                                    </button>
                                    <button class="tombol-komen"> <img src="asset/chat.svg" alt=""> 1
                                    </button>
                                    <div class="artikel-kategori">
                                        <a href="#">Tutorial</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 artikel-wrap">
                                <div class="artikel-box">
                                    <div class="artikel-judul">
                                        <a href="#">Makan nasi dan mie instan Emang Sehat?</a>
                                    </div>
                                    <a href="#">
                                        <img src="asset/artikel.jpg" class="artikel-thumbnail" alt="">
                                    </a>
                                    <p>20 Juni</p>
                                    <button class="tombol-like"> <img src="asset/like.svg" alt=""> 56
                                    </button>
                                    <button class="tombol-komen"> <img src="asset/chat.svg" alt=""> 0
                                    </button>
                                    <div class="artikel-kategori">
                                        <a href="#">Tutorial</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 artikel-wrap">
                                <div class="artikel-box">
                                    <div class="artikel-judul">
                                        <a href="#">Makanan Ini Ternyata dapat Meningkatkan Imun</a>
                                    </div>
                                    <a href="#">
                                        <img src="asset/artikel.jpg" class="artikel-thumbnail" alt="">
                                    </a>
                                    <p>2 Juni</p>
                                    <button class="tombol-like"> <img src="asset/like.svg" alt=""> 100
                                    </button>
                                    <button class="tombol-komen"> <img src="asset/chat.svg" alt=""> 1
                                    </button>
                                    <div class="artikel-kategori">
                                        <a href="#">Tutorial</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 