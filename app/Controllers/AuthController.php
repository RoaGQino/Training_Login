// application/controllers/AuthController.php
<?php
class AuthController extends CI_Controller {

    public function register() {
        // Load necessary helpers and libraries
        $this->load->helper('form');
        $this->load->library('form_validation');


    // Validation rules for the form fields
    $this->form_validation->set_rules('first_name', 'First Name', 'required');
    $this->form_validation->set_rules('last_name', 'Last Name', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('phone', 'Phone', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if ($this->form_validation->run() == FALSE) {
        // If validation fails, load the registration form again
        $this->load->view('register');
    } else {
        // Process registration (e.g., save data to the database)
        // You can access form input using $this->input->post('fieldname')

        // After successful registration, you can redirect the user to a success page or login page
        // redirect('authController/success');
    }
        // Your registration logic goes here
    }
}
