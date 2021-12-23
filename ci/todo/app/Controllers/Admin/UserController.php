<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Models\UserModel;

class UserController extends Controller
{


    public function __construct()
    {

        // membuat user model untuk koneksi ke database
        $this->userModel = new UserModel();


        // load validation
        $this->validation = \Config\Services::validation();


        // load session
        $this->session = session();
    }


    public function index()
    {
        // dd($this->session->has('isLogin'));
        // cek session
        if (!$this->session->has('isLogin')) {
            return redirect()->to(base_url('login'));
        }


        $page = [
            'title' => "List User",
            'title_page' => "List User",
            'layout' => "Admin/User/vUserList",
            'script' => base_url("assets/js/pages/js_user.js")
        ];

        $data_user = $this->userModel->findAll();

        $data = [
            'page' => (object) $page,
            'data_user' => $data_user
        ];

        return view('template/index.php', $data);

    }

    public function indexAddUser()
    {

        if (!$this->session->has('isLogin')) {
            return redirect()->to(base_url('login'));   
        }

        $page = [
            'title' => "User Page",
            'title_page' => "User",
            'layout' => "Admin/User/vUser",
            'script' => ""
        ];

        $data = [
            'page' => (object) $page,
            'data_user' => 3214
        ];

        return view('template/index.php', $data);
    }

    public function prosesSimpan()
    {
        //tangkap data dari form 
        $data = $this->request->getPost();
        // dd($data);

        //jalankan validasi
        $this->validation->run($data, 'user');

        //cek errornya
        $errors = $this->validation->getErrors();

        //jika ada error kembalikan ke halaman register
        if ($errors) {
            session()->setFlashdata('error', $errors);
            return redirect()->to(base_url('adduser'));
        }


        //buat salt
        $salt = uniqid('', true);

        //hash password digabung dengan salt
        $password = md5($data['password']) . $salt;

        //masukan data ke database
        $user = $this->userModel->save([
            'email' => $data['email'],
            'username' => $data['username'],
            'fullname' => $data['fullname'],
            'password' => $password,
            'salt' => $salt,
            'id_user_level' => 3
        ]);


        //arahkan ke halaman login
        session()->setFlashdata('success', 'Anda berhasil mendaftar, silahkan login');
        return redirect()->to(base_url('user'));
    }


    public function prosesUpdate()
    {
        //tangkap data dari form 
        $data = $this->request->getPost();
        // dd($data);

        //jalankan validasi
        $this->validation->run($data, 'user');

        //cek errornya
        $errors = $this->validation->getErrors();

        //jika ada error kembalikan ke halaman register
        if ($errors) {
            session()->setFlashdata('error', $errors);
            return redirect()->to(base_url('adduser'));
        }


        //buat salt
        $salt = uniqid('', true);

        //hash password digabung dengan salt
        $password = md5($data['password']) . $salt;

        //masukan data ke database
        $user = $this->userModel->update($iduser, [
            'fullname' => $data['fullname'],
            'password' => $password
        ]);


        //arahkan ke halaman login
        session()->setFlashdata('success', 'Data user berhasil diupdate');
        return redirect()->to(base_url('user'));
    }

    public function delete()
    {
        // dd($iduser);

        if (!$this->session->has('isLogin')) {
            return redirect()->to(base_url('login'));   
        }

        $iduser = $this->request->uri->getSegment(3);

        // dd("test:".$iduser);
        
        $this->userModel->delete($iduser);

        //arahkan ke halaman login
        session()->setFlashdata('success', 'User berhasil dihapus');
        return redirect()->to(base_url('user'));
    }

    public function indexUpdateUser()
    {

        // if (!$this->session->has('isLogin')) {
        //     return redirect()->to(base_url('login'));   
        // }

        $iduser = $this->request->uri->getSegment(3);
        // dd("test:".$iduser);

        $page = [
            'title' => "User Page",
            'title_page' => "User",
            'layout' => "Admin/User/vUserEdit",
            'script' => ""
        ];

        $data_user_edit = $this->userModel->where('id_users', $iduser)->first();
        // dd($data_user_edit);

        $data = [
            'page' => (object) $page,
            'data_user' => $data_user_edit
        ];


        return view('template/index.php', $data);
    }
}
