<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bakar extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function _remap($method)
	{
		if (method_exists($this, $method))
		{
			$this->$method();
		}
		else {
			$this->index($method);
		}
	}
	public function index($add = '')
	{
		var_dump($add);
		die;
	}
	public function about()
	{
		var_dump('add');
		die;
	}
}