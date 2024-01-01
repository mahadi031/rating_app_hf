<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = array(
            'name' => 'Admin',
            'username' => 'admin',
            'password' => password_hash('12345', PASSWORD_BCRYPT),
            'email' => 'rating_app_admin@gmai.com',
        );

        $this->db->table('users')->insert($data);
    }
}
