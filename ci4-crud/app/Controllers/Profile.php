<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\CrudModel;
  
class Profile extends Controller
{
    public function index()
    {
        $session = session();
      // echo "Hello : ".$session->get('name');
        
        // $crudModel = new CrudModel();

        // $data['user_data'] = $crudModel->orderBy('id', 'DESC')->paginate(10);

        // $data['pagination_link'] = $crudModel->pager;
        // return view('crud_view',['session' => $session],$data);

        $session = session();
		$crudModel = new CrudModel();

        $data['user_data'] = $crudModel->orderBy('id', 'DESC')->paginate(10);

        $data['pagination_link'] = $crudModel->pager;

        //return view('crud_view', $data);
        return view('crud_view', ['session' => $session] + $data);

    }





	function add()
	{
		return view('add_data');
       // echo "hello";
	}

	function add_validation()
	{
		helper(['form', 'url']);
        
        $error = $this->validate([
            'name' 	=> 'required|min_length[3]',
            'email' => 'required|valid_email',
            'gender'=> 'required'
        ]);

        

        if(!$error)
        {
        	echo view('add_data', [
                'error' => $this->validator
            ]);
        } 
        else 
        {
            $crudModel = new CrudModel();
            
            $crudModel->save([
                'name'   => $this->request->getVar('name'),
                'email'  => $this->request->getVar('email'),
                'gender'  => $this->request->getVar('gender'),
            ]);          
            
            $session = \Config\Services::session();

            $session->setFlashdata('success', 'User Data Added');

           // $data['user_data'] = $crudModel->orderBy('id', 'DESC')->paginate(10);

            // $data['pagination_link'] = $crudModel->pager;

        //return view('crud_view', $data);
        // return view('crud_view', ['session' => $session] + $data);

            return $this->response->redirect(site_url('/crud'));

        }

	}

	// show single user
    function fetch_single_data($id = null)
    {
        $crudModel = new CrudModel();

        $data['user_data'] = $crudModel->where('id', $id)->first();

        return view('edit_data', $data);
    }

    function edit_validation()
    {
    	helper(['form', 'url']);
        
        $error = $this->validate([
            'name' 	=> 'required|min_length[3]',
            'email' => 'required|valid_email',
            'gender'=> 'required'
        ]);

        $crudModel = new CrudModel();

        $id = $this->request->getVar('id');

        if(!$error)
        {
        	$data['user_data'] = $crudModel->where('id', $id)->first();
        	$data['error'] = $this->validator;
        	echo view('edit_data', $data);
        } 
        else 
        {
	        $data = [
	            'name' => $this->request->getVar('name'),
	            'email'  => $this->request->getVar('email'),
	            'gender'  => $this->request->getVar('gender'),
	        ];

        	$crudModel->update($id, $data);

        	$session = \Config\Services::session();

            $session->setFlashdata('success', 'User Data Updated');

        	return $this->response->redirect(site_url('/crud'));
        }
    }

    function delete($id)
    {
        $crudModel = new CrudModel();

        $crudModel->where('id', $id)->delete($id);

        $session = \Config\Services::session();

        $session->setFlashdata('success', 'User Data Deleted');

        return $this->response->redirect(site_url('/crud'));
    }

    public function logout()
    {
        $session = session();
        $session->destroy(); // Destroy the session data
        return redirect()->to('/'); // Redirect to the homepage or any other page after logout
    }









}