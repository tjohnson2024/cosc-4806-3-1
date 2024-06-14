<?php
require_once 'app/models/User.php';

class Login extends Controller {

    public function index() {		
	    $this->view('login/index');
    }
    
	public function verify() {
			$username = $_REQUEST['username'];
			$password = $_REQUEST['password'];

			// Instantiate User model
			$user = $this->model('User');

			// Perform login attempt
			$login_result = $user->login($username, $password);

			// Check if login was successful
			if ($login_result === "Login successful") {
					// Redirect to home/index page
					header("Location: /home/index");
					exit(); // Ensure script execution stops after redirect
			} else {
					// Output the result for unsuccessful login (you might handle this differently)
					echo $login_result;
			}
	}


}
