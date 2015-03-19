<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loadViewsController extends CI_Controller {
    
	public function loadAboutus()
	{
            $this->load->view('about-us.php');
	}
        public function loadServices()
	{
            $this->load->view('services.php');
	}
        public function loadBlog()
	{
            $this->load->view('blog.php');
	}
        public function loadContact()
	{
            $this->load->view('contact-us.php');
	}
}
