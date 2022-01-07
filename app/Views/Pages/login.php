
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="index.html">ChefTalk</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-login">
                    <div class="form-box">
                        <div class="button-box">
                            <div id="btn"></div>
                            <button type="button" id="toggle-login" class="toggle-btn"
                                onclick="login()"><b>Login</b></button>
                            <button type="button" id="toggle-register" class="toggle-btn" onclick="register()"><b>Sign
                                    Up</b></button>
                        </div>

                        <?php if(session()->getFlashdata('message') != null): ?>
                        <div class="alert alert-success text-center" role="alert">
                          <?php echo session()->getFlashdata('message') ?>
                        </div>
                        <?php endif ?>

                        <?php if(session()->getFlashdata('error') != null): ?>
                        <div class="alert alert-danger text-center" role="alert">
                          <?php echo session()->getFlashdata('error') ?>
                        </div>
                        <?php endif ?>

                        <form id="login" class="input-group" method="post" action="<?php echo base_url('auth/login') ?>">
                            <div class="form-content">
                                <img src="asset/mascot.svg" alt="">
                                <h5>Login ChefTalk</h5>
                            </div>
                            <input type="text" class="input-field" placeholder="Username" name="username" required>
                            <input type="password" class="input-field" placeholder="Password" name="password" required>
                            <button type="submit" class="tombol-login">Login</button>
                        </form>
                        <form id="register" class="input-group" method="post" action="<?php echo base_url('auth/sign_up') ?>">
                            <div class="form-content">
                                <h5>Buat Akun</h5>
                            </div>
                            <input type="text" class="input-field" placeholder="Nama Depan" name="nama_depan" required>
                            <input type="text" class="input-field" placeholder="Nama Belakang" name="nama_belakang" required>
                            <input type="text" class="input-field" placeholder="Username" name="username" required>
                            <input type="password" class="input-field" placeholder="Password" name="password" required>
                            <button type="submit" class="tombol-login">Register</button>
                            <p>Dengan klik verifikasi kamu menyetujui <b>Syarat dan Ketentuan Layanan & Kebijakan
                                    Privasi
                                    Aplikasi</b>
                            </p>
                    </div>
                    </p>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script>
        var media = window.matchMedia("(min-width:728px)")
        media.addListener(register)

        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register() {
            if (media.matches) {
                x.style.left = "-400px";
                y.style.left = " 50px";
                z.style.left = "140px";
            } else {
                x.style.left = "-430px";
                y.style.left = " 30px";
                z.style.left = "140px";
            }

        }

        function login() {
            if (media.matches) {
                x.style.left = "50px";
                y.style.left = "450px";
                z.style.left = "0px";
            } else {
                x.style.left = "30px";
                y.style.left = "350px";
                z.style.left = "0px";
            }
        }
    </script>