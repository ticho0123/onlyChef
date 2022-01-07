    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <a class="navbar-brand" href="indexuser">onlyChef</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="indexuser">Beranda</a>
                    <a class="nav-link" href="tanyachef">Tanya Chef</a>
                    <a class="nav-link" href="artikel"><b>Artikel</b></a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="nav-img" src="<?php echo base_url() ?>/asset/usergreen.svg" alt="">
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

    <div class="artikel">
        <div class="container">

            <div class="row artikel-wrap">
                <div class="col-md-8">
                    <h5 class="artikel-header">Artikel Terbaru</h5>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="artikel-terbaru">

                                <?php foreach($articles as $article): ?>
                                <div class="artikel-post">
                                    <div class="artikel-detail">
                                        <div class="artikel-author">
                                            <p><?php echo ucfirst($article->nama_depan) ?></p>
                                        </div>
                                        <div class="artikel-title">
                                            <a href="<?php echo base_url('artikel/'. $article->slug) ?>"><?php echo $article->judul ?></a>
                                        </div>
                                        <div class="artikel-deskripsi">
                                            <p><?php echo substr($article->isi, 0, 300) . '...' ?></p>
                                        </div>
                                        <div class="artikel-status">
                                            <span class="artikel-tanggal"><?php echo $article->tanggal ?> -</span>
                                            <span class="artikel-like">2,4 Ribu Like -</span>
                                            <span class="artikel-kategori"><?php echo $article->kategori ?></span>
                                        </div>
                                    </div>
                                    <div class="artikel-thumbnail">
                                        <a href="artikel/<?php echo $article->slug?>">
                                            <img src='<?php echo base_url("uploads/$article->file_name") ?>' alt="">
                                        </a>
                                    </div>
                                </div>
                                <?php endforeach; ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="artikel-statistik">
                        <h5 class="artikel-header text-center">Statistik Artikel</h5>
                        <div class="statistik-konten">
                            <div>
                              <canvas id="myChart"></canvas>
                            </div>
                            <br>
                            <a href="artikelbaru" class="tombol-hijau-besar">
                                <div class="iconposting"></div> Buat
                                Artikel
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
