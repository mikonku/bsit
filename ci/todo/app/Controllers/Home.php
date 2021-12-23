<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UserModel;

class Home extends BaseController
{

    
    public function __construct()
    {
        $this->session = \Config\Services::session();
    }
    
    public function index()
    {
        if (!$this->session->has('isLogin')) {
            return redirect()->to(base_url('login'));
        }


        $page = [
            'title' => "Home",
            'title_page' => "wkwkwkw",
            'layout' => "Admin/Home"
        ];

        $data = [
            'page' => (object) $page,
            'data1' => 3214
        ];

        return view('template/index.php', $data);
    }
}
