<?php
    class Session_controller extends CI_Controller {

        public function index() {
            $this->load->helper('url');
            //load session library
            $this->load->library('session');
            //adding data to session
            $this->session->set_userdata('name', 'virat');

            $this->load->view('session_view');
        }

        public function unset_session_data() {
            $this->load->helper('url');
            //loading session library
            $this->load->library('session');
            //removing session data
            $this->session->unset_userdata('name');

            $this->load->view('session_view');

        }
    }
?>
