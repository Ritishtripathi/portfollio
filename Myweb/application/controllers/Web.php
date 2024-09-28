<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
    
    public function __construct() {
        parent::__construct();   
    }
    
    public function index() {
        $this->load->view('index');
    }
    public function about() {
        $this->load->view('about');
    }
    public function contact() {
        $this->load->view('contact');
    }
    public function skills() {
        $this->load->view('skills');
    }
    public function blog() {
        $this->load->view('blog');
    }
    public function portfillio() {
        $this->load->view('portfillio');
    }
    
}