<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	/**
	*

		@HATH NA LAIE

	*
	*/
	public function template($content = '', $data = '')
	{
		$this->load->database();
		if (isset($_SESSION['user']))
		{
			$data['login'] = true;
		}
		else
		{
			$data['login'] = false;
		}
		$result = $this->db->query("SELECT * FROM `real_property_type`;");
		if ($result->num_rows() > 0)
		{
			$row = $result->result_array();
			$data['property_type'] = $row;
		}
		$this->load->view('header',$data);
		$this->load->view($content,$data);
		$this->load->view('footer',$data);
	}
	/**
	*

		@LOGIN KANJAR-KHANA

	*
	*/
	public function register()
	{
		if (isset($_SESSION['user']))
		{
			redirect('home/index');
		}
		$data['page_title'] = 'Register Page';
		$data['meta_des'] = 'Register Page';
		$data['meta_key'] = 'Register Page';
		$data['error'] = false;
		$this->template('register',$data);	
	}
	public function post_user_form()
	{
		if ($_POST)
		{
			$this->load->database();
			$email = $_POST['email'];
			$result = $this->db->query("SELECT * FROM `real_user` WHERE `email` = '$email' LIMIT 1;");
			if ($result->num_rows() > 0)
			{
				$data['page_title'] = 'Error: Email Already in use';
				$data['meta_des'] = 'Error: Email Already in use';
				$data['meta_key'] = 'Error: Email Already in use';
				$data['error'] = true;
				$data['error_code'] = 2;
				$this->template('register',$data);		
			}
			$username = $_POST['username'];
			$result = $this->db->query("SELECT * FROM `real_user` WHERE `username` = '$username' LIMIT 1;");
			if ($result->num_rows() > 0)
			{
				$data['page_title'] = 'Error: Username Already in use';
				$data['meta_des'] = 'Error: Username Already in use';
				$data['meta_key'] = 'Error: Username Already in use';
				$data['error'] = true;
				$data['error_code'] = 3;
				$this->template('register',$data);		
			}
			$_POST['name'] = $_POST['fname'].' '.$_POST['lname'];
			$_POST['password'] = md5($_POST['password']);
			$resp = $this->db->insert('real_user', $_POST);
			if ($resp)
			{
				redirect('home/login');
			}
			else
			{
				$data['page_title'] = 'Error: Sorry :( something wroung pleas try again';
				$data['meta_des'] = 'Error: Sorry :( something wroung pleas try again';
				$data['meta_key'] = 'Error: Sorry :( something wroung pleas try again';
				$data['error'] = true;
				$data['error_code'] = 4;
				$this->template('register',$data);	
			}
		}
		else
		{
			$data['page_title'] = 'Something Missing';
			$data['meta_des'] = 'Something Missing';
			$data['meta_key'] = 'Something Missing';
			$data['error'] = true;
			$data['error_code'] = 1;
			$this->template('register',$data);
		}
	}
	public function login()
	{
		if (isset($_SESSION['user']))
		{
			redirect('home/index');
		}
		$data['page_title'] = 'Login Page';
		$data['meta_des'] = 'Login Page';
		$data['meta_key'] = 'Login Page';
		$data['error'] = false;
		$this->template('login',$data);
	}
	public function process_login()
	{
		if ($_POST)
		{
			if(!isset($_POST['username']) || $_POST['username'] == "")
			{
				$data['page_title'] = 'Username/Password Missing';
				$data['meta_des'] = 'Username/Password Missing';
				$data['meta_key'] = 'Username/Password Missing';
				$data['error'] = true;
				$data['error_code'] = 1;
				$this->template('login',$data);
			}
			else
			{
				$this->load->database();
				$username = $_POST['username'];
				$password = md5($_POST['password']);
				$result = $this->db->query("SELECT * FROM `real_user` WHERE `username` = '$username'  AND `password` =  '$password' LIMIT 1;");
				if ($result->num_rows() > 0)
				{
					$row = $result->row();
					$user['id'] =  $row->user_id;
					$user['username'] =  $row->username;
					$user['password'] =  $row->password;
					$user['name'] =  $row->name;
					$_SESSION['user'] = serialize($user);
					redirect('home/dash');
				}
				else
				{
					$data['page_title'] = 'Username/Password invalid';
					$data['meta_des'] = 'Username/Password invalid';
					$data['meta_key'] = 'Username/Password invalid';
					$data['error'] = true;
					$data['error_code'] = 2;
					$this->template('login',$data);
				}
				
			}
		}
		else
		{
			$data['page_title'] = 'Username/Password Missing';
			$data['meta_des'] = 'Username/Password Missing';
			$data['meta_key'] = 'Username/Password Missing';
			$data['error'] = true;
			$data['error_code'] = 1;
			$this->template('login',$data);
		}
	}
	public function check_login($redrc = FALSE)
	{
		if(isset($_SESSION['user']) && $_SESSION['user']!= "")
		{
			$user = unserialize($_SESSION['user']);
			$username = $user['username'];
			$password = $user['password'];

			$username = $user['username'];
			$password = $user['password'];
			$this->load->database();
			$result = $this->db->query("SELECT * FROM `real_user` WHERE `username` = '$username'  AND `password` =  '$password' LIMIT 1;");
			if ($result->num_rows() > 0)
			{
				return $user;
			}
			else
			{
				if($redrc)
				{
					return FALSE;
				}
				redirect('home/login');
			}
		}
		else
		{
			if($redrc)
			{
				return FALSE;
			}
			redirect('home/login');
		}
	}
	public function logout()
	{
		unset($_SESSION['user']);
		redirect("home/index");
	}
	/**
	*

		@MAIN FUNCTIONS

	*
	*/
	public function index($add = '')
	{
		$this->load->database();
		$data['home_page_'] = true;
		$data['page_title'] = 'Home Page';
		$data['meta_des'] = 'Home Page';
		$data['meta_key'] = 'Home Page';

		$result = $this->db->query("SELECT * FROM `real_property` ORDER BY `property_id` DESC LIMIT 4;");
		if ($result->num_rows() > 0)
		{
			$row = $result->result_array();
			$data['properties'] = $row;
		}
		$result = $this->db->query("SELECT * FROM `real_property_type`;");
		if ($result->num_rows() > 0)
		{
			$row = $result->result_array();
			$data['property_type'] = $row;
		}
		$result = $this->db->query("SELECT DISTINCT `city` FROM `real_property` ORDER BY `city` ASC;");
		if ($result->num_rows() > 0)
		{
			$row = $result->result_array();
			$data['city'] = $row;
		}
		$result = $this->db->query("SELECT DISTINCT `bedroom` FROM `real_property` ORDER BY `bedroom` ASC;");
		if ($result->num_rows() > 0)
		{
			$row = $result->result_array();
			$data['bedroom'] = $row;
		}
		$result = $this->db->query("SELECT DISTINCT `bathroom` FROM `real_property` ORDER BY `bathroom` ASC;");
		if ($result->num_rows() > 0)
		{
			$row = $result->result_array();
			$data['bathroom'] = $row;
		}
		$result = $this->db->query("SELECT DISTINCT `size` FROM `real_property` ORDER BY `size` ASC;");
		if ($result->num_rows() > 0)
		{
			$row = $result->result_array();
			$data['size'] = $row;
		}
		$data['menu'] = '';
		$this->template('index',$data);
	}
	public function properties($sort='',$type='')
	{
		$this->load->database();
		$data['page_title'] = 'Properties';
		$data['meta_des'] = 'Properties';
		$data['meta_key'] = 'Properties';
		$data['menu'] = $sort;
		$data['sidebar_listing_menu'] = true;

		$result = $this->db->query("SELECT * FROM `real_property_type`;");
		if ($result->num_rows() > 0)
		{
			$row = $result->result_array();
			$data['property_type'] = $row;
		}

		if ($sort === 'all')
		{
			if ($type > 0)
			{
				$result = $this->db->query("SELECT * FROM `real_property` WHERE `property_type` = '$type' ORDER BY `property_id` DESC;");
				if ($result->num_rows() > 0)
				{
					$row = $result->result_array();
					$data['properties'] = $row;
				}
			}
			else if (strlen($type) > 0){
				$result = $this->db->query("SELECT `property_type` FROM `real_property_type` WHERE `name` = '$type' LIMIT 1;");
				if ($result->num_rows() > 0)
				{
					$row = $result->result_array();
					$result = $this->db->query("SELECT * FROM `real_property` WHERE `property_type` = '".$row[0]['property_type']."' ORDER BY `property_id` DESC;");
					if ($result->num_rows() > 0)
					{
						$row = $result->result_array();
						$data['properties'] = $row;
					}
				}	
			}
			else
			{
				$result = $this->db->query("SELECT * FROM `real_property` ORDER BY `property_id` DESC;");
				if ($result->num_rows() > 0)
				{
					$row = $result->result_array();
					$data['properties'] = $row;
				}
			}
		}
		else if ($sort === 'sale')
		{
			if ($type > 0)
			{
				$result = $this->db->query("SELECT * FROM `real_property` WHERE `contract_type` = '$sort' AND `property_type` = '$type' ORDER BY `property_id` DESC;");
				if ($result->num_rows() > 0)
				{
					$row = $result->result_array();
					$data['properties'] = $row;
				}	
			}
			else
			{
				$result = $this->db->query("SELECT * FROM `real_property` WHERE `contract_type` = '$sort' ORDER BY `property_id` DESC;");
				if ($result->num_rows() > 0)
				{
					$row = $result->result_array();
					$data['properties'] = $row;
				}
			}			
		}
		else if ($sort === 'rent')
		{
			if ($type > 0)
			{
				$result = $this->db->query("SELECT * FROM `real_property` WHERE `contract_type` = '$sort' AND `property_type` = '$type' ORDER BY `property_id` DESC;");
				if ($result->num_rows() > 0)
				{
					$row = $result->result_array();
					$data['properties'] = $row;
				}
			}
			else
			{
				$result = $this->db->query("SELECT * FROM `real_property` WHERE `contract_type` = '$sort' ORDER BY `property_id` DESC;");
				if ($result->num_rows() > 0)
				{
					$row = $result->result_array();
					$data['properties'] = $row;
				}
			}
		}
		else
		{
			$result = $this->db->query("SELECT * FROM `real_property` ORDER BY `property_id` DESC;");
			if ($result->num_rows() > 0)
			{
				$row = $result->result_array();
				$data['properties'] = $row;
			}
			$data['menu'] = 'all';
		}
		$this->template('properties',$data);
	}
	public function single($pid='')
	{
		$this->load->database();

		$result = $this->db->query("SELECT * FROM `real_property` WHERE `property_id` = '$pid' LIMIT 1;");
		if ($result->num_rows() > 0)
		{
			$row = $result->row();
			$data['q'] =  $row;

			$result = $this->db->query("SELECT * FROM `real_property_type`;");
			if ($result->num_rows() > 0)
			{
				$row = $result->result_array();
				$data['property_type'] = $row;
			}

			$property_id = $data['q']->property_id;
			$contract_type = $data['q']->contract_type;
			$city = $data['q']->city;
			$wrp = $this->db->query("SELECT * FROM `real_property` WHERE `contract_type` = '$contract_type' AND `city` = '$city' AND `property_id` != '$property_id' LIMIT 3;");
			if ($wrp->num_rows() > 0)
			{
				$wrp = $wrp->result_array();
				$data['wrp'] =  $wrp;
			}
			else
			{
				$wrp = $this->db->query("SELECT * FROM `real_property` WHERE `property_id` != '$property_id' ORDER BY `property_id` DESC LIMIT 3;");
				$wrp = $wrp->result_array();
				$data['wrp'] =  $wrp;
			}

			$data['page_title'] = $data['q']->address;
			$data['meta_des'] = $data['q']->address;
			$data['meta_key'] = $data['q']->address;
			$data['error'] = false;
			$this->template('single',$data);
		}
		else
		{
			echo "";
		}
	}
	public function search($type='')
	{
		$this->load->database();
		/*$property_type = $_POST['property_type'];
		$city = $_POST['location'];
		$price_min = str_replace('$','',$_POST['price_min']);
		$price_max = str_replace('$','',$_POST['price_max']);
		$bedroom = $_POST['beds'];
		$bathroom = $_POST['baths'];
		$size = $_POST['area'];*/

		$result = $this->db->query("SELECT * FROM `real_property_type`;");
		if ($result->num_rows() > 0)
		{
			$row = $result->result_array();
			$data['property_type'] = $row;
		}
		else{
			$data['property_type'] = false;
		}

		if ($type == 'sale')
		{
			$result = $this->db->query("SELECT * FROM `real_property` WHERE `property_type` LIKE '%$property_type%' AND `city` LIKE '%$city%' AND `bedroom` LIKE '%$bedroom%' AND `bathroom` LIKE '%$bathroom%' AND `size` LIKE '%$size%' AND `price` >= '$price_min' AND `price` <= '$price_max' AND `contract_type` = 'sale';");
			$data['q'] = $result->result_array();
			$data['page_title_'] = $type;
		}
		else if ($type == 'rent')
		{
			$result = $this->db->query("SELECT * FROM `real_property` WHERE `property_type` LIKE '%$property_type%' AND `city` LIKE '%$city%' AND `bedroom` LIKE '%$bedroom%' AND `bathroom` LIKE '%$bathroom%' AND `size` LIKE '%$size%' AND `price` >= '$price_min' AND `price` <= '$price_max' AND `contract_type` = 'rent';");
			$data['page_title_'] = $type;
		}
		else
		{
			if (isset($_GET['query']) != '') {
				$search = $_GET['query']; 
				$result = $this->db->query("SELECT * FROM `real_property` WHERE (`address` LIKE '%$search%' OR `city` LIKE '%$search%' OR `zip_code` LIKE '%$search%' OR `state` LIKE '%$search%');");
				$data['q'] = $result->result_array();
				$data['page_title_'] = $_GET['query'];
			}
			else{
				$data['q'] = false;
				$data['page_title_'] = $_GET['query'];
			}
		}
		
		$data['page_title'] = 'Search Results';
		$data['meta_des'] = 'Search Results';
		$data['meta_key'] = 'Search Results';

		$this->template('search',$data);
	}
	/**
	*

		@AFTER LOGIN

	*
	*/
	public function dash()
	{
		$user = $this->check_login();
		$this->load->database();
		$id = $user['id'];

		$result = $this->db->query("SELECT * FROM `real_user` WHERE `user_id` = '$id' LIMIT 1;");
		if ($result->num_rows() > 0)
		{
			$row = $result->row();
			$user_meta['id'] =  $row->user_id;
			$user_meta['name'] =  $row->name;
			$user_meta['fname'] =  $row->fname;
			$user_meta['username'] =  $row->username;
			$user_meta['email'] =  $row->email;
			$user_meta['phone'] =  $row->phone;
			$user_meta['mobile'] =  $row->mobile;
			$user_meta['city'] =  $row->city;
			$user_meta['about'] =  $row->about;
			$user_meta['facebook'] =  $row->facebook;
			$user_meta['twitter'] =  $row->twitter;
			$user_meta['google'] =  $row->google;
			$user_meta['rss'] =  $row->rss;
		}
		$data['user_meta'] = $user_meta;
		$data['page_title'] = $user_meta['name'];
		$data['meta_des'] = 'Home Page';
		$data['meta_key'] = 'Home Page';

		$result = $this->db->query("SELECT * FROM `real_property` WHERE `user_id` = '$id' ORDER BY `property_id` DESC;");
		if ($result->num_rows() > 0)
		{
			$row = $result->result_array();
			$data['properties'] = $row;
		}
		$result = $this->db->query("SELECT * FROM `real_property_type`;");
		if ($result->num_rows() > 0)
		{
			$row = $result->result_array();
			$data['property_type'] = $row;
		}

		$this->template('dash',$data);
	}
	public function EditProfile($id='')
	{
		$user = $this->check_login();
		$this->load->database();
		$data['page_title'] = 'Home Page';
		$data['meta_des'] = 'Home Page';
		$data['meta_key'] = 'Home Page';
		$data['error'] = false;
		$result = $this->db->query("SELECT * FROM `real_user` WHERE `user_id` = '$id' LIMIT 1;");
		if ($result->num_rows() > 0)
		{
			$row = $result->row();
			$data['q'] = $row;
		}
		else
		{
			die('DIE HARD');
		}
		$this->template('EditProfile',$data);
	}
	public function update_user_form()
	{
		$user = $this->check_login();
		if ($_POST)
		{
			$this->load->database();
			$id = $_POST['user_id'];

			$_POST['name'] = $_POST['fname'].' '.$_POST['lname'];
			$where = "user_id =".$id;

			$str = $this->db->update('real_user', $_POST, $where);
			if ($str)
			{
				redirect('home/dash');
			}
			else
			{
				$data['page_title'] = 'Error: Sorry :( something wroung pleas try again';
				$data['meta_des'] = 'Error: Sorry :( something wroung pleas try again';
				$data['meta_key'] = 'Error: Sorry :( something wroung pleas try again';
				$data['error'] = true;
				$data['error_code'] = 4;
				$this->template('EditProfile',$data);	
			}

		}
		else
		{
			$data['page_title'] = 'Something Missing';
			$data['meta_des'] = 'Something Missing';
			$data['meta_key'] = 'Something Missing';
			$data['error'] = true;
			$data['error_code'] = 1;
			$this->template('EditProfile',$data);
		}
	}
	public function EditProfileImage()
	{
		$user = $this->check_login();
		$id = $user['id'];
		$this->load->database();
		$result = $this->db->query("SELECT * FROM `real_user` WHERE `user_id` = '$id' LIMIT 1;");
		if ($result->num_rows() > 0)
		{
			$row = $result->row();
			$data['image'] = $row->image;
		}
		else
		{
			die('DIE HARD');
		}

		$data['page_title'] = $user['name'].' | Edit Profile Image';
		$data['meta_des'] = $user['name'].' | Edit Profile Image';
		$data['meta_key'] = $user['name'].' | Edit Profile Image';
		$data['error'] = false;
		$this->template('EditProfileImage',$data);
	}
	public function update_profile_image()
	{
		$user = $this->check_login();
		$id = $user['id'];
		$this->load->database();

	}
	public function add_property()
	{
		$user = $this->check_login();
		$id = $user['id'];
		$this->load->database();

		$property_type = $this->db->query("SELECT * FROM `real_property_type`;");
		if ($property_type->num_rows() > 0)
		{
			$row = $property_type->result_array();
			$data['property_type'] = $row;
		}
		$asset_type = $this->db->query("SELECT * FROM `asset_type`;");
		if ($asset_type->num_rows() > 0)
		{
			$row = $asset_type->result_array();
			$data['asset_type'] = $row;
		}

		$data['page_title'] = $user['name'].' | Add New Property';
		$data['meta_des'] = $user['name'].' | Add New Property';
		$data['meta_key'] = $user['name'].' | Add New Property';
		$data['error'] = false;
		$this->template('add_property',$data);
	}
	public function post_property($value='')
	{
		$user = $this->check_login();
		$id = $user['id'];
		$this->load->database();
		$_POST['user_id'] = $id;
		$resp = $this->db->insert('real_property', $_POST);

		$property_type = $this->db->query("SELECT * FROM `real_property_type`;");
		if ($property_type->num_rows() > 0)
		{
			$row = $property_type->result_array();
			$data['property_type'] = $row;
		}
		$asset_type = $this->db->query("SELECT * FROM `asset_type`;");
		if ($asset_type->num_rows() > 0)
		{
			$row = $asset_type->result_array();
			$data['asset_type'] = $row;
		}
		
		if ($resp)
		{
			$data['page_title'] = 'Property Added :)';
			$data['meta_des'] = 'Property Added :)';
			$data['meta_key'] = 'Property Added :)';
			$data['error'] = true;
			$data['error_code'] = 1;
			$this->template('add_property',$data);
		}
		else
		{
			$data['page_title'] = 'Error: Sorry :( something wroung pleas try again';
			$data['meta_des'] = 'Error: Sorry :( something wroung pleas try again';
			$data['meta_key'] = 'Error: Sorry :( something wroung pleas try again';
			$data['error'] = true;
			$data['error_code'] = 0;
			$this->template('add_property',$data);
		}
	}
	public function property_single($pid='')
	{
		$user = $this->check_login();
		$id = $user['id'];
		$this->load->database();

		$result = $this->db->query("SELECT * FROM `real_property` WHERE `property_id` = '$pid' LIMIT 1;");
		if ($result->num_rows() > 0)
		{
			$row = $result->row();
			$data['q'] =  $row;

			$result = $this->db->query("SELECT * FROM `real_property_type`;");
			if ($result->num_rows() > 0)
			{
				$row = $result->result_array();
				$data['property_type'] = $row;
			}

			$property_id = $data['q']->property_id;
			$contract_type = $data['q']->contract_type;
			$city = $data['q']->city;
			$wrp = $this->db->query("SELECT * FROM `real_property` WHERE `contract_type` = '$contract_type' AND `city` = '$city' AND `property_id` != '$property_id' LIMIT 3;");
			if ($wrp->num_rows() > 0)
			{
				$wrp = $wrp->result_array();
				$data['wrp'] =  $wrp;
			}
			else
			{
				$wrp = $this->db->query("SELECT * FROM `real_property` WHERE `property_id` != '$property_id' ORDER BY `property_id` DESC LIMIT 3;");
				$wrp = $wrp->result_array();
				$data['wrp'] =  $wrp;
			}

			$data['page_title'] = $user['name'].' | Single Property';
			$data['meta_des'] = $user['name'].' | Single Property';
			$data['meta_key'] = $user['name'].' | Single Property';
			$data['error'] = false;
			$this->template('property_single',$data);
		}
		else
		{
			echo "";
		}
	}

	public function about()
	{
		$this->load->database();
		$data['page_title'] =  'about';
		$data['meta_des'] =  'about';
		$data['meta_key'] =  'about';
		$this->template('about', $data);
	}
	public function contact()
	{
		$this->load->database();
		$data['page_title'] =  'contact';
		$data['meta_des'] =  'contact';
		$data['meta_key'] =  'contact';
		$this->template('contact', $data);
	}
	public function our_listing()
	{
		$this->load->database();
		$data['page_title'] =  'Our listing';
		$data['meta_des'] =  'Our listing';
		$data['meta_key'] =  'Our listing';
		$this->template('our_listing', $data);
	}
	public function management_team()
	{
		$this->load->database();
		$data['page_title'] =  'Management Team';
		$data['meta_des'] =  'Management Team';
		$data['meta_key'] =  'Management Team';
		$this->template('management_team', $data);
	}








	/**
	*

		@TESTING MAQSAD

	*
	*/
	public function test()
	{
		/*$this->output->enable_profiler(true);
		$this->benchmark->mark('benchmark_yasir_start');
		$this->load->view('index');
		$this->benchmark->mark('benchmark_yasir_end');*/
	}
}