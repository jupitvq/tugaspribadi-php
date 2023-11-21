<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
  
class EmployeeController extends Controller
{
    public function index()
    {
        $session = session();
        $header['title']='Dashboard';
        echo view('partial/header',$header);
        echo view('partial/top_menu');
        echo view('partial/side_menu');
        echo view('employees/employees-list');
        echo view('partial/footer');
    }
}