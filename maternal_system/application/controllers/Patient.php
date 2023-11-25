<?php
class Patient extends CI_Controller{
 
    public function login(){   
        if ( ! file_exists(APPPATH.'views/pages/patient_login_view.php')) {
		    show_404();
		}

		$this->load->view('pages/patient_login_view'); 
    }

    public function checkuser($email="",$password=""){
                
        //check if the user exist
            if($email=="" || $password==""){
                $email = $this->input->post('email');
                $password = $this->input->post('password');
            }
        $user_data= $this->Patient_model->getuserlogin($email,$password);
            
        if (count($user_data)>0){
            $users_data = $user_data[0];
                    
            $loginsession = array(
                'id'  => $users_data->id,
                'firstname' => $users_data->firstname,
                'lastname' => $users_data->lastname,
                'email' => $users_data->email,
                'contactno' => $users_data->contactno,
                'role_id' => $users_data->role_id,
                'rlcode' => $users_data->rlcode,
                'rldesc' => $users_data->rldesc,
                'loggedin' => TRUE
            );

            $this->session->set_userdata($loginsession);  
            print "<script>location.href='../patient/dashboard';</script>";

        }else{
            $data['error'] = "email or password did not match!";
            print "<script>location.href='../patient/login?error=".$data['error']."';</script>";
        }
    }

    public function dashboard(){
        if ($this->session->userdata('loggedin')) {
            $role_id = $this->session->userdata('role_id');
    
        // Check the role_id for specific access levels
            if ($role_id == 2) { 
                $this->load->view('includes/header');
                $this->load->view('includes/sidebar');
                $this->load->view('includes/topbar');
                $this->load->view('pages/patient_dashboard.php');
            } else {
                show_error('Access Denied!!!', 403);
            }
        } else {
            redirect('patient/login');
        }
    }

    public function logout() {
        // Display a confirmation dialog before logout
        echo '<script>
                if (confirm("Are you sure you want to logout?")) {
                    window.location.href = "../patient/confirm_logout";
                } else {
                    window.location.href = "../patient/dashboard";
                }
              </script>';
    }

    public function confirm_logout() {
        $this->session->unset_userdata('loggedin');
        //$this->session->sess_destroy('loggedin');
    
        redirect('patient/login');
    }
}

?>