<?php
class User extends CI_Model {

    public function get_user($username, $password){
        $query = $this->db->query("SELECT * FROM tbpenghuni WHERE username = '$username' AND password = '$password'");
        return $query;
    }




    public function get_hasiltes(){
        $id_penghuni = $_SESSION['id_penghuni'];
		$query = $this->db->query("SELECT * FROM tbhasiltes INNER JOIN tbpenghuni ON tbhasiltes.id_penghuni=tbpenghuni.id_penghuni WHERE tbhasiltes.id_penghuni='$id_mahasiswa'");
        return $query;

        // $this->db->select ('*');
        // $this->db->from ('tbhasiltes');
        // $this->db->join ('tbpenghuni','tbhasiltes.id_penghuni=tbpenghuni.id_penghuni');
        // $this->db->where ('tbhasiltes.id_penghuni',$id_mahasiswa);
        // return $this->db->get()->result();
    }

		public function get_tipekepribadian($tipe_kepribadian){
		    $query = $this->db->query("SELECT * FROM tbhasiltes WHERE tipe_kepribadian = 'tipe_kepribadian'");
		      return $query;
	  }

    // public function get_kepribadian(){
        // $tipe_kepribadian= $this->session->get_hasiltes();
        // $query = $this->db->query("SELECT * FROM tbtipekepribadian WHERE tipe_kepribadian = '$tipe_kepribadian'");
        // return $query->result();
    // }

	// public function get_kepribadian(){

		// $tipe_kepribadian= $this->input->post('get_kepribadian');
        // $query = $this->db->query("SELECT * FROM tbtipekepribadian WHERE tipe_kepribadian = '$tipe_kepribadian'");
        // return $query->result();
    // }


}
?>
