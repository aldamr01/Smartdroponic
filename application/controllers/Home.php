<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	{
		parent::__construct();		
	}

	public function index()
	{
		echo $this->blade->stream('clientzone.dashboard');
	}

	public function  notifikasi()
	{
		echo $this->blade->stream('clientzone.notif');
	}

	public function pengaturan()
	{
		echo $this->blade->stream('clientzone.pilihkebun');
	}

	public function dashboard()
	{
		echo $this->blade->stream('clientzone.homepilihkebun');
	}

	public function monitoring()
	{
		echo $this->blade->stream('clientzone.monitoring');
	}

	public function login()
	{
		echo $this->blade->stream('clientzone.login');
	}

	public function setting()
	{
		echo $this->blade->stream('clientzone.pengaturan');
	}
}
