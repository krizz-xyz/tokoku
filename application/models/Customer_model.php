<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Customer_model extends CI_Model
{
    private $_table = "customer";

    public $kodecust;
    public $namacust;
    public $alamat;
    public $telepon;
    public $foto = "default.jpg";
    public $email;

    public function rules()
    {
        return [
            ['field' => 'kodecust',
            'label' => 'Kodecust',
            'rules' => 'required'],

            ['field' => 'namacust',
            'label' => 'Namacust',
            'rules' => 'required'],

            ['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required'],

            ['field' => 'telepon',
            'label' => 'Telepon',
            'rules' => 'required'],
            
            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
		// ini sama artinya seperti
		// SELECT * FROM customer
		// method ini akan mengembalikan sebuah array
		// yang berisi objek dari row
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["kodecust" => $id])->row();
		// ini sama artinya seperti
		// SELECT * FROM customer WHERE kodecust=$id
		// method ini akan mengembalikan sebuah objek
    }

    public function save()
    {
		//** nama variable post harus ditulis di rules
        $post = $this->input->post();	// ambil data dari form
        $this->kodecust = $post["kodecust"];	// isi field kodecust, bisa menggunakan =uniqid(); untuk id unik
		$this->namacust = $post["namacust"];	// isi field namacust
        $this->alamat = $post["alamat"];	// isi field alamat
        $this->telepon = $post["telepon"];	// isi field telepon
		$this->foto = $this->_uploadImage();	// isi field foto
        $this->email = $post["email"];	// isi field email
        return $this->db->insert($this->_table, $this);	// simpan ke database
    }

    public function update()
    {
		//** nama variable post harus ditulis di rules
        $post = $this->input->post();
        $this->kodecust = $post["kodecust"];		
        $this->namacust = $post["namacust"];
        $this->alamat = $post["alamat"];
        $this->telepon = $post["telepon"];
		if (!empty($_FILES["foto"]["name"])) {
			$this->foto = $this->_uploadImage();
		} else {
			$this->foto = $post["foto_lama"];
		}
        $this->email = $post["email"];
        return $this->db->update($this->_table, $this, array('kodecust' => $post['kodecust']));
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("kodecust" => $id));
    }
	
	private function _uploadImage()
	{
		$config['upload_path']          = './upload/customer/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = $this->kodecust;
		$config['overwrite']			= true;
		$config['max_size']             = 1024; // 1MB
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('foto')) {
			return $this->upload->data("file_name");
        }
        // print_r($this->upload->display_errors());        
		return "default.jpg";
    }
    
    private function _deleteImage($id)
    {
        $customer = $this->getById($id);
        if ($customer->foto != "default.jpg") {
            $filename = explode(".", $customer->foto)[0];
            return array_map('unlink', glob(FCPATH."upload/customer/$filename.*"));
        }
    }  
}
