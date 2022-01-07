    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <a class="navbar-brand" href="../indexuser.html">ChefTalk</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../indexuser">Beranda</a>
                    <a class="nav-link" href="../tanyachef">Tanya Chef</a>
                    <a class="nav-link" href="../artikel"><b>Artikel</b></a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="nav-img" src="../asset/usergreen.svg" alt="">
                        <?php if(session()->get('nama_depan')): ?>
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

    <div class="artikelbaru">
        <div class="container">
            <div class="row">
                <div class="col-md-6 m-auto">
                    <form method="post" action="article/create" enctype="multipart/form-data">
                        <input type="text" name="judul" class="artikelbaru-judul" placeholder="Judul" required>
                        <input type="text" name="kategori" class="artikelbaru-kategori" placeholder="Tambahkan Kategori" required>
                        <input type="file" name="file" id="artikelbaru-file" required hidden>
                        <label for="artikelbaru-file" class="artikelbaru-upload"> <img src="<?php echo base_url() ?>/asset/plus.svg" alt="" >
                            <p>Tambahkan
                                Gambar</p>
                        </label>
                        <textarea name="isi" id="input-konten" class="input-konten"
                            placeholder="Ceritakan Artikelmu..." required></textarea>
                        <button type="submit" class="tombol-publish">Publish</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

   