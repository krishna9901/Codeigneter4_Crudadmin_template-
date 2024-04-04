<!-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Codeigniter Login with Email/Password Example</title>
  </head> -->
  <?= $this->include('layouts/header.php'); ?>
  <body>
    <div class="container-fluid">
        <div class="row bg-color ">
            <div class="col-md-7 ">
            <img src="<?= base_url('img/login.gif') ?>" class="justify-content-md-center login-img" width="70%" height="60%"/>

</div>
            <div class="col-md-5  justify-content-md-center login-frm">
                
                <h2>Login </h2>
                
                <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-warning">
                       <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif;?>
                <form action="<?php echo base_url(); ?>/Signin/loginAuth" method="post">
                    <div class="form-group mb-3">
                        <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="password" placeholder="Password" class="form-control" >
                    </div>
                    
                    <div class="d-grid text-left">
                         <button type="submit" class="btn btn-success">Signin</button>
                         
                    </div>     
                </form>
               
                <div class="d-grid text-right">
                <label class="">If You are Not an Register </label>
                      <a href="<?php echo base_url(); ?>/signup"><button type="submit" class="btn btn-info text-right">Signup</button>
              </a>
                  </div>
            </div>
              
        </div>
    </div>


   



  </body>
</html>