<?php

namespace App\Controllers\Auth;
use CodeIgniter\Controller;
use App\Models\UserModel;

class LoginController extends Controller
{
    public function __construct()
    {
        //membuat user model untuk konek ke database 
        $this->userModel = new UserModel();
        
        //meload validation
        $this->validation = \Config\Services::validation();
        
        //meload session
        $this->session = \Config\Services::session();
        
    }
    
    public function index()
    {
        //menampilkan halaman login
        return view('Auth/Login');
    }
    
    public function register()
    {
        //menampilkan halaman register
        return view('admin/register');
    }
    
    public function loginproses()
    {
        // dd('test');
        //ambil data dari form
        $data = $this->request->getPost();
        // dd($data);
        
        //ambil data user di database yang emailnya sama 
        $user = $this->userModel->where('email', $data['email'])->first();
        
        //cek apakah email ditemukan
        if($user){
            //cek password
            //jika salah arahkan lagi ke halaman login
            if($user['password'] != md5($data['password']).$user['salt']){
                session()->setFlashdata('password', 'Password salah');
                return redirect()->to(base_url('login'));
            }
            else{
                //jika benar, arahkan user masuk ke aplikasi 
                $sessLogin = [
                    'isLogin' => true,
                    'email' => $user['email'],
                    'fullname' => $user['fullname'],
                    'id_user_level' => $user['id_user_level']
                    ];
                $this->session->set($sessLogin);
                return redirect()->to(base_url('home'));
                // return redirect()->to('/user');
            }
        }
        else{
            //jika email tidak ditemukan, balikkan ke halaman login
            session()->setFlashdata('email', 'email tidak ditemukan');
            return redirect()->to(base_url('login'));
        }
    }
    
    public function logout()
    {
        //hancurkan session 
        //balikan ke halaman login
        $this->session->destroy();
        return redirect()->to(base_url('login'));
    }
    
}