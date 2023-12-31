<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserModel;
  
class SignupController extends Controller
{   
    public function __construct()
    {
        helper(['form']);
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        helper(['form']);
        $data = [];
        echo view('register', $data);
    }
  
    public function store()
    {
        helper(['form']);
        $rules = [
            'name'          => 'required|min_length[2]|max_length[50]',
            'email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[users.email]',
            'password'      => 'required|min_length[4]|max_length[50]',
            'confirmpassword'  => 'matches[password]'
        ];
          
        if($this->validate($rules)){
            $userModel = new UserModel();
            $data = [
                'name'     => $this->request->getVar('name'),
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $userModel->save($data);

            $this->session->setFlashdata('success', 'Account created successfully! You may now login.');
            return redirect()->to('/login');
        }else{
            $data['validation'] = $this->validator;
            echo view('register', $data);
            
        }
          
    }
  
}