<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KelasModel;
use App\Models\UserModel;

class UserController extends BaseController
{
    protected $helpers = ['form']; 

    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new KelasModel();
    }

    public function index()
    {
        $data = [
            'users' => $this->userModel->getUser(),
            'title' => 'list_user'
        ];

        return view('list_user', $data);
    }

    public function profile($nama = "", $kelas = "", $npm = "")
    {
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm,
            'title' => 'profile'
        ];

        return view('profile', $data);
    }

    public function create()
    {   
        // $kelas = [
        //     [
        //     'id' => 1,
        //     'nama_kelas' => 'A'
        //     ],
        //     [
        //         'id' => 2,
        //         'nama_kelas' => 'B'
        //     ],
        //     [
        //         'id' => 3,
        //         'nama_kelas' => 'C'
        //     ],
        //     [
        //         'id' => 4,
        //         'nama_kelas' => 'D'
        //         ],
        // ];

        // $kelasModel = new KelasModel();

        $kelas = $this->kelasModel->getKelas();

        $data = [
            'kelas' => $kelas,
            'title' => 'create_user'
        ];

        return view('create_user', $data);
    }

    public function store()
    {
        // dd($this->request->getVar());

        // $userModel = new UserModel();

        if (!$this->validate($this->userModel->getValidationRules())) {
            session()->setFlashdata('errors', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }


        $this->userModel->saveUser([
            'nama' => $this->request->getVar('nama'),
            'id_kelas' => $this->request->getVar('kelas'),
            'npm' => $this->request->getVar('npm'),
        ]);


        $data = [
            'nama' => $this->request->getVar('nama'),
            'kelas' => $this->request->getVar('kelas'),
            'npm' => $this->request->getVar('npm'),
            'title' => 'profile'
        ];

        // return view ('profile', $data);
        return redirect()->to('/user');
    }
}
