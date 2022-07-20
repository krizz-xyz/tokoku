<?php
class User_model extends CI_Model
{
    private $_table = "users";
	
    public function doLogin(){
		$post = $this->input->post();
				
        //** cara 1. cari data user berdasarkan email dan username
        //$this->db->where('email', $post["email"])
        //        ->or_where('username', $post["email"]);
        //$user = $this->db->get($this->_table)->row();
		
		//** cara 2. cari data user dan passsword AES berdasarkan email dan username
		//** select aes_encrypt('admin',username) from users; --> ÖCN»¦KIÈ@Îs?ç”
		//** select aes_encrypt('123',username) from users; -->	#xë™ø³LÓâ¨			
		$this->db->select('user_id,role,password,aes_decrypt(password_aes,username) as pw_aes');
		$this->db->from('users');
		$this->db->where('email', $post["email"])
				 ->or_where('username', $post["email"]);
		$user=$this->db->get()->row();				

        // jika user terdaftar
        if($user){
            //** cara 1. periksa password-nya dengan fungsi hash bawaan dari php
			//** parameter pertama $post["password"]: inputan password tidak ter-enkripsi dari page login, 
			//** parameter kedua	 $user->password  : data pasword ter-enkripsi dari database MySQL           
			//$isPasswordTrue = password_verify($post["password"], $user->password);
		
			//** cara 2. periksa password-nya dengan fungsi aes_decrypt bawaan MySQL
			$isPasswordTrue = $user->pw_aes == $post["password"];

			// periksa role-nya
            $isAdmin = $user->role == "admin";

            // jika password benar dan dia admin
            if($isPasswordTrue && $isAdmin){ 
                // login sukses yay!
                $this->session->set_userdata(['user_logged' => $user]);
                $this->_updateLastLogin($user->user_id);
                return true;
            }
        }
        
        // login gagal
		return false;
    }

    public function isNotLogin(){
        return $this->session->userdata('user_logged') === null;
    }

    private function _updateLastLogin($user_id){
        $sql = "UPDATE {$this->_table} SET last_login=now() WHERE user_id={$user_id}";
        $this->db->query($sql);
    }

}
