<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\KaryawanModel;
  
class EmployeeController extends Controller
{

    protected $karyawan;

    function __construct()
    {
        $this->karyawan = new KaryawanModel();
    }

    public function index()
    {

        $data['karyawans'] = $this->karyawan->findAll();
        //return view('employees/employees-list', $data);

        $session = session();
        $header['title']='Karyawan';
        echo view('partial/header',$header);
        echo view('partial/top_menu');
        echo view('partial/side_menu');
        echo view('employees/employees-list', $data);
        echo view('partial/footer');
    }

    public function add()
    {   
        $session = session();
        $header['title']='Tambah Karyawan | Karyawan';
        echo view('partial/header',$header);
        echo view('partial/top_menu');
        echo view('partial/side_menu');
        echo view('employees/employees-add');
        echo view('partial/footer');
    }

    public function create()
    {   
        helper(['form', 'url']);

        $header['title'] = 'Membuat Data Karyawan | Karyawan';

        $input = $this->validate([
        'nik' => 'required',
        'nama' => 'required',
        'jabatan' => 'required',
        'alamat' => 'required',
        'no_telepon' => 'required',
        'bank' => 'required',
        'no_rekening' => 'required',
        'gaji' => 'required',
        'status' => 'required',
    ]);

    if (!$input) {
        echo view('partial/header',$header);
        echo view('partial/top_menu');
        echo view('partial/side_menu');
        echo view('employees/employees-add', [
            'validation' => $this->validator
        ]);
        echo view('partial/footer');
    } else {
        $this->karyawan->insert([
            'nik' => $this->request->getPost('nik'),
            'nama' => $this->request->getPost('nama'),
            'jabatan' => $this->request->getPost('jabatan'),
            'alamat' => $this->request->getPost('alamat'),
            'no_telepon' => $this->request->getPost('no_telepon'),
            'bank' => $this->request->getPost('bank'),
            'no_rekening' => $this->request->getPost('no_rekening'),
            'gaji' => $this->request->getPost('gaji'),
            'status' => $this->request->getPost('status'),
        ]);

        return redirect()->to('/karyawan')->with('success', 'Data Karyawan berhasil ditambahkan!');
        }
    }

    public function ubah($id)
    {
        $session = session();
        $header['title']='Ubah Karyawan | Karyawan';
        $data['karyawan'] = $this->karyawan->find($id);
        echo view('partial/header',$header);
        echo view('partial/top_menu');
        echo view('partial/side_menu');
        echo view('employees/employees-edit', $data);
        echo view('partial/footer');
    }

    public function update($id)
    {
        $session = session();
        $header['title']='Edit Karyawan | Karyawan';

        $this->karyawan->update($id, [
            //'nik' => $this->request->getPost('nik'),
            //'nama' => $this->request->getPost('nama'),
            'jabatan' => $this->request->getPost('jabatan'),
            'alamat' => $this->request->getPost('alamat'),
            'no_telepon' => $this->request->getPost('no_telepon'),
            'bank' => $this->request->getPost('bank'),
            'no_rekening' => $this->request->getPost('no_rekening'),
            'gaji' => $this->request->getPost('gaji'),
            'status' => $this->request->getPost('status'),
        ]);

        return redirect()->to('/karyawan')->with('success', 'Data Karyawan berhasil diubah!');
    }

    public function hapus($id)
    {
        $session = session();

        $this->karyawan->delete($id);

        return redirect()->to('/karyawan')->with('success', 'Data Karyawan berhasil dihapus!');
    }
}