<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage extends CI_Controller {

	function __construct()
	{
        parent::__construct();
        $this->load->model('Manage_model', 'DbManage');

        if ( $this->session->userdata('user_type') <> "ADMIN") {
        	redirect();
        }
	}

	function addProduct($data=false)
	{	
		$data['tempkey'] = getRandomString('20');

		$data['colors'] = get_any_table_array(array('name' => 'color'), 'attributes');
		$data['sizes'] = get_any_table_array(array('name' => 'size'), 'attributes');

	    $this->load->view('admin/add-product', $data);
	}

	function allProduct($data=false)
	{	
		$data['products'] = $this->DbManage->get_all_product();
		$this->load->view('admin/product-list', $data);
	}

	function upload_product_img($data=false)
	{
		// print_r($_FILES['image']); exit;
		$post = $this->input->post();
		// print_r($post); exit;

		$ext                            = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $hashfilename                   = getRandomString('20') . "." . $ext;

		$config['upload_path']          = './uploads/product-image';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 9999;
        $config['file_name']            = $hashfilename;

        // echo $hashfilename; exit;

        $this->load->library('upload', $config);

        $status = true;

        if ( ! $this->upload->do_upload('image'))
        {
            $error      = array('error' => $this->upload->display_errors());
            $status     = false;
            $error_msg  = $error['error'];
            // print_r($error); exit;
        }
        else
        {	
        	# success upload
        	$data_insert = array(
                'path' => $config['upload_path'],
                'create_dt' => current_dt(),
                'filename' => $hashfilename,
                'original_filename' => $_FILES['image']['name'],
                'tempkey' => $post['tempkey']
            );

            // print_r($data_insert); exit;

            $insert = insert_any_table($data_insert, 'product_image');

        }

        if ($status == true) {

        	$where_img = array('tempkey' => $post['tempkey']);
        	$imgs = get_any_table_array($where_img, 'product_image');

        	$result = "";
        	foreach ($imgs as $key) {
        		$path = base_url () . $key['path'] . "/" . $key['filename'];
        		$result .= "<div class='item'><img src='". $path ."' width='20%'></div>";
        	}

        	$content = $result;
        
        } else {
        	$content = $error_msg;
        }
        
        $response = array('content' => $content, 'status' => $status);
       	echo encode($response);

	}

	function saveProduct($data=false)
	{
		$post = $this->input->post();
		// echo "<pre>"; print_r($post); echo "</pre>";

		$product_id = get_keytab_value('product_id');

		$img = get_any_table_row(array('tempkey' => $post['tempkey']), 'product_image');

		if ($img == false) {
			$this->session->set_flashdata('success', 'Please insert at least 1 image !');
			redirect('manage/addProduct');
		}

		$color = implode("|", $post['color']);
		$size = implode("|", $post['size']);

		$data_insert = array(
			'name' => $post['name'], 
			'category' => $post['category'], 
			'price' => $post['price'], 
			'stock' => $post['stock'], 
			'color' => $color, 
			'size' => $size, 
			'remark' => $post['description'],
			'product_id' => $product_id,
		);

		$insert = insert_any_table($data_insert, 'product');

		$update_img = array('product_id' => $product_id, 'is_submit' => '1');
		$where = array('tempkey' => $post['tempkey']);

		$update = update_any_table($update_img, $where, 'product_image');

		$this->session->set_flashdata('success', 'Product Successfully Added !');
		redirect('manage/addProduct');

	}
}
