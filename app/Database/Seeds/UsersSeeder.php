<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'username' => 'user',
            'nama'     => 'adi',
            'email'    => 'adi@adi.com',
            'password' => password_hash('user123', PASSWORD_DEFAULT),
        ];

        // Using Query Builder
        $this->db->table('users')->insert($data);
    }
}
