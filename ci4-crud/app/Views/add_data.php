<?= $this->include('layouts/header.php'); ?>

<body id="page-top">



    <!-- Page Wrapper -->
    <div id="wrapper">

<?= $this->include('layouts/navsidebar.php'); ?>



<div class="container">
     


     <?php

     $validation = \Config\Services::validation();

     ?>
     <div class="card">
         <div class="card-header">
             <div class="row">
                 <div class="col">User Form</div>
                 <div class="col text-right">
                     
                 </div>
             </div>
         </div>
         <div class="card-body">
             <form method="post" action="<?php echo base_url("/crud/add_validation")?>">
                 <div class="form-group">
                     <label>Name</label>
                     <input type="text" name="name" class="form-control" />
                     <?php
                     if($validation->getError('name'))
                     {
                         echo '<div class="alert alert-danger mt-2">'.$validation->getError('name').'</div>';
                     }
                     ?>
                 </div>

                 <div class="form-group">
                     <label>Email</label>
                     <input type="text" name="email" class="form-control" />
                     <?php
                     if($validation->getError('email'))
                     {
                         echo "
                         <div class='alert alert-danger mt-2'>
                         ".$validation->getError('email')."
                         </div>
                         ";
                     }
                     ?>
                 </div>

                 <div class="form-group">
                     <label>Gender</label>
                     <select name="gender" class="form-control">
                         <option value="">Select Gender</option>
                         <option value="Male">Male</option>
                         <option value="Female">Female</option>
                     </select>

                     <?php

                     if($validation->getError('gender'))
                     {
                         echo '<div class="alert alert-danger mt-2">
                         '.$validation->getError("gender").'
                         </div>';
                     }

                     ?>
                 </div>
                 <div class="form-group text-right">
                     <button type="submit" class="btn btn-primary">Submit</button>
                 </div>
             </form>
         </div>
     </div>

 </div>








</div>
</body>
<?= $this->include('layouts/footer.php'); ?>
</html>