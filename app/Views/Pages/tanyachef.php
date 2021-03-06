
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <a class="navbar-brand" href="indexuser">ChefTalk</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="indexuser">Beranda</a>
                    <a class="nav-link" href="tanyachef"><b>Tanya Chef</b></a>
                    <a class="nav-link" href="artikel">Artikel</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="nav-img" src="asset/usergreen.svg" alt="">SANTICHO
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Profil Saya</a>
                        <a class="dropdown-item" href="#">Log Out</a>
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
                            <div class="keahlian-box">
                                <h5>Pilih Keahlian</h5>
                                <hr>
                                <form action="#" class="form-keahlian">
                                    <input type="radio" name="keahlian" id="semua" value="semua">
                                    <label for="semua">Semua</label> <br>
                                    <input type="radio" name="keahlian" id="ratatouile" value="ratatouile">
                                    <label for="ratatouile">Ratatouile</label> <br>
                                    <input type="radio" name="keahlian" id="pizza" value="pizza">
                                    <label for="pizza">Pizza</label> <br>
                                    <input type="radio" name="keahlian" id="barbeque" value="barbeque">
                                    <label for="barbeque">Barbeque</label> <br>
                                    <input type="radio" name="keahlian" id="idom" value="idom">
                                    <label for="idom">Idom</label> <br>
                                    <input type="radio" name="keahlian" id="idom" value="idom">
                                    <label for="idom">Idom</label> <br>
                                    <input type="radio" name="keahlian" id="idom" value="idom">
                                    <label for="idom">Idom</label> <br>
                                </form>
                            </div>
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
                                            <p>Keahlian : Memasak Steak, Ratatouile, dan Pizza</p>
                                            <p>Rating : <img src="asset/star.svg" alt=""> 4.9</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="chef-box-action">
                                            <b>
                                                <p>Rp50.000,00</p>
                                                <a href="pembayaran" class="tombol-hijau-normal">Bayar</a>
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

 