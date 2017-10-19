<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class India extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Homepage for our app
	 */
	public function index()
	{
		$source = '../../public/pix/Barf.jpg'; 
                header("Content-type: image/jpg"); 
                header('Content-Disposition: inline');
                readfile($source); // dish it
	}

}