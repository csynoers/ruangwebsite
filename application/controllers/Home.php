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
	public function carousel()
	{
		// $this->load->view('themes/default/header.php');
		$this->load->view('themes/default/template_home_carousel.php');
		// $this->load->view('themes/default/footer.php');
	}
	public function sign_in()
	{
		// $this->load->view('themes/default/header.php');
		$this->load->view('themes/default/template_sign_in.php');
		// $this->load->view('themes/default/footer.php');
	}
	public function album()
	{
		// $this->load->view('themes/default/header.php');
		$this->load->view('themes/default/template_album.php');
		// $this->load->view('themes/default/footer.php');
	}
	public function pricing()
	{
		// $this->load->view('themes/default/header.php');
		$this->load->view('themes/default/template_pricing.php');
		// $this->load->view('themes/default/footer.php');
	}
	public function checkout()
	{
		// $this->load->view('themes/default/header.php');
		$this->load->view('themes/default/template_checkout.php');
		// $this->load->view('themes/default/footer.php');
	}
	public function product()
	{
		// $this->load->view('themes/default/header.php');
		$this->load->view('themes/default/template_product.php');
		// $this->load->view('themes/default/footer.php');
	}
	public function blog()
	{
		// $this->load->view('themes/default/header.php');
		$this->load->view('themes/default/template_blog.php');
		// $this->load->view('themes/default/footer.php');
	}
}
