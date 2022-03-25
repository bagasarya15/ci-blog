<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\AdminModel;

class Admin extends BaseController
{
    function __construct() {
        $this->m_admin = new AdminModel();
        $this->validation = \Config\Services::validation();
    }

    // Function Login
    public function login()
    {
        $data = [
            'title' => 'Login'
        ];
        if($this->request->getMethod() == 'post') {
            $rules = [
                'username' => [
                    'rules'=> 'required',
                    'errors' =>[
                        'required' => 'Username Tidak Boleh Kosong !'
                    ]
                ],
                'password' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Password Tidak Boleh Kosong !'
                    ],
                ]
            ];
            if(!$this->validate($rules) ) {
                session()->setFlashdata('warning', $this->validation->getErrors() );
                return redirect()->to('admin/admin/login');
            } else {
                session()->setFlashdata('success', 'Berhasil Login');
                return redirect()->to('admin/admin/login');
            }
        }
        return view('admin/v_login', $data);
    }
}
