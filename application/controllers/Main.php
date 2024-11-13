<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct()
	{
        parent::__construct();

        if ($this->session->userdata('user_id')) {
        	$this->user_id = $this->session->userdata('user_id');
        	$this->user_type = $this->session->userdata('user_type');
        } else {
        	redirect();
        }

        
        
	}

	public function productDetail($product_id)
	{	

		$product = get_any_table_row(array('product_id' => $product_id), 'product');

		// print_r($product); exit;

		switch ($product['category']) {
			case '1':
				$category = "T - Shirt Lengan Panjang";
				break;
			case '2':
				$category = "T - Shirt Lengan Pendek";
				break;
			case '3':
				$category = "Jersey";
				break;
			
			default:
				$category = "Unknow Category";
				break;
		}

		$data['category'] = $category;
		$data['product']  = $product;


		$product_img = get_any_table_array(array('product_id' => $product_id, 'is_submit' => '1'), 'product_image');

		$data['product_img'] = $product_img;
		$data['user_id']     = $this->user_id;


		$data['colorarr'] = explode("|", $product['color']);
		$data['sizerarr'] = explode("|", $product['size']);

		$data['total_in_cart'] = count_any_table(array('user_id' => $this->user_id, 'status' => 'CART'), 'product_order');

		// echo $data['total_in_cart']; exit;

		$data['list_tshirt_panjang'] = get_any_table_array(array('category' => '1'), 'product');
		$data['list_tshirt_pendek'] = get_any_table_array(array('category' => '2'), 'product');
		$data['list_jersey'] = get_any_table_array(array('category' => '3'), 'product');

		$data['user_id'] = $this->user_id;
		$data['user_type'] = $this->user_type;

		$this->load->view('product-detail', $data);
	}

	function addToCart($data=false)
	{
		$post = $this->input->post();
		// print_r($post);	

		$check_exist = get_any_table_row(array('user_id' => $post['userid'],'product_id' => $post['product_id'], 'status' =>'CART'), 'product_order');

		if ($check_exist == true) {
			
			$update = array('size' => $post['selectedSize'], 'color' => $post['selectedColor'], 'quantity' => $post['quantityInput'] );

			$where = array('user_id' => $post['userid'], 'product_id' => $post['product_id'] );

			$update = update_any_table($update, $where, 'product_order');


		} else {


			$insert_data = array(
				'user_id' => $post['userid'],
				'product_id' => $post['product_id'],
				'quantity' => $post['quantityInput'],
				'size' => $post['selectedSize'],
				'color' => $post['selectedColor'],
				'status' => "CART"
			);

			insert_any_table($insert_data, 'product_order');

		}


		$response = array('status' => true);

		echo encode($response);

	}

	function my_account($data=false)
	{	

		$data['user'] = get_any_table_row(array('id' => $this->user_id), 'users');

		$data['list_tshirt_panjang'] = get_any_table_array(array('category' => '1'), 'product');
		$data['list_tshirt_pendek'] = get_any_table_array(array('category' => '2'), 'product');
		$data['list_jersey'] = get_any_table_array(array('category' => '3'), 'product');

		$data['user_id'] = $this->user_id;
		$data['user_type'] = $this->user_type;

		$data['total_in_cart'] = count_any_table(array('user_id' => $this->user_id, 'status' => 'CART'), 'product_order');

		$this->load->view('account', $data);
	}


	function viewMycart($data=false)
	{

		$post = $this->input->post();

		$data['carts'] = get_any_table_array(array('user_id' => $post['userid'], 'status' => 'CART'), 'product_order');

		$data['user_id'] = $this->user_id;

		$this->load->view('view-my-cart', $data);
	}

	function updateCartQuantity($data=false)
	{
		$post = $this->input->post();

		// print_r($post);

		$update = array('quantity' => $post['finalQuantity']);
		$where = array('id' => $post['id']);

		update_any_table($update, $where, 'product_order');
	}

	function checkout($data=false)
	{	

		$data['address'] = get_any_table_row(array('user_id' => $this->user_id), 'address');
		// $data['info'] = get_any_table_row(array('user_id' => $this->user_id), 'personal_info');

		$data['users'] = get_any_table_row(array('id' => $this->user_id), 'users');

		$data['total_in_cart'] = count_any_table(array('user_id' => $this->user_id, 'status' => 'CART'), 'product_order');

		$data['list_tshirt_panjang'] = get_any_table_array(array('category' => '1'), 'product');
		$data['list_tshirt_pendek'] = get_any_table_array(array('category' => '2'), 'product');
		$data['list_jersey'] = get_any_table_array(array('category' => '3'), 'product');

		$data['user_id'] = $this->user_id;
		$data['user_type'] = $this->user_type;

		$data['carts'] = get_any_table_array(array('user_id' => $this->user_id, 'status' => 'CART'), 'product_order');

		$this->load->view('checkout', $data);
	}

	function addressDetails($data=false)
	{
		$data['address'] = get_any_table_row(array('user_id' => $this->user_id), 'address');
		$data['info'] = get_any_table_row(array('user_id' => $this->user_id), 'personal_info');
		$data['total_in_cart'] = count_any_table(array('user_id' => $this->user_id, 'status' => 'CART'), 'product_order');


		$data['list_tshirt_panjang'] = get_any_table_array(array('category' => '1'), 'product');
		$data['list_tshirt_pendek'] = get_any_table_array(array('category' => '2'), 'product');
		$data['list_jersey'] = get_any_table_array(array('category' => '3'), 'product');

		$data['user_id'] = $this->user_id;
		$data['user_type'] = $this->user_type;

		$data['states'] = get_any_table_array(array('module' => 'state'), 'ref_code');

		$this->load->view('address-detail', $data);
	}


	function addNewAddress($data=false)
	{
		$post = $this->input->post();
		// print_r($post); exit;

		$insert = array(
			'address' => $post['addressunit'],
			'city' => $post['city'],
			'state' => $post['state'],
			'postcode' => $post['AddressZipNew'],
			'user_id' => $this->user_id,
		);

		// print_r($insert); exit;

		$status = insert_any_table($insert, 'address');

		if ($status == true) {
			$response = array('status' => true );
		} else {
			$response = array('status' => false );
		}

		echo encode($response); 
	}

	function editAddress($data=false)
	{
		$post = $this->input->post();
		// print_r($post);

		$update = array(
			'address' => $post['addressunit'],
			'city' => $post['city'],
			'state' => $post['state'],
			'postcode' => $post['postcode']
		);

		// echo "<pre>"; print_r($update); echo "</pre>"; exit;
		

		$where = array('user_id' => $this->user_id);

		update_any_table($update, $where, 'address');

		$response = array('status' => true );

		echo encode($response); 
	}

	function autoSaveName($data=false)
	{
		$post = $this->input->post();
		// print_r($post);

		$update = array('name' => $post['name']);

		$where = array('id' => $post['userid']);

		$update = update_any_table($update, $where, 'users');

	}

	function placeOrder($data=false)
	{
		$user_id = $this->user_id;

		$check_address = get_any_table_row(array('user_id' => $user_id), 'address');

		if (!$check_address || $check_address['address'] == '') {

			$data['address'] = false;

		} else {

			$data['address'] = true;


		}

		$this->load->view('place_order', $data);
		

	}



}
