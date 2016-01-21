<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	/**
         * Gallery.php
	 */
	public function index()
	{
		$this->load->view('gallery');
	}
}
