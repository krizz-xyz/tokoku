<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Barang_model extends CI_Model
{
    private $_table = "barang";

    public $kodebrg;
    public $namabrg;
    public $hargabeli;
    public $hargajual;
    public $gambar = "default.jpg";
    public $keterangan;

    public function rules()
    {
        return [
            ['field' => 'kodebrg',
            'label' => 'Kodebrg',
            'rules' => 'required'],

            ['field' => 'namabrg',
            'label' => 'Namabrg',
            'rules' => 'required'],

            ['field' => 'hargabeli',
            'label' => 'Hargabeli',
            'rules' => 'required','numeric'],

            ['field' => 'hargajual',
            'label' => 'Hargajual',
            'rules' => 'required','numeric'],
            
            ['field' => 'keterangan',
            'label' => 'Description',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
		// ini sama artinya seperti
		// SELECT * FROM barang
		// method ini akan mengembalikan sebuah array
		// yang berisi objek dari row
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["kodebrg" => $id])->row();
		// ini sama artinya seperti
		// SELECT * FROM barang WHERE kodebrg=$id
		// method ini akan mengembalikan sebuah objek
    }

    public function save()
    {
		//** nama variable post harus ditulis di rules
        $post = $this->input->post();	// ambil data dari form
        $this->kodebrg = $post["kodebrg"];	// isi field kodebrg, bisa menggunakan =uniqid(); untuk id unik
		$this->namabrg = $post["namabrg"];	// isi field namabrg
        $this->hargabeli = $post["hargabeli"];	// isi field hargabeli
        $this->hargajual = $post["hargajual"];	// isi field hargajual
		$this->gambar = $this->_uploadImage();	// isi field gambar
        $this->keterangan = $post["keterangan"];	// isi field keterangan
        return $this->db->insert($this->_table, $this);	// simpan ke database
    }

    public function update()
    {
		//** nama variable post harus ditulis di rules
        $post = $this->input->post();
        $this->kodebrg = $post["kodebrg"];		
        $this->namabrg = $post["namabrg"];
        $this->hargabeli = $post["hargabeli"];
        $this->hargajual = $post["hargajual"];
		if (!empty($_FILES["gambar"]["name"])) {
			$this->gambar = $this->_uploadImage();
		} else {
			$this->gambar = $post["gambar_lama"];
		}
        $this->keterangan = $post["keterangan"];
        return $this->db->update($this->_table, $this, array('kodebrg' => $post['kodebrg']));
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("kodebrg" => $id));
    }
	
	private function _uploadImage()
	{
		$config['upload_path']          = './upload/barang/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = $this->kodebrg;
		$config['overwrite']			= true;
		$config['max_size']             = 1024; // 1MB
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('gambar')) {
			return $this->upload->data("file_name");
        }
        // print_r($this->upload->display_errors());        
		return "default.jpg";
    }
    
    private function _deleteImage($id)
    {
        $barang = $this->getById($id);
        if ($barang->gambar != "default.jpg") {
            $filename = explode(".", $barang->gambar)[0];
            return array_map('unlink', glob(FCPATH."upload/barang/$filename.*"));
        }
    }  
}
