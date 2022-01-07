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

    <div class="chatchef">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="chatchef-kiri">
                        <div class="chat-user">
                            <div class="chat-avatar">
                                <img src="asset/fotochef.jpg" alt="">
                            </div>
                            <div class="chat-message">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus eligendi
                                    reiciendis.
                                </p>
                            </div>
                        </div>
                        <div class="chat-chef">
                            <div class="chat-avatar">
                                <img src="asset/fotochef.jpg" alt="">
                            </div>
                            <div class="chat-message">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus eligendi
                                    reiciendis dolore nemo temporibus sapiente, velit ducimus laborum? Maxime non
                                    recusandae similique vitae, sequi facilis nihil culpa! Voluptas, voluptates aliquid.
                                </p>
                            </div>
                        </div>
                        <div class="chat-input">
                            <div class="chat-input-file">
                                <input type="file" id="upload-file" hidden>
                                <label for="upload-file"> <img src="asset/plusgreen.svg" alt=""></label>
                            </div>
                            <div class="chat-input-text">
                                <input type="text" class="ketikpesan" name="ketikpesan" id="ketikpesan"
                                    placeholder="Ketik Pesan">
                            </div>
                            <div class="chat-input-kirim">
                                <button type="submit" class="kirimpesan">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="chatchef-kanan">
                        <div class="chat-fotochef">
                            <img src="asset/fotochef.jpg" alt="">
                        </div>
                        <h5 class="chat-namachef">
                            Afonso de Albuquerque
                        </h5>
                        <p class="chat-keahlian">
                            Keahlian : Steak, Ratatouille, Pizza
                        </p>
                        <div class="rating-overview">
                            <h5>Rating Overview</h5>
                            <p><span>4.3</span>/5</p>
                            <img src="asset/star.svg" alt="">
                            <img src="asset/star.svg" alt="">
                            <img src="asset/star.svg" alt="">
                            <img src="asset/star.svg" alt="">
                            <img src="asset/star.svg" alt="">
                        </div>
                        <button type="button" class="tombol-selesaikonsul" data-toggle="modal"
                            data-target="#exampleModal">
                            Selesai Konsul
                        </button>
                        <!-- Modal Konsul -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Beri Rating</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="rating">
                                            <label>
                                                <input type="radio" name="stars" value="1" />
                                                <span class="icon">★</span>
                                            </label>
                                            <label>
                                                <input type="radio" name="stars" value="2" />
                                                <span class="icon">★</span>
                                                <span class="icon">★</span>
                                            </label>
                                            <label>
                                                <input type="radio" name="stars" value="3" />
                                                <span class="icon">★</span>
                                                <span class="icon">★</span>
                                                <span class="icon">★</span>
                                            </label>
                                            <label>
                                                <input type="radio" name="stars" value="4" />
                                                <span class="icon">★</span>
                                                <span class="icon">★</span>
                                                <span class="icon">★</span>
                                                <span class="icon">★</span>
                                            </label>
                                            <label>
                                                <input type="radio" name="stars" value="5" />
                                                <span class="icon">★</span>
                                                <span class="icon">★</span>
                                                <span class="icon">★</span>
                                                <span class="icon">★</span>
                                                <span class="icon">★</span>
                                            </label>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="tombol-simpan">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
