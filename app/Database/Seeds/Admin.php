<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Admin extends Seeder
{
    public function run()
    {
         $data = [
            'username'     => 'bagasarya15',
            'password'     => password_hash('123456', PASSWORD_DEFAULT),
            'nama_lengkap' => 'Bagas Arya Pradipta',
            'email'        => 'bagas@gmail.com',
        ];

        // Simple Queries
        // $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

        // Using Query Builder
        $this->db->table('admin')->insert($data);
    }
}
