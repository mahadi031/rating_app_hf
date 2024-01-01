<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
   protected $table = 'uaers';
   protected $primaryKey = 'id';
   protected $allowedFields = ['name', 'username', 'password', 'email', 'picture', 'bio'];
}
