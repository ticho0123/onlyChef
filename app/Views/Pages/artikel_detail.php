
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <a class="navbar-brand" href="../indexuser">ChefTalk</a>
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

    <div class="artikelpost">
        <div class="container">
            <div class="row">
                <div class="col-md-6 m-auto">
                    <h2 class="artikelpost-judul">
                        <?php echo $article->judul ?>
                    </h2>
                    <div class="artikel-author">
                        <p><?php echo $article->nama_depan ?></p>
                    </div>
                    <div class="artikel-status">
                        <span class="artikel-tanggal"><?php echo $article->tanggal ?> >></span>
                        <span class="artikel-kategori"><?php echo $article->kategori ?></span>
                    </div>
                    <div class="artikelpost-thumbnail">
                        <img src='<?php echo base_url("uploads/$article->file_name") ?>' alt="">
                    </div>
                    <div class="artikelpost-isi">
                        <p><?php echo $article->isi ?></p>
                    </div>
                    <button class="tombol-like" data-id="<?php echo $article->id_article ?>"> <img src="../asset/like.svg" alt=""> <?php echo count($likes) ?></button>
                    <button class="tombol-komen"> <img src="../asset/chat.svg" alt=""> <?php echo count($comments) ?></button>
                    <hr>
                    <h5>Respon</h5>

                    <?php foreach($comments as $comment): ?>
                    <div class="artikelpost-komentar">
                        <p><b><?php echo $comment->nama_depan ?></b></p>
                        <p class="isi-komentar"><?php echo $comment->komentar ?></p>
                    </div>
                    <?php endforeach; ?>

                    <div class="artikelpost-kolomkomentar">
                        <form method="post" action="<?php echo base_url('article/comment/'. $article->id_article) ?>">
                            <input type="text" name="komentar" id="input-komentar" placeholder="Tambahkan Respon....">
                            <button type="submit" class="tombol-respon">Respon</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

