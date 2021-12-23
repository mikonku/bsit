<?php namespace App\Models;
use CodeIgniter\Model;


class UserModel extends Model
{
    protected $table      = 'user';
    protected $primaryKey = 'id_users';
    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'username',
        'fullname',
        'email',
        'password',
        'salt',
        'images',
        'id_user_level',
        'is_aktif'
    ]; 


}

