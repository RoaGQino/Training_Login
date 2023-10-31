<?php

namespace App\Controllers;
use \App\Models\UserModel;
class forgotPassword extends BaseController
{
    public function index()
    {
        
        echo view('common/header');
        echo view('forgotPassword');
       
    }
    public function do_forgotPassword(){
        $userModel = new UserModel();
        $email= $this->request->getPost('email');
        $this->sendrestEmail($email);
    }
    private function sendrestEmail($email)
    {
        
        $emailLibrary = \Config\Services::email(); 
        $emailLibrary->setFrom('s11923682@stu.najah.edu','reset pass');
        $emailLibrary->setTo($email);
        $emailLibrary->setSubject('Account Confirmation');
        $message = "Hello!\n\n";
        $message .= "Please click the following link to confirm your account:\n\n";
        $message .= site_url("confirm"); 
        $emailLibrary->setMessage($message);
        $emailLibrary->SMTPDebug = 2;
        if ($emailLibrary->send()) {
            echo 'Confirmation email sent successfully.';
        } else {
            echo 'Failed to send the confirmation email.';
        }
    }
}