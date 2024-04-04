<?php

//Ajax_crud.php

namespace App\Controllers;

use App\Models\Ajax_crudModel;

use monken\TablesIgniter;

class Ajax_crud extends BaseController
{
	function index()
	{
		return view('ajax_crud');
	}

	function fetch_all()
	{
		$crudModel = new Ajax_crudModel();

		$data_table = new TablesIgniter();

		$data_table->setTable($crudModel->noticeTable())
				   ->setDefaultOrder("id", "DESC")
				   ->setSearch(["name", "email"])
				   ->setOrder(["id", "name", "email", "gender"])
				   ->setOutput(["id", "name", "email", "gender", $crudModel->button()]);
		return $data_table->getDatatable();
	}

	function action()
	{
		if($this->request->getVar('action'))
		{
			helper(['form', 'url']);
			$name_error = '';
            $email_error = '';
            $gender_error = '';
            $error = 'no';
            $success = 'no';
            $message = '';

            $error = $this->validate([
            	'name'	=>	'required|min_length[3]',
            	'email'	=>	'required|valid_email',
            	'gender'=>	'required'
            ]);

            if(!$error)
            {
            	$error = 'yes';
            	$validation = \Config\Services::validation();
            	if($validation->getError('name'))
            	{
            		$name_error = $validation->getError('name');
            	}

            	if($validation->getError('email'))
            	{
            		$email_error = $validation->getError('email');
            	}

            	if($validation->getError('gender'))
            	{
            		$gender_error = $validation->getError('gender');
            	}
            }
            else
            {
            	$success = 'yes';
            	if($this->request->getVar('action') == 'Add')
            	{
            		$crudModel = new Ajax_crudModel();
            		$crudModel->save([
            			'name'		=>	$this->request->getVar('name'),
            			'email'		=>	$this->request->getVar('email'),
            			'gender'	=>	$this->request->getVar('gender')
            		]);

            		$message = '<div class="alert alert-success">User Data Added</div>';
            	}

                if($this->request->getVar('action') == 'Edit')
                {
                    $crudModel = new Ajax_crudModel();

                    $id = $this->request->getVar('hidden_id');

                    $data = [
                        'name'      =>  $this->request->getVar('name'),
                        'email'     =>  $this->request->getVar('email'),
                        'gender'    =>  $this->request->getVar('gender')
                    ];

                    $crudModel->update($id, $data);

                    $message = '<div class="alert alert-success">User Data Updated</div>';
                }
            }

            $output = array(
            	'name_error'	=>	$name_error,
            	'email_error'	=>	$email_error,
            	'gender_error'	=>	$gender_error,
            	'error'			=>	$error,
            	'success'		=>	$success,
            	'message'		=>	$message
            );

            echo json_encode($output);
		}
	}

    function fetch_single_data()
    {
        if($this->request->getVar('id'))
        {
            $crudModel = new Ajax_crudModel();

            $user_data = $crudModel->where('id', $this->request->getVar('id'))->first();

            echo json_encode($user_data);
        }
    }

    function delete()
    {
        if($this->request->getVar('id'))
        {
            $id = $this->request->getVar('id');

            $crudModel = new Ajax_crudModel();

            $crudModel->where('id', $id)->delete($id);

            echo '<div class="alert alert-success">User Data Deleted</div>';
        }
    }
}


?>
