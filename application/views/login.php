<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Selamat Datang!</h1>
                  </div>

                  <?php echo $this->session->flashdata('pesan'); ?>
                  <form action="<?php echo site_url('auth/login') ?>" method="post" class="user">
                    <div class="form-group">
                      <input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan username">
                      <?php echo form_error('username', '<div class="text-danger small">','</div>'); ?>
                    </div>
                    <div class="form-group">
                      <input type="text" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukan password">
                      <?php echo form_error('password', '<div class="text-danger small">','</div>'); ?>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="register.html">Belum memiliki akun? Daftar sekarang!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
