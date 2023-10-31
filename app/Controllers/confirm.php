<?php

namespace App\Controllers;
use \App\Models\UserModel;
class confirm extends BaseController
{
    public function index()
    {
        echo view('common/header');
        echo view('confirm');
       
    }
}