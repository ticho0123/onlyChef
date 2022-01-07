
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <a class="navbar-brand" href="indexuser.html">ChefTalk</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="indexuser.html">Beranda</a>
                    <a class="nav-link" href="tanyachef.html">Tanya Chef</a>
                    <a class="nav-link" href="artikel.html">Artikel</a>
                    <a class="nav-link" href="admin.html"><b>Admin</b></a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="nav-img" src="asset/usergreen.svg" alt=""><?php if(session()->get('nama_depan')): ?>
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

    <div class="tanyachef">
        <div class="container">
            <h5>Tanya Chef</h5>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 m-auto">
                    <form class="form-pencarian">
                        <input class="input-pencarian" type="search" placeholder="Masukkan nama chef"
                            aria-label="Search">
                        <button class="tombol-pencarian" type="submit"> <img src="asset/searchwhite.svg" alt="">
                            <b>Cari</b></button>
                    </form>
                    <div class="row">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-9">
                            <div class="chef-box">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="chef-box-avatar">
                                            <a href="#">
                                                <img src="asset/fotochef.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="chef-box-detail">
                                            <p class="nama-chef"><b><a href="#">Alfonso de Albuquerque</a></b></p>
                                            <p>Konsumen : Putra S <br>
                                                Kode Pembayaran : 00001 <br>
                                                Jumlah : Rp.50.000,00 <br>
                                                Transfer Via Bank : MANDIRI <br></p>
                                            <p>Rating Chef : <img src="asset/star.svg" alt=""> 4.9</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="chef-box-action">
                                            <b>
                                                <p>Rp50.000,00</p>
                                                <a href="#" class="tombol-hijau-normal">Terima</a>
                                            </b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chef-box">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="chef-box-avatar">
                                            <a href="#">
                                                <img src="asset/fotochef.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="chef-box-detail">
                                            <p class="nama-chef"><b><a href="#">Albuquerque de Alfonso </a></b></p>
                                            <p>Konsumen : Bambang H <br>
                                                Kode Pembayaran : 00002 <br>
                                                Jumlah : Rp.50.000,00 <br>
                                                Transfer Via Bank : MANDIRI <br></p>
                                            <p>Rating Chef : <img src="asset/star.svg" alt=""> 4.9</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="chef-box-action">
                                            <b>
                                                <p>Rp50.000,00</p>
                                                <a href="#" class="tombol-hijau-normal">Terima</a>
                                            </b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

