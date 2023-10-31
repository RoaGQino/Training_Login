<?php

namespace App\Models; // Update the namespace

use CodeIgniter\Model;

class UserModel extends Model {

    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'object';

    protected $useSoftDeletes = true;
    protected $allowedFields = ['first_name', 'last_name', 'email', 'phone_number', 'password','confirmation_token', 'created_at'];
    protected $useTimestamps = false;

    protected $createdField = 'created_at';
    protected $updatedField= 'updated_at';
    protected $deletedField= 'deleted_at';

    // Add validation rules and messages based on your requirements
    protected $validationRules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|valid_email',
        'phone_number' => 'required',
        'password' => 'required',
    ];

    protected $validationMessages = [
        'email' => [
            'valid_email' => 'Please provide a valid email address.'
        ],
    ];

    protected $skipValidation = false;
}
