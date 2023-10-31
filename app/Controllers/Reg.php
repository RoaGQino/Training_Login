<?php

namespace App\Controllers;
use \App\Models\UserModel;
class Reg extends BaseController
{
    public function index()
    {
        
        echo view('common/header');
        echo view('reg');
       
    }
    public function do_reg()
    {
        
        $userModel = new UserModel();
        $Firstname= $this->request->getPost('Firstname');
        $Lastname= $this->request->getPost('LastName');
        $phone_number= $this->request->getPost('phone_number');
        $email= $this->request->getPost('email');
        $password= $this->request->getPost('password');
        $cpassword= $this->request->getPost('chpassword');
        $data=['first_name'=>$Firstname,'last_name'=>$Lastname,
        'email'=>$email,'phone_number'=>$phone_number ,'password'=>$password ,'confirmation_token' => bin2hex(random_bytes(16)),
    ];
        if($password==$cpassword){
        $r =$userModel->insert($data);

        if ($r) {
            
            $this->sendConfirmationEmail($email, $data['confirmation_token']);
                
            echo 'Check your email for confirmation instructions.';
        
        }
        else {
            echo 'nooo';
        }
    }
    else{
        echo 'nooo matched pass';
    }
    }
    private function sendConfirmationEmail($email, $confirmationToken)
{
    
    $emailLibrary = \Config\Services::email(); 
    $emailLibrary->setFrom('s11923682@stu.najah.edu','Account Confirmation');
    $emailLibrary->setTo($email);
    $emailLibrary->setSubject('Account Confirmation');
    $message = "Hello!\n\n";
    $message .= "Please click the following link to confirm your account:\n\n";
    $message .= site_url("confirm/$confirmationToken"); 
    $emailLibrary->setMessage($message);
    $emailLibrary->SMTPDebug = 2;
    if ($emailLibrary->send()) {
        echo 'Confirmation email sent successfully.';
    } else {
        echo 'Failed to send the confirmation email.';
    }
}
public function confirmAccount($token)
{
     $userModel = new UserModel();
     $user = $userModel->where('confirmation_token', $token)->first();
     if ($user !== null) {
        if ($token == $user->confirmation_token){
            return redirect()->to('/login');
        }
}}

}
