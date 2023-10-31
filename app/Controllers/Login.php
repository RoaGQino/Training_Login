<?php

namespace App\Controllers;
use \App\Models\UserModel;
class Login extends BaseController
{
    public function index()
    {
        echo view('common/header');
        echo view('login');
       
    }
    public function do_login()
    {
        
        $userModel = new UserModel();
        $email= $this->request->getPost('email');
        $password= $this->request->getPost('password');
        // $result = $userModel->where('email', $email)->first();
        // print_r($result);
        $result = $userModel->where('email', $email)->first();
            if ($result !== null) {
                if( $result->id > 0 ){
                   
                         if ($password == $result->password) {
            
                           $this->session->set("user",$result);
                           return redirect()->to('/profile');
                        } 
                        else{
                            
                            echo 'uncorrect Password ';
                        }
            }
        }
        else{


            echo 'there is no user';
        }

    }
}
