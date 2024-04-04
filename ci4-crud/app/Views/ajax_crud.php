<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport"
     content="width=device-width, initial-scale=1, user-scalable=yes">
  <link rel="stylesheet" href="<?php echo base_url('/css/bootstrap.min.css'); ?>" >

    <script src="<?php echo base_url('/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('/js/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('/js/bootstrap.min.js'); ?>"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/datatables.min.css'); ?>"/>
 
    <script type="text/javascript" src="<?php echo base_url('/js/datatables.min.js'); ?>"></script>
  <title>Codeigniter 4 Ajax CRUD Application</title>
    
</head>
<body>
  <div class="container">
    <h2 class="text-center mt-4 mb-4">Codeigniter 4 Ajax CRUD Application</h2>
    <span id="message"></span>
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col">Sample Data</div>
          <div class="col text-right">
            <button type="button" name="add_record" id="add_record" class="btn btn-success btn-sm">Add</button>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped table-bordered" id="sample_table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Action</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
 
</body>
</html>

<div id="userModal" class="modal fade">
  <div class="modal-dialog">
    <form method="post" id="user_form">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add Data</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" id="name" class="form-control" />
            <span id="name_error" class="text-danger"></span>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" id="email" class="form-control" />
            <span id="email_error" class="text-danger"></span>
          </div>
          <div class="form-group">
            <label>Gender</label>
            <select name="gender" id="gender" class="form-control">
              <option value="">Select Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
            <span id="gender_error" class="text-danger"></span>
          </div>
        </div>
        <div class="modal-footer">
          <input type="hidden" name="hidden_id" id="hidden_id" />
          <input type="hidden" name="action" id="action" value="Add" />
          <input type="submit" name="submit" id="submit_button" class="btn btn-success" value="Add" />
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </form>
  </div>
</div>

<script>

$(document).ready(function(){
  $('#sample_table').DataTable({
    "order":[],
    "serverSide":true,
    "ajax":{
      url:"<?php echo base_url("/ajax_crud/fetch_all"); ?>",
      type:"POST",
    }
  });

  $('#add_record').click(function(){

    $('#user_form')[0].reset();

    $('.modal-title').text('Add Data');

    $('#name_error').text('');

    $('#email_error').text('');

    $('#gender_error').text('');

    $('#action').val('Add');

    $('#submit_button').val('Add');

    $('#userModal').modal('show');

  });

  $('#user_form').on('submit', function(event){

    event.preventDefault();

    $.ajax({

      url:"<?php echo base_url('/ajax_crud/action'); ?>",

      method:"POST",

      data:$(this).serialize(),

      dataType:"JSON",

      beforeSend:function(){

        $('#submit_button').val('wait...');

        $('#submit_button').attr('disabled', 'disabled');

      }, 

      success:function(data)
      {

        $('#submit_button').val('Add');

        $('#submit_button').attr('disabled', false);

        if(data.error == 'yes')
        {

          $('#name_error').text(data.name_error);

          $('#email_error').text(data.email_error);

          $('#gender_error').text(data.gender_error);

        }
        else
        {

          $('#userModal').modal('hide');

          $('#message').html(data.message);

          $('#sample_table').DataTable().ajax.reload();

          setTimeout(function(){

            $('#message').html('');

          }, 5000);

        }

      }

    })

  });

  $(document).on('click', '.edit', function(){

    var id = $(this).data('id');

    $.ajax({

      url:"<?php echo base_url('/ajax_crud/fetch_single_data'); ?>",

      method:"POST",

      data:{id:id},

      dataType:'JSON',

      success:function(data)
      {

        $('#name').val(data.name);

        $('#email').val(data.email);

        $('#gender').val(data.gender);

        $('.modal-header').text('Edit Data');

        $('#name_error').text('');

        $('#email_error').text('');

        $('#gender_error').text('');

        $('#action').val('Edit');

        $('#submit_button').val('Edit');

        $('#userModal').modal('show');

        $('#hidden_id').val(id);

      }

    })

  });

  $(document).on('click', '.delete', function(){

    var id = $(this).data('id');

    if(confirm("Are you sure you want to remove it?"))
    {

      $.ajax({

        url:"<?php echo base_url('/ajax_crud/delete'); ?>",

        method:"POST",

        data:{id:id},

        success:function(data)
        {

          $('#message').html(data);

          $('#sample_table').DataTable().ajax.reload();

          setTimeout(function(){

            $('#message').html('');

          }, 5000);

        }

      })

    }

  });

});

</script>
