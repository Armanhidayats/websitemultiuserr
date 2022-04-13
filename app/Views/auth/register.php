<?= $this->extend('admin/index') ?>
<?= $this->section('content') ?>
    <!-- Custom styles for this template-->
    <link href="<?= Base_url();?>/assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-light">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login">
                             <img src="<?= Base_url();?>/assets/img/KONI.jpg" width= "600px" height = "400px">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Daftar Akun KONI SUMSEL !</h1>
                                    </div>

                                    <?= view('Myth\Auth\Views\_message_block') ?>

                                    <form action="<?= route_to('register') ?>" method="post" class="user">
						            <?= csrf_field() ?>

                                       
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>"
                                                 aria-describedby="emailHelp" name="email" value="<?= old('email') ?>" placeholder="Enter Email Address...">
                                                <div class="invalid-feedback">
								                    <?= session('errors.login') ?>
							                    </div>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user <?php if(session('errors.username')) : ?>is-invalid<?php endif ?>"
                                                  name="username" value="<?= old('username') ?>" placeholder="Username">
                                                <div class="invalid-feedback">
								                    <?= session('errors.login') ?>
							                    </div>
                                        </div>
                                

                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="password"
                                          placeholder="Password" <?php if(session('errors.password')) : ?>is-invalid<?php endif ?> autocomplete="off">
							            <div class="invalid-feedback">>
                                        </div>
                                        <br>

                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="pass_confirm"
                                          placeholder=" confir Password"   <?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?> autocomplete="off">
							            <div class="invalid-feedback">>
                                        </div>

                                         <br>

                                        <?php if ($config->allowRemembering): ?>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox small">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck">
                                                    <label class="custom-control-label" for="customCheck">Remember
                                                        Me</label>
                                                </div>
                                            </div>
                                            <?php endif; ?>


    
                                        <button type="submit" class="btn btn-danger btn-user btn-block " >
                                            Daftar
                    
                                        </button>
                                        
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                

            </div>

        

        </div>
        <footer class=text-center >
            <span> &copy;Copyright KONI SUMSEL</span>
            <script>
                document.write(new Date().getFullYear()) 
            </script>
        </footer>

    </div>
 

</body>
  </div>
