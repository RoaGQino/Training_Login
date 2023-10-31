<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class profile extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();
        $user = $this->session->get("user"); 
        if ($user !== null) {
            $data = [
                'user' => $user,
            ];

            return view('profile', $data);
        } else {
            return redirect()->to('/login');
        }
    }

    public function resetPassword()
{
    $userModel = new UserModel();
    $user = $this->session->get("user");  
    if ($user != null) {

        $newPassword = $this->request->getPost('new_password');
        if (strlen($newPassword) < 3) {
             return redirect()->to('/profile')->with('error', 'Password must be at least 8 characters long.');
        }
        $userModel->update($user->id, ['password' => $newPassword]);
        return redirect()->to('/login')->with('success', 'Password reset successfully.');
    } else {
        return redirect()->to('/login');
    }
}

}
