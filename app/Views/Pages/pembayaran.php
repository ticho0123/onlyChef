
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
                    <a class="nav-link" href="tanyachef.html"><b>Tanya Chef</b></a>
                    <a class="nav-link" href="artikel.html">Artikel</a>
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

    <div class="pembayaran">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pembayaran-wrap">
                    <div class="pembayaran-box">
                        <h1>Pembayaran</h1>
                        <hr>

                        <p class="text">Transfer via Bank</p>
                        <select name="bank" id="bank" aria-placeholder="Pilih Bank" class="pilih-bank">
                            <option value="BRI">Bank BRI</option>
                            <option value="BCA">Bank BCA</option>
                            <option value="Mandiri">Bank Mandiri</option>
                            <option value="Jago">Bank Jago</option>
                            <option value="Jago">OVO</option>
                            <option value="Jago">DANA</option>
                        </select>
                        <br><br>

                        <p>Lakukan Pembayaran Sebelum:</p>
                        <p class="timer">02:00:00</p>

                        <p class="nominal-bayar">Rp.50.000,00</p>

                        <a href="chat.html" class="tombol-publish">Bayar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

   