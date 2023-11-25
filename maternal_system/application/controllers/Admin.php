<?php

class Admin extends CI_Controller {

    public function login(){   
        if ( ! file_exists(APPPATH.'views/pages/admin_login_view.php')) {
		    show_404();
		}

		$this->load->view('pages/admin_login_view'); 
    }

    public function checkuser($email="",$password=""){
                
        //check if the user exist
        if($email=="" || $password==""){
                $email = $this->input->post('email');
                $password = $this->input->post('password');
        }
        $user_data= $this->Admin_model->getuserlogin($email,$password);
            
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
            $role_id = $this->session->userdata('role_id');

                if ($role_id == 1) {
                    print "<script>location.href='../admin/dashboard';</script>";

                } else if ($role_id == 3) {
                    print "<script>location.href='../admin/encoder_dashboard';</script>";

                } else if ($role_id == 4){
                    print "<script>location.href='../admin/doctor_dashboard';</script>";
                    
                }
            
        }else{
            $data['error'] = "email or password did not match!";
            print "<script>location.href='../admin/login?error=".$data['error']."';</script>";
        }
    }

    public function dashboard(){
        if ($this->session->userdata('loggedin')) {
            $role_id = $this->session->userdata('role_id');
    
            // Check the role_id for specific access levels
            if ($role_id == 1) {
                $this->load->view('includes/header');
                $this->load->view('admin_includes/sidebar');
                $this->load->view('admin_includes/topbar');
                $this->load->view('pages/admin_dashboard');
            } else {
                show_error('Access Denied!!!', 403);
            }
        } else {
            redirect('admin/login');
        }
    }

    public function encoder_dashboard(){
        if ($this->session->userdata('loggedin')) {
            $role_id = $this->session->userdata('role_id');
    
            // Check the role_id for specific access levels
            if ($role_id == 3) {
                $this->load->view('includes/header');
                $this->load->view('encoder_includes/sidebar');
                $this->load->view('encoder_includes/topbar');
                $this->load->view('pages/encoder_dashboard');
             } else {
                 show_error('Access Denied!!!', 403);
             }
         } else {
             redirect('admin/login');
         }
    }

    public function doctor_dashboard(){
        if ($this->session->userdata('loggedin')) {
            $role_id = $this->session->userdata('role_id');
    
            // Check the role_id for specific access levels
            if ($role_id == 4) {
                $this->load->view('includes/header');
                $this->load->view('doctor_includes/sidebar');
                $this->load->view('doctor_includes/topbar');
                $this->load->view('pages/doctor_dashboard');
             } else {
                 show_error('Access Denied!!!', 403);
             }
         } else {
             redirect('admin/login');
         }
    }

    public function logout() {
        // confirmation dialog before logout
        echo '<script>
                if (confirm("Are you sure you want to logout?")) {
                    window.location.href = "../admin/confirm_logout";
                } else {
                    window.location.href = "../admin/dashboard";
                }
              </script>';
    }

    public function confirm_logout() {
        $this->session->unset_userdata('loggedin');
        //$this->session->sess_destroy('loggedin');
    
        redirect('admin/login');
    }
    
}

?>